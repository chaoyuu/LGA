<<<<<<< HEAD
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE Username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
           if($row['Username'] === $uname &&  $row['Password'] === $pass) {
               $_SESSION['Username'] =$row['Username'];
               $_SESSION['Name'] =$row['Name'];
               $_SESSION['Id'] =$row['Id'];
               header("Location: Home.php");
               exit();
                  
              }else {
                header("Location: index.php?error=Incorect User name or password");
                exit();
              }
           }else{
              header("Location: index.php?error=Incorect User name or password");
              exit();
           }
        }
      
 
		
	
	
}else{
	header("Location: index.php");
	exit();
=======
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE Username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
           if($row['Username'] === $uname &&  $row['Password'] === $pass) {
               $_SESSION['Username'] =$row['Username'];
               $_SESSION['Name'] =$row['Name'];
               $_SESSION['Id'] =$row['Id'];
               header("Location: Home.php");
               exit();
                  
              }else {
                header("Location: index.php?error=Incorect User name or password");
                exit();
              }
           }else{
              header("Location: index.php?error=Incorect User name or password");
              exit();
           }
        }
      
 
		
	
	
}else{
	header("Location: index.php");
	exit();
>>>>>>> 6492c4f9982350bc4dc7a9406a9630b7d50bd2b1
}