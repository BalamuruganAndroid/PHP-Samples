<?php
	
	$host='192.168.5.55';
	$uname='root';
	$pwd='root';
	$db='laplace';
	$con= new mysqli($host, $uname, $pwd,$db);
	if ($con) 
	{
		$sql="SELECT u.NAME,p.POWERGENERATION,m.MONTHLYDATA FROM users u,powergeneration p,MonthlyPowerGenData m WHERE u.ID = p.ID  AND p .ID = m.ID AND m.ID  = u.ID ";
		$result = $con->query($sql);
		$animals = array();
		while($row = mysqli_fetch_assoc($result)) 
		{
			$animalType[] = $row;
		}
		echo json_encode($animalType);
	}

	
?>