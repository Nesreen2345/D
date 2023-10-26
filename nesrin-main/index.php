

<?php 
session_start();

include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>تسجبل الدخول</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h1>تسجيل الدخول</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		
		
     	<label>اسم المستخدم</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>كلمه المرور </label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">دخول</button> 
		 <a href="Signup.php">انشاء حساب</a>
	

     </form>
</body>
</html>