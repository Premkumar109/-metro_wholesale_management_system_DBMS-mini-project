<?php
require_once 'dbconfig.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.html"><img src="images/metrologo.png" alt="LOGO" height="112" width="250"></a>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<h1 style="margin-left: 150px">The customer details are...</h1>
			<table width="1000" border="10" cellpadding="20" cellspacing="10" align="center" bgcolor=yellow>
	<tr>
		<th>CUSTOMER ID</th>
		<th>CUSTOMER NAME</th>
		<th>CUSTOMER MOBILE NUMBER</th>
		
		
	</tr>
							<?php
							$stmt = $DB_con->prepare('SELECT * FROM customers');
							$stmt->execute();
								while($row=$stmt->fetch(PDO::FETCH_ASSOC))		{
									echo "<tr>";

	echo "<td>".$row['cid']."</td>";

	echo "<td>".$row['cname']."</td>";

	echo "<td>".$row['mno']."</td>";

	
	echo "</tr>";
}

							?>
								
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>