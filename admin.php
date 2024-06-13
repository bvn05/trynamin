<?php
include("config.php");
include("firebaseRDB.php");
// include("map.php");
session_start();

$db = new firebaseRDB($databaseURL);

if(!isset($_SESSION['login_id'])){
    header('Location: login.php');
    exit;
}


$id=$_SESSION['login_id'];
$email=$_SESSION['email'];
$name=$_SESSION['name'];
$picture=$_SESSION['picture'];

$table="data_admin";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cocody Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <style>
    /* Custom styles */
    body {
      font-family: Arial, sans-serif;
    }
    .navbar-brand img {
      width: 50px;
      margin-right: 10px;
    }
    .navbar-brand span {
      font-size: 1.5rem;
    }
    .user-avatar img {
      width: 40px;
    }
    .feedback-link {
      color: #007bff;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://w7.pngwing.com/pngs/694/675/png-transparent-coconut-coconut-milk-coconut-delicious-thumbnail.png" alt="Avatar Logo">
      <span>Cocody</span>
    </a>
    <div class="d-flex">
      <h5 class="text-white my-auto"><?php echo $email ?></h5>
      <a class="navbar-brand user-avatar" href="logout.php">
        <img src="<?php echo $picture ?>" alt="User Avatar" class="rounded-circle">
      </a>
    </div>
  </div>
</nav>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <!-- Map Section -->
      <?php include("map.php"); ?>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-12">
      <!-- Table Section -->
      <table id="example" class="table table-bordered table-striped">
        <thead class="bg-light">
          <tr>
            <th>Results</th>
            <th>Disease</th>
            <th>Location</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $data = $db->retrieve($table);
          $data = json_decode($data, 1);

          if(is_array($data)){
            foreach($data as $id => $tables){
              ?>
              <tr>
                <td><?php echo $tables['result'] ?></td>
                <td><?php echo $tables['disease'] ?></td>
                <td><?php echo $tables['location'] ?></td>
                <td><?php echo $tables['date'] ?></td>
                <td>
                  <a href="feedback.php?result=<?php echo $tables['result'] ?>" class="feedback-link">
                    <i class="fas fa-comment"></i> Feedback
                  </a>
                </td>
              </tr>
              <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>



<!-- jQuery and DataTables JavaScript -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
  // Initialize DataTable
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
</body>
</html>
