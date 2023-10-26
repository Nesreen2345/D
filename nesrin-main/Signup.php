<?php
session_start(); 
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="Signup.php" method="post"> 
     	<h2>انشاء حساب</h2>
		 
		
     <input type="text" name="user_name1" placeholder="إسم المستخدم"><br>


     <input type="password" name="password1" placeholder="كلمة المرور"><br>

     <button type="submit" name="add">انشاء حساب</button>
     </form>

<?php
//insert
if(isset($_POST['add'])) {
    $username = $_POST['user_name1'];
    $passwordu = $_POST['password1'];
    $query = "INSERT INTO users (user_name, password) VALUES ('$username', '$passwordu')";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        echo "تم انشاء حسابك بنجاح";
    } else {
        die('error');
    }
}
?>
</body>
</html>
