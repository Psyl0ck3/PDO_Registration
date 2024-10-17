<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/model.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Record</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getDoctorsID = getDoctorsID($pdo, $_GET['Doctor_id']); ?>
	<form action="core/handleForms.php?Doctor_id=<?php echo $_GET['Doctor_id']; ?>" method="POST">

		<div class="container-docs" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getDoctorsID['FirstName']; ?></p>
			<p>Last Name: <?php echo $getDoctorsID['LastName']; ?></p>
			<p>Specialization: <?php echo $getDoctorsID['Specialization']; ?></p>
			<p>License number: <?php echo $getDoctorsID['License_number']; ?></p>
			<p>Address: <?php echo $getDoctorsID['Address']; ?></p>
			<p>Contact number: <?php echo $getDoctorsID['ContactNum']; ?></p>
			<p>Email: <?php echo $getDoctorsID['Email']; ?></p>
			<input type="submit" name="delete_btn" value="Delete">
		</div>
	</form>
</body>
</html>