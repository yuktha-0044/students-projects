<?php  
      $errors= array(); 
      $file_name = $_FILES['fileUpload']['name']; 
      $file_size =$_FILES['fileUpload']['size']; 
      $file_tmp =$_FILES['fileUpload']['tmp_name']; 
      $file_type=$_FILES['fileUpload']['type']; 
     // $file_ext=strtolower(end(explode('.',$_FILES['fileUpload']['name'])));
      $tmp = explode('.', $file_name);
      $file_ext = end($tmp);
       
      $extensions= array("docx","pdf","doc"); 
       
      if(in_array($file_ext,$extensions)=== false){ 
         $errors[]="extension not allowed, please choose correct file type."; 
      } 
       
      if($file_size > 6291456){ 
         $errors[]='File size must be less than 6 MB'; 
      } 
       
      if(empty($errors)==true){ 
         $servername="localhost";
         $username="root";
         $password="";
         $dbname="group";
         $sname=$_POST['sname'];
         $cname=$_POST['cname'];
         $ptitle=$_POST['ptitle'];
         $conn=mysqli_connect($servername, $username, $password, $dbname);

         if(!$conn)
         {
         die("connection failed: ".mysqli_connect_error());
         }
         $sql = "SELECT COUNT(*) FROM projects where pname='$file_name'";  
         $retval=mysqli_query($conn, $sql);  
           
         if(mysqli_num_rows($retval) > 1){ 
         echo "File already exists!"; 
   }
         else{
         $sql="INSERT INTO projects(sname,cname,ptitle,pname)
         VALUES('$sname','$cname','$ptitle','$file_name')";
         if(mysqli_query($conn,$sql))
         {
         echo " Inserted successfully";
         }
         move_uploaded_file($file_tmp,"uploads/".$file_name); 
         echo "File Uploaded Successfully"; 
      }
      }else{ 
         print_r($errors); 
      } 
?>