<?php include('index_header.php'); ?>
<body>
<?php
include('dbcon.php');
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$Purpose = $_POST['purpose'];

$conn->query("insert into members (username,password,firstname,lastname,gender,image,Purpose) values ('$username','$password','$firstname','$lastname','$gender','images/download.png','$Purpose')");	
?>
<script>
	alert('Sign UP Success Please Login Your Account');
	window.location = 'index.php';
</script>
</body>
</html>