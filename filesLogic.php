<?php

include_once("./connections/connection.php");
$con = connection();

$sql = "SELECT * FROM files";
$result = mysqli_query($con,$sql); 
$files = mysqli_fetch_all($result,MYSQLI_ASSOC);

$sql1 = "SELECT * FROM files WHERE course = 'Bachelor of Science in Business Administration Major in Marketing Management'";
$result1 = mysqli_query($con,$sql1); 
$files1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);

$sql2 = "SELECT * FROM files WHERE course = 'Bachelor of Science in Business Administration Major in Financial Management'";
$result2 = mysqli_query($con,$sql2); 
$files2 = mysqli_fetch_all($result2,MYSQLI_ASSOC);

$sql3 = "SELECT * FROM files WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Management'";
$result3 = mysqli_query($con,$sql3); 
$files3 = mysqli_fetch_all($result3,MYSQLI_ASSOC);

$sql4 = "SELECT * FROM files WHERE course = 'Bachelor of Science in Information Technology'";
$result4 = mysqli_query($con,$sql4); 
$files4 = mysqli_fetch_all($result4,MYSQLI_ASSOC);

$sql5 = "SELECT * FROM files WHERE course = 'Bachelor of Science in Hotel Restaurant Management'";
$result5 = mysqli_query($con,$sql5); 
$files5 = mysqli_fetch_all($result5,MYSQLI_ASSOC);

$sql6 = "SELECT * FROM files WHERE course = 'Bachelor of Science in Tourism Management'";
$result6 = mysqli_query($con,$sql6); 
$files6 = mysqli_fetch_all($result6,MYSQLI_ASSOC);

$sql7 = "SELECT * FROM files WHERE course = 'Bachelor of Science in Computer Science'";
$result7 = mysqli_query($con,$sql7); 
$files7 = mysqli_fetch_all($result7,MYSQLI_ASSOC);

$sql8 = "SELECT * FROM files WHERE course = 'Bachelor of Science in Business Administration Major in Human Resources Development Management'";
$result8 = mysqli_query($con,$sql8); 
$files8 = mysqli_fetch_all($result8,MYSQLI_ASSOC);

$sql9 = "SELECT * FROM files WHERE course = 'Bachelor of Science in Hospitality Management'";
$result9 = mysqli_query($con,$sql9); 
$files9 = mysqli_fetch_all($result9,MYSQLI_ASSOC);

$sql10 = "SELECT * FROM files WHERE course = 'Bachelor of Technical Vocational Teacher Education'";
$result10 = mysqli_query($con,$sql10); 
$files10 = mysqli_fetch_all($result10,MYSQLI_ASSOC);

if(isset($_POST['submit']))
{
    $course = $_POST["course"];
    $batch = $_POST["batch"];

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
            $sql = "INSERT INTO files (name,size,download,course,batch) VALUES('$filename','$size',0,'$course','$batch')";

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

    $sql = "SELECT * FROM files WHERE id=$id";

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

        $updateQuery = "UPDATE files SET download = $newCount WHERE id=$id";

        mysqli_query($con,$updateQuery);

        exit;
    }
}


?>