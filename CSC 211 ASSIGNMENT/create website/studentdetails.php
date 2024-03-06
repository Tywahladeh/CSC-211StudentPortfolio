<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h1> Bio Data form </h1>
    <fieldset>
        <form method="post" enctype="application" action="submitform.php">
            <label for="cru_number"> Cru number </label> <br>
            <input type="text" name="Cru_Number" placeholder="Enter Cru number" required="true"><br>
            <label for="Firstname"> Firstname: </label> 
            <input type="text"  name="Firstname" placeholder="enter your firstname" required="true"/><br>
             <label for="Surname"> Surname</label>
            <input type="date of birth" name="Date of Birth" required="true"></br> 
            <label for="level"> level:</label>
            <input type="number" name="level" placeholder="enter your level" required="true"/><br>
            <label for="gender"> Gender: </label>
            <select name="gender" id="">
                <option value="Male"> MALE/<option>
                <option value="Female">FEMALE/<option>
                <option name="nationality" value="Argentina"> Argentina </option>
                <option name="nationality" value="Berlin"> Berlin </option>
                <option name="nationality" value="Canada"> Canada </option>
                <option name="nationality" value="Nigeria">Nigeria  </option>
                <option name="nationality" value="South Africa">South Africa </option>
            </select>
            <label for="gender"> Gender </label> <br>
            <input type="radio" name="gender" value="male"/> </label for="MALE">Male </label> <br>
            <input type="radio" name="gender" value="female"> </label for="FEMALE"> FEMALE </label> <br>
            <label for="PASSPORT"> PASSPORT </label> <br>
            <input type="FILE" name="PASSPORT" />
            <button> submit </button>            
        </form>
    </fieldset>
</body>
</html>