<?php session_start();?>
<?php

if (!$_SESSION["UserID"]){

	  Header("Location: index.php");

}else{?>
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
	 <script>
       setTimeout(function() {
        swal({
            title: "",
            text: " <?php echo ($_SESSION['User']);?> ",
            type: "success"
        }, function() {
            window.location = "show.php"; //หน้าที่ต้องการให้กระโดดไป

        });
    }, 1000);
</script>
</body>
</html>
<!-- คู่มือ https://sweetalert.js.org/docs/ -->
<!-- ตย. code จาก  https://stackoverflow.com/questions/37358423/how-to-redirect-page-after-click-on-ok-button-on-sweet-alert -->
<?php }?>