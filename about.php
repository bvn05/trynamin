<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            padding-right: 5%;
            padding-left: 12%;
            /* background: grey; */
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }


        .logo {
            font-weight: 900;
            color: black;
            text-decoration: none;
            font-size: 40px;
        }

        .navbar {
            display: flex; /* Display navbar as flexbox */
            flex-direction: row; /* Arrange items horizontally */
        }

        .navbar a {
            font-size: 18px;
            color: white;
            font-weight: 500;
            text-decoration: none;
            margin-left: 20px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 10px;
            margin: 0;
            min-height: 100vh;
            background: url('bgc.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

         #una{
            font-weight: 900;
        }

        .card {
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}


         .card-container {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for the entire card container */
        }

        .card-body li{
            list-style-type: none;
        }

        .card-img-top {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover .card-img-top {
    transform: scale(1.1);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}


    </style>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Cocody</a>
        <nav class="navbar">
            <a href="login.php">Home</a>
            <a href="about.php">About Us</a>
        </nav>
    </header>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('loginModal')">&times;</span>
            <h2>Login</h2>
            <!-- Login form goes here -->
        </div>
    </div>
    

    <div style="display: flex; justify-content: center;">
  <div class="card" style="width: 25rem; background: white; margin-right: 20px;">
    <img src="kevin.jpg" class="card-img-top" alt="..." style="width:25rem; border-radius: 10px;">
    <div class="card-body">
   <!-- <li id="una">Kevin Francis C. Esguerra</li> -->
   <li>Bs in Computer Science</li>
   <li>Programmer</li>
    </div>
  </div>

  <div class="card" style="width: 25rem; background: white; margin-right: 20px;">
    <img src="mae.jpg" class="card-img-top" alt="..."style="width:25rem; border-radius: 10px;">
    <div class="card-body">
   <!-- <li id="una">Mae Isabelle Coronacion</li> -->
   <li>Bs in Computer Science</li>
   <li>Technical Writer</li>
    </div>
  </div>

  <div class="card" style="width: 25rem; background: white;">
    <img src="reg.jpg" class="card-img-top" alt="..."style="width:25rem; border-radius: 10px;">
    <div class="card-body">
   <!-- <li id="una">Regine Rosal</li> -->
   <li>Bs in Computer Science</li>
   <li>Data Analyst</li>
    </div>
  </div>
</div>



    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            var modals = document.getElementsByClassName('modal');
            for (var i = 0; i < modals.length; i++) {
                var modal = modals[i];
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
