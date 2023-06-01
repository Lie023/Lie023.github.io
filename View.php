<?php

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION["Access"]) && $_SESSION["Access"] == "admin"){
    $_SESSION["userLogin"];
}else{
    echo header("Location: Record.php");
}

include_once("./connections/connection.php");

$con = connection();

$id = $_GET["ID"];

$sql = "SELECT * FROM alumni_record WHERE id = '$id'";
$barangay = $con->query($sql) or die ($con->error);
$row = $barangay->fetch_assoc();


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
    <title>Students info</title>
</head>
<style>
   #back{
    color: black;
    }
    body{
        background-color: gray;
    }
</style>
<body>

<div class="divider mb-4"></div>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header">
                <h2 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
  <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
</svg><br><?php echo $row["firstname"]?> <?php echo $row["lastname"] ?></h2>
    <div class="text-end"><a id="back" href="Record.php">Go Back</a></div>
                </div>
                <div class="card-body">
                    <div class="row text-center p-5">
                    <h5 class="mt-2">Name & Status</h5>
                    <div class="my-4"></div>
                        <div class="col-xl-4 col-sm-5">
                            <label class="lead" for="">First Name:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["firstname"] ?></label>
                        </div>
                        <div class="col-xl-4 col-sm-4">
                            <label class="lead" for="">Last Name:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["lastname"] ?></label>
                        </div>
                        <div class="col-xl-4 col-sm-3">
                            <label class="lead" for="">Middle Initial:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["mi"] ?></label>
                        </div>

                        <div class="divider my-4"></div>

                        <div class="col-xl-4 col-sm-6">
                            <label class="lead" for="">Age:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["age"] ?></label>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <label class="lead" for="">Birthday:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["birthday"] ?></label>
                        </div>

                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <label class="lead" for="">Civil Status:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["civil_status"] ?></label>
                        </div>

                        <div class="divider my-4"></div>

                        

                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <label class="lead" for="">Email:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["email"] ?></label>
                        </div>
                        
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <label class="lead" for="">Contact Number:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["contact_num"] ?></label>
                        </div>

                        <div class="divider my-4"></div>


                        <h5 class="mt-3">Educational Background</h5>

                        <div class="my-4"></div>

                        <div class="col-12">
                            <label class="lead" for="">Course:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["course"] ?></label>
                        </div>
                        <div class="col-12">
                            <label class="lead" for="">Year Graduated:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["year_graduated"] ?></label>
                        </div>

                        <h5 class="mt-4">Employability Status</h5>

                        <div class="col-12">
                            <label class="lead" for=""></label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["current_work"] ?></label>
                        </div>
                        <div class="col-12">
                            <label class="lead" for="">Place of Work:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["PlaceOfWork"] ?></label>
                        </div>
                        <div class="col-12">
                            <label class="lead" for="">Position</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["position"] ?></label>
                        </div>
                        <div class="col-12">
                            <label class="lead" for="">How many years you are working in your current work:</label>
                            <br>
                            <label class="lead mb-3 fw-bold" for=""><?php echo $row["workYear"] ?></label>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <div class="divider mb-5"></div>
</body>
</html>