<?php
$server="localhost";
$user="root";
$password="";
$dbname="studentdb1";
$dbconnect = mysqli_connect($server,$user,$password,$dbname);
if($dbconnect){
	echo"connection successful";
}
else { 
	mysqli_connect_error();
}
$CRU_NUMBER=mysqli_real_escape_string($dbconnect, $_REQUEST['CRU_NUMBER']);
$FIRSTNAME=mysqli_real_escape_string($dbconnect,$_REQUEST['FIRSTNAME']);
$SURNAME=mysqli_real_escape_string($dbconnect,$_REQUEST['SURNAME']);
$DATE_OF_BIRTH=mysqli_real_escape_string($dbconnect,$_REQUEST['DATE_OF_BIRTH']);
$LEVEL=mysqli_real_escape_string($dbconnect,$_REQUEST['LEVEL']);
$GENDER=mysqli_real_escape_string($dbconnect,$_REQUEST['GENDER']);
$PROGRAMME=mysqli_real_escape_string($dbconnect,$_REQUEST['PROGRAMME']);

$SUBMITFORMS="INSERT INTO biodata(CRU_NUMBER,FIRSTNAME,SURNAME,DATE_OF_BIRTH,LEVEL,GENDER,PROGRAMME) VALUES('$CRU_NUMBER','$FIRSTNAME','$SURNAME','$DATE_OF_BIRTH','$LEVEL','$GENDER','$PROGRAMME')";
$result = mysqli_query($dbconnect,$SUBMITFORMS);
if($result)
{
	echo "record submitted";
}
else{
	echo "not submitted";
}
?>
<!DOCTYPE html>
	
<html>

<head>
	<title>untitled</title>
	<meta charset=utf-8" />
	<style> 
		body {
			padding: 0;
			margin:0;
			background-color: grey;
			}
		form {
			margin: 50px 50px 50px 200px;
			border: 2px solid black;
			padding: 50px;
			line-height: 30px;
			font-size: 20px;
			}	
	</style>
	
</head>
<p> UDOH DAVID FRIDAY CRU2324252 COMPUTER SCIENCE</p>
<body>
  <form method="POST" enctype="application" action="answerform.php">
	<label for="CRU_NUMBER"> CRU NUMBER: </label>
		<input type="text" name="CRU_NUMBER" placeholder="Enter your CRU Number" required /> <br>

	<label for="FIRSTNAME">FIRSTNAME: </label>
		<input type="text" name="FIRSTNAME" placeholder="Enter your firstname" required/> <br>

	<label for="SURNAME"> SURNAME</label>
		<input type="SURNAME" name="SURNAME" placeholder="Enter your surname" required /> <br>

	<label for="DATE_OF_BIRTH"> DATE-OF-BIRTH: </label>
		<input type="date" name="DATE_OF_BIRTH" placeholder="Enter your date_of_birth" required /> <br>

	<label for="LEVEL"> LEVEL: </label>
		<input type="number" name="LEVEL" placeholder="Enter your level" required/> <br>
     <label for="GENDER"> GENDER: </label>
     <select name="GENDER">
			<option> Please select an option </option>
			<option value="MALE">MALE </option>
			<option value="FEMALE">FEMALE </option>
			
		</select> <br>
    <label for="PROGRAMME"> PROGRAMME: </label>
	<select name="PROGRAMME">
			<option> Please select an option </option>
			<option value="ACCOUNTING">ACCOUNTING </option>
			<option value="BANKING AND FINANCE"> BANKING AND FINANCE </option>
			<option value="COMPUTER SCIENCE"> COMPUTER SCIENCE </option>
			<option value="ICT"> INFORMATION AND COMMUNICATION TECHNOLOGY </option>
		</select> <br>
		
		<input type="submit" value="submit"
	</form>
  <p><?php echo "$CRU_NUMBER $FIRSTNAME $DATE_OF_BIRTH $LEVEL $GENDER $PROGRAMME " ?> </p>
</body>

</html>
