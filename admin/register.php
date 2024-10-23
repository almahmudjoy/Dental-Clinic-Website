<?php 

	include '../components/connect.php';

	$warning_msg = [];
	$success_msg = [];

	if (isset($_POST['register'])) {
		$id = unique_id();

		$name = $_POST['name'];
		$name = filter_var($name, FILTER_SANITIZE_STRING);

		$email = $_POST['email'];
		$email = filter_var($email, FILTER_SANITIZE_STRING);

		$pass = sha1($_POST['pass']);
		$pass = filter_var($pass, FILTER_SANITIZE_STRING);

		$cpass = sha1($_POST['cpass']);
		$cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

		$image = $_FILES['image']['name'];
		$image = filter_var($image, FILTER_SANITIZE_STRING);
		$ext = pathinfo($image, PATHINFO_EXTENSION);
		$rename = unique_id().'.'.$ext;
		$image_size = $_FILES['image']['size'];
		$image_tmp_name = $_FILES['image']['tmp_name'];
		$image_folder = '../uploaded_files/'.$rename;

		$select_admin = $conn->prepare("SELECT * FROM `admin` WHERE email = ?");
		$select_admin->execute([$email]);

		if($select_admin->rowCount() > 0){
			$warning_msg[] = 'Email already taken!';
		}else{
			if($pass != $cpass) {
				$warning_msg[] = 'Confirm password does not match!';
			}
			else{
				$insert_admin = $conn->prepare("INSERT INTO `admin`(id, name, email, password, image) VALUES(?, ?, ?, ?, ?)");
				$insert_admin->execute([$id, $name, $email, $pass, $rename]); // use $pass instead of $cpass

				// Ensure file upload
				if(move_uploaded_file($image_tmp_name, $image_folder)){
					$success_msg[] = 'New admin registered! Please login now.';
				} else {
					$warning_msg[] = 'File upload failed. Please try again.';
				}
			}
		}
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
<!-- register section starts -->

<div class="form-container form">
	<form action="" method="post" enctype="multipart/form-data" class="register">
		<h3>register now</h3>

		<!-- Display warning messages -->
		<?php if(!empty($warning_msg)): ?>
			<div class="alert alert-warning">
				<?php foreach($warning_msg as $msg): ?>
					<p><?php echo $msg; ?></p>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<!-- Display success messages -->
		<?php if(!empty($success_msg)): ?>
			<div class="alert alert-success">
				<?php foreach($success_msg as $msg): ?>
					<p><?php echo $msg; ?></p>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<div class="flex">
			<div class="col">
				<p>your name <span>*</span></p>
				<input type="text" name="name" placeholder="enter your name" maxlength="50" required class="box">
				<p>your email <span>*</span></p>
				<input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box">
			</div>

			<div class="col">
				<p>your password <span>*</span></p>
				<input type="password" name="pass" placeholder="enter your password" maxlength="50" required class="box">
				<p>confirm password <span>*</span></p>
				<input type="password" name="cpass" placeholder="confirm your password" maxlength="50" required class="box">
			</div>
		</div>
		<div class="input-field">
			<p>select profile <span>*</span></p>
			<input type="file" name="image" accept="image/*" required class="box">
		</div>
		<p class="link">already have an account <a href="login.php">login now</a></p>
		<button type="submit" name="register" class="btn">register now</button>
	</form>
</div>	

<!-- register section ends -->

<!-- sweetalert cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<!-- custom js link -->
	<script type="text/javascript" src="../js/admin_script.js"></script>

	<?php include '../components/alert.php'; ?>

</body>
</html>
