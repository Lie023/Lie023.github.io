<?php

// include 'filesLogic.php';
include("login-backend.php");

if(!isset($_SESSION)){
    session_start();
}

include_once("./connections/connection.php");
$con = connection();


if(isset($_POST["submit"])){

    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $mi = $_POST["mi"];
    $age = $_POST["age"];
    $birthday = $_POST["birthday"];
    $civilStatus = $_POST["civil_status"];
    $email = $_POST["email"];
    $contactNum = $_POST["contact_num"];
    $course = $_POST["course"];
    $yearGraduated = $_POST["year_graduated"];
    $currentWork = $_POST["current_work"];
    $placeOfWork = $_POST["PlaceOfWork"];
    $position = $_POST["position"];
    $workYear = $_POST["workYear"];


    $sql = "INSERT INTO `alumni_record`(`firstname`, `lastname`, `mi`, `age`, `birthday`, `civil_status`, `email`, `contact_num`, `course`, `year_graduated`, `current_work`, `PlaceOfWork`, `position`, `workYear`) VALUES ('$fname','$lname','$mi','$age','$birthday','$civilStatus','$email','$contactNum','$course','$yearGraduated','$currentWork','$placeOfWork','$position','$workYear')";
    $con->query($sql) or die ($con->error);

    $msg1 = true;
    if(isset($msg1))
        {
            $_SESSION['message'] = "<div id='importAlert' class='alert alert-info text-center' role='alert'> Student Successfully Added! </div>";
            echo header ("location: form.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "<div id='importAlert' class='alert alert-danger text-center' role='alert'> Failed to add this Student </div>";
            header ('Location: form.php');
            exit(0);
        }
    
    
}
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
    <title>Form</title>
</head>
<style>
    body{
        background-color: whitesmoke;
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
    #home{
        margin-top: 300px;
    }
    #welcome{
        background-color: red;
        padding: 5px 10px;
        border-radius: 10px;
    }
    #form{
        margin-top: 130px;
    }
    .modal-header,footer{
        background-color: red;
    }
    #seniorLink{
        background-color: white;
        color: black;
        border: 1px solid black;
    }
    #collegeLink{
        background-color: red;
        color: white;
        border: 1px solid black;
    }
    #seniorLink:hover, #collegeLink:hover{
        background-color: red;
        color: white;
    }
</style>
<body>
<section class="">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow border-0 py-1 mb-0">
            <div class="container-fluid">
                <a class="navbar-brand ps-2">
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

    <?php
            
            if(isset($_SESSION['message']))
            {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
        ?>

    <section class="mt-5 mb-5">
        <div class="container" id="form">
            <div class="row justify-content-center" id="alumni">
                <div class="col-10">
                    <div class="input-group">
                        <a id="seniorLink" href="Shs_form.php" class="btn btn btn-primary">Senior High</a>
                        <a id="collegeLink" href="form.php" class="btn btn btn-primary">College</a>
                    </div>
                <div class="card">
                <div class="card-header border-0 py-3 px-4">
                    <h4>Alumni Tracer</h4>
                    <p>Dear Colegio De Santo Cristo De Burgos Alumni, <br><br>
The Colegio De Santo Cristo De Burgos is establishing a system of tracing its graduates and getting feedback regarding the educational experiences and employability status. This is useful in planning future educational needs. Results of this tracer study will only be presented in summary form and individual responses will be kept <span class="fw-bold fst-italic">strictly confidential.</span>  <br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;May we therefore request your precious time to please answer the questionnaire sincerely.  There is no right or wrong answer.  We would appreciate if you could complete the following questionnaire and return to us, at your earliest convenience.


Thank you for your cooperation and God bless.</p>
                </div>
                <form action="form.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="row py-3 px-3 ms-0">

                        <h6>Name & Status</h6>
                        <div class="col-xl-5">
                            <label for=""></label>
                            <input type="text" class="form-control p-2" placeholder="First Name:" name="firstname">
                        </div>
                        <div class="col-xl-5">
                            <label for=""></label>
                            <input type="text" class="form-control p-2" placeholder="Last Name:" name="lastname">
                        </div>
                        <div class="col-xl-2">
                            <label for=""></label>
                            <input type="text" class="form-control p-2" placeholder="MI:" name="mi">
                        </div>

                        <div class="divider my-3"></div>

                        <div class="col-xl-5">
                            <label for="">Birthday:</label>
                            <input type="date" class="form-control p-2" name="birthday">
                        </div>
                        <div class="col-xl-4">
                            <label for="">Age:</label>
                            <input type="text" class="form-control p-2" name="age">
                        </div>
                       
                        <div class="col-xl-3">
                            <label for="">Civil Status:</label>
                            <select name="civil_status" id="" class="form-control p-2">
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                            </select>
                        </div>

                        <div class="divider my-3"></div>

                        <div class="col-xl-12 mb-3">
                            <label for="">Email:</label>
                            <input type="text" class="form-control p-2" name="email">
                        </div>
                        <div class="col-xl-5">
                            <label for="">Contact Number:</label>
                            <input type="text" class="form-control p-2" name="contact_num">
                        </div>

                        <div class="divider my-4"></div>
                        <h6 class="my-2">Educational background</h6>
                        <div class="col-xl-12">
                            <label for="">Course:</label>
                            <select name="course" id="" class="form-control p-2">
                                <option value="Bachelor of Science in Business Administration Major in Marketing Management">Bachelor of Science in Business Administration Major in Marketing Management</option>
                                <option value="Bachelor of Science in Business Administration Major in Financial Management">Bachelor of Science in Business Administration Major in Financial Management</option>
                                <option value="Bachelor of Science in Business Administration Major in Human Resources Management">Bachelor of Science in Business Administration Major in Human Resources Management</option>
                                <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                <option value="Bachelor of Science in Hotel Restaurant Management">Bachelor of Science in Hotel Restaurant Management</option>
                                <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</option>
                                <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                                <option value="Bachelor of Science in Business Administration Major in Human Resources Development Management">Bachelor of Science in Business Administration Major in Human Resources Development Management</option>
                                <option value="Bachelor of Science in Hospitality Management">Bachelor of Science in Hospitality Management</option>
                                <option value="Bachelor of Technical Vocational Teacher Education">Bachelor of Technical Vocational Teacher Education</option>
                            </select>
                        </div>
                
                        <div class="divider my-4"></div>

                        <div class="col-xl-6">
                            <label for="">Year Graduated:</label>
                            <input type="date" class="form-control p-2" name="year_graduated">
                        </div>

                        <div class="divider my-4"></div>
                        <h6 class="">Employability Status</h6>
                        <div class="col-xl-6 my-2">
                            <input class="radio" type="radio" name="current_work" id="current_work" value="Employed">
                            <label for="PlaceOfWork">Employed</label>
                            <br>
                            <input class="radio" type="radio" name="current_work" id="current_work" value="Self-employed">
                            <label for="PlaceOfWork">Self-employed</label>
                            <br>
                            <input class="radio" type="radio" name="current_work" id="current_work" value="Unemployed">
                            <label for="PlaceOfWork">Unemployed</label>
                        </div>
                        
                        <div class="col-xl-6 my-2">
                            <label for="">Place of Work:</label>
                            <br>
                            <input class="radio" type="radio" name="PlaceOfWork" id="PlaceOfWork" value="Local">
                            <label for="PlaceOfWork">Local</label>
                            <br>
                            <input class="radio" type="radio" name="PlaceOfWork" id="PlaceOfWork" value="Abroad">
                            <label for="PlaceOfWork">Abroad</label>

                          
                        </div>

                        <div class="divider my-4"></div>

                        <div class="col-xl-6">
                            <label for="">- Your Position:</label>
                            <input type="text" class="form-control p-2" name="position">
                        </div>

                        <div class="divider my-3"></div>

                        <div class="col-xl-6">
                            <label for="">- how many years you are working in your current work?</label>
                        </div>
                        <div class="divider my-1"></div>
                        <div class="col-xl-3">
                            <input type="text" class="form-control p-2" name="workYear">
                        </div>

                        <div class="divider my-4"></div>


                        <div class="col-xl-6">
                        <input type="checkbox" name="" id="privacy" class="me-2" required>
                        <label for="privacy">I have read and agree to the <a type="button" class="fw-bold text-dark" data-bs-toggle="modal" data-bs-target="#privacyPolicy">
                        Privacy Policy
                        </a>
                        </label>
                        </div>
                       

                        <div class="divider my-4"></div>

                     
                        <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>

                   </div>
                </div>
               </form>
            </div>
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



<!-- Modal -->
<div class="modal fade" id="privacyPolicy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h6 class="modal-title" id="exampleModalLabel">Privacy Policy</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-3 pb-5">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="line-height: 2;">Alumni Tracer("we","our",or"us") is committed to protecting your privacy, This Privacy Policy explains how personal information is collected, used, and disclosed by Alumni Tracer. This Privacy Policy applies to our website, alumni tracer, and its associated subdomains (collectively, our "Service"). By accessing or using our Service, you signify that you have read, understood, and agree to our collection, storage, use, and disclosure of your personal information as described in this Privacy Policy and our Terms of Service.</span> 
      </div>
    </div>
  </div>
</div>


  <script src="./Bootstrap-5/js/jquery-3.6.4.min.js"></script>
  <script>
       // Alert message time before fading ------------------------------->
       setTimeout(function() {
        $("#importAlert").fadeOut(1500);
        }, 3000);
  </script>
  <!-- <script src="main.js"></script> -->
</body>
</html>