<?php

include 'filesLogic.php';

if(!isset($_SESSION)){
    session_start();
}


include_once("./connections/connection.php");
$con = connection();


$sql = "SELECT * FROM files WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management'";
$thesis = $con->query($sql) or die ($con->error);
$row = $thesis->fetch_assoc();

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
    margin-top: 54px;
    position: fixed;
    width: 140px;
    height: 100%;
    background-color: whitesmoke;
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
            <span class="lead">College Alumni List</span>
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

        <section class="container-fluid mt-3" id="">
            <br>
            <br>
            <h3 class="text-center my-4">BSBA Major in Human Resources Development Management</h3>

           <a href="thesis1.php" class="btn btn-primary my-2" style="margin-left:94%;">Back</a>
            <?php if($row>0){ ?>
              
            <table id="table" class="table table table-hover text-center" style="width: 100%;">
                <thead class="text-light" style="background-color: red;">
                    <tr>
                        <th>Course</th>
                        <th>Batch</th>
                        <th>File Name:</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-secondary table-group-divider">
                    <?php foreach($files8 as $file): ?>

                        <tr>
                            <td><?php echo $file['course'];?></td>
                            <td><?php echo $file['batch'];?></td>
                            <td><?php echo $file['name'];?></td>
                            <td>
                                <a href="thesis.php?file_id=<?php echo $file['id']?>"><div class="btn btn-primary">Download</div></a>
                            </td>
                          
                    <form action="thesisDelete.php" method="post">
                        <input type="hidden" name="ID" value="<?php echo $row["id"];?>">
                        <td><button type="submit" name="delete1" class="btn btn-danger px-3" OnClick="return confirm('Are you sure you want to delete this Student?');">Delete</td>
                    </form>
                    </tr>
                    <?php endforeach ; ?>
                </tbody>
                <?php }else{ ?>
                <h1 class="No_data_1 text-center">NO DATA FOUND!</h1>
                <?php } ?>
                </table>
        </section>


<script src="./Bootstrap-5/js/jquery-3.6.4.min.js"></script>
  <script src="main.js"></script>
</body>
</html>