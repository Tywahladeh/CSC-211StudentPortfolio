<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <form method="post" enctype="application" action="submitform.php">
        <label for="cru_number">CRU number:</label>
             <input type="text" name="CRU_Number" placeholder="enter your CRU number" required="true"></br>
        <label for="firstname">Firstname:</label>
            <input type="text" name="Firstname" placeholder="enter your firstname" required="true"></br>
        <label for="surname">Surname:</label>
            <input type="text" name="Surname" placeholder="enter your surname" required="true"></br>
        <label for="Date Of Birth">Date of Birth:</label>
            <input type="date" name="Date_Of_Birth" placeholder="Enter your date of birth" required="true"></br>
        <label for="Level">Level:</label>
            <input type="number" name="Level" placeholder="enter your level" required="true"></br>
        <label for="Gender">Gender:</label>
            <select name="Gender" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select></br>
        <label for="programme">Programme:</label>
            <select name="Programme" id="">
                <option value="">Select your course of study</option>
                <option value="Accounting">Accounting</option>
                <option value="Banking & Finane">Banking & Finance</option>
                <option value="Computer Science">Computer Science</option>
                <option value="ICT">Information and Communication Technology</option>
            </select>
<input type="submit" name="submit" value="submit-details"></br>
</form>
</body>
</html>