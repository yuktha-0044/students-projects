<html>
    <head>
        <title>Upload File</title>
</head>
<body>
    <form method="post" action="submit.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>student name:</td>
                <td><input type="text" name="sname"></td>
            </tr>
            <tr>
                <td>College name:</td>
                <td><input type="text" name="cname"></td>
            </tr>
            <tr>
                <td>Project Title:</td>
                <td><input type="text" name="ptitle"></td>
            </tr>
            <tr>
                <td>Upload File:</td>
                <td><input type="file" name="fileUpload"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
    </html>