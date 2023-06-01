<?php

if(!isset($_SESSION)){
    session_start();
}

// if(isset($_SESSION["userLogin"])){
//  echo "<span class='admin'><h2>" .$_SESSION["userLogin"]. "</h2></span>";
// }else{
//     echo "welcome guest";
// }

include_once("./connections/connection.php");

$con = connection();

// --------------------BSBA Major in Marketing Management--------------------------

$sql_BSBA1 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management';";
$alumni_BSBA1 = $con->query($sql_BSBA1) or die ($con->error);
$row_BSBA1 = $alumni_BSBA1->fetch_assoc();

$sql_BSBA_emp = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Employed');";
$alumni_BSBA_emp = $con->query($sql_BSBA_emp) or die ($con->error);
$row_BSBA_emp = $alumni_BSBA_emp->fetch_assoc();

$sql_BSBA_Semp = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Self-employed');";
$alumni_BSBA_Semp = $con->query($sql_BSBA_Semp) or die ($con->error);
$row_BSBA_Semp = $alumni_BSBA_Semp->fetch_assoc();

$sql_BSBA_Unemp = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Unemployed');";
$alumni_BSBA_Unemp = $con->query($sql_BSBA_Unemp) or die ($con->error);
$row_BSBA_Unemp = $alumni_BSBA_Unemp->fetch_assoc();

$sql_BSBA_Local = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Local' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local = $con->query($sql_BSBA_Local) or die ($con->error);
$row_BSBA_Local = $alumni_BSBA_Local->fetch_assoc();

$sql_BSBA_Abroad = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Abroad' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad = $con->query($sql_BSBA_Abroad) or die ($con->error);
$row_BSBA_Abroad = $alumni_BSBA_Abroad->fetch_assoc();

// --------------- 2018 ---------------

$sql_BSBA1_2018 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2018';";
$alumni_BSBA1_2018 = $con->query($sql_BSBA1_2018) or die ($con->error);
$row_BSBA1_2018 = $alumni_BSBA1_2018->fetch_assoc();

$sql_BSBA_emp_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Employed' && year_graduated = '2018');";
$alumni_BSBA_emp_2018 = $con->query($sql_BSBA_emp_2018) or die ($con->error);
$row_BSBA_emp_2018 = $alumni_BSBA_emp_2018->fetch_assoc();

$sql_BSBA_Semp_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Self-employed' && year_graduated = '2018');";
$alumni_BSBA_Semp_2018 = $con->query($sql_BSBA_Semp_2018) or die ($con->error);
$row_BSBA_Semp_2018 = $alumni_BSBA_Semp_2018->fetch_assoc();

$sql_BSBA_Unemp_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Unemployed' && year_graduated = '2018');";
$alumni_BSBA_Unemp_2018 = $con->query($sql_BSBA_Unemp_2018) or die ($con->error);
$row_BSBA_Unemp_2018 = $alumni_BSBA_Unemp_2018->fetch_assoc();

$sql_BSBA_Local_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Local' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local_2018 = $con->query($sql_BSBA_Local_2018) or die ($con->error);
$row_BSBA_Local_2018 = $alumni_BSBA_Local_2018->fetch_assoc();

$sql_BSBA_Abroad_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Abroad' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad_2018 = $con->query($sql_BSBA_Abroad_2018) or die ($con->error);
$row_BSBA_Abroad_2018 = $alumni_BSBA_Abroad_2018->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA1_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2019';";
$alumni_BSBA1_2019 = $con->query($sql_BSBA1_2019) or die ($con->error);
$row_BSBA1_2019 = $alumni_BSBA1_2019->fetch_assoc();

$sql_BSBA_emp_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp_2019 = $con->query($sql_BSBA_emp_2019) or die ($con->error);
$row_BSBA_emp_2019 = $alumni_BSBA_emp_2019->fetch_assoc();

$sql_BSBA_Semp_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp_2019 = $con->query($sql_BSBA_Semp_2019) or die ($con->error);
$row_BSBA_Semp_2019 = $alumni_BSBA_Semp_2019->fetch_assoc();

$sql_BSBA_Unemp_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp_2019 = $con->query($sql_BSBA_Unemp_2019) or die ($con->error);
$row_BSBA_Unemp_2019 = $alumni_BSBA_Unemp_2019->fetch_assoc();

$sql_BSBA_Local_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local_2019 = $con->query($sql_BSBA_Local_2019) or die ($con->error);
$row_BSBA_Local_2019 = $alumni_BSBA_Local_2019->fetch_assoc();

$sql_BSBA_Abroad_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad_2019 = $con->query($sql_BSBA_Abroad_2019) or die ($con->error);
$row_BSBA_Abroad_2019 = $alumni_BSBA_Abroad_2019->fetch_assoc();

// --------------- 2020 ---------------

$sql_BSBA1_2020 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2020';";
$alumni_BSBA1_2020 = $con->query($sql_BSBA1_2020) or die ($con->error);
$row_BSBA1_2020 = $alumni_BSBA1_2020->fetch_assoc();

$sql_BSBA_emp_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Employed' && year_graduated = '2020');";
$alumni_BSBA_emp_2020 = $con->query($sql_BSBA_emp_2020) or die ($con->error);
$row_BSBA_emp_2020 = $alumni_BSBA_emp_2020->fetch_assoc();

$sql_BSBA_Semp_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Self-employed' && year_graduated = '2020');";
$alumni_BSBA_Semp_2020 = $con->query($sql_BSBA_Semp_2020) or die ($con->error);
$row_BSBA_Semp_2020 = $alumni_BSBA_Semp_2020->fetch_assoc();

$sql_BSBA_Unemp_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Unemployed' && year_graduated = '2020');";
$alumni_BSBA_Unemp_2020 = $con->query($sql_BSBA_Unemp_2020) or die ($con->error);
$row_BSBA_Unemp_2020 = $alumni_BSBA_Unemp_2020->fetch_assoc();

$sql_BSBA_Local_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Local' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local_2020 = $con->query($sql_BSBA_Local_2020) or die ($con->error);
$row_BSBA_Local_2020 = $alumni_BSBA_Local_2020->fetch_assoc();

$sql_BSBA_Abroad_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Abroad' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad_2020 = $con->query($sql_BSBA_Abroad_2020) or die ($con->error);
$row_BSBA_Abroad_2020 = $alumni_BSBA_Abroad_2020->fetch_assoc();

// --------------- 2021 ---------------

$sql_BSBA1_2021 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2021';";
$alumni_BSBA1_2021 = $con->query($sql_BSBA1_2021) or die ($con->error);
$row_BSBA1_2021 = $alumni_BSBA1_2021->fetch_assoc();

$sql_BSBA_emp_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Employed' && year_graduated = '2021');";
$alumni_BSBA_emp_2021 = $con->query($sql_BSBA_emp_2021) or die ($con->error);
$row_BSBA_emp_2021 = $alumni_BSBA_emp_2021->fetch_assoc();

$sql_BSBA_Semp_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Self-employed' && year_graduated = '2021');";
$alumni_BSBA_Semp_2021 = $con->query($sql_BSBA_Semp_2021) or die ($con->error);
$row_BSBA_Semp_2021 = $alumni_BSBA_Semp_2021->fetch_assoc();

$sql_BSBA_Unemp_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Unemployed' && year_graduated = '2021');";
$alumni_BSBA_Unemp_2021 = $con->query($sql_BSBA_Unemp_2021) or die ($con->error);
$row_BSBA_Unemp_2021 = $alumni_BSBA_Unemp_2021->fetch_assoc();

$sql_BSBA_Local_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Local' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local_2021 = $con->query($sql_BSBA_Local_2021) or die ($con->error);
$row_BSBA_Local_2021 = $alumni_BSBA_Local_2021->fetch_assoc();

$sql_BSBA_Abroad_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Abroad' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad_2021 = $con->query($sql_BSBA_Abroad_2021) or die ($con->error);
$row_BSBA_Abroad_2021 = $alumni_BSBA_Abroad_2021->fetch_assoc();

// --------------- 2022 ---------------

$sql_BSBA1_2022 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2022';";
$alumni_BSBA1_2022 = $con->query($sql_BSBA1_2022) or die ($con->error);
$row_BSBA1_2022 = $alumni_BSBA1_2022->fetch_assoc();

$sql_BSBA_emp_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Employed' && year_graduated = '2022');";
$alumni_BSBA_emp_2022 = $con->query($sql_BSBA_emp_2022) or die ($con->error);
$row_BSBA_emp_2022 = $alumni_BSBA_emp_2022->fetch_assoc();

$sql_BSBA_Semp_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Self-employed' && year_graduated = '2022');";
$alumni_BSBA_Semp_2022 = $con->query($sql_BSBA_Semp_2022) or die ($con->error);
$row_BSBA_Semp_2022 = $alumni_BSBA_Semp_2022->fetch_assoc();

$sql_BSBA_Unemp_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && (current_work = 'Unemployed' && year_graduated = '2022');";
$alumni_BSBA_Unemp_2022 = $con->query($sql_BSBA_Unemp_2022) or die ($con->error);
$row_BSBA_Unemp_2022 = $alumni_BSBA_Unemp_2022->fetch_assoc();

$sql_BSBA_Local_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Local' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local_2022 = $con->query($sql_BSBA_Local_2022) or die ($con->error);
$row_BSBA_Local_2022 = $alumni_BSBA_Local_2022->fetch_assoc();

$sql_BSBA_Abroad_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management' && PlaceOfWork = 'Abroad' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad_2022 = $con->query($sql_BSBA_Abroad_2022) or die ($con->error);
$row_BSBA_Abroad_2022 = $alumni_BSBA_Abroad_2022->fetch_assoc();

// --------------------BSBA Major in Financial Management--------------------------

$sql_BSBA2 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management';";
$alumni_BSBA2 = $con->query($sql_BSBA2) or die ($con->error);
$row_BSBA2 = $alumni_BSBA2->fetch_assoc();

$sql_BSBA_emp1 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Employed');";
$alumni_BSBA_emp1 = $con->query($sql_BSBA_emp1) or die ($con->error);
$row_BSBA_emp1 = $alumni_BSBA_emp1->fetch_assoc();

$sql_BSBA_Semp1 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Self-employed');";
$alumni_BSBA_Semp1 = $con->query($sql_BSBA_Semp1) or die ($con->error);
$row_BSBA_Semp1 = $alumni_BSBA_Semp1->fetch_assoc();

$sql_BSBA_Unemp1 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Unemployed');";
$alumni_BSBA_Unemp1 = $con->query($sql_BSBA_Unemp1) or die ($con->error);
$row_BSBA_Unemp1 = $alumni_BSBA_Unemp1->fetch_assoc();

$sql_BSBA_Local1 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Local' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local1 = $con->query($sql_BSBA_Local1) or die ($con->error);
$row_BSBA_Local1 = $alumni_BSBA_Local1->fetch_assoc();

$sql_BSBA_Abroad1 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Abroad' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad1 = $con->query($sql_BSBA_Abroad1) or die ($con->error);
$row_BSBA_Abroad1 = $alumni_BSBA_Abroad1->fetch_assoc();

// --------------- 2018 ---------------

$sql_BSBA2_2018 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2018';";
$alumni_BSBA2_2018 = $con->query($sql_BSBA2_2018) or die ($con->error);
$row_BSBA2_2018 = $alumni_BSBA2_2018->fetch_assoc();

$sql_BSBA_emp1_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Employed' && year_graduated = '2018');";
$alumni_BSBA_emp1_2018 = $con->query($sql_BSBA_emp1_2018) or die ($con->error);
$row_BSBA_emp1_2018 = $alumni_BSBA_emp1_2018->fetch_assoc();

$sql_BSBA_Semp1_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Self-employed' && year_graduated = '2018');";
$alumni_BSBA_Semp1_2018 = $con->query($sql_BSBA_Semp1_2018) or die ($con->error);
$row_BSBA_Semp1_2018 = $alumni_BSBA_Semp1_2018->fetch_assoc();

$sql_BSBA_Unemp1_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Unemployed' && year_graduated = '2018');";
$alumni_BSBA_Unemp1_2018 = $con->query($sql_BSBA_Unemp1_2018) or die ($con->error);
$row_BSBA_Unemp1_2018 = $alumni_BSBA_Unemp1_2018->fetch_assoc();

$sql_BSBA_Local1_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Local' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local1_2018 = $con->query($sql_BSBA_Local1_2018) or die ($con->error);
$row_BSBA_Local1_2018 = $alumni_BSBA_Local1_2018->fetch_assoc();

$sql_BSBA_Abroad1_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Abroad' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad1_2018 = $con->query($sql_BSBA_Abroad1_2018) or die ($con->error);
$row_BSBA_Abroad1_2018 = $alumni_BSBA_Abroad1_2018->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA2_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2019';";
$alumni_BSBA2_2019 = $con->query($sql_BSBA2_2019) or die ($con->error);
$row_BSBA2_2019 = $alumni_BSBA2_2019->fetch_assoc();

$sql_BSBA_emp1_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp1_2019 = $con->query($sql_BSBA_emp1_2019) or die ($con->error);
$row_BSBA_emp1_2019 = $alumni_BSBA_emp1_2019->fetch_assoc();

$sql_BSBA_Semp1_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp1_2019 = $con->query($sql_BSBA_Semp1_2019) or die ($con->error);
$row_BSBA_Semp1_2019 = $alumni_BSBA_Semp1_2019->fetch_assoc();

$sql_BSBA_Unemp1_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp1_2019 = $con->query($sql_BSBA_Unemp1_2019) or die ($con->error);
$row_BSBA_Unemp1_2019 = $alumni_BSBA_Unemp1_2019->fetch_assoc();

$sql_BSBA_Local1_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local1_2019 = $con->query($sql_BSBA_Local1_2019) or die ($con->error);
$row_BSBA_Local1_2019 = $alumni_BSBA_Local1_2019->fetch_assoc();

$sql_BSBA_Abroad1_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad1_2019 = $con->query($sql_BSBA_Abroad1_2019) or die ($con->error);
$row_BSBA_Abroad1_2019 = $alumni_BSBA_Abroad1_2019->fetch_assoc();

// --------------- 2020 ---------------

$sql_BSBA2_2020 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2020';";
$alumni_BSBA2_2020 = $con->query($sql_BSBA2_2020) or die ($con->error);
$row_BSBA2_2020 = $alumni_BSBA2_2020->fetch_assoc();

$sql_BSBA_emp1_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Employed' && year_graduated = '2020');";
$alumni_BSBA_emp1_2020 = $con->query($sql_BSBA_emp1_2020) or die ($con->error);
$row_BSBA_emp1_2020 = $alumni_BSBA_emp1_2020->fetch_assoc();

$sql_BSBA_Semp1_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Self-employed' && year_graduated = '2020');";
$alumni_BSBA_Semp1_2020 = $con->query($sql_BSBA_Semp1_2020) or die ($con->error);
$row_BSBA_Semp1_2020 = $alumni_BSBA_Semp1_2020->fetch_assoc();

$sql_BSBA_Unemp1_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Unemployed' && year_graduated = '2020');";
$alumni_BSBA_Unemp1_2020 = $con->query($sql_BSBA_Unemp1_2020) or die ($con->error);
$row_BSBA_Unemp1_2020 = $alumni_BSBA_Unemp1_2020->fetch_assoc();

$sql_BSBA_Local1_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Local' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local1_2020 = $con->query($sql_BSBA_Local1_2020) or die ($con->error);
$row_BSBA_Local1_2020 = $alumni_BSBA_Local1_2020->fetch_assoc();

$sql_BSBA_Abroad1_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Abroad' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad1_2020 = $con->query($sql_BSBA_Abroad1_2020) or die ($con->error);
$row_BSBA_Abroad1_2020 = $alumni_BSBA_Abroad1_2020->fetch_assoc();

// --------------- 2021 ---------------

$sql_BSBA2_2021 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2021';";
$alumni_BSBA2_2021 = $con->query($sql_BSBA2_2021) or die ($con->error);
$row_BSBA2_2021 = $alumni_BSBA2_2021->fetch_assoc();

$sql_BSBA_emp1_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Employed' && year_graduated = '2021');";
$alumni_BSBA_emp1_2021 = $con->query($sql_BSBA_emp1_2021) or die ($con->error);
$row_BSBA_emp1_2021 = $alumni_BSBA_emp1_2021->fetch_assoc();

$sql_BSBA_Semp1_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Self-employed' && year_graduated = '2021');";
$alumni_BSBA_Semp1_2021 = $con->query($sql_BSBA_Semp1_2021) or die ($con->error);
$row_BSBA_Semp1_2021 = $alumni_BSBA_Semp1_2021->fetch_assoc();

$sql_BSBA_Unemp1_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Unemployed' && year_graduated = '2021');";
$alumni_BSBA_Unemp1_2021 = $con->query($sql_BSBA_Unemp1_2021) or die ($con->error);
$row_BSBA_Unemp1_2021 = $alumni_BSBA_Unemp1_2021->fetch_assoc();

$sql_BSBA_Local1_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Local' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local1_2021 = $con->query($sql_BSBA_Local1_2021) or die ($con->error);
$row_BSBA_Local1_2021 = $alumni_BSBA_Local1_2021->fetch_assoc();

$sql_BSBA_Abroad1_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Abroad' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad1_2021 = $con->query($sql_BSBA_Abroad1_2021) or die ($con->error);
$row_BSBA_Abroad1_2021 = $alumni_BSBA_Abroad1_2021->fetch_assoc();

// --------------- 2022 ---------------

$sql_BSBA2_2022 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2022';";
$alumni_BSBA2_2022 = $con->query($sql_BSBA2_2022) or die ($con->error);
$row_BSBA2_2022 = $alumni_BSBA2_2022->fetch_assoc();

$sql_BSBA_emp1_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Employed' && year_graduated = '2022');";
$alumni_BSBA_emp1_2022 = $con->query($sql_BSBA_emp1_2022) or die ($con->error);
$row_BSBA_emp1_2022 = $alumni_BSBA_emp1_2022->fetch_assoc();

$sql_BSBA_Semp1_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Self-employed' && year_graduated = '2022');";
$alumni_BSBA_Semp1_2022 = $con->query($sql_BSBA_Semp1_2022) or die ($con->error);
$row_BSBA_Semp1_2022 = $alumni_BSBA_Semp1_2022->fetch_assoc();

$sql_BSBA_Unemp1_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && (current_work = 'Unemployed' && year_graduated = '2022');";
$alumni_BSBA_Unemp1_2022 = $con->query($sql_BSBA_Unemp1_2022) or die ($con->error);
$row_BSBA_Unemp1_2022 = $alumni_BSBA_Unemp1_2022->fetch_assoc();

$sql_BSBA_Local1_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Local' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local1_2022 = $con->query($sql_BSBA_Local1_2022) or die ($con->error);
$row_BSBA_Local1_2022 = $alumni_BSBA_Local1_2022->fetch_assoc();

$sql_BSBA_Abroad1_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management' && PlaceOfWork = 'Abroad' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad1_2022 = $con->query($sql_BSBA_Abroad1_2022) or die ($con->error);
$row_BSBA_Abroad1_2022 = $alumni_BSBA_Abroad1_2022->fetch_assoc();



// --------------------BSBA Major in Human Resources Management--------------------------

$sql_BSBA3 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management';";
$alumni_BSBA3 = $con->query($sql_BSBA3) or die ($con->error);
$row_BSBA3 = $alumni_BSBA3->fetch_assoc();

$sql_BSBA_emp2 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Employed');";
$alumni_BSBA_emp2 = $con->query($sql_BSBA_emp2) or die ($con->error);
$row_BSBA_emp2 = $alumni_BSBA_emp2->fetch_assoc();

$sql_BSBA_Semp2 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Self-employed');";
$alumni_BSBA_Semp2 = $con->query($sql_BSBA_Semp2) or die ($con->error);
$row_BSBA_Semp2 = $alumni_BSBA_Semp2->fetch_assoc();

$sql_BSBA_Unemp2 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Unemployed');";
$alumni_BSBA_Unemp2 = $con->query($sql_BSBA_Unemp2) or die ($con->error);
$row_BSBA_Unemp2 = $alumni_BSBA_Unemp2->fetch_assoc();

$sql_BSBA_Local2 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Local' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local2 = $con->query($sql_BSBA_Local2) or die ($con->error);
$row_BSBA_Local2 = $alumni_BSBA_Local2->fetch_assoc();

$sql_BSBA_Abroad2 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Abroad' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad2 = $con->query($sql_BSBA_Abroad2) or die ($con->error);
$row_BSBA_Abroad2 = $alumni_BSBA_Abroad2->fetch_assoc();

// --------------- 2018 ---------------

$sql_BSBA3_2018 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2018';";
$alumni_BSBA3_2018 = $con->query($sql_BSBA3_2018) or die ($con->error);
$row_BSBA3_2018 = $alumni_BSBA3_2018->fetch_assoc();

$sql_BSBA_emp2_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Employed' && year_graduated = '2018');";
$alumni_BSBA_emp2_2018 = $con->query($sql_BSBA_emp2_2018) or die ($con->error);
$row_BSBA_emp2_2018 = $alumni_BSBA_emp2_2018->fetch_assoc();

$sql_BSBA_Semp2_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Self-employed' && year_graduated = '2018');";
$alumni_BSBA_Semp2_2018 = $con->query($sql_BSBA_Semp2_2018) or die ($con->error);
$row_BSBA_Semp2_2018 = $alumni_BSBA_Semp2_2018->fetch_assoc();

$sql_BSBA_Unemp2_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Unemployed' && year_graduated = '2018');";
$alumni_BSBA_Unemp2_2018 = $con->query($sql_BSBA_Unemp2_2018) or die ($con->error);
$row_BSBA_Unemp2_2018 = $alumni_BSBA_Unemp2_2018->fetch_assoc();

$sql_BSBA_Local2_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Local' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local2_2018 = $con->query($sql_BSBA_Local2_2018) or die ($con->error);
$row_BSBA_Local2_2018 = $alumni_BSBA_Local2_2018->fetch_assoc();

$sql_BSBA_Abroad2_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Abroad' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad2_2018 = $con->query($sql_BSBA_Abroad2_2018) or die ($con->error);
$row_BSBA_Abroad2_2018 = $alumni_BSBA_Abroad2_2018->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA3_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2019';";
$alumni_BSBA3_2019 = $con->query($sql_BSBA3_2019) or die ($con->error);
$row_BSBA3_2019 = $alumni_BSBA3_2019->fetch_assoc();

$sql_BSBA_emp2_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp2_2019 = $con->query($sql_BSBA_emp2_2019) or die ($con->error);
$row_BSBA_emp2_2019 = $alumni_BSBA_emp2_2019->fetch_assoc();

$sql_BSBA_Semp2_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp2_2019 = $con->query($sql_BSBA_Semp2_2019) or die ($con->error);
$row_BSBA_Semp2_2019 = $alumni_BSBA_Semp2_2019->fetch_assoc();

$sql_BSBA_Unemp2_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp2_2019 = $con->query($sql_BSBA_Unemp2_2019) or die ($con->error);
$row_BSBA_Unemp2_2019 = $alumni_BSBA_Unemp2_2019->fetch_assoc();

$sql_BSBA_Local2_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local2_2019 = $con->query($sql_BSBA_Local2_2019) or die ($con->error);
$row_BSBA_Local2_2019 = $alumni_BSBA_Local2_2019->fetch_assoc();

$sql_BSBA_Abroad2_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad2_2019 = $con->query($sql_BSBA_Abroad2_2019) or die ($con->error);
$row_BSBA_Abroad2_2019 = $alumni_BSBA_Abroad2_2019->fetch_assoc();

// --------------- 2020 ---------------

$sql_BSBA3_2020 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2020';";
$alumni_BSBA3_2020 = $con->query($sql_BSBA3_2020) or die ($con->error);
$row_BSBA3_2020 = $alumni_BSBA3_2020->fetch_assoc();

$sql_BSBA_emp2_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Employed' && year_graduated = '2020');";
$alumni_BSBA_emp2_2020 = $con->query($sql_BSBA_emp2_2020) or die ($con->error);
$row_BSBA_emp2_2020 = $alumni_BSBA_emp2_2020->fetch_assoc();

$sql_BSBA_Semp2_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Self-employed' && year_graduated = '2020');";
$alumni_BSBA_Semp2_2020 = $con->query($sql_BSBA_Semp2_2020) or die ($con->error);
$row_BSBA_Semp2_2020 = $alumni_BSBA_Semp2_2020->fetch_assoc();

$sql_BSBA_Unemp2_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Unemployed' && year_graduated = '2020');";
$alumni_BSBA_Unemp2_2020 = $con->query($sql_BSBA_Unemp2_2020) or die ($con->error);
$row_BSBA_Unemp2_2020 = $alumni_BSBA_Unemp2_2020->fetch_assoc();

$sql_BSBA_Local2_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Local' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local2_2020 = $con->query($sql_BSBA_Local2_2020) or die ($con->error);
$row_BSBA_Local2_2020 = $alumni_BSBA_Local2_2020->fetch_assoc();

$sql_BSBA_Abroad2_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Abroad' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad2_2020 = $con->query($sql_BSBA_Abroad2_2020) or die ($con->error);
$row_BSBA_Abroad2_2020 = $alumni_BSBA_Abroad2_2020->fetch_assoc();

// --------------- 2021 ---------------

$sql_BSBA3_2021 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2021';";
$alumni_BSBA3_2021 = $con->query($sql_BSBA3_2021) or die ($con->error);
$row_BSBA3_2021 = $alumni_BSBA3_2021->fetch_assoc();

$sql_BSBA_emp2_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Employed' && year_graduated = '2021');";
$alumni_BSBA_emp2_2021 = $con->query($sql_BSBA_emp2_2021) or die ($con->error);
$row_BSBA_emp2_2021 = $alumni_BSBA_emp2_2021->fetch_assoc();

$sql_BSBA_Semp2_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Self-employed' && year_graduated = '2021');";
$alumni_BSBA_Semp2_2021 = $con->query($sql_BSBA_Semp2_2021) or die ($con->error);
$row_BSBA_Semp2_2021 = $alumni_BSBA_Semp2_2021->fetch_assoc();

$sql_BSBA_Unemp2_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Unemployed' && year_graduated = '2021');";
$alumni_BSBA_Unemp2_2021 = $con->query($sql_BSBA_Unemp2_2021) or die ($con->error);
$row_BSBA_Unemp2_2021 = $alumni_BSBA_Unemp2_2021->fetch_assoc();

$sql_BSBA_Local2_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Local' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local2_2021 = $con->query($sql_BSBA_Local2_2021) or die ($con->error);
$row_BSBA_Local2_2021 = $alumni_BSBA_Local2_2021->fetch_assoc();

$sql_BSBA_Abroad2_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Abroad' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad2_2021 = $con->query($sql_BSBA_Abroad2_2021) or die ($con->error);
$row_BSBA_Abroad2_2021 = $alumni_BSBA_Abroad2_2021->fetch_assoc();

// --------------- 2022 ---------------

$sql_BSBA3_2022 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2022';";
$alumni_BSBA3_2022 = $con->query($sql_BSBA3_2022) or die ($con->error);
$row_BSBA3_2022 = $alumni_BSBA3_2022->fetch_assoc();

$sql_BSBA_emp2_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Employed' && year_graduated = '2022');";
$alumni_BSBA_emp2_2022 = $con->query($sql_BSBA_emp2_2022) or die ($con->error);
$row_BSBA_emp2_2022 = $alumni_BSBA_emp2_2022->fetch_assoc();

$sql_BSBA_Semp2_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Self-employed' && year_graduated = '2022');";
$alumni_BSBA_Semp2_2022 = $con->query($sql_BSBA_Semp2_2022) or die ($con->error);
$row_BSBA_Semp2_2022 = $alumni_BSBA_Semp2_2022->fetch_assoc();

$sql_BSBA_Unemp2_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && (current_work = 'Unemployed' && year_graduated = '2022');";
$alumni_BSBA_Unemp2_2022 = $con->query($sql_BSBA_Unemp2_2022) or die ($con->error);
$row_BSBA_Unemp2_2022 = $alumni_BSBA_Unemp2_2022->fetch_assoc();

$sql_BSBA_Local2_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Local' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local2_2022 = $con->query($sql_BSBA_Local2_2022) or die ($con->error);
$row_BSBA_Local2_2022 = $alumni_BSBA_Local2_2022->fetch_assoc();

$sql_BSBA_Abroad2_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management' && PlaceOfWork = 'Abroad' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad2_2022 = $con->query($sql_BSBA_Abroad2_2022) or die ($con->error);
$row_BSBA_Abroad2_2022 = $alumni_BSBA_Abroad2_2022->fetch_assoc();

// --------------------BSBA Major in Human Resources Development Management--------------------------

$sql_BSBA4 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management';";
$alumni_BSBA4 = $con->query($sql_BSBA4) or die ($con->error);
$row_BSBA4 = $alumni_BSBA4->fetch_assoc();

$sql_BSBA_emp3 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Employed');";
$alumni_BSBA_emp3 = $con->query($sql_BSBA_emp3) or die ($con->error);
$row_BSBA_emp3 = $alumni_BSBA_emp3->fetch_assoc();

$sql_BSBA_Semp3 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Self-employed');";
$alumni_BSBA_Semp3 = $con->query($sql_BSBA_Semp3) or die ($con->error);
$row_BSBA_Semp3 = $alumni_BSBA_Semp3->fetch_assoc();

$sql_BSBA_Unemp3 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Unemployed');";
$alumni_BSBA_Unemp3 = $con->query($sql_BSBA_Unemp3) or die ($con->error);
$row_BSBA_Unemp3 = $alumni_BSBA_Unemp3->fetch_assoc();

$sql_BSBA_Local3 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Local' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local3 = $con->query($sql_BSBA_Local3) or die ($con->error);
$row_BSBA_Local3 = $alumni_BSBA_Local3->fetch_assoc();

$sql_BSBA_Abroad3 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Abroad' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad3 = $con->query($sql_BSBA_Abroad3) or die ($con->error);
$row_BSBA_Abroad3 = $alumni_BSBA_Abroad3->fetch_assoc();

// --------------- 2018 ---------------

$sql_BSBA4_2018 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2018';";
$alumni_BSBA4_2018 = $con->query($sql_BSBA4_2018) or die ($con->error);
$row_BSBA4_2018 = $alumni_BSBA4_2018->fetch_assoc();

$sql_BSBA_emp3_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Employed' && year_graduated = '2018');";
$alumni_BSBA_emp3_2018 = $con->query($sql_BSBA_emp3_2018) or die ($con->error);
$row_BSBA_emp3_2018 = $alumni_BSBA_emp3_2018->fetch_assoc();

$sql_BSBA_Semp3_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Self-employed' && year_graduated = '2018');";
$alumni_BSBA_Semp3_2018 = $con->query($sql_BSBA_Semp3_2018) or die ($con->error);
$row_BSBA_Semp3_2018 = $alumni_BSBA_Semp3_2018->fetch_assoc();

$sql_BSBA_Unemp3_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Unemployed' && year_graduated = '2018');";
$alumni_BSBA_Unemp3_2018 = $con->query($sql_BSBA_Unemp3_2018) or die ($con->error);
$row_BSBA_Unemp3_2018 = $alumni_BSBA_Unemp3_2018->fetch_assoc();

$sql_BSBA_Local3_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Local' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local3_2018 = $con->query($sql_BSBA_Local3_2018) or die ($con->error);
$row_BSBA_Local3_2018 = $alumni_BSBA_Local3_2018->fetch_assoc();

$sql_BSBA_Abroad3_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Abroad' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad3_2018 = $con->query($sql_BSBA_Abroad3_2018) or die ($con->error);
$row_BSBA_Abroad3_2018 = $alumni_BSBA_Abroad3_2018->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA4_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2019';";
$alumni_BSBA4_2019 = $con->query($sql_BSBA4_2019) or die ($con->error);
$row_BSBA4_2019 = $alumni_BSBA4_2019->fetch_assoc();

$sql_BSBA_emp3_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp3_2019 = $con->query($sql_BSBA_emp3_2019) or die ($con->error);
$row_BSBA_emp3_2019 = $alumni_BSBA_emp3_2019->fetch_assoc();

$sql_BSBA_Semp3_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp3_2019 = $con->query($sql_BSBA_Semp3_2019) or die ($con->error);
$row_BSBA_Semp3_2019 = $alumni_BSBA_Semp3_2019->fetch_assoc();

$sql_BSBA_Unemp3_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp3_2019 = $con->query($sql_BSBA_Unemp3_2019) or die ($con->error);
$row_BSBA_Unemp3_2019 = $alumni_BSBA_Unemp3_2019->fetch_assoc();

$sql_BSBA_Local3_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local3_2019 = $con->query($sql_BSBA_Local3_2019) or die ($con->error);
$row_BSBA_Local3_2019 = $alumni_BSBA_Local3_2019->fetch_assoc();

$sql_BSBA_Abroad3_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad3_2019 = $con->query($sql_BSBA_Abroad3_2019) or die ($con->error);
$row_BSBA_Abroad3_2019 = $alumni_BSBA_Abroad3_2019->fetch_assoc();

// --------------- 2020 ---------------

$sql_BSBA4_2020 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2020';";
$alumni_BSBA4_2020 = $con->query($sql_BSBA4_2020) or die ($con->error);
$row_BSBA4_2020 = $alumni_BSBA4_2020->fetch_assoc();

$sql_BSBA_emp3_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Employed' && year_graduated = '2020');";
$alumni_BSBA_emp3_2020 = $con->query($sql_BSBA_emp3_2020) or die ($con->error);
$row_BSBA_emp3_2020 = $alumni_BSBA_emp3_2020->fetch_assoc();

$sql_BSBA_Semp3_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Self-employed' && year_graduated = '2020');";
$alumni_BSBA_Semp3_2020 = $con->query($sql_BSBA_Semp3_2020) or die ($con->error);
$row_BSBA_Semp3_2020 = $alumni_BSBA_Semp3_2020->fetch_assoc();

$sql_BSBA_Unemp3_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Unemployed' && year_graduated = '2020');";
$alumni_BSBA_Unemp3_2020 = $con->query($sql_BSBA_Unemp3_2020) or die ($con->error);
$row_BSBA_Unemp3_2020 = $alumni_BSBA_Unemp3_2020->fetch_assoc();

$sql_BSBA_Local3_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Local' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local3_2020 = $con->query($sql_BSBA_Local3_2020) or die ($con->error);
$row_BSBA_Local3_2020 = $alumni_BSBA_Local3_2020->fetch_assoc();

$sql_BSBA_Abroad3_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Abroad' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad3_2020 = $con->query($sql_BSBA_Abroad3_2020) or die ($con->error);
$row_BSBA_Abroad3_2020 = $alumni_BSBA_Abroad3_2020->fetch_assoc();

// --------------- 2021 ---------------

$sql_BSBA4_2021 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2021';";
$alumni_BSBA4_2021 = $con->query($sql_BSBA4_2021) or die ($con->error);
$row_BSBA4_2021 = $alumni_BSBA4_2021->fetch_assoc();

$sql_BSBA_emp3_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Employed' && year_graduated = '2021');";
$alumni_BSBA_emp3_2021 = $con->query($sql_BSBA_emp3_2021) or die ($con->error);
$row_BSBA_emp3_2021 = $alumni_BSBA_emp3_2021->fetch_assoc();

$sql_BSBA_Semp3_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Self-employed' && year_graduated = '2021');";
$alumni_BSBA_Semp3_2021 = $con->query($sql_BSBA_Semp3_2021) or die ($con->error);
$row_BSBA_Semp3_2021 = $alumni_BSBA_Semp3_2021->fetch_assoc();

$sql_BSBA_Unemp3_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Unemployed' && year_graduated = '2021');";
$alumni_BSBA_Unemp3_2021 = $con->query($sql_BSBA_Unemp3_2021) or die ($con->error);
$row_BSBA_Unemp3_2021 = $alumni_BSBA_Unemp3_2021->fetch_assoc();

$sql_BSBA_Local3_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Local' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local3_2021 = $con->query($sql_BSBA_Local3_2021) or die ($con->error);
$row_BSBA_Local3_2021 = $alumni_BSBA_Local3_2021->fetch_assoc();

$sql_BSBA_Abroad3_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Abroad' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad3_2021 = $con->query($sql_BSBA_Abroad3_2021) or die ($con->error);
$row_BSBA_Abroad3_2021 = $alumni_BSBA_Abroad3_2021->fetch_assoc();

// --------------- 2022 ---------------

$sql_BSBA4_2022 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2022';";
$alumni_BSBA4_2022 = $con->query($sql_BSBA4_2022) or die ($con->error);
$row_BSBA4_2022 = $alumni_BSBA4_2022->fetch_assoc();

$sql_BSBA_emp3_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Employed' && year_graduated = '2022');";
$alumni_BSBA_emp3_2022 = $con->query($sql_BSBA_emp3_2022) or die ($con->error);
$row_BSBA_emp3_2022 = $alumni_BSBA_emp3_2022->fetch_assoc();

$sql_BSBA_Semp3_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Self-employed' && year_graduated = '2022');";
$alumni_BSBA_Semp3_2022 = $con->query($sql_BSBA_Semp3_2022) or die ($con->error);
$row_BSBA_Semp3_2022 = $alumni_BSBA_Semp3_2022->fetch_assoc();

$sql_BSBA_Unemp3_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && (current_work = 'Unemployed' && year_graduated = '2022');";
$alumni_BSBA_Unemp3_2022 = $con->query($sql_BSBA_Unemp3_2022) or die ($con->error);
$row_BSBA_Unemp3_2022 = $alumni_BSBA_Unemp3_2022->fetch_assoc();

$sql_BSBA_Local3_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Local' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local3_2022 = $con->query($sql_BSBA_Local3_2022) or die ($con->error);
$row_BSBA_Local3_2022 = $alumni_BSBA_Local3_2022->fetch_assoc();

$sql_BSBA_Abroad3_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management' && PlaceOfWork = 'Abroad' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad3_2022 = $con->query($sql_BSBA_Abroad3_2022) or die ($con->error);
$row_BSBA_Abroad3_2022 = $alumni_BSBA_Abroad3_2022->fetch_assoc();

// --------------------Bachelor of Science in Information Technology--------------------------

$sql_BSBA5 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology';";
$alumni_BSBA5 = $con->query($sql_BSBA5) or die ($con->error);
$row_BSBA5 = $alumni_BSBA5->fetch_assoc();

$sql_BSBA_emp4 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Employed');";
$alumni_BSBA_emp4 = $con->query($sql_BSBA_emp4) or die ($con->error);
$row_BSBA_emp4 = $alumni_BSBA_emp4->fetch_assoc();

$sql_BSBA_Semp4 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Self-employed');";
$alumni_BSBA_Semp4 = $con->query($sql_BSBA_Semp4) or die ($con->error);
$row_BSBA_Semp4 = $alumni_BSBA_Semp4->fetch_assoc();

$sql_BSBA_Unemp4 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Unemployed');";
$alumni_BSBA_Unemp4 = $con->query($sql_BSBA_Unemp4) or die ($con->error);
$row_BSBA_Unemp4 = $alumni_BSBA_Unemp4->fetch_assoc();

$sql_BSBA_Local4 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Local' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local4 = $con->query($sql_BSBA_Local4) or die ($con->error);
$row_BSBA_Local4 = $alumni_BSBA_Local4->fetch_assoc();

$sql_BSBA_Abroad4 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Abroad' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad4 = $con->query($sql_BSBA_Abroad4) or die ($con->error);
$row_BSBA_Abroad4 = $alumni_BSBA_Abroad4->fetch_assoc();

// --------------- 2018 ---------------

$sql_BSBA5_2018 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2018';";
$alumni_BSBA5_2018 = $con->query($sql_BSBA5_2018) or die ($con->error);
$row_BSBA5_2018 = $alumni_BSBA5_2018->fetch_assoc();

$sql_BSBA_emp4_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Employed' && year_graduated = '2018');";
$alumni_BSBA_emp4_2018 = $con->query($sql_BSBA_emp4_2018) or die ($con->error);
$row_BSBA_emp4_2018 = $alumni_BSBA_emp4_2018->fetch_assoc();

$sql_BSBA_Semp4_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Self-employed' && year_graduated = '2018');";
$alumni_BSBA_Semp4_2018 = $con->query($sql_BSBA_Semp4_2018) or die ($con->error);
$row_BSBA_Semp4_2018 = $alumni_BSBA_Semp4_2018->fetch_assoc();

$sql_BSBA_Unemp4_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Unemployed' && year_graduated = '2018');";
$alumni_BSBA_Unemp4_2018 = $con->query($sql_BSBA_Unemp4_2018) or die ($con->error);
$row_BSBA_Unemp4_2018 = $alumni_BSBA_Unemp4_2018->fetch_assoc();

$sql_BSBA_Local4_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Local' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local4_2018 = $con->query($sql_BSBA_Local4_2018) or die ($con->error);
$row_BSBA_Local4_2018 = $alumni_BSBA_Local4_2018->fetch_assoc();

$sql_BSBA_Abroad4_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Abroad' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad4_2018 = $con->query($sql_BSBA_Abroad4_2018) or die ($con->error);
$row_BSBA_Abroad4_2018 = $alumni_BSBA_Abroad4_2018->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA5_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2019';";
$alumni_BSBA5_2019 = $con->query($sql_BSBA5_2019) or die ($con->error);
$row_BSBA5_2019 = $alumni_BSBA5_2019->fetch_assoc();

$sql_BSBA_emp4_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp4_2019 = $con->query($sql_BSBA_emp4_2019) or die ($con->error);
$row_BSBA_emp4_2019 = $alumni_BSBA_emp4_2019->fetch_assoc();

$sql_BSBA_Semp4_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp4_2019 = $con->query($sql_BSBA_Semp4_2019) or die ($con->error);
$row_BSBA_Semp4_2019 = $alumni_BSBA_Semp4_2019->fetch_assoc();

$sql_BSBA_Unemp4_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp4_2019 = $con->query($sql_BSBA_Unemp4_2019) or die ($con->error);
$row_BSBA_Unemp4_2019 = $alumni_BSBA_Unemp4_2019->fetch_assoc();

$sql_BSBA_Local4_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local4_2019 = $con->query($sql_BSBA_Local4_2019) or die ($con->error);
$row_BSBA_Local4_2019 = $alumni_BSBA_Local4_2019->fetch_assoc();

$sql_BSBA_Abroad4_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad4_2019 = $con->query($sql_BSBA_Abroad4_2019) or die ($con->error);
$row_BSBA_Abroad4_2019 = $alumni_BSBA_Abroad4_2019->fetch_assoc();

// --------------- 2020 ---------------

$sql_BSBA5_2020 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2020';";
$alumni_BSBA5_2020 = $con->query($sql_BSBA5_2020) or die ($con->error);
$row_BSBA5_2020 = $alumni_BSBA5_2020->fetch_assoc();

$sql_BSBA_emp4_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Employed' && year_graduated = '2020');";
$alumni_BSBA_emp4_2020 = $con->query($sql_BSBA_emp4_2020) or die ($con->error);
$row_BSBA_emp4_2020 = $alumni_BSBA_emp4_2020->fetch_assoc();

$sql_BSBA_Semp4_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Self-employed' && year_graduated = '2020');";
$alumni_BSBA_Semp4_2020 = $con->query($sql_BSBA_Semp4_2020) or die ($con->error);
$row_BSBA_Semp4_2020 = $alumni_BSBA_Semp4_2020->fetch_assoc();

$sql_BSBA_Unemp4_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Unemployed' && year_graduated = '2020');";
$alumni_BSBA_Unemp4_2020 = $con->query($sql_BSBA_Unemp4_2020) or die ($con->error);
$row_BSBA_Unemp4_2020 = $alumni_BSBA_Unemp4_2020->fetch_assoc();

$sql_BSBA_Local4_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Local' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local4_2020 = $con->query($sql_BSBA_Local4_2020) or die ($con->error);
$row_BSBA_Local4_2020 = $alumni_BSBA_Local4_2020->fetch_assoc();

$sql_BSBA_Abroad4_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Abroad' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad4_2020 = $con->query($sql_BSBA_Abroad4_2020) or die ($con->error);
$row_BSBA_Abroad4_2020 = $alumni_BSBA_Abroad4_2020->fetch_assoc();

// --------------- 2021 ---------------

$sql_BSBA5_2021 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2021';";
$alumni_BSBA5_2021 = $con->query($sql_BSBA5_2021) or die ($con->error);
$row_BSBA5_2021 = $alumni_BSBA5_2021->fetch_assoc();

$sql_BSBA_emp4_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Employed' && year_graduated = '2021');";
$alumni_BSBA_emp4_2021 = $con->query($sql_BSBA_emp4_2021) or die ($con->error);
$row_BSBA_emp4_2021 = $alumni_BSBA_emp4_2021->fetch_assoc();

$sql_BSBA_Semp4_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Self-employed' && year_graduated = '2021');";
$alumni_BSBA_Semp4_2021 = $con->query($sql_BSBA_Semp4_2021) or die ($con->error);
$row_BSBA_Semp4_2021 = $alumni_BSBA_Semp4_2021->fetch_assoc();

$sql_BSBA_Unemp4_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Unemployed' && year_graduated = '2021');";
$alumni_BSBA_Unemp4_2021 = $con->query($sql_BSBA_Unemp4_2021) or die ($con->error);
$row_BSBA_Unemp4_2021 = $alumni_BSBA_Unemp4_2021->fetch_assoc();

$sql_BSBA_Local4_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Local' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local4_2021 = $con->query($sql_BSBA_Local4_2021) or die ($con->error);
$row_BSBA_Local4_2021 = $alumni_BSBA_Local4_2021->fetch_assoc();

$sql_BSBA_Abroad4_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Abroad' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad4_2021 = $con->query($sql_BSBA_Abroad4_2021) or die ($con->error);
$row_BSBA_Abroad4_2021 = $alumni_BSBA_Abroad4_2021->fetch_assoc();

// --------------- 2022 ---------------

$sql_BSBA5_2022 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2022';";
$alumni_BSBA5_2022 = $con->query($sql_BSBA5_2022) or die ($con->error);
$row_BSBA5_2022 = $alumni_BSBA5_2022->fetch_assoc();

$sql_BSBA_emp4_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Employed' && year_graduated = '2022');";
$alumni_BSBA_emp4_2022 = $con->query($sql_BSBA_emp4_2022) or die ($con->error);
$row_BSBA_emp4_2022 = $alumni_BSBA_emp4_2022->fetch_assoc();

$sql_BSBA_Semp4_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Self-employed' && year_graduated = '2022');";
$alumni_BSBA_Semp4_2022 = $con->query($sql_BSBA_Semp4_2022) or die ($con->error);
$row_BSBA_Semp4_2022 = $alumni_BSBA_Semp4_2022->fetch_assoc();

$sql_BSBA_Unemp4_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && (current_work = 'Unemployed' && year_graduated = '2022');";
$alumni_BSBA_Unemp4_2022 = $con->query($sql_BSBA_Unemp4_2022) or die ($con->error);
$row_BSBA_Unemp4_2022 = $alumni_BSBA_Unemp4_2022->fetch_assoc();

$sql_BSBA_Local4_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Local' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local4_2022 = $con->query($sql_BSBA_Local4_2022) or die ($con->error);
$row_BSBA_Local4_2022 = $alumni_BSBA_Local4_2022->fetch_assoc();

$sql_BSBA_Abroad4_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Information Technology' && PlaceOfWork = 'Abroad' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad4_2022 = $con->query($sql_BSBA_Abroad4_2022) or die ($con->error);
$row_BSBA_Abroad4_2022 = $alumni_BSBA_Abroad4_2022->fetch_assoc();

// --------------------Bachelor of Science in Hotel Restaurant Management--------------------------

$sql_BSBA6 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management';";
$alumni_BSBA6 = $con->query($sql_BSBA6) or die ($con->error);
$row_BSBA6 = $alumni_BSBA6->fetch_assoc();

$sql_BSBA_emp5 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Employed');";
$alumni_BSBA_emp5 = $con->query($sql_BSBA_emp5) or die ($con->error);
$row_BSBA_emp5 = $alumni_BSBA_emp5->fetch_assoc();

$sql_BSBA_Semp5 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Self-employed');";
$alumni_BSBA_Semp5 = $con->query($sql_BSBA_Semp5) or die ($con->error);
$row_BSBA_Semp5 = $alumni_BSBA_Semp5->fetch_assoc();

$sql_BSBA_Unemp5 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Unemployed');";
$alumni_BSBA_Unemp5 = $con->query($sql_BSBA_Unemp5) or die ($con->error);
$row_BSBA_Unemp5 = $alumni_BSBA_Unemp5->fetch_assoc();

$sql_BSBA_Local5 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Local' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local5 = $con->query($sql_BSBA_Local5) or die ($con->error);
$row_BSBA_Local5 = $alumni_BSBA_Local5->fetch_assoc();

$sql_BSBA_Abroad5 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Abroad' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad5 = $con->query($sql_BSBA_Abroad5) or die ($con->error);
$row_BSBA_Abroad5 = $alumni_BSBA_Abroad5->fetch_assoc();

// --------------- 2018 ---------------

$sql_BSBA6_2018 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2018';";
$alumni_BSBA6_2018 = $con->query($sql_BSBA6_2018) or die ($con->error);
$row_BSBA6_2018 = $alumni_BSBA6_2018->fetch_assoc();

$sql_BSBA_emp5_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Employed' && year_graduated = '2018');";
$alumni_BSBA_emp5_2018 = $con->query($sql_BSBA_emp5_2018) or die ($con->error);
$row_BSBA_emp5_2018 = $alumni_BSBA_emp5_2018->fetch_assoc();

$sql_BSBA_Semp5_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Self-employed' && year_graduated = '2018');";
$alumni_BSBA_Semp5_2018 = $con->query($sql_BSBA_Semp5_2018) or die ($con->error);
$row_BSBA_Semp5_2018 = $alumni_BSBA_Semp5_2018->fetch_assoc();

$sql_BSBA_Unemp5_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Unemployed' && year_graduated = '2018');";
$alumni_BSBA_Unemp5_2018 = $con->query($sql_BSBA_Unemp5_2018) or die ($con->error);
$row_BSBA_Unemp5_2018 = $alumni_BSBA_Unemp5_2018->fetch_assoc();

$sql_BSBA_Local5_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Local' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local5_2018 = $con->query($sql_BSBA_Local5_2018) or die ($con->error);
$row_BSBA_Local5_2018 = $alumni_BSBA_Local5_2018->fetch_assoc();

$sql_BSBA_Abroad5_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Abroad' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad5_2018 = $con->query($sql_BSBA_Abroad5_2018) or die ($con->error);
$row_BSBA_Abroad5_2018 = $alumni_BSBA_Abroad5_2018->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA6_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2019';";
$alumni_BSBA6_2019 = $con->query($sql_BSBA6_2019) or die ($con->error);
$row_BSBA6_2019 = $alumni_BSBA6_2019->fetch_assoc();

$sql_BSBA_emp5_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp5_2019 = $con->query($sql_BSBA_emp5_2019) or die ($con->error);
$row_BSBA_emp5_2019 = $alumni_BSBA_emp5_2019->fetch_assoc();

$sql_BSBA_Semp5_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp5_2019 = $con->query($sql_BSBA_Semp5_2019) or die ($con->error);
$row_BSBA_Semp5_2019 = $alumni_BSBA_Semp5_2019->fetch_assoc();

$sql_BSBA_Unemp5_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp5_2019 = $con->query($sql_BSBA_Unemp5_2019) or die ($con->error);
$row_BSBA_Unemp5_2019 = $alumni_BSBA_Unemp5_2019->fetch_assoc();

$sql_BSBA_Local5_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local5_2019 = $con->query($sql_BSBA_Local5_2019) or die ($con->error);
$row_BSBA_Local5_2019 = $alumni_BSBA_Local5_2019->fetch_assoc();

$sql_BSBA_Abroad5_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad5_2019 = $con->query($sql_BSBA_Abroad5_2019) or die ($con->error);
$row_BSBA_Abroad5_2019 = $alumni_BSBA_Abroad5_2019->fetch_assoc();

// --------------- 2020 ---------------

$sql_BSBA6_2020 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2020';";
$alumni_BSBA6_2020 = $con->query($sql_BSBA6_2020) or die ($con->error);
$row_BSBA6_2020 = $alumni_BSBA6_2020->fetch_assoc();

$sql_BSBA_emp5_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Employed' && year_graduated = '2020');";
$alumni_BSBA_emp5_2020 = $con->query($sql_BSBA_emp5_2020) or die ($con->error);
$row_BSBA_emp5_2020 = $alumni_BSBA_emp5_2020->fetch_assoc();

$sql_BSBA_Semp5_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Self-employed' && year_graduated = '2020');";
$alumni_BSBA_Semp5_2020 = $con->query($sql_BSBA_Semp5_2020) or die ($con->error);
$row_BSBA_Semp5_2020 = $alumni_BSBA_Semp5_2020->fetch_assoc();

$sql_BSBA_Unemp5_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Unemployed' && year_graduated = '2020');";
$alumni_BSBA_Unemp5_2020 = $con->query($sql_BSBA_Unemp5_2020) or die ($con->error);
$row_BSBA_Unemp5_2020 = $alumni_BSBA_Unemp5_2020->fetch_assoc();

$sql_BSBA_Local5_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Local' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local5_2020 = $con->query($sql_BSBA_Local5_2020) or die ($con->error);
$row_BSBA_Local5_2020 = $alumni_BSBA_Local5_2020->fetch_assoc();

$sql_BSBA_Abroad5_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Abroad' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad5_2020 = $con->query($sql_BSBA_Abroad5_2020) or die ($con->error);
$row_BSBA_Abroad5_2020 = $alumni_BSBA_Abroad5_2020->fetch_assoc();

// --------------- 2021 ---------------

$sql_BSBA6_2021 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2021';";
$alumni_BSBA6_2021 = $con->query($sql_BSBA6_2021) or die ($con->error);
$row_BSBA6_2021 = $alumni_BSBA6_2021->fetch_assoc();

$sql_BSBA_emp5_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Employed' && year_graduated = '2021');";
$alumni_BSBA_emp5_2021 = $con->query($sql_BSBA_emp5_2021) or die ($con->error);
$row_BSBA_emp5_2021 = $alumni_BSBA_emp5_2021->fetch_assoc();

$sql_BSBA_Semp5_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Self-employed' && year_graduated = '2021');";
$alumni_BSBA_Semp5_2021 = $con->query($sql_BSBA_Semp5_2021) or die ($con->error);
$row_BSBA_Semp5_2021 = $alumni_BSBA_Semp5_2021->fetch_assoc();

$sql_BSBA_Unemp5_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Unemployed' && year_graduated = '2021');";
$alumni_BSBA_Unemp5_2021 = $con->query($sql_BSBA_Unemp5_2021) or die ($con->error);
$row_BSBA_Unemp5_2021 = $alumni_BSBA_Unemp5_2021->fetch_assoc();

$sql_BSBA_Local5_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Local' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local5_2021 = $con->query($sql_BSBA_Local5_2021) or die ($con->error);
$row_BSBA_Local5_2021 = $alumni_BSBA_Local5_2021->fetch_assoc();

$sql_BSBA_Abroad5_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Abroad' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad5_2021 = $con->query($sql_BSBA_Abroad5_2021) or die ($con->error);
$row_BSBA_Abroad5_2021 = $alumni_BSBA_Abroad5_2021->fetch_assoc();

// --------------- 2022 ---------------

$sql_BSBA6_2022 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2022';";
$alumni_BSBA6_2022 = $con->query($sql_BSBA6_2022) or die ($con->error);
$row_BSBA6_2022 = $alumni_BSBA6_2022->fetch_assoc();

$sql_BSBA_emp5_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Employed' && year_graduated = '2022');";
$alumni_BSBA_emp5_2022 = $con->query($sql_BSBA_emp5_2022) or die ($con->error);
$row_BSBA_emp5_2022 = $alumni_BSBA_emp5_2022->fetch_assoc();

$sql_BSBA_Semp5_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Self-employed' && year_graduated = '2022');";
$alumni_BSBA_Semp5_2022 = $con->query($sql_BSBA_Semp5_2022) or die ($con->error);
$row_BSBA_Semp5_2022 = $alumni_BSBA_Semp5_2022->fetch_assoc();

$sql_BSBA_Unemp5_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && (current_work = 'Unemployed' && year_graduated = '2022');";
$alumni_BSBA_Unemp5_2022 = $con->query($sql_BSBA_Unemp5_2022) or die ($con->error);
$row_BSBA_Unemp5_2022 = $alumni_BSBA_Unemp5_2022->fetch_assoc();

$sql_BSBA_Local5_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Local' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local5_2022 = $con->query($sql_BSBA_Local5_2022) or die ($con->error);
$row_BSBA_Local5_2022 = $alumni_BSBA_Local5_2022->fetch_assoc();

$sql_BSBA_Abroad5_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hotel Restaurant Management' && PlaceOfWork = 'Abroad' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad5_2022 = $con->query($sql_BSBA_Abroad5_2022) or die ($con->error);
$row_BSBA_Abroad5_2022 = $alumni_BSBA_Abroad5_2022->fetch_assoc();

// --------------------Bachelor of Science in Tourism Management--------------------------

$sql_BSBA7 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management';";
$alumni_BSBA7 = $con->query($sql_BSBA7) or die ($con->error);
$row_BSBA7 = $alumni_BSBA7->fetch_assoc();

$sql_BSBA_emp6 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Employed');";
$alumni_BSBA_emp6 = $con->query($sql_BSBA_emp6) or die ($con->error);
$row_BSBA_emp6 = $alumni_BSBA_emp6->fetch_assoc();

$sql_BSBA_Semp6 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Self-employed');";
$alumni_BSBA_Semp6 = $con->query($sql_BSBA_Semp6) or die ($con->error);
$row_BSBA_Semp6 = $alumni_BSBA_Semp6->fetch_assoc();

$sql_BSBA_Unemp6 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Unemployed');";
$alumni_BSBA_Unemp6 = $con->query($sql_BSBA_Unemp6) or die ($con->error);
$row_BSBA_Unemp6 = $alumni_BSBA_Unemp6->fetch_assoc();

$sql_BSBA_Local6 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Local' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local6 = $con->query($sql_BSBA_Local6) or die ($con->error);
$row_BSBA_Local6 = $alumni_BSBA_Local6->fetch_assoc();

$sql_BSBA_Abroad6 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Abroad' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad6 = $con->query($sql_BSBA_Abroad6) or die ($con->error);
$row_BSBA_Abroad6 = $alumni_BSBA_Abroad6->fetch_assoc();

// --------------- 2018 ---------------

$sql_BSBA7_2018 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2018';";
$alumni_BSBA7_2018 = $con->query($sql_BSBA7_2018) or die ($con->error);
$row_BSBA7_2018 = $alumni_BSBA7_2018->fetch_assoc();

$sql_BSBA_emp6_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Employed' && year_graduated = '2018');";
$alumni_BSBA_emp6_2018 = $con->query($sql_BSBA_emp6_2018) or die ($con->error);
$row_BSBA_emp6_2018 = $alumni_BSBA_emp6_2018->fetch_assoc();

$sql_BSBA_Semp6_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Self-employed' && year_graduated = '2018');";
$alumni_BSBA_Semp6_2018 = $con->query($sql_BSBA_Semp6_2018) or die ($con->error);
$row_BSBA_Semp6_2018 = $alumni_BSBA_Semp6_2018->fetch_assoc();

$sql_BSBA_Unemp6_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Unemployed' && year_graduated = '2018');";
$alumni_BSBA_Unemp6_2018 = $con->query($sql_BSBA_Unemp6_2018) or die ($con->error);
$row_BSBA_Unemp6_2018 = $alumni_BSBA_Unemp6_2018->fetch_assoc();

$sql_BSBA_Local6_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Local' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local6_2018 = $con->query($sql_BSBA_Local6_2018) or die ($con->error);
$row_BSBA_Local6_2018 = $alumni_BSBA_Local6_2018->fetch_assoc();

$sql_BSBA_Abroad6_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Abroad' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad6_2018 = $con->query($sql_BSBA_Abroad6_2018) or die ($con->error);
$row_BSBA_Abroad6_2018 = $alumni_BSBA_Abroad6_2018->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA7_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2019';";
$alumni_BSBA7_2019 = $con->query($sql_BSBA7_2019) or die ($con->error);
$row_BSBA7_2019 = $alumni_BSBA7_2019->fetch_assoc();

$sql_BSBA_emp6_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp6_2019 = $con->query($sql_BSBA_emp6_2019) or die ($con->error);
$row_BSBA_emp6_2019 = $alumni_BSBA_emp6_2019->fetch_assoc();

$sql_BSBA_Semp6_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp6_2019 = $con->query($sql_BSBA_Semp6_2019) or die ($con->error);
$row_BSBA_Semp6_2019 = $alumni_BSBA_Semp6_2019->fetch_assoc();

$sql_BSBA_Unemp6_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp6_2019 = $con->query($sql_BSBA_Unemp6_2019) or die ($con->error);
$row_BSBA_Unemp6_2019 = $alumni_BSBA_Unemp6_2019->fetch_assoc();

$sql_BSBA_Local6_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local6_2019 = $con->query($sql_BSBA_Local6_2019) or die ($con->error);
$row_BSBA_Local6_2019 = $alumni_BSBA_Local6_2019->fetch_assoc();

$sql_BSBA_Abroad6_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad6_2019 = $con->query($sql_BSBA_Abroad6_2019) or die ($con->error);
$row_BSBA_Abroad6_2019 = $alumni_BSBA_Abroad6_2019->fetch_assoc();

// --------------- 2020 ---------------

$sql_BSBA7_2020 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2020';";
$alumni_BSBA7_2020 = $con->query($sql_BSBA7_2020) or die ($con->error);
$row_BSBA7_2020 = $alumni_BSBA7_2020->fetch_assoc();

$sql_BSBA_emp6_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Employed' && year_graduated = '2020');";
$alumni_BSBA_emp6_2020 = $con->query($sql_BSBA_emp6_2020) or die ($con->error);
$row_BSBA_emp6_2020 = $alumni_BSBA_emp6_2020->fetch_assoc();

$sql_BSBA_Semp6_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Self-employed' && year_graduated = '2020');";
$alumni_BSBA_Semp6_2020 = $con->query($sql_BSBA_Semp6_2020) or die ($con->error);
$row_BSBA_Semp6_2020 = $alumni_BSBA_Semp6_2020->fetch_assoc();

$sql_BSBA_Unemp6_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Unemployed' && year_graduated = '2020');";
$alumni_BSBA_Unemp6_2020 = $con->query($sql_BSBA_Unemp6_2020) or die ($con->error);
$row_BSBA_Unemp6_2020 = $alumni_BSBA_Unemp6_2020->fetch_assoc();

$sql_BSBA_Local6_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Local' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local6_2020 = $con->query($sql_BSBA_Local6_2020) or die ($con->error);
$row_BSBA_Local6_2020 = $alumni_BSBA_Local6_2020->fetch_assoc();

$sql_BSBA_Abroad6_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Abroad' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad6_2020 = $con->query($sql_BSBA_Abroad6_2020) or die ($con->error);
$row_BSBA_Abroad6_2020 = $alumni_BSBA_Abroad6_2020->fetch_assoc();

// --------------- 2021 ---------------

$sql_BSBA7_2021 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2021';";
$alumni_BSBA7_2021 = $con->query($sql_BSBA7_2021) or die ($con->error);
$row_BSBA7_2021 = $alumni_BSBA7_2021->fetch_assoc();

$sql_BSBA_emp6_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Employed' && year_graduated = '2021');";
$alumni_BSBA_emp6_2021 = $con->query($sql_BSBA_emp6_2021) or die ($con->error);
$row_BSBA_emp6_2021 = $alumni_BSBA_emp6_2021->fetch_assoc();

$sql_BSBA_Semp6_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Self-employed' && year_graduated = '2021');";
$alumni_BSBA_Semp6_2021 = $con->query($sql_BSBA_Semp6_2021) or die ($con->error);
$row_BSBA_Semp6_2021 = $alumni_BSBA_Semp6_2021->fetch_assoc();

$sql_BSBA_Unemp6_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Unemployed' && year_graduated = '2021');";
$alumni_BSBA_Unemp6_2021 = $con->query($sql_BSBA_Unemp6_2021) or die ($con->error);
$row_BSBA_Unemp6_2021 = $alumni_BSBA_Unemp6_2021->fetch_assoc();

$sql_BSBA_Local6_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Local' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local6_2021 = $con->query($sql_BSBA_Local6_2021) or die ($con->error);
$row_BSBA_Local6_2021 = $alumni_BSBA_Local6_2021->fetch_assoc();

$sql_BSBA_Abroad6_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Abroad' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad6_2021 = $con->query($sql_BSBA_Abroad6_2021) or die ($con->error);
$row_BSBA_Abroad6_2021 = $alumni_BSBA_Abroad6_2021->fetch_assoc();

// --------------- 2022 ---------------

$sql_BSBA7_2022 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2022';";
$alumni_BSBA7_2022 = $con->query($sql_BSBA7_2022) or die ($con->error);
$row_BSBA7_2022 = $alumni_BSBA7_2022->fetch_assoc();

$sql_BSBA_emp6_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Employed' && year_graduated = '2022');";
$alumni_BSBA_emp6_2022 = $con->query($sql_BSBA_emp6_2022) or die ($con->error);
$row_BSBA_emp6_2022 = $alumni_BSBA_emp6_2022->fetch_assoc();

$sql_BSBA_Semp6_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Self-employed' && year_graduated = '2022');";
$alumni_BSBA_Semp6_2022 = $con->query($sql_BSBA_Semp6_2022) or die ($con->error);
$row_BSBA_Semp6_2022 = $alumni_BSBA_Semp6_2022->fetch_assoc();

$sql_BSBA_Unemp6_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && (current_work = 'Unemployed' && year_graduated = '2022');";
$alumni_BSBA_Unemp6_2022 = $con->query($sql_BSBA_Unemp6_2022) or die ($con->error);
$row_BSBA_Unemp6_2022 = $alumni_BSBA_Unemp6_2022->fetch_assoc();

$sql_BSBA_Local6_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Local' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local6_2022 = $con->query($sql_BSBA_Local6_2022) or die ($con->error);
$row_BSBA_Local6_2022 = $alumni_BSBA_Local6_2022->fetch_assoc();

$sql_BSBA_Abroad6_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Tourism Management' && PlaceOfWork = 'Abroad' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad6_2022 = $con->query($sql_BSBA_Abroad6_2022) or die ($con->error);
$row_BSBA_Abroad6_2022 = $alumni_BSBA_Abroad6_2022->fetch_assoc();

// --------------------Bachelor of Science in Computer Science--------------------------

$sql_BSBA8 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science';";
$alumni_BSBA8 = $con->query($sql_BSBA8) or die ($con->error);
$row_BSBA8 = $alumni_BSBA8->fetch_assoc();

$sql_BSBA_emp7 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Employed');";
$alumni_BSBA_emp7 = $con->query($sql_BSBA_emp7) or die ($con->error);
$row_BSBA_emp7 = $alumni_BSBA_emp7->fetch_assoc();

$sql_BSBA_Semp7 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Self-employed');";
$alumni_BSBA_Semp7 = $con->query($sql_BSBA_Semp7) or die ($con->error);
$row_BSBA_Semp7 = $alumni_BSBA_Semp7->fetch_assoc();

$sql_BSBA_Unemp7 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Unemployed');";
$alumni_BSBA_Unemp7 = $con->query($sql_BSBA_Unemp7) or die ($con->error);
$row_BSBA_Unemp7 = $alumni_BSBA_Unemp7->fetch_assoc();

$sql_BSBA_Local7 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Local' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local7 = $con->query($sql_BSBA_Local7) or die ($con->error);
$row_BSBA_Local7 = $alumni_BSBA_Local7->fetch_assoc();

$sql_BSBA_Abroad7 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Abroad' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad7 = $con->query($sql_BSBA_Abroad7) or die ($con->error);
$row_BSBA_Abroad7 = $alumni_BSBA_Abroad7->fetch_assoc();

// --------------- 2018 ---------------

$sql_BSBA8_2018 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2018';";
$alumni_BSBA8_2018 = $con->query($sql_BSBA8_2018) or die ($con->error);
$row_BSBA8_2018 = $alumni_BSBA8_2018->fetch_assoc();

$sql_BSBA_emp7_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Employed' && year_graduated = '2018');";
$alumni_BSBA_emp7_2018 = $con->query($sql_BSBA_emp7_2018) or die ($con->error);
$row_BSBA_emp7_2018 = $alumni_BSBA_emp7_2018->fetch_assoc();

$sql_BSBA_Semp7_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Self-employed' && year_graduated = '2018');";
$alumni_BSBA_Semp7_2018 = $con->query($sql_BSBA_Semp7_2018) or die ($con->error);
$row_BSBA_Semp7_2018 = $alumni_BSBA_Semp7_2018->fetch_assoc();

$sql_BSBA_Unemp7_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Unemployed' && year_graduated = '2018');";
$alumni_BSBA_Unemp7_2018 = $con->query($sql_BSBA_Unemp7_2018) or die ($con->error);
$row_BSBA_Unemp7_2018 = $alumni_BSBA_Unemp7_2018->fetch_assoc();

$sql_BSBA_Local7_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Local' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local7_2018 = $con->query($sql_BSBA_Local7_2018) or die ($con->error);
$row_BSBA_Local7_2018 = $alumni_BSBA_Local7_2018->fetch_assoc();

$sql_BSBA_Abroad7_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Abroad' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad7_2018 = $con->query($sql_BSBA_Abroad7_2018) or die ($con->error);
$row_BSBA_Abroad7_2018 = $alumni_BSBA_Abroad7_2018->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA8_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2019';";
$alumni_BSBA8_2019 = $con->query($sql_BSBA8_2019) or die ($con->error);
$row_BSBA8_2019 = $alumni_BSBA8_2019->fetch_assoc();

$sql_BSBA_emp7_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp7_2019 = $con->query($sql_BSBA_emp7_2019) or die ($con->error);
$row_BSBA_emp7_2019 = $alumni_BSBA_emp7_2019->fetch_assoc();

$sql_BSBA_Semp7_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp7_2019 = $con->query($sql_BSBA_Semp7_2019) or die ($con->error);
$row_BSBA_Semp7_2019 = $alumni_BSBA_Semp7_2019->fetch_assoc();

$sql_BSBA_Unemp7_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp7_2019 = $con->query($sql_BSBA_Unemp7_2019) or die ($con->error);
$row_BSBA_Unemp7_2019 = $alumni_BSBA_Unemp7_2019->fetch_assoc();

$sql_BSBA_Local7_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local7_2019 = $con->query($sql_BSBA_Local7_2019) or die ($con->error);
$row_BSBA_Local7_2019 = $alumni_BSBA_Local7_2019->fetch_assoc();

$sql_BSBA_Abroad7_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad7_2019 = $con->query($sql_BSBA_Abroad7_2019) or die ($con->error);
$row_BSBA_Abroad7_2019 = $alumni_BSBA_Abroad7_2019->fetch_assoc();

// --------------- 2020 ---------------

$sql_BSBA8_2020 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2020';";
$alumni_BSBA8_2020 = $con->query($sql_BSBA8_2020) or die ($con->error);
$row_BSBA8_2020 = $alumni_BSBA8_2020->fetch_assoc();

$sql_BSBA_emp7_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Employed' && year_graduated = '2020');";
$alumni_BSBA_emp7_2020 = $con->query($sql_BSBA_emp7_2020) or die ($con->error);
$row_BSBA_emp7_2020 = $alumni_BSBA_emp7_2020->fetch_assoc();

$sql_BSBA_Semp7_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Self-employed' && year_graduated = '2020');";
$alumni_BSBA_Semp7_2020 = $con->query($sql_BSBA_Semp7_2020) or die ($con->error);
$row_BSBA_Semp7_2020 = $alumni_BSBA_Semp7_2020->fetch_assoc();

$sql_BSBA_Unemp7_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Unemployed' && year_graduated = '2020');";
$alumni_BSBA_Unemp7_2020 = $con->query($sql_BSBA_Unemp7_2020) or die ($con->error);
$row_BSBA_Unemp7_2020 = $alumni_BSBA_Unemp7_2020->fetch_assoc();

$sql_BSBA_Local7_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Local' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local7_2020 = $con->query($sql_BSBA_Local7_2020) or die ($con->error);
$row_BSBA_Local7_2020 = $alumni_BSBA_Local7_2020->fetch_assoc();

$sql_BSBA_Abroad7_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Abroad' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad7_2020 = $con->query($sql_BSBA_Abroad7_2020) or die ($con->error);
$row_BSBA_Abroad7_2020 = $alumni_BSBA_Abroad7_2020->fetch_assoc();

// --------------- 2021 ---------------

$sql_BSBA8_2021 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2021';";
$alumni_BSBA8_2021 = $con->query($sql_BSBA8_2021) or die ($con->error);
$row_BSBA8_2021 = $alumni_BSBA8_2021->fetch_assoc();

$sql_BSBA_emp7_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Employed' && year_graduated = '2021');";
$alumni_BSBA_emp7_2021 = $con->query($sql_BSBA_emp7_2021) or die ($con->error);
$row_BSBA_emp7_2021 = $alumni_BSBA_emp7_2021->fetch_assoc();

$sql_BSBA_Semp7_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Self-employed' && year_graduated = '2021');";
$alumni_BSBA_Semp7_2021 = $con->query($sql_BSBA_Semp7_2021) or die ($con->error);
$row_BSBA_Semp7_2021 = $alumni_BSBA_Semp7_2021->fetch_assoc();

$sql_BSBA_Unemp7_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Unemployed' && year_graduated = '2021');";
$alumni_BSBA_Unemp7_2021 = $con->query($sql_BSBA_Unemp7_2021) or die ($con->error);
$row_BSBA_Unemp7_2021 = $alumni_BSBA_Unemp7_2021->fetch_assoc();

$sql_BSBA_Local7_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Local' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local7_2021 = $con->query($sql_BSBA_Local7_2021) or die ($con->error);
$row_BSBA_Local7_2021 = $alumni_BSBA_Local7_2021->fetch_assoc();

$sql_BSBA_Abroad7_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Abroad' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad7_2021 = $con->query($sql_BSBA_Abroad7_2021) or die ($con->error);
$row_BSBA_Abroad7_2021 = $alumni_BSBA_Abroad7_2021->fetch_assoc();

// --------------- 2022 ---------------

$sql_BSBA8_2022 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2022';";
$alumni_BSBA8_2022 = $con->query($sql_BSBA8_2022) or die ($con->error);
$row_BSBA8_2022 = $alumni_BSBA8_2022->fetch_assoc();

$sql_BSBA_emp7_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Employed' && year_graduated = '2022');";
$alumni_BSBA_emp7_2022 = $con->query($sql_BSBA_emp7_2022) or die ($con->error);
$row_BSBA_emp7_2022 = $alumni_BSBA_emp7_2022->fetch_assoc();

$sql_BSBA_Semp7_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Self-employed' && year_graduated = '2022');";
$alumni_BSBA_Semp7_2022 = $con->query($sql_BSBA_Semp7_2022) or die ($con->error);
$row_BSBA_Semp7_2022 = $alumni_BSBA_Semp7_2022->fetch_assoc();

$sql_BSBA_Unemp7_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && (current_work = 'Unemployed' && year_graduated = '2022');";
$alumni_BSBA_Unemp7_2022 = $con->query($sql_BSBA_Unemp7_2022) or die ($con->error);
$row_BSBA_Unemp7_2022 = $alumni_BSBA_Unemp7_2022->fetch_assoc();

$sql_BSBA_Local7_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Local' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local7_2022 = $con->query($sql_BSBA_Local7_2022) or die ($con->error);
$row_BSBA_Local7_2022 = $alumni_BSBA_Local7_2022->fetch_assoc();

$sql_BSBA_Abroad7_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Computer Science' && PlaceOfWork = 'Abroad' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad7_2022 = $con->query($sql_BSBA_Abroad7_2022) or die ($con->error);
$row_BSBA_Abroad7_2022 = $alumni_BSBA_Abroad7_2022->fetch_assoc();

// --------------------Bachelor of Science in Hospitality Management--------------------------

$sql_BSBA9 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management';";
$alumni_BSBA9 = $con->query($sql_BSBA9) or die ($con->error);
$row_BSBA9 = $alumni_BSBA9->fetch_assoc();

$sql_BSBA_emp8 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Employed');";
$alumni_BSBA_emp8 = $con->query($sql_BSBA_emp8) or die ($con->error);
$row_BSBA_emp8 = $alumni_BSBA_emp8->fetch_assoc();

$sql_BSBA_Semp8 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Self-employed');";
$alumni_BSBA_Semp8 = $con->query($sql_BSBA_Semp8) or die ($con->error);
$row_BSBA_Semp8 = $alumni_BSBA_Semp8->fetch_assoc();

$sql_BSBA_Unemp8 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Unemployed');";
$alumni_BSBA_Unemp8 = $con->query($sql_BSBA_Unemp8) or die ($con->error);
$row_BSBA_Unemp8 = $alumni_BSBA_Unemp8->fetch_assoc();

$sql_BSBA_Local8 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Local' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local8 = $con->query($sql_BSBA_Local8) or die ($con->error);
$row_BSBA_Local8 = $alumni_BSBA_Local8->fetch_assoc();

$sql_BSBA_Abroad8 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Abroad' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad8 = $con->query($sql_BSBA_Abroad8) or die ($con->error);
$row_BSBA_Abroad8 = $alumni_BSBA_Abroad8->fetch_assoc();

// --------------- 2018 ---------------

$sql_BSBA9_2018 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2018';";
$alumni_BSBA9_2018 = $con->query($sql_BSBA9_2018) or die ($con->error);
$row_BSBA9_2018 = $alumni_BSBA9_2018->fetch_assoc();

$sql_BSBA_emp8_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Employed' && year_graduated = '2018');";
$alumni_BSBA_emp8_2018 = $con->query($sql_BSBA_emp8_2018) or die ($con->error);
$row_BSBA_emp8_2018 = $alumni_BSBA_emp8_2018->fetch_assoc();

$sql_BSBA_Semp8_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Self-employed' && year_graduated = '2018');";
$alumni_BSBA_Semp8_2018 = $con->query($sql_BSBA_Semp8_2018) or die ($con->error);
$row_BSBA_Semp8_2018 = $alumni_BSBA_Semp8_2018->fetch_assoc();

$sql_BSBA_Unemp8_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Unemployed' && year_graduated = '2018');";
$alumni_BSBA_Unemp8_2018 = $con->query($sql_BSBA_Unemp8_2018) or die ($con->error);
$row_BSBA_Unemp8_2018 = $alumni_BSBA_Unemp8_2018->fetch_assoc();

$sql_BSBA_Local8_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Local' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local8_2018 = $con->query($sql_BSBA_Local8_2018) or die ($con->error);
$row_BSBA_Local8_2018 = $alumni_BSBA_Local8_2018->fetch_assoc();

$sql_BSBA_Abroad8_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Abroad' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad8_2018 = $con->query($sql_BSBA_Abroad8_2018) or die ($con->error);
$row_BSBA_Abroad8_2018 = $alumni_BSBA_Abroad8_2018->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA9_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2019';";
$alumni_BSBA9_2019 = $con->query($sql_BSBA9_2019) or die ($con->error);
$row_BSBA9_2019 = $alumni_BSBA9_2019->fetch_assoc();

$sql_BSBA_emp8_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp8_2019 = $con->query($sql_BSBA_emp8_2019) or die ($con->error);
$row_BSBA_emp8_2019 = $alumni_BSBA_emp8_2019->fetch_assoc();

$sql_BSBA_Semp8_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp8_2019 = $con->query($sql_BSBA_Semp8_2019) or die ($con->error);
$row_BSBA_Semp8_2019 = $alumni_BSBA_Semp8_2019->fetch_assoc();

$sql_BSBA_Unemp8_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp8_2019 = $con->query($sql_BSBA_Unemp8_2019) or die ($con->error);
$row_BSBA_Unemp8_2019 = $alumni_BSBA_Unemp8_2019->fetch_assoc();

$sql_BSBA_Local8_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local8_2019 = $con->query($sql_BSBA_Local8_2019) or die ($con->error);
$row_BSBA_Local8_2019 = $alumni_BSBA_Local8_2019->fetch_assoc();

$sql_BSBA_Abroad8_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad8_2019 = $con->query($sql_BSBA_Abroad8_2019) or die ($con->error);
$row_BSBA_Abroad8_2019 = $alumni_BSBA_Abroad8_2019->fetch_assoc();

// --------------- 2020 ---------------

$sql_BSBA9_2020 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2020';";
$alumni_BSBA9_2020 = $con->query($sql_BSBA9_2020) or die ($con->error);
$row_BSBA9_2020 = $alumni_BSBA9_2020->fetch_assoc();

$sql_BSBA_emp8_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Employed' && year_graduated = '2020');";
$alumni_BSBA_emp8_2020 = $con->query($sql_BSBA_emp8_2020) or die ($con->error);
$row_BSBA_emp8_2020 = $alumni_BSBA_emp8_2020->fetch_assoc();

$sql_BSBA_Semp8_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Self-employed' && year_graduated = '2020');";
$alumni_BSBA_Semp8_2020 = $con->query($sql_BSBA_Semp8_2020) or die ($con->error);
$row_BSBA_Semp8_2020 = $alumni_BSBA_Semp8_2020->fetch_assoc();

$sql_BSBA_Unemp8_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Unemployed' && year_graduated = '2020');";
$alumni_BSBA_Unemp8_2020 = $con->query($sql_BSBA_Unemp8_2020) or die ($con->error);
$row_BSBA_Unemp8_2020 = $alumni_BSBA_Unemp8_2020->fetch_assoc();

$sql_BSBA_Local8_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Local' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local8_2020 = $con->query($sql_BSBA_Local8_2020) or die ($con->error);
$row_BSBA_Local8_2020 = $alumni_BSBA_Local8_2020->fetch_assoc();

$sql_BSBA_Abroad8_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Abroad' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad8_2020 = $con->query($sql_BSBA_Abroad8_2020) or die ($con->error);
$row_BSBA_Abroad8_2020 = $alumni_BSBA_Abroad8_2020->fetch_assoc();

// --------------- 2021 ---------------

$sql_BSBA9_2021 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2021';";
$alumni_BSBA9_2021 = $con->query($sql_BSBA9_2021) or die ($con->error);
$row_BSBA9_2021 = $alumni_BSBA9_2021->fetch_assoc();

$sql_BSBA_emp8_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Employed' && year_graduated = '2021');";
$alumni_BSBA_emp8_2021 = $con->query($sql_BSBA_emp8_2021) or die ($con->error);
$row_BSBA_emp8_2021 = $alumni_BSBA_emp8_2021->fetch_assoc();

$sql_BSBA_Semp8_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Self-employed' && year_graduated = '2021');";
$alumni_BSBA_Semp8_2021 = $con->query($sql_BSBA_Semp8_2021) or die ($con->error);
$row_BSBA_Semp8_2021 = $alumni_BSBA_Semp8_2021->fetch_assoc();

$sql_BSBA_Unemp8_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Unemployed' && year_graduated = '2021');";
$alumni_BSBA_Unemp8_2021 = $con->query($sql_BSBA_Unemp8_2021) or die ($con->error);
$row_BSBA_Unemp8_2021 = $alumni_BSBA_Unemp8_2021->fetch_assoc();

$sql_BSBA_Local8_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Local' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local8_2021 = $con->query($sql_BSBA_Local8_2021) or die ($con->error);
$row_BSBA_Local8_2021 = $alumni_BSBA_Local8_2021->fetch_assoc();

$sql_BSBA_Abroad8_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Abroad' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad8_2021 = $con->query($sql_BSBA_Abroad8_2021) or die ($con->error);
$row_BSBA_Abroad8_2021 = $alumni_BSBA_Abroad8_2021->fetch_assoc();

// --------------- 2022 ---------------

$sql_BSBA9_2022 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2022';";
$alumni_BSBA9_2022 = $con->query($sql_BSBA9_2022) or die ($con->error);
$row_BSBA9_2022 = $alumni_BSBA9_2022->fetch_assoc();

$sql_BSBA_emp8_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Employed' && year_graduated = '2022');";
$alumni_BSBA_emp8_2022 = $con->query($sql_BSBA_emp8_2022) or die ($con->error);
$row_BSBA_emp8_2022 = $alumni_BSBA_emp8_2022->fetch_assoc();

$sql_BSBA_Semp8_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Self-employed' && year_graduated = '2022');";
$alumni_BSBA_Semp8_2022 = $con->query($sql_BSBA_Semp8_2022) or die ($con->error);
$row_BSBA_Semp8_2022 = $alumni_BSBA_Semp8_2022->fetch_assoc();

$sql_BSBA_Unemp8_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && (current_work = 'Unemployed' && year_graduated = '2022');";
$alumni_BSBA_Unemp8_2022 = $con->query($sql_BSBA_Unemp8_2022) or die ($con->error);
$row_BSBA_Unemp8_2022 = $alumni_BSBA_Unemp8_2022->fetch_assoc();

$sql_BSBA_Local8_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Local' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local8_2022 = $con->query($sql_BSBA_Local8_2022) or die ($con->error);
$row_BSBA_Local8_2022 = $alumni_BSBA_Local8_2022->fetch_assoc();

$sql_BSBA_Abroad8_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Science in Hospitality Management' && PlaceOfWork = 'Abroad' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad8_2022 = $con->query($sql_BSBA_Abroad8_2022) or die ($con->error);
$row_BSBA_Abroad8_2022 = $alumni_BSBA_Abroad8_2022->fetch_assoc();



// --------------------Bachelor of Technical Vocational Teacher Education--------------------------

$sql_BSBA10 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education';";
$alumni_BSBA10 = $con->query($sql_BSBA10) or die ($con->error);
$row_BSBA10 = $alumni_BSBA10->fetch_assoc();

$sql_BSBA_emp9 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Employed');";
$alumni_BSBA_emp9 = $con->query($sql_BSBA_emp9) or die ($con->error);
$row_BSBA_emp9 = $alumni_BSBA_emp9->fetch_assoc();

$sql_BSBA_Semp9 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Self-employed');";
$alumni_BSBA_Semp9 = $con->query($sql_BSBA_Semp9) or die ($con->error);
$row_BSBA_Semp9 = $alumni_BSBA_Semp9->fetch_assoc();

$sql_BSBA_Unemp9 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Unemployed');";
$alumni_BSBA_Unemp9 = $con->query($sql_BSBA_Unemp9) or die ($con->error);
$row_BSBA_Unemp9 = $alumni_BSBA_Unemp9->fetch_assoc();

$sql_BSBA_Local9 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Local' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local9 = $con->query($sql_BSBA_Local9) or die ($con->error);
$row_BSBA_Local9 = $alumni_BSBA_Local9->fetch_assoc();

$sql_BSBA_Abroad9 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Abroad' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad9 = $con->query($sql_BSBA_Abroad9) or die ($con->error);
$row_BSBA_Abroad9 = $alumni_BSBA_Abroad9->fetch_assoc();

// --------------- 2018 ---------------

$sql_BSBA10_2018 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2018';";
$alumni_BSBA10_2018 = $con->query($sql_BSBA10_2018) or die ($con->error);
$row_BSBA10_2018 = $alumni_BSBA10_2018->fetch_assoc();

$sql_BSBA_emp9_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Employed' && year_graduated = '2018');";
$alumni_BSBA_emp9_2018 = $con->query($sql_BSBA_emp9_2018) or die ($con->error);
$row_BSBA_emp9_2018 = $alumni_BSBA_emp9_2018->fetch_assoc();

$sql_BSBA_Semp9_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Self-employed' && year_graduated = '2018');";
$alumni_BSBA_Semp9_2018 = $con->query($sql_BSBA_Semp9_2018) or die ($con->error);
$row_BSBA_Semp9_2018 = $alumni_BSBA_Semp9_2018->fetch_assoc();

$sql_BSBA_Unemp9_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Unemployed' && year_graduated = '2018');";
$alumni_BSBA_Unemp9_2018 = $con->query($sql_BSBA_Unemp9_2018) or die ($con->error);
$row_BSBA_Unemp9_2018 = $alumni_BSBA_Unemp9_2018->fetch_assoc();

$sql_BSBA_Local9_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Local' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local9_2018 = $con->query($sql_BSBA_Local9_2018) or die ($con->error);
$row_BSBA_Local9_2018 = $alumni_BSBA_Local9_2018->fetch_assoc();

$sql_BSBA_Abroad9_2018 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2018')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Abroad' && year_graduated = '2018' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad9_2018 = $con->query($sql_BSBA_Abroad9_2018) or die ($con->error);
$row_BSBA_Abroad9_2018 = $alumni_BSBA_Abroad9_2018->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA10_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019';";
$alumni_BSBA10_2019 = $con->query($sql_BSBA10_2019) or die ($con->error);
$row_BSBA10_2019 = $alumni_BSBA10_2019->fetch_assoc();

$sql_BSBA_emp9_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp9_2019 = $con->query($sql_BSBA_emp9_2019) or die ($con->error);
$row_BSBA_emp9_2019 = $alumni_BSBA_emp9_2019->fetch_assoc();

$sql_BSBA_Semp9_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp9_2019 = $con->query($sql_BSBA_Semp9_2019) or die ($con->error);
$row_BSBA_Semp9_2019 = $alumni_BSBA_Semp9_2019->fetch_assoc();

$sql_BSBA_Unemp9_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp9_2019 = $con->query($sql_BSBA_Unemp9_2019) or die ($con->error);
$row_BSBA_Unemp9_2019 = $alumni_BSBA_Unemp9_2019->fetch_assoc();

$sql_BSBA_Local9_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local9_2019 = $con->query($sql_BSBA_Local9_2019) or die ($con->error);
$row_BSBA_Local9_2019 = $alumni_BSBA_Local9_2019->fetch_assoc();

$sql_BSBA_Abroad9_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad9_2019 = $con->query($sql_BSBA_Abroad9_2019) or die ($con->error);
$row_BSBA_Abroad9_2019 = $alumni_BSBA_Abroad9_2019->fetch_assoc();

// --------------- 2019 ---------------

$sql_BSBA10_2019 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019';";
$alumni_BSBA10_2019 = $con->query($sql_BSBA10_2019) or die ($con->error);
$row_BSBA10_2019 = $alumni_BSBA10_2019->fetch_assoc();

$sql_BSBA_emp9_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Employed' && year_graduated = '2019');";
$alumni_BSBA_emp9_2019 = $con->query($sql_BSBA_emp9_2019) or die ($con->error);
$row_BSBA_emp9_2019 = $alumni_BSBA_emp9_2019->fetch_assoc();

$sql_BSBA_Semp9_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Self-employed' && year_graduated = '2019');";
$alumni_BSBA_Semp9_2019 = $con->query($sql_BSBA_Semp9_2019) or die ($con->error);
$row_BSBA_Semp9_2019 = $alumni_BSBA_Semp9_2019->fetch_assoc();

$sql_BSBA_Unemp9_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Unemployed' && year_graduated = '2019');";
$alumni_BSBA_Unemp9_2019 = $con->query($sql_BSBA_Unemp9_2019) or die ($con->error);
$row_BSBA_Unemp9_2019 = $alumni_BSBA_Unemp9_2019->fetch_assoc();

$sql_BSBA_Local9_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Local' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local9_2019 = $con->query($sql_BSBA_Local9_2019) or die ($con->error);
$row_BSBA_Local9_2019 = $alumni_BSBA_Local9_2019->fetch_assoc();

$sql_BSBA_Abroad9_2019 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2019')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Abroad' && year_graduated = '2019' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad9_2019 = $con->query($sql_BSBA_Abroad9_2019) or die ($con->error);
$row_BSBA_Abroad9_2019 = $alumni_BSBA_Abroad9_2019->fetch_assoc();

// --------------- 2020 ---------------

$sql_BSBA10_2020 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2020';";
$alumni_BSBA10_2020 = $con->query($sql_BSBA10_2020) or die ($con->error);
$row_BSBA10_2020 = $alumni_BSBA10_2020->fetch_assoc();

$sql_BSBA_emp9_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Employed' && year_graduated = '2020');";
$alumni_BSBA_emp9_2020 = $con->query($sql_BSBA_emp9_2020) or die ($con->error);
$row_BSBA_emp9_2020 = $alumni_BSBA_emp9_2020->fetch_assoc();

$sql_BSBA_Semp9_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Self-employed' && year_graduated = '2020');";
$alumni_BSBA_Semp9_2020 = $con->query($sql_BSBA_Semp9_2020) or die ($con->error);
$row_BSBA_Semp9_2020 = $alumni_BSBA_Semp9_2020->fetch_assoc();

$sql_BSBA_Unemp9_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Unemployed' && year_graduated = '2020');";
$alumni_BSBA_Unemp9_2020 = $con->query($sql_BSBA_Unemp9_2020) or die ($con->error);
$row_BSBA_Unemp9_2020 = $alumni_BSBA_Unemp9_2020->fetch_assoc();

$sql_BSBA_Local9_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Local' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local9_2020 = $con->query($sql_BSBA_Local9_2020) or die ($con->error);
$row_BSBA_Local9_2020 = $alumni_BSBA_Local9_2020->fetch_assoc();

$sql_BSBA_Abroad9_2020 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2020')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Abroad' && year_graduated = '2020' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad9_2020 = $con->query($sql_BSBA_Abroad9_2020) or die ($con->error);
$row_BSBA_Abroad9_2020 = $alumni_BSBA_Abroad9_2020->fetch_assoc();

// --------------- 2021 ---------------

$sql_BSBA10_2021 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2021';";
$alumni_BSBA10_2021 = $con->query($sql_BSBA10_2021) or die ($con->error);
$row_BSBA10_2021 = $alumni_BSBA10_2021->fetch_assoc();

$sql_BSBA_emp9_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Employed' && year_graduated = '2021');";
$alumni_BSBA_emp9_2021 = $con->query($sql_BSBA_emp9_2021) or die ($con->error);
$row_BSBA_emp9_2021 = $alumni_BSBA_emp9_2021->fetch_assoc();

$sql_BSBA_Semp9_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Self-employed' && year_graduated = '2021');";
$alumni_BSBA_Semp9_2021 = $con->query($sql_BSBA_Semp9_2021) or die ($con->error);
$row_BSBA_Semp9_2021 = $alumni_BSBA_Semp9_2021->fetch_assoc();

$sql_BSBA_Unemp9_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Unemployed' && year_graduated = '2021');";
$alumni_BSBA_Unemp9_2021 = $con->query($sql_BSBA_Unemp9_2021) or die ($con->error);
$row_BSBA_Unemp9_2021 = $alumni_BSBA_Unemp9_2021->fetch_assoc();

$sql_BSBA_Local9_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Local' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local9_2021 = $con->query($sql_BSBA_Local9_2021) or die ($con->error);
$row_BSBA_Local9_2021 = $alumni_BSBA_Local9_2021->fetch_assoc();

$sql_BSBA_Abroad9_2021 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2021')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Abroad' && year_graduated = '2021' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad9_2021 = $con->query($sql_BSBA_Abroad9_2021) or die ($con->error);
$row_BSBA_Abroad9_2021 = $alumni_BSBA_Abroad9_2021->fetch_assoc();

// --------------- 2022 ---------------

$sql_BSBA10_2022 = "SELECT COUNT(id) AS total FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2022';";
$alumni_BSBA10_2022 = $con->query($sql_BSBA10_2022) or die ($con->error);
$row_BSBA10_2022 = $alumni_BSBA10_2022->fetch_assoc();

$sql_BSBA_emp9_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Employed' && year_graduated = '2022');";
$alumni_BSBA_emp9_2022 = $con->query($sql_BSBA_emp9_2022) or die ($con->error);
$row_BSBA_emp9_2022 = $alumni_BSBA_emp9_2022->fetch_assoc();

$sql_BSBA_Semp9_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Self-employed' && year_graduated = '2022');";
$alumni_BSBA_Semp9_2022 = $con->query($sql_BSBA_Semp9_2022) or die ($con->error);
$row_BSBA_Semp9_2022 = $alumni_BSBA_Semp9_2022->fetch_assoc();

$sql_BSBA_Unemp9_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && (current_work = 'Unemployed' && year_graduated = '2022');";
$alumni_BSBA_Unemp9_2022 = $con->query($sql_BSBA_Unemp9_2022) or die ($con->error);
$row_BSBA_Unemp9_2022 = $alumni_BSBA_Unemp9_2022->fetch_assoc();

$sql_BSBA_Local9_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Local' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Local9_2022 = $con->query($sql_BSBA_Local9_2022) or die ($con->error);
$row_BSBA_Local9_2022 = $alumni_BSBA_Local9_2022->fetch_assoc();

$sql_BSBA_Abroad9_2022 = "SELECT concat(round(COUNT(id) * 100 / (SELECT COUNT(id) FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && year_graduated = '2022')),'%') AS 'Percentage'
FROM alumni_record WHERE course = 'Bachelor of Technical Vocational Teacher Education' && PlaceOfWork = 'Abroad' && year_graduated = '2022' &&(current_work = 'Employed' OR current_work = 'Self-employed');";
$alumni_BSBA_Abroad9_2022 = $con->query($sql_BSBA_Abroad9_2022) or die ($con->error);
$row_BSBA_Abroad9_2022 = $alumni_BSBA_Abroad9_2022->fetch_assoc();

?>