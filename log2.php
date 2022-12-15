<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>sweet alert</title>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
<?php
/* echo "<pre>";
print_r($_POST);
echo "</pre>"; */

session_start();?>
<?php

        if(isset($_REQUEST['user'])){
				//connection
                  include("connect.php");
          $user = $_POST['user'];
          $pass = $_POST['pass'];

          $sql="SELECT * FROM `thitima`
          WHERE  user='".$user."'
          AND  pass='".$pass."' ";
          $result = mysqli_query($conn,$sql);

         
          if(mysqli_num_rows($result)==1){

            $row = mysqli_fetch_array($result);
              $_SESSION["UserID"] = $row["id"];//ประกาศตัวแปรUserIDไว้เพื่อส่งค่า
              $_SESSION["User"] = $row["name"]." ".$row["lastname"];
                Header("Location: in.php");

          }else{
            
            echo '
        		<script>
        			setTimeout(function() {
        			swal({
        					title: "",
        					text: " รหัสผ่านไม่ถูกต้อง",
        					type: "warning"
        				}, function() {
        				window.location = "index.php";
        			});
            }, 500);
        		</script>
        		';
        		}
        }
?>
