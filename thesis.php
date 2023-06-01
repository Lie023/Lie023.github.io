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
    a{
        text-decoration: none;
    }
    #sideNav ul li:nth-child(6){
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
            <span class="lead">Thesis</span>
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

        <div class="card mb-3">
            <div class="card-body">
            <form action="thesis.php" method="post" enctype="multipart/form-data">
            <h3>Upload Thesis</h3>
            <label for="">Course:</label>
                            <select name="course" id="" class="form-control p-2 mb-4">
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
           <div class="col-xl-5">
           <label for="">Batch:</label>
            <input type="date" name="batch" id="" class="form-control mb-3">
           </div>
            <input type="file" name="myfile" class="form-control mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
            </div>
        </div>

        <div class="card">

            <div class="card-header text-center p-2">
                <h2>College Thesis</h2>
            </div>
            <div class="card-body">

            <div class="row text-center p-5">
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSBA_marketing.php" class="text-warning" id=""><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                <label for="">Bachelor of Science in Business Administration Major in Marketing Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSBA_financial.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Business Administration Major in Financial Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSBA_humanResources.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Business Administration Major in Human Resources Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSIT.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Information Technology</label>
                </div>

                            <div class="divider my-4"></div>

                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSHRM.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Hotel Restaurant Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSTM.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Tourism Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSCS.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Computer Science</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSBA_humanR_development.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Business Administration Major in Human Resources Development Management</label>
                </div>

                    <div class="divider my-4"></div>

                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BSHM.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Science in Hospitality Management</label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mb-3"><a href="BTVTE.php" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg></a>
                    <label for="">Bachelor of Technical Vocational Teacher Education</label>
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