<?php

include_once("report-back.php");

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
    #sideNav ul li:nth-child(4){
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
            <span class="lead">Report</span>
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

    <div class="row my-3">
                    <div class="col-2">
                    <select name="batch" id="batch" class="form-control text-center">
                    <option value="--- Batch - All ---">--- Batch - All ---</option>
                    <option value="--- Batch - 2018 ---">--- Batch - 2018 ---</option>
                    <option value="--- Batch - 2019 ---">--- Batch - 2019 ---</option>
                    <option value="--- Batch - 2020 ---">--- Batch - 2020 ---</option>
                    <option value="--- Batch - 2021 ---">--- Batch - 2021 ---</option>
                    <option value="--- Batch - 2022 ---">--- Batch - 2022 ---</option>
                </select>
                    </div>
                </div>
                <a href="report-form.php" class="btn btn-primary mb-1" id="btnReport">Generate Report</a>
                <a href="report-form1.php" class="btn btn-primary mb-1" id="btnReport1">Generate Report</a>
                <a href="report-form2.php" class="btn btn-primary mb-1" id="btnReport2">Generate Report</a>
                <a href="report-form3.php" class="btn btn-primary mb-1" id="btnReport3">Generate Report</a>
                <a href="report-form4.php" class="btn btn-primary mb-1" id="btnReport4">Generate Report</a>
                <a href="report-form5.php" class="btn btn-primary mb-1" id="btnReport5">Generate Report</a>
        <div class="card" id="card">
            <div class="card-header">
                <h4 class="lead fw-bold text-center my-2">Reports of Alumni for employed, unemployed and their status</h4>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Total Response</th>
                            <th>Total of Employed</th>
                            <th>Total of Self-Employed</th>
                            <th>Total of Unemployed</th>
                            <th>Total Work in Local</th>
                            <th>Total Work in Abroad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BSBA - Major in Marketing Management</td>
                            <td><?php echo $row_BSBA1['total'] ?></td>
                            <td><?php echo $row_BSBA_emp['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Financial Management</td>
                            <td><?php echo $row_BSBA2['total'] ?></td>
                            <td><?php echo $row_BSBA_emp1['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp1['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp1['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local1['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad1['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Management</td>
                            <td><?php echo $row_BSBA3['total'] ?></td>
                            <td><?php echo $row_BSBA_emp2['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp2['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp2['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local2['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad2['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Development Management</td>
                            <td><?php echo $row_BSBA4['total'] ?></td>
                            <td><?php echo $row_BSBA_emp3['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp3['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp3['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local3['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad3['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSIT</td>
                            <td><?php echo $row_BSBA5['total'] ?></td>
                            <td><?php echo $row_BSBA_emp4['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp4['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp4['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local4['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad4['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHRM</td>
                            <td><?php echo $row_BSBA6['total'] ?></td>
                            <td><?php echo $row_BSBA_emp5['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp5['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp5['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local5['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad5['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSTM</td>
                            <td><?php echo $row_BSBA7['total'] ?></td>
                            <td><?php echo $row_BSBA_emp6['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp6['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp6['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local6['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad6['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSCS</td>
                            <td><?php echo $row_BSBA8['total'] ?></td>
                            <td><?php echo $row_BSBA_emp7['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp7['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp7['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local7['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad7['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHM</td>
                            <td><?php echo $row_BSBA9['total'] ?></td>
                            <td><?php echo $row_BSBA_emp8['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp8['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp8['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local8['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad8['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSVTED</td>
                            <td><?php echo $row_BSBA10['total'] ?></td>
                            <td><?php echo $row_BSBA_emp9['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp9['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp9['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local9['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad9['Percentage'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

            <!-- card 1 -------------------------------------------- -->

            <div class="card" id="card1">
            <div class="card-header text-center ">
                <h4 class="lead fw-bold">Reports of Alumni for employed, unemployed and their status</h4>
                <span class="lead">Batch: <span class="fw-bold lead">2018</span></span>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Total Response</th>
                            <th>Total of Employed</th>
                            <th>Total of Self-Employed</th>
                            <th>Total of Unemployed</th>
                            <th>Total Work in Local</th>
                            <th>Total Work in Abroad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BSBA - Major in Marketing Management</td>
                            <td><?php echo $row_BSBA1_2018['total'] ?></td>
                            <td><?php echo $row_BSBA_emp_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad_2018['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Financial Management</td>
                            <td><?php echo $row_BSBA2_2018['total'] ?></td>
                            <td><?php echo $row_BSBA_emp1_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp1_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp1_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local1_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad1_2018['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Management</td>
                            <td><?php echo $row_BSBA3_2018['total'] ?></td>
                            <td><?php echo $row_BSBA_emp2_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp2_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp2_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local2_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad2_2018['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Development Management</td>
                            <td><?php echo $row_BSBA4_2018['total'] ?></td>
                            <td><?php echo $row_BSBA_emp3_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp3_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp3_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local3_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad3_2018['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSIT</td>
                            <td><?php echo $row_BSBA5_2018['total'] ?></td>
                            <td><?php echo $row_BSBA_emp4_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp4_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp4_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local4_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad4_2018['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHRM</td>
                            <td><?php echo $row_BSBA6_2018['total'] ?></td>
                            <td><?php echo $row_BSBA_emp5_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp5_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp5_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local5_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad5_2018['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSTM</td>
                            <td><?php echo $row_BSBA7_2018['total'] ?></td>
                            <td><?php echo $row_BSBA_emp6_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp6_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp6_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local6_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad6_2018['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSCS</td>
                            <td><?php echo $row_BSBA8_2018['total'] ?></td>
                            <td><?php echo $row_BSBA_emp7_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp7_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp7_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local7_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad7_2018['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHM</td>
                            <td><?php echo $row_BSBA9_2018['total'] ?></td>
                            <td><?php echo $row_BSBA_emp8_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp8_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp8_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local8_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad8_2018['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSVTED</td>
                            <td><?php echo $row_BSBA10_2018['total'] ?></td>
                            <td><?php echo $row_BSBA_emp9_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp9_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp9_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local9_2018['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad9_2018['Percentage'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

         <!-- card 2 -------------------------------------------- -->


        <div class="card" id="card2">
            <div class="card-header text-center ">
                <h4 class="lead fw-bold">Reports of Alumni for employed, unemployed and their status</h4>
                <span class="lead">Batch: <span class="fw-bold lead">2019</span></span>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Total Response</th>
                            <th>Total of Employed</th>
                            <th>Total of Self-Employed</th>
                            <th>Total of Unemployed</th>
                            <th>Total Work in Local</th>
                            <th>Total Work in Abroad</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>BSBA - Major in Marketing Management</td>
                            <td><?php echo $row_BSBA1_2019['total'] ?></td>
                            <td><?php echo $row_BSBA_emp_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad_2019['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Financial Management</td>
                            <td><?php echo $row_BSBA2_2019['total'] ?></td>
                            <td><?php echo $row_BSBA_emp1_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp1_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp1_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local1_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad1_2019['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Management</td>
                            <td><?php echo $row_BSBA3_2019['total'] ?></td>
                            <td><?php echo $row_BSBA_emp2_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp2_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp2_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local2_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad2_2019['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Development Management</td>
                            <td><?php echo $row_BSBA4_2019['total'] ?></td>
                            <td><?php echo $row_BSBA_emp3_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp3_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp3_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local3_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad3_2019['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSIT</td>
                            <td><?php echo $row_BSBA5_2019['total'] ?></td>
                            <td><?php echo $row_BSBA_emp4_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp4_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp4_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local4_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad4_2019['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHRM</td>
                            <td><?php echo $row_BSBA6_2019['total'] ?></td>
                            <td><?php echo $row_BSBA_emp5_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp5_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp5_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local5_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad5_2019['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSTM</td>
                            <td><?php echo $row_BSBA7_2019['total'] ?></td>
                            <td><?php echo $row_BSBA_emp6_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp6_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp6_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local6_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad6_2019['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSCS</td>
                            <td><?php echo $row_BSBA8_2019['total'] ?></td>
                            <td><?php echo $row_BSBA_emp7_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp7_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp7_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local7_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad7_2019['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHM</td>
                            <td><?php echo $row_BSBA9_2019['total'] ?></td>
                            <td><?php echo $row_BSBA_emp8_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp8_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp8_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local8_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad8_2019['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSVTED</td>
                            <td><?php echo $row_BSBA10_2019['total'] ?></td>
                            <td><?php echo $row_BSBA_emp9_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp9_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp9_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local9_2019['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad9_2019['Percentage'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

         <!-- card 3 -------------------------------------------- -->


         <div class="card" id="card3">
            <div class="card-header text-center ">
                <h4 class="lead fw-bold">Reports of Alumni for employed, unemployed and their status</h4>
                <span class="lead">Batch: <span class="fw-bold lead">2020</span></span>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Total Response</th>
                            <th>Total of Employed</th>
                            <th>Total of Self-Employed</th>
                            <th>Total of Unemployed</th>
                            <th>Total Work in Local</th>
                            <th>Total Work in Abroad</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>BSBA - Major in Marketing Management</td>
                            <td><?php echo $row_BSBA1_2020['total'] ?></td>
                            <td><?php echo $row_BSBA_emp_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad_2020['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Financial Management</td>
                            <td><?php echo $row_BSBA2_2020['total'] ?></td>
                            <td><?php echo $row_BSBA_emp1_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp1_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp1_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local1_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad1_2020['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Management</td>
                            <td><?php echo $row_BSBA3_2020['total'] ?></td>
                            <td><?php echo $row_BSBA_emp2_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp2_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp2_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local2_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad2_2020['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Development Management</td>
                            <td><?php echo $row_BSBA4_2020['total'] ?></td>
                            <td><?php echo $row_BSBA_emp3_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp3_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp3_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local3_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad3_2020['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSIT</td>
                            <td><?php echo $row_BSBA5_2020['total'] ?></td>
                            <td><?php echo $row_BSBA_emp4_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp4_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp4_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local4_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad4_2020['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHRM</td>
                            <td><?php echo $row_BSBA6_2020['total'] ?></td>
                            <td><?php echo $row_BSBA_emp5_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp5_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp5_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local5_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad5_2020['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSTM</td>
                            <td><?php echo $row_BSBA7_2020['total'] ?></td>
                            <td><?php echo $row_BSBA_emp6_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp6_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp6_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local6_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad6_2020['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSCS</td>
                            <td><?php echo $row_BSBA8_2020['total'] ?></td>
                            <td><?php echo $row_BSBA_emp7_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp7_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp7_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local7_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad7_2020['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHM</td>
                            <td><?php echo $row_BSBA9_2020['total'] ?></td>
                            <td><?php echo $row_BSBA_emp8_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp8_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp8_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local8_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad8_2020['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSVTED</td>
                            <td><?php echo $row_BSBA10_2020['total'] ?></td>
                            <td><?php echo $row_BSBA_emp9_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp9_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp9_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local9_2020['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad9_2020['Percentage'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

         <!-- card 4 -------------------------------------------- -->


         <div class="card" id="card4">
            <div class="card-header text-center ">
                <h4 class="lead fw-bold">Reports of Alumni for employed, unemployed and their status</h4>
                <span class="lead">Batch: <span class="fw-bold lead">2021</span></span>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Total Response</th>
                            <th>Total of Employed</th>
                            <th>Total of Self-Employed</th>
                            <th>Total of Unemployed</th>
                            <th>Total Work in Local</th>
                            <th>Total Work in Abroad</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>BSBA - Major in Marketing Management</td>
                            <td><?php echo $row_BSBA1_2021['total'] ?></td>
                            <td><?php echo $row_BSBA_emp_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad_2021['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Financial Management</td>
                            <td><?php echo $row_BSBA2_2021['total'] ?></td>
                            <td><?php echo $row_BSBA_emp1_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp1_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp1_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local1_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad1_2021['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Management</td>
                            <td><?php echo $row_BSBA3_2021['total'] ?></td>
                            <td><?php echo $row_BSBA_emp2_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp2_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp2_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local2_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad2_2021['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Development Management</td>
                            <td><?php echo $row_BSBA4_2021['total'] ?></td>
                            <td><?php echo $row_BSBA_emp3_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp3_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp3_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local3_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad3_2021['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSIT</td>
                            <td><?php echo $row_BSBA5_2021['total'] ?></td>
                            <td><?php echo $row_BSBA_emp4_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp4_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp4_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local4_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad4_2021['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHRM</td>
                            <td><?php echo $row_BSBA6_2021['total'] ?></td>
                            <td><?php echo $row_BSBA_emp5_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp5_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp5_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local5_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad5_2021['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSTM</td>
                            <td><?php echo $row_BSBA7_2021['total'] ?></td>
                            <td><?php echo $row_BSBA_emp6_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp6_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp6_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local6_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad6_2021['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSCS</td>
                            <td><?php echo $row_BSBA8_2021['total'] ?></td>
                            <td><?php echo $row_BSBA_emp7_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp7_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp7_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local7_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad7_2021['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHM</td>
                            <td><?php echo $row_BSBA9_2021['total'] ?></td>
                            <td><?php echo $row_BSBA_emp8_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp8_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp8_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local8_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad8_2021['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSVTED</td>
                            <td><?php echo $row_BSBA10_2021['total'] ?></td>
                            <td><?php echo $row_BSBA_emp9_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp9_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp9_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local9_2021['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad9_2021['Percentage'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

         <!-- card 5 -------------------------------------------- -->


         <div class="card" id="card5">
            <div class="card-header text-center ">
                <h4 class="lead fw-bold">Reports of Alumni for employed, unemployed and their status</h4>
                <span class="lead">Batch: <span class="fw-bold lead">2022</span></span>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Total Response</th>
                            <th>Total of Employed</th>
                            <th>Total of Self-Employed</th>
                            <th>Total of Unemployed</th>
                            <th>Total Work in Local</th>
                            <th>Total Work in Abroad</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>BSBA - Major in Marketing Management</td>
                            <td><?php echo $row_BSBA1_2022['total'] ?></td>
                            <td><?php echo $row_BSBA_emp_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad_2022['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Financial Management</td>
                            <td><?php echo $row_BSBA2_2022['total'] ?></td>
                            <td><?php echo $row_BSBA_emp1_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp1_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp1_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local1_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad1_2022['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Management</td>
                            <td><?php echo $row_BSBA3_2022['total'] ?></td>
                            <td><?php echo $row_BSBA_emp2_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp2_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp2_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local2_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad2_2022['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSBA - Major in Human Resources Development Management</td>
                            <td><?php echo $row_BSBA4_2022['total'] ?></td>
                            <td><?php echo $row_BSBA_emp3_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp3_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp3_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local3_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad3_2022['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSIT</td>
                            <td><?php echo $row_BSBA5_2022['total'] ?></td>
                            <td><?php echo $row_BSBA_emp4_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp4_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp4_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local4_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad4_2022['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHRM</td>
                            <td><?php echo $row_BSBA6_2022['total'] ?></td>
                            <td><?php echo $row_BSBA_emp5_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp5_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp5_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local5_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad5_2022['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSTM</td>
                            <td><?php echo $row_BSBA7_2022['total'] ?></td>
                            <td><?php echo $row_BSBA_emp6_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp6_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp6_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local6_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad6_2022['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSCS</td>
                            <td><?php echo $row_BSBA8_2022['total'] ?></td>
                            <td><?php echo $row_BSBA_emp7_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp7_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp7_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local7_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad7_2022['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSHM</td>
                            <td><?php echo $row_BSBA9_2022['total'] ?></td>
                            <td><?php echo $row_BSBA_emp8_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp8_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp8_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local8_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad8_2022['Percentage'] ?></td>
                        </tr>
                        <tr>
                            <td>BSVTED</td>
                            <td><?php echo $row_BSBA10_2022['total'] ?></td>
                            <td><?php echo $row_BSBA_emp9_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Semp9_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Unemp9_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Local9_2022['Percentage'] ?></td>
                            <td><?php echo $row_BSBA_Abroad9_2022['Percentage'] ?></td>
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