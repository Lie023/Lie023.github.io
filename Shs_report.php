<?php

include_once("./connections/connection.php");

$con = connection();

// ABM -------------------------------------

$sql_abmTotal = "SELECT COUNT(id) AS total FROM sh_record WHERE strand = 'ACCOUNTANCY BUSINESS AND MANAGEMENT';";
$alumni_abmTotal = $con->query($sql_abmTotal) or die ($con->error);
$row_abmTotal = $alumni_abmTotal->fetch_assoc();

$sql_abmgradPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record WHERE strand = 'ACCOUNTANCY BUSINESS AND MANAGEMENT')),'%') AS 'Percentage'
FROM sh_record WHERE strand = 'ACCOUNTANCY BUSINESS AND MANAGEMENT' && (graduate_status = 'Graduate');";
$alumni_abmgradPercent = $con->query($sql_abmgradPercent) or die ($con->error);
$row_abmgradPercent = $alumni_abmgradPercent->fetch_assoc();

$sql_abmunderPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record WHERE strand = 'ACCOUNTANCY BUSINESS AND MANAGEMENT')),'%') AS 'Percentage'
FROM sh_record WHERE strand = 'ACCOUNTANCY BUSINESS AND MANAGEMENT' && (graduate_status = 'Undergraduate');";
$alumni_abmunderPercent = $con->query($sql_abmunderPercent) or die ($con->error);
$row_abmunderPercent = $alumni_abmunderPercent->fetch_assoc();

// STEM ----------------------------------------

$sql_stemTotal = "SELECT COUNT(id) AS total FROM sh_record WHERE strand = 'SCIENCE TECHNOLOGY, ENGINEERING, AND MATHEMATICS';";
$alumni_stemTotal = $con->query($sql_stemTotal) or die ($con->error);
$row_stemTotal = $alumni_stemTotal->fetch_assoc();

$sql_stemradPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record WHERE strand = 'SCIENCE TECHNOLOGY, ENGINEERING, AND MATHEMATICS')),'%') AS 'Percentage'
FROM sh_record WHERE strand = 'SCIENCE TECHNOLOGY, ENGINEERING, AND MATHEMATICS' && (graduate_status = 'Graduate');";
$alumni_stemradPercent = $con->query($sql_stemradPercent) or die ($con->error);
$row_stemradPercent = $alumni_stemradPercent->fetch_assoc();

$sql_stemunderPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record WHERE strand = 'SCIENCE TECHNOLOGY, ENGINEERING, AND MATHEMATICS')),'%') AS 'Percentage'
FROM sh_record WHERE strand = 'SCIENCE TECHNOLOGY, ENGINEERING, AND MATHEMATICS' && (graduate_status = 'Undergraduate');";
$alumni_stemunderPercent = $con->query($sql_stemunderPercent) or die ($con->error);
$row_stemunderPercent = $alumni_stemunderPercent->fetch_assoc();

// HUMMS ----------------------------------------

$sql_hummsTotal = "SELECT COUNT(id) AS total FROM sh_record WHERE strand = 'HUMANITIES AND SOCIAL SCIENCES';";
$alumni_hummsTotal = $con->query($sql_hummsTotal) or die ($con->error);
$row_hummsTotal = $alumni_hummsTotal->fetch_assoc();

$sql_hummsradPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record WHERE strand = 'HUMANITIES AND SOCIAL SCIENCES')),'%') AS 'Percentage'
FROM sh_record WHERE strand = 'HUMANITIES AND SOCIAL SCIENCES' && (graduate_status = 'Graduate');";
$alumni_hummsradPercent = $con->query($sql_hummsradPercent) or die ($con->error);
$row_hummsradPercent = $alumni_hummsradPercent->fetch_assoc();

$sql_hummsunderPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record WHERE strand = 'HUMANITIES AND SOCIAL SCIENCES')),'%') AS 'Percentage'
FROM sh_record WHERE strand = 'HUMANITIES AND SOCIAL SCIENCES' && (graduate_status = 'Undergraduate');";
$alumni_hummsunderPercent = $con->query($sql_hummsunderPercent) or die ($con->error);
$row_hummsunderPercent = $alumni_hummsunderPercent->fetch_assoc();

// TVL-HE ----------------------------------------

$sql_heTotal = "SELECT COUNT(id) AS total FROM sh_record WHERE strand = 'TVL-HOME ECONOMICS';";
$alumni_heTotal = $con->query($sql_heTotal) or die ($con->error);
$row_heTotal = $alumni_heTotal->fetch_assoc();

$sql_heradPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record WHERE strand = 'TVL-HOME ECONOMICS')),'%') AS 'Percentage'
FROM sh_record WHERE strand = 'TVL-HOME ECONOMICS' && (graduate_status = 'Graduate');";
$alumni_heradPercent = $con->query($sql_heradPercent) or die ($con->error);
$row_heradPercent = $alumni_heradPercent->fetch_assoc();

$sql_heunderPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record WHERE strand = 'TVL-HOME ECONOMICS')),'%') AS 'Percentage'
FROM sh_record WHERE strand = 'TVL-HOME ECONOMICS' && (graduate_status = 'Undergraduate');";
$alumni_heunderPercent = $con->query($sql_heunderPercent) or die ($con->error);
$row_heunderPercent = $alumni_heunderPercent->fetch_assoc();

// TVL-ICT ----------------------------------------

$sql_ictTotal = "SELECT COUNT(id) AS total FROM sh_record WHERE strand = 'TVL-INFORMATION AND COMMUNICATION TECHNOLOGY';";
$alumni_ictTotal = $con->query($sql_ictTotal) or die ($con->error);
$row_ictTotal = $alumni_ictTotal->fetch_assoc();

$sql_ictradPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record WHERE strand = 'TVL-INFORMATION AND COMMUNICATION TECHNOLOGY')),'%') AS 'Percentage'
FROM sh_record WHERE strand = 'TVL-INFORMATION AND COMMUNICATION TECHNOLOGY' && (graduate_status = 'Graduate');";
$alumni_ictradPercent = $con->query($sql_ictradPercent) or die ($con->error);
$row_ictradPercent = $alumni_ictradPercent->fetch_assoc();

$sql_ictunderPercent = "SELECT concat(round(COUNT(graduate_status) * 100 / (SELECT COUNT(id) FROM sh_record WHERE strand = 'TVL-INFORMATION AND COMMUNICATION TECHNOLOGY')),'%') AS 'Percentage'
FROM sh_record WHERE strand = 'TVL-INFORMATION AND COMMUNICATION TECHNOLOGY' && (graduate_status = 'Undergraduate');";
$alumni_ictunderPercent = $con->query($sql_ictunderPercent) or die ($con->error);
$row_ictunderPercent = $alumni_ictunderPercent->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./Bootstrap-5/css/bootstrap.min.css">
    <script src="./Bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <title>Report</title>
</head>
<style>
    #sideNav ul li:nth-child(5){
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
            <span class="lead">Senior High School Report</span>
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

                <ul class="navbar-nav mt-4 text-center">
                <li class="nav-item my-1">
                        <a href="dashboard.php" class="nav-link">Dashboard</a>
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
        <div class="card" id="card">
            <div class="card-header">
                <h4 class="lead fw-bold text-center my-2">Reports of Alumni for Senior High School Graduate Status</h4>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Strand</th>
                            <th>Total Response</th>
                            <th>Total of Graduate Students</th>
                            <th>Total of Undergraduate Students</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ABM - ACCOUNTANCY BUSINESS AND MANAGEMENT</td>
                            <td><?php echo $row_abmTotal['total'] ?></td>
                            <td><?php echo $row_abmgradPercent['Percentage'] ?></td>
                            <td><?php echo $row_abmunderPercent['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>STEM - SCIENCE TECHNOLOGY, ENGINEERING, AND MATHEMATICS</td>
                            <td><?php echo $row_stemTotal['total'] ?></td>
                            <td><?php echo $row_stemradPercent['Percentage'] ?></td>
                            <td><?php echo $row_stemunderPercent['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>HUMMS - HUMANITIES AND SOCIAL SCIENCES</td>
                            <td><?php echo $row_hummsTotal['total'] ?></td>
                            <td><?php echo $row_hummsradPercent['Percentage'] ?></td>
                            <td><?php echo $row_hummsunderPercent['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>TVL-HOME ECONOMICS</td>
                            <td><?php echo $row_heTotal['total'] ?></td>
                            <td><?php echo $row_heradPercent['Percentage'] ?></td>
                            <td><?php echo $row_heunderPercent['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>TVL-INFORMATION AND COMMUNICATION TECHNOLOGY</td>
                            <td><?php echo $row_ictTotal['total'] ?></td>
                            <td><?php echo $row_ictradPercent['Percentage'] ?></td>
                            <td><?php echo $row_ictunderPercent['Percentage'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        

        
        

    </div>
   </section>


   <script src="./Bootstrap-5/js/jquery-3.6.4.min.js"></script>
  <script src="main.js"></script>
</body>
</html>