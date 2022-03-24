<?php
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Project submission</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
<div class="header">
    <nav>
        <div class="logo">
           <img src="images/logo.png">
           <span>Techies</span>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="uploading.php">Upload Project</a></li>
            <li><a href="search_project.php">Search Project</a></li>
            <li><a href="#">Check Plagiarism</a></li>
        </ul>
    </nav>
    <div class="content">
    <center>
    <form method="post" action="submit.php" enctype="multipart/form-data">
        <table cellpadding="3" cellspacing="10">
            <tr>
                <td>Student Name:</td>
                <td><input type="text" name="sname"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
          </tr>
            <tr>
                <td>College Name:</td>
                <td><input type="text" name="cname"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
          </tr>
            <tr>
                <td>Project Title:</td>
                <td><input type="text" name="ptitle"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
          </tr>
            <tr>
                <td>Upload File:</td>
                <td><input type="file" name="fileUpload"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
          </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    </div>
</div>

        
    </body>
</html>
                    ?>
