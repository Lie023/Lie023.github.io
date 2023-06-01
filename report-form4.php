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
<body>
    
<section id="report" class="container-fluid">
        <div class="divider p-1 bg-secondary mt-2"></div>
        <div class="report-header">
        <div class="text-end">
            <a class="px-3 text-dark" id="print">Print Report</a>
            <a class="px-2 text-dark" id="reportBack" href="Report.php">Back</a>
            </div>
            <h3 class="fst-italic p-2 pb-0">Report of Students Employee Status, S.Y. 2021</h3>
                <p class="p-2 fst-italic"><span class="fw-bold">Report By:</span>
                    <br>
                    <span class="fw-bold">Colegio De Santo Cristo De Burgos</span>
                    <br>
                </p>
        </div>
    </section>

    <section id="report" class="container-fluid">

    <div class="divider p-1 bg-dark mt-4 mb-3"></div>

       <div class="report-body">
       <div class="d-flex justify-content-between p-2 mx-3">
                           
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

       <div class="divider p-1 bg-secondary my-2"></div>
    </section>

    <footer class="container-fluid mt-5">
        <div class="d-flex justify-content-between">
        <p class="fst-italic">As Of <span id="day"></span></p>
        <p class="fst-italic">Report of Students Employee Status, S.Y. 2021</p>
        </div>
        
    </footer>

    <script src="date.js"></script>
</body>
</html>