<?php
 $serevername="localhost";
 $username="root";
 $password="";
 $dbase="enrolluser";
  
//  session_start();

 $conn = mysqli_connect($serevername,$username,$password,$dbase);
 if(!$conn){
    die("connection faild!" . mysqli_connect_error());
 }
 else{
    $username = $_POST['name'];
    $mobile =$_POST['mobile'];
    $email = $_POST['email'];
    $query = "INSERT into data values(NULL,'$username','$email','$mobile')";
    if (mysqli_query($conn, $query)) {
        ?>
        <script>
          alert('You Enrolled Successfully');
        </script>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/cogent/index.html">
          <?php
         
      } else {
        ?>
        <script>
          alert(' Error');
        </script>
          <?php
      }
mysqli_close($conn);
 }
?>