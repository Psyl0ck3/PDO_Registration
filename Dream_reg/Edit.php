<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/model.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit record</title>
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
	<?php $getDoctorsID = getDoctorsID($pdo, $_GET['Doctor_id']); ?>
	<form action="core/handleForms.php" method="POST">
        <p>
			<label for="Doctor_id">First Name</label> 
			<input type="hidden" name="Doctor_id" value="<?php echo $getDoctorsID['Doctor_id']; ?>">
		</p>
		<p>
			<label for="FirstName">First Name</label> 
			<input type="text" name="FirstName" value="<?php echo $getDoctorsID['FirstName']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="LastName" value="<?php echo $getDoctorsID['LastName']; ?>">
		</p>
		<p>
			<label for="Specialization">Specialization</label>
			<input type="text" name="Specialization" value="<?php echo $getDoctorsID['Specialization']; ?>">
		</p>
		<p>
			<label for="License_number">License number</label>
			<input type="text" name="License_number" value="<?php echo $getDoctorsID['License_number']; ?>">
		</p>
		<p>
			<label for="address">Address</label>
			<input type="text" name="Address" value="<?php echo $getDoctorsID['Address']; ?>">
		</p>
		<p>
			<label for="contact">Contact Number</label>
			<input type="text" name="ContactNum" value="<?php echo $getDoctorsID['ContactNum']; ?>"></p>
		<p>
			<label for="Email">Email</label>
			<input type="text" name="Email" value="<?php echo $getDoctorsID['Email']; ?>">
            
			<button type="submit" name="edit_btn">Submit</button>
		</p>
	</form>
</body>
</html> 