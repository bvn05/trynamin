<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><img src="logo.png" alt="Logo" style="height: 50px; display: inline-block;" >Geo Corp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="styleheader.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  </head>
<body>


  <div class="container">
    <div class="container-fluid">
      <div>
        <a class="navbar-brand" style="color: #FFFFFF; margin-top: 0px;" href="#">
          <img src="logo.png" alt="Logo" style="height: 50px; display: inline-block;" > Geoss Solutions Corp.
        </a>
      </div>

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Logo and company name inline -->
          <ul class="nav navbar-nav">
            <li><a id="len1" class="hoverable" href="#" style="color: #FFFFFF;">Home</a></li>
            <li><a id="len2" class="hoverable" href="#" style="color: #FFFFFF;">News</a></li>
              <li class="dropdown">
                <a class="nav-link dropdown-toggle hoverable" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
                  Services
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="management.html" style="color: #1AE36D;">Management Information System</a></li>
                  <li><a href="planning.html" style="color: #1AE36D;">Geographic Information System</a></li>
                  <li><a href="#" style="color: #1AE36D;">Mandated Plan</a></li>
                </ul>
              </li>
            <li><a id="len3" class="hoverable" href="#" style="color: #FFFFFF;">Job Vacancies</a></li>
            <li><a id="len4" class="hoverable" href="#" style="color: #FFFFFF;">About Us</a></li>
            <li><a id="len5" class="hoverable" href="#" style="color: #FFFFFF;">Contact</a></li>
          </ul>
        </div>
      </nav>

    </div>
  </div>
    
    <script>
      $(function(){
        var str = '#len'; //increment by 1 up to 1-nelemnts
        $(document).ready(function(){
          var i, stop;
          i = 1;
          stop = 5; //num elements
          setInterval(function(){
            if (i > stop){
              return;
            }
            $('#len'+(i++)).toggleClass('bounce');
          }, 500)
        });
      });
    </script>

  </body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>
```
