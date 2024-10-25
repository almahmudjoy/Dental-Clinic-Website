<?php 

	include '../components/connect.php';

	if (isset($_COOKIE['admin_id'])) {
		$admin_id = $_COOKIE['admin_id'];
	}else{
		$admin_id = '';
		header('location:login.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DentiCare - dental clinic website template</title>

	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudeflare.com/ajax/libs/font-awesome/6.2.0.css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../css/admin_style.css?v=<?php echo "time"; ?>">
</head>
<body style="padding-left: 0;">

	<div class="main-container">
		<?php include '../components/admin_header.php'; ?>
	</div>


    <!-- sweetalert cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<!-- custom js link -->
	<script type="text/javascript" src="../js/admin_script.js"></script>

	<?php include '../components/alert.php'; ?>

</body>
</html>
