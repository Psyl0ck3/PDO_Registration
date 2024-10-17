<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/model.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
	<h3>Welcome to Mystic Falls Doctor's Record. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
        <input type="hidden" name="Doctor_id" value="<?php echo isset($getDoctorsID['Doctor_id']) ? $getDoctorsID['Doctor_id'] : ''; ?>">
		<p><label for="FirstName">First Name</label> <input type="text" name="FirstName"></p>
		<p><label for="LastName">Last Name</label> <input type="text" name="LastName"></p>
		<p><label for="Specialization">Specialization</label> <input type="text" name="Specialization"></p>
		<p><label for="LicenseNums">License Number</label> <input type="text" name="License_number"></p>
		<p><label for="add">Address</label> <input type="text" name="Address"></p>
		<p><label for="Contact">Contact number</label> <input type="text" name="ContactNum"></p>
		<p><label for="mail">Email</label> <input type="text" name="Email">
	    <button type="submit" name="insert_btn">Submit</button>

		</p>
	</form>

	<table style="width:70%; margin-top: 50px;">
	  <tr>
	    <th>Doctor ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Specialization</th>
	    <th>License number</th>
	    <th>Address</th>
	    <th>Contact_num</th>
	    <th>Email</th>
	    <th>Date</th>
	  </tr>

	  <?php $seeAllDocReg = seeAllDocReg($pdo); ?>
	  <?php foreach ($seeAllDocReg as $row) { ?>
	  <tr>
        <td><?php echo $row['Doctor_id']; ?></td>
	  	<td><?php echo $row['FirstName']; ?></td>
	  	<td><?php echo $row['LastName']; ?></td>
	  	<td><?php echo $row['Specialization']; ?></td>
	  	<td><?php echo $row['License_number']; ?></td>
	  	<td><?php echo $row['Address']; ?></td>
	  	<td><?php echo $row['ContactNum']; ?></td>
	  	<td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['date_added']; ?></td>
	  	<td>
	  		<a href="Edit.php?Doctor_id=<?php echo $row['Doctor_id'];?>">Edit</a>
	  		<a href="Delete.php?Doctor_id=<?php echo $row['Doctor_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>