<?php
include 'filesLogic.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <h3>Upload Files</h3>
            <label for="">Course:</label>
                            <select name="course" id="" class="form-control p-2">
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

                            <label for="">Batch:</label>
                            <input type="date" name="batch" id="">
            <input type="file" name="myfile">
            <button type="submit" name="submit">Upload</button>
        </form>
    </div>

    <div class="row">
         <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Download</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            <?php foreach($files as $file): ?>

                <tr>
                    <td><?php echo $file['id'];?></td>
                    <td><?php echo $file['name'];?></td>
                    <td><?php echo $file['size'] / 1000 . "KB";?></td>
                    <td><?php echo $file['download'];?></td>
                    <td>
                        <a href="index.php?file_id=<?php echo $file['id']?>"><?php echo $file['name'] ?></a>
                    </td>
                </tr>

                <?php endforeach ; ?>
            </tbody> 
         </table>
    </div>
</div>
</body>
</html>