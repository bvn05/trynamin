<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cocody Treatment Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    .form-container h2 {
      margin-bottom: 30px;
      text-align: center;
    }
    .form-group label {
      font-weight: bold;
    }
    .form-control {
      border-radius: 8px;
    }
    .btn-primary {
      border-radius: 8px;
    }
    .sol{
      color: red;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-primary">
  <div class="container">
    <a class="navbar-brand text-white" href="#">
       <img src="https://w7.pngwing.com/pngs/694/675/png-transparent-coconut-coconut-milk-coconut-delicious-thumbnail.png" alt="Avatar Logo" style="width:50px;" class="rounded-pill">
       Cocody Treatment Form
    </a>
  </div>
</nav>

<br><br>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="form-container">
        <h2>Treatment for: <?php echo $_GET['result']?></h2>
        <form id="treatmentForm" action="treatment_add.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="email" class="form-label">Details:</label>
            <textarea class="form-control" id="email" rows="5" placeholder="Enter treatment details" name="cure" required></textarea>
          </div>
          <div class="mb-3">
            <label for="file" class="form-label">Upload Image/Video:</label>
            <input type="file" class="form-control" id="file" name="file" required>
            <div class="form-text">Please upload an image or video related to the treatment.</div>
          </div>
          <div class="">
        <a href="#" class="btn btn-info" onclick="showCard('chemicalSprayingCard'); return false;">Chemical Spraying</a>
        <a href="#" class="btn btn-info" onclick="showCard('culturalControlCard'); return false;">Cultural Control</a>
        <a href="#" class="btn btn-info" onclick="showCard('mechanicalControlCard'); return false;">Mechanical Control</a>
        <a href="#" class="btn btn-info" onclick="showCard('trunkInjectionCard'); return false;">Trunk Injection</a>
    </div>

    <div class="card" id="chemicalSprayingCard">
        <div class="card-body">
            <h5 class="card-title">Chemical Spraying</h5>
            <p class="card-text">Pag-spray ng Kemikal <br> Ang pag-spray ng kemikal ay maaaring gawin sa case to case basis
          <br> (magagaawa lamang sa mga punla ng nursery at mga batang planting)
        <br> ngunit hindi sapilitan lalo na kapag ang mga biological control agent ay sapat na marami upang mabawasan ang populasyon 
      ng peste. Maaaring hindi ito magagawa sa mataas na puno ng niyog.  </p>
        </div>
    </div>

    <div class="card" id="culturalControlCard">
        <div class="card-body">
            <h5 class="card-title">Cultural Control</h5>
            <p class="card-text">Cultural Control <br> Magtanim ng mga pananim na takip,iba pang legumimous 
          <br> crops at saging sa ilalim ng niyog upang palakihin ang populasyon ng mga parasitoid at predator <br> 
        (earwig) habang kumakain sila ng mga nektar ng mga panamim na ito. </p>
        </div>
    </div>

    <div class="card" id="mechanicalControlCard">
        <div class="card-body">
            <h5 class="card-title">Mechanical Control</h5>
            <p class="card-text">Mechanical Control <br> Putulin ang mga infested na dahon at sirain ang mga 
          <br> peste lalo na sa nursery seddlings at batang tanim. </p>
        </div>
    </div>

    <div class="card" id="trunkInjectionCard">
        <div class="card-body">
            <h5 class="card-title">Trunk Injection</h5>
            <p class="card-text">Trunk Injection <br> Ito ay maaaring gawin bilang isang emergency <br> na hakbang
          upang makontrol ang mga peste. </p>
        </div>
    </div>

          <div class="mb-3">
            <input type="hidden" name="disease" value="<?php echo $_GET['result']?>">
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-primary" onclick="validateForm()">Submit</button>
            <a href="javascript:history.back()" class="btn btn-secondary">Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
        function showCard(cardId) {
            // Hide all cards
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.style.display = 'none';
            });

            // Show the selected card
            const selectedCard = document.getElementById(cardId);
            if (selectedCard) {
                selectedCard.style.display = 'block';
            }
        }
    </script>

<script>
  function validateForm() {
    var form = document.getElementById('treatmentForm');
    if (form.checkValidity()) {
      form.submit();
    } else {
      // If the form is not valid, display error messages
      form.reportValidity();
    }
  }
</script>

</body>
</html>
