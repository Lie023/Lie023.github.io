<?php
include 'filesLogic.php';
if(!isset($_SESSION)){
    session_start();
}


if(isset($_SESSION['message1']))
{
    echo $_SESSION['message1'];
    unset($_SESSION['message1']);
}


include_once("./connections/connection.php");

$con = connection();

$sql_total = "SELECT COUNT(id) AS total FROM alumni_record;";
$alumni_total = $con->query($sql_total) or die ($con->error);
$row_total = $alumni_total->fetch_assoc();

// -------------------------------Employed Total-----------------------------------

$sql_totalEmp = "SELECT COUNT(id) AS total FROM alumni_record WHERE current_work = 'Employed' OR current_work = 'Self-employed';";
$alumni_totalEmp = $con->query($sql_totalEmp) or die ($con->error);
$row_totalEmp = $alumni_totalEmp->fetch_assoc();

$sql_totalEmpPercent = "SELECT concat(round(COUNT(current_work) * 100 / (SELECT COUNT(id) FROM alumni_record)),'%') AS 'Percentage'
FROM alumni_record WHERE (current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_totalEmpPercent = $con->query($sql_totalEmpPercent) or die ($con->error);
$row_totalEmpPercent = $alumni_totalEmpPercent->fetch_assoc();

// -------------------------------Unemployed Total-----------------------------------

$sql_totalUnemp = "SELECT COUNT(id) AS total FROM alumni_record WHERE current_work = 'Unemployed';";
$alumni_totalUnemp = $con->query($sql_totalUnemp) or die ($con->error);
$row_totalUnemp = $alumni_totalUnemp->fetch_assoc();

$sql_totalUnempPercent = "SELECT concat(round(COUNT(current_work) * 100 / (SELECT COUNT(id) FROM alumni_record)),'%') AS 'Percentage'
FROM alumni_record WHERE (current_work = 'Unemployed');";
$alumni_totalUnempPercent = $con->query($sql_totalUnempPercent) or die ($con->error);
$row_totalUnempPercent = $alumni_totalUnempPercent->fetch_assoc();


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
    <title>Thesis</title>
</head>
<style>
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
#main1{
    margin-top: 70px;
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

    <section id="main1" class="mb-5">
        <div class="container-fluid">
            <br>

        <div class="card">

            <div class="card-header text-center p-2">
                <h2>College Thesis</h2>
            </div>
            <div class="card-body">

            <div class="row text-center p-5">
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSBA_marketing1.php" class="text-warning" id=""><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                <label for="">Bachelor of Science in Business Administration Major in Marketing Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSBA_financial1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Business Administration Major in Financial Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSBA_humanResources1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Business Administration Major in Human Resources Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSIT1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Information Technology</label>
                </div>

                            <div class="divider my-4"></div>

                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSHRM1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Hotel Restaurant Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSTM1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Tourism Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSCS1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Computer Science</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSBA_humanR_development1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Business Administration Major in Human Resources Development Management</label>
                </div>

                    <div class="divider my-4"></div>

                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSHM1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Hospitality Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BTVTE1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Technical Vocational Teacher Education</label>
                </div>
            </div>

            </div>
        </div>

    <br>

        <div class="card">

            <div class="card-header text-center p-2">
                <h2>Senior High Thesis</h2>
            </div>
            <div class="card-body">

            <div class="row text-center p-5">
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="ABM1.php" class="text-warning" id=""><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                <label for="">ACCOUNTANCY BUSINESS AND MANAGEMENT</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="STEM1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">SCIENCE TECHNOLOGY, ENGINEERING, AND MATHEMATICS</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="HUMMS1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">HUMANITIES AND SOCIAL SCIENCES</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="HE1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <br>
                    <label for="">TVL-HOME ECONOMICS</label>
                </div>

                            <div class="divider my-4"></div>

                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="ICT1.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">TVL-INFORMATION AND COMMUNICATION TECHNOLOGY</label>
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

    <script src="./Bootstrap-5/js/jquery-3.6.4.min.js"></script>
    <script src="main.js"></script>
</body>
</html>