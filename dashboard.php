<?php

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

$sql_total_shs = "SELECT COUNT(id) AS total FROM sh_record;";
$alumni_total_shs = $con->query($sql_total_shs) or die ($con->error);
$row_total_shs = $alumni_total_shs->fetch_assoc();

$sql_totalgradShs = "SELECT COUNT(id) AS total FROM sh_record WHERE graduate_status = 'Graduate';";
$alumni_totalgradShs = $con->query($sql_totalgradShs) or die ($con->error);
$row_totalgradShs = $alumni_totalgradShs->fetch_assoc();

$sql_totalunderShs = "SELECT COUNT(id) AS total FROM sh_record WHERE graduate_status = 'Undergraduate';";
$alumni_totalunderShs = $con->query($sql_totalunderShs) or die ($con->error);
$row_totalunderShs = $alumni_totalunderShs->fetch_assoc();

$sql_totalgradPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record)),'%') AS 'Percentage'
FROM sh_record WHERE (graduate_status = 'Graduate');";
$alumni_totalgradPercent = $con->query($sql_totalgradPercent) or die ($con->error);
$row_totalgradPercent = $alumni_totalgradPercent->fetch_assoc();

$sql_totalunderPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record)),'%') AS 'Percentage'
FROM sh_record WHERE (graduate_status = 'Undergraduate');";
$alumni_totalunderPercent = $con->query($sql_totalunderPercent) or die ($con->error);
$row_totalunderPercent = $alumni_totalunderPercent->fetch_assoc();
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
    <title>Dashboard</title>
</head>
<style>
    #sideNav ul li:nth-child(1){
    background-color: red;
    border-radius: 10px;
} 
</style>
<body>
   <header>
   <div class="navbar-expand-lg container-fluid p-2 fixed-top" style="background-color:red;">
        <span class="navbar-brand text-light">
        <a class="d-xl-none mx-4" id="small-nav-toggler"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg></a>
        <img class="mx-3" src="./Images/Burgos logo.png" alt="" style="max-width: 60px;">
            <span class="lead">Dashboard</span>
        </span>
            
            <button id="dropdown" type="button" class="btn text-light dropdown-toggle dropdown-toggle-split btn-sm" style="background-color: red;" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <?php if(isset($_SESSION["userLogin"])){?>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        <?php } else{ ?>
                        <a class="dropdown-item" href="login.php">Login</a>
                        <?php } ?>
                </ul>
      </div>
   </header>


   <aside>
        <nav class="bg-dark" id="sideNav">
            <div class="container">
                <span class="navbar-brand">
                   
                </span>
                <button type="button" class="btn-close btn-close-white d-xl-none mt-3"></button>
                <ul class="navbar-nav mt-4 text-center">
                <li class="nav-item my-1">
                        <a href="" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item my-1">
                        <a href="Record.php" class="nav-link">College List</a>
                    </li>
                    <li class="nav-item my-1">
                        <a href="Shs_record.php" class="nav-link">Shs List</a>
                    </li>
                    <li class="nav-item my-1">
                        <a href="report.php" class="nav-link">C.Reports</a>
                    </li>
                    <li class="nav-item my-1">
                        <a href="Shs_report.php" class="nav-link">Shs Reports</a>
                    </li>
                    <li class="nav-item my-1">
                        <a href="thesis.php" class="nav-link">C.Thesis</a>
                    </li>
                    <li class="nav-item my-1">
                        <a href="Shs_thesis.php" class="nav-link">Shs Thesis</a>
                    </li>
                </ul>
            </div>
        </nav>
   </aside>
    <br>

    <section id="main" class="mb-5">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header text-center">
                    <h5>College Dashboard</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4-xl col-lg-4 col-6-md py-2">
                            <div class="card">
                                <div class="card-body bg-info text-light">
                                    Number of Graduates:
                                    <h6 class="lead mt-4 pb-2">Total: <span class="fw-bold"><?php echo $row_total['total']; ?></span></h6>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-4-xl col-lg-4 col-6-md py-2">
                        <div class="card">
                                <div class="card-body bg-success text-light">
                                    Number of Employed Graduates:
                                    <h6 class="lead mt-3">Total: <span class="fw-bold"><?php echo $row_totalEmp['total']; ?></span></h6>
                                    <h6 class="lead mt-3">Percentage: <span class="fw-bold"><?php echo $row_totalEmpPercent['Percentage']; ?></span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-4-xl col-lg-4 col-12-md py-2">
                        <div class="card">
                                <div class="card-body bg-danger text-light">
                                    Number of Unemployed Graduates:
                                    <h6 class="lead mt-3">Total: <span class="fw-bold"><?php echo $row_totalUnemp['total']; ?></span></h6>
                                    <h6 class="lead mt-3">Percentage: <span class="fw-bold"><?php echo $row_totalUnempPercent['Percentage']; ?></span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- Senior High ------------------------- -->


        <div class="container-fluid">
<div class="card">
    <div class="card-header text-center">
        <h5>Senior High School</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 py-2">
                <div class="card">
                    <div class="card-body bg-info text-light">
                        Number of Enrolled Students:
                        <h6 class="lead mt-4 pb-2">Total: <span class="fw-bold"><?php echo $row_total_shs['total']; ?></span></h6>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 py-2">
            <div class="card">
                    <div class="card-body bg-success text-light">
                        Number of Graduate Students:
                        <h6 class="lead mt-3">Total: <span class="fw-bold"><?php echo $row_totalgradShs['total']; ?></span></h6>
                        <h6 class="lead mt-3">Percentage: <span class="fw-bold"><?php echo $row_totalgradPercent['Percentage']; ?></span></h6>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 py-2">
            <div class="card">
                    <div class="card-body bg-danger text-light">
                        Number of Undergraduate Students:
                        <h6 class="lead mt-3">Total: <span class="fw-bold"><?php echo $row_totalunderShs['total']; ?></span></h6>
                        <h6 class="lead mt-3">Percentage: <span class="fw-bold"><?php echo $row_totalunderPercent['Percentage']; ?></span></h6>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
    </section>

    <script src="./Bootstrap-5/js/jquery-3.6.4.min.js"></script>
    <script src="main.js"></script>
</body>
</html>