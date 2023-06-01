<?php

include("login-backend.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap-5/css/bootstrap.min.css">
    <script src="./Bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Alumni Tracer</title>
</head>
<style>
    body{
    background-image: url(./Images/Background.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    overflow-x: hidden;
    }
    .navbar{
    background-color: red;
    }
    .nav-link{
    color: white;
    }
    .btn{
        background-color: red;
        color: white;
    }
    .btn:hover{
        background-color: red;
        color: black;
    }
    #btn-login:hover{
        background-color: white;
        color:black;
    }
    .modal-header, footer{
        background-color: red;
    }
    #body{
        margin-top: 300px;
        height: 450px;
        font-size:1rem;
    }
    #intro{
        margin-left: 60px;
    }
    #welcome{
        background-color: red;
        padding: 5px 10px;
        border-radius: 10px;
    }
</style>
<body>

        <!-- Navbar ----------------------------------------------->
<section id="home">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow border-0 py-1 mb-0">
            <div class="container-fluid">
                <a class="navbar-brand ps-1">
                    <img src="./Images/Burgos logo.png" alt="" style="max-width: 60px;">
                    <span class="ms-1">Colegio De Santo Cristo De Burgos</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item px-2">
                            <a href="login.php" class="nav-link">Home</a>
                        </li>
                        <li class="navbar-item px-2">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                        <li class="navbar-item px-2">
                            <a href="thesis1.php" class="nav-link">Thesis</a>
                        </li>
                        <li class="navbar-item px-2">
                            <a href="form.php" class="nav-link">Alumni Tracer</a>
                        </li>
                        <li class="navbar-item px-2">
                        <button id="btn-login" class="btn" type="button" data-bs-toggle="modal" data-bs-target="#login">Login</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="body">
        <div class="container-fluid">
        <div class="d-flex">
                    <div id="intro">
                        <h3>Welcome to <br><span id="welcome" class="text-light lead fw-bold">Colegio de Santo Cristo de Burgos Alumni Tracer</span></h3>
                    </div>
                </div>
        </div>
    </section>

    <footer id="contact">
        <div class="mt-2">
            <div class="text-light p-3">
                <h4>Colegio de Santo Cristo de Burgos</h4>
                <p class=""><span class="fw-bold me-1">Address:</span> Valderas St., Brgy. Pob. 2, Sariaya Quezon</p>
                <p class=""><span class="fw-bold me-1">Contact No.:</span> (042) 5258485 / 09175381515 / 09989724959</p>
                <p class=""><span class="fw-bold me-1">E-mail:</span> colegiodesantocristodeburgos@gmail.com</p>
            </div>
        </div>
    </footer>

    <!-- MODAL ----------------------------------------- -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 450px;">
      <div class="modal-content">
      <div class="modal-header text-light" style="height:50px;">
        <h5 class="modal-title">Log in</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body p-0">
          <div class="container">
            <div class="row">
                <div class="col-10 mx-auto">
                <div class="text-center my-2">
                        <img class="my-3 mt-4" src="./Images/Burgos logo.png" alt="" style="max-width: 100px;">
                    </div>
                        <form class="my-5" action="" method="post">
                            
                            <input type="text" name="username" id="floatingInput" placeholder="Username" class="form-control my-3">
                            
                            <input type="password" name="password" id="floatingInput" placeholder="Password" class="form-control my-3">
                        
                            <div class="text-center">


                                <button class="btn btn-dark form-control " id="btn-submit" type="submit" name="login" style="max-height:75px;">Login</button>
                            </div>
                        </form>
                </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>