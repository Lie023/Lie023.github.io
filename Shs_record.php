<?php

if(!isset($_SESSION)){
    session_start();
}


include_once("./connections/connection.php");
$con = connection();

if(isset($_POST["delete"])){

    $id = $_POST["ID"];
    $sql = "DELETE FROM sh_record WHERE id = '$id'";
    $con->query($sql) or die ($con->error);
    echo header ("Location: Shs_record.php");

}


$sql = "SELECT * FROM sh_record ORDER BY id DESC";
$student = $con->query($sql) or die ($con->error);
$row = $student->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="./Bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <title>Record Tab</title>
</head>
<style>
    body{
        overflow-x: hidden;
    }
#main{
    margin-left: 140px;
}
#sideNav{
    margin-top: 46px;
    position: fixed;
    width: 140px;
    height: 100%;
    background-color: whitesmoke;
}
#sideNav ul li:nth-child(3){
    background-color: red;
    border-radius: 10px;
} 

@media screen and (max-width:1064px){
  #sideNav{
    width: 0px;
  }
  #main{
    margin-left: 20px;
}
  #main{
    margin-left: 20px;
}
.navbar-nav{
    display: none;
}
.btn-close{
    display: none;
}
}
</style>
<body>

<header class="">
      <div class="navbar-expand-lg container-fluid p-2 fixed-top" style="background-color:red;">
        <span class="navbar-brand text-light">
        <a class="d-xl-none mx-4" id="nav-toggler"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg></a>
        <img class="mx-3" src="./Images/Burgos logo.png" alt="" style="max-width: 60px;">
            <span class="lead">Senior High School Alumni List</span>
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
<br>

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



        <section class="container-fluid mt-3" id="main">
            <br>
            <br>
            <h3 class="text-center my-4">Alumni List</h3>
            <?php if($row>0){ ?>
                <!-- table filter all ----------------------------------------------- -->
            <table id="table" class="table table-md table-hover text-center" style="width: 90%;">
                <thead class="text-light" style="background-color: red;">
                    <tr>
                        <th>First Name:</th>
                        <th>Last Name:</th>
                       
                       

                        <th>E-mail:</th>
                      
                        <th>Strand:</th>
                        <th>Graduate Status:</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-secondary table-group-divider">
                <?php do{ ?>
                    <tr>
                        <td><?php echo $row["firstname"] ?></td>
                        <td><?php echo $row["lastname"] ?></td>
                       
                        
                
                        <td><?php echo $row["email"] ?></td>
                     
                        <td><?php echo $row["strand"] ?></td>
                        <td><?php echo $row["graduate_status"] ?></td>
                        <td><a href="Shs_view.php?ID=<?php echo $row["id"];?>" class="btn btn-primary text-light px-3 pb-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                            <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                            <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                            </svg></a></td>
                    <form action="Shs_record.php" method="post">
                        <input type="hidden" name="ID" value="<?php echo $row["id"];?>">
                        <td><button type="submit" name="delete" class="btn btn-danger px-3 pb-2" OnClick="return confirm('Are you sure you want to delete this Student?');"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg></button></td>
                    </form>
                    </tr>
                    <?php }while($row = $student->fetch_assoc()) ?>
                </tbody>
                <?php }else{ ?>
                <h1 class="No_dataSHS text-center">NO STUDENTS FOUND!</h1>
                <?php } ?>
                </table>

        </section>

<div id="login" class="modal" tabindex="-1">
  <div class="modal-dialog" style="max-width: 900px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5">
        <form action="" method="post">    
                        <h2 class="text-center mb-4">Enter Students Info</h2>
                        
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="">First Name:</label>
                                    <input type="text" class="form-control" name="firstname">
                                </div>
                                <div class="col-lg-4">
                                    <label for="">Last Name:</label>
                                    <input type="text" class="form-control" name="lastname">
                                </div>

                                    <div class="divider my-2"></div>

                                <div class="col-lg-4">
                                    <label for="">Contact Number:</label>
                                    <input type="text" class="form-control" name="contact">
                                </div>

                                <div class="col-lg-4">
                                    <label for="">Year Graduated:</label>
                                    <input type="date" class="form-control" name="yeargraduated">
                                </div>

                                <div class="divider my-2"></div>

                                <div class="col-lg-8">
                                    <label for="">Course:</label>
                                    <select name="course" id="" class="form-control">
                                        <option value="BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT">BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT</option>
                                        <option value="BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY">BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</option>
                                        <option value="BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION">BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION</option>
                                        <option value="BACHELOR OF SCIENCE IN TOURISM MANAGEMENT">BACHELOR OF SCIENCE IN TOURISM MANAGEMENT</option>
                                    </select>
                                </div>
                            </div>
                    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>



<script src="./Bootstrap-5/js/jquery-3.6.4.min.js"></script>
  <script src="main.js"></script>
</body>
</html>