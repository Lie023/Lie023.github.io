<?php

include_once("./connections/connection.php");
$con = connection();

$sql = "SELECT * FROM shs_Thesis";
$result = mysqli_query($con,$sql); 
$files = mysqli_fetch_all($result,MYSQLI_ASSOC);

$sql1 = "SELECT * FROM shs_thesis WHERE strand = 'ACCOUNTANCY BUSINESS AND MANAGEMENT'";
$result1 = mysqli_query($con,$sql1); 
$files1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);

$sql2 = "SELECT * FROM shs_thesis WHERE strand = 'SCIENCE TECHNOLOGY, ENGINEERING, AND MATHEMATICS'";
$result2 = mysqli_query($con,$sql2); 
$files2 = mysqli_fetch_all($result2,MYSQLI_ASSOC);

$sql3 = "SELECT * FROM shs_thesis WHERE strand = 'HUMANITIES AND SOCIAL SCIENCES'";
$result3 = mysqli_query($con,$sql3); 
$files3 = mysqli_fetch_all($result3,MYSQLI_ASSOC);

$sql4 = "SELECT * FROM shs_thesis WHERE strand = 'TVL-HOME ECONOMICS'";
$result4 = mysqli_query($con,$sql4); 
$files4 = mysqli_fetch_all($result4,MYSQLI_ASSOC);

$sql5 = "SELECT * FROM shs_thesis WHERE strand = 'TVL-INFORMATION AND COMMUNICATION TECHNOLOGY'";
$result5 = mysqli_query($con,$sql5); 
$files5 = mysqli_fetch_all($result5,MYSQLI_ASSOC);


if(isset($_POST['submit']))
{
    $strand = $_POST["strand"];

    $filename = $_FILES['myfile']['name'];

    $destination = 'files/' .$filename;

    $extension = pathinfo($filename,PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];

    $size = $_FILES['myfile']['size'];

    if(!in_array($extension, ['zip','pdf','png']))
    {
        echo "<script> alert('Your file extension Must be .zip, .pdf or .png') </script>";
    }
    else if($_FILES['myfile']['size'] > 1000000)
    {
        echo "<script> alert('File is too large') </script>";
    }
    else
    {
        if(move_uploaded_file($file,$destination))
        {
            $sql = "INSERT INTO shs_thesis (name,size,download,strand) VALUES('$filename','$size',0,'$strand')";

            if(mysqli_query($con,$sql))
            {
                echo "<script> alert('File Successfully Uploaded') </script>";
            }
            else
            {
                echo "<script> alert('Failed to upload file') </script>";
            }
        }
    }
}


if(isset($_GET['file_id']))
{
    $id = $_GET['file_id'];

    $sql = "SELECT * FROM shs_thesis WHERE id=$id";

    $result = mysqli_query($con,$sql);

    $file = mysqli_fetch_assoc($result);

    $filepath = 'files/' .$file['name'];

    if(file_exists($filepath))
    {
        header('Content-Type: application/octet-stream');
        
        header('Content-Description: File Transfer');

        header('Content-Disposition: attachment; filename=' .
        basename($filepath));

        header('Expires: 0');

        header('Cache-Control: must-revalidate');
        header('Pragma:public');

        header('Content-Length:' . filesize('files/'.$file['name']));

        readfile('files/' . $file['name']);

        $newCount = $file['download'] + 1;

        $updateQuery = "UPDATE shs_thesis SET download = $newCount WHERE id=$id";

        mysqli_query($con,$updateQuery);

        exit;
    }
}


?>