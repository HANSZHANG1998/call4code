  <?php
  	$conn = new mysqli('localhost:3306', 'root', '123456', 'c4c2020');

  	if (mysqli_connect_errno()) {
  		$error = "Server connection failed: ".mysqli_connect_error();
  		echo "<script type='text/javascript'>alert('".addslashes($error)."');</script>";
  	}

  ?>
