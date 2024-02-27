<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h1{
            color: red;
            background-color: black;
            padding-top: 30px;
            padding-left: 50px;
            margin-top: -7px;
            margin-right: -13px;
            margin-left: -13px;
            text-align: center;
            vertical-align: top;
        }

        .bot{
            color: white;
            background-color: blue;
            margin-top: 10px;
            margin-bottom: 16px;
            margin-right: 9px;
            padding-left: 9px;
            padding-right: 9px;
            padding-top: 16px;
            padding-bottom: 16px;
            border-radius: 30px;
        }

    </style>
   <fieldset>
   <form action="submitform.php"  method="post" enctype="application" >

   <h1> PLEASE FILL THE FORM </h1>

<label for="cru_number">CRU number:</label>
<input type="text" name="CRU_Number" placeholder="CRU number" required="true"> <br>


<label for="firstname">Firstname: </label>
<input type="text" name="firstname" placeholder="Firstname" reuquired="true" > <br>

<label for="surname">Surname: </label>
<input type="text" name="Surname" placeholder="Surname" required="true"> <br>

<label for="date of birth">Date of Birth: </label>
<input type="date" name="Date_of_Birth" required="true"> <br>

<label for="level">Level: </label>
<input type="number" name="Level" placeholder="Level" required="true"> <br>

<label for="Gender">Gender: </label>
<select name="gender" id="">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select> <br>

<label for="programme">Programme: </label>
<select name="programme" id="">
    <option value="Select">Select</option>
    <option value="ICT">ICT</option>
    <option value="Compuetr_Science">Computer Science</option>
    <option value="Biochemistry">Biochemistry</option>
    <option value="Microbiology">Microbiology</option>
    <option value="Geology">Geology</option>
</select> <br>

<input class="bot" type="submit" name="submit" value="submit_details" >
    
</form>
   </fieldset>

</body>
</html>
