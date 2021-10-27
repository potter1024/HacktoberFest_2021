<?php
	
	$con = mysqli_connect("127.0.0.1","root","","data");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "error";
	  exit();
	}

	$sql="select * from test";
	
	$result=$con->query($sql);
	if($result->num_rows > 0)
	{
		while($row=$result->fetch_array())
		{
			print($row[0].$row[1]);
		}

	}
?>