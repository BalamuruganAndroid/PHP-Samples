<?php
	header("Access-Control-Allow-Origin:*");
	$host='192.168.5.55';
	$uname='root';
	$pwd='root';
	$db='laplace';
	$con= new mysqli($host, $uname, $pwd,$db);
	if ($con) 
	{
		$username = $_POST['username'];
		$sql = "select Password from logindata where UserName ='$username'";   
		$result = $con->query($sql);
		while($row = mysqli_fetch_assoc($result)) 
		{
			$password =$row;
		/*	 echo "Author:{$row['NAME']}  <br> ".
         "Count: {$row['POWERGENERATION']} <br> ".
         "Tutorial ID: {$row['MONTHLYDATA']} <br> ".
         "--------------------------------<br>";*/
		}
		echo json_encode($password);
	}

	
?>