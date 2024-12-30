<?php 
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $select_users = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? LIMIT 1");
    $select_users->execute([$email, $pass]);
    $row = $select_uses->fetch(Pdo::FETCH_ASSOC);

    if($select_admin->rowCount() > 0) {
        setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
        header('location:home.php');
    }else{
        $warning_msg[] = 'incorrect email or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentiCare - Dental Clinic Website</title>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">

</head>
<body>

    <?php include 'components/user_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>login now</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing<br>
               Lorem ipsum, dolor sit amet consectetur adipisicing</p>
               <span><a href="home.php">Home</a><i class="bx bx-right-arrow-alt"></i>login now</span>
        </div>
    </div>

<!-- Register Section Starts -->
<div class="form-container form">
<form action="" method="post" enctype="multipart/form-data" class="login">
		<h3>login now</h3>

		<div class="input-field">
			<p>your email <span>*</span></p>
			<input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box">
		</div>
		<div class="input-field">
			<p>your password <span>*</span></p>
			<input type="password" id="loginPass" name="pass" placeholder="enter your password" maxlength="50" required class="box">
			<label>
				<input type="checkbox" onclick="togglePasswordVisibility('loginPass')"> Show Password
			</label>
		</div>

		<p class="link">do not have an account <a href="register.php">register now</a></p>
		<button type="submit" name="login" class="btn">login now</button>
	</form>
    </div>	
    <!-- Register Section Ends -->


    <?php include 'components/user_footer.php'; ?>

    <!-- SweetAlert CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Custom JS Link -->
    <script type="text/javascript" src="/js/user_script.js"></script>

    <?php include '/components/alert.php'; ?>
</body>
</html>