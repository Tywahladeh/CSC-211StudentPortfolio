//UDOH DAVID FRIDAY CRU2324252 COMPUTER SCIENCE
<?php
if(isset($_POST['submit'])){
	$num21=$_POST['name1text'];
	$num22=$_POST['name2text'];
	$num24=$_POST['drop'];
	switch($num24){
		case "add":
		 $num215= $num21+$num22;
		 break;
		case "sub":
		 $num215= $num21-$num22;
		 break;
		case "div":
		 $num215= $num21/$num22;
		 break;
		case "mul":
		 $num215= $num21*$num22;
		 break;
   }
}	
?>
<!DOCTYPE html>
<html>

<head>
	<title>Simple CAlculator </title>
	<meta charset="utf-8">
	<style>
		* { 
			padding: 0;
			margin: 0;
			font-size: 20px;
		  }
	   .myclass { 
		   width: 600px;
		   height: 600px;
		   background: linear-gradient(#4839B0,#E50A86);
		   border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
		   position: absolute;
		   text-align: center;
		   box-shadow: 20px 6px 0px rgb(128 128 128/ 26%);
		   font-size: inherit;
		   padding: 40px 30px 50px 800px;
	   }
	    form { 
			position: absolute;
			left: 50%;
			top: 45%;
			transform: translate(-50%,-50%);
		}
	    input[type="number"] { 
		   border : 2px solid black;
		   background: white;
		   color: black;
		 } 
		   input { 
			width: 300px;
			height: 40px;
			margin-top: 20px;
		    border-radius:40px;
		   
	   }
	   input:hover { 
		   background: blue;
	   }  
	   </style>
</head>

<body>

	<div class="myclass">
	 <form action="calculator.php" method="POST">
		<label for="name1text"> Enter First Number </label>
		<input type="text" name="name1text" placeholder="Enter your first namumber" value="<?php echo $num21;?>"><br>
		<select name="drop">
			<option> Please select an operation </option>
			<option value="add">add </option>
			<option value="sub"> subtract </option>
			<option value="div"> divide </option>
			<option value="mul"> multiply </option>
		</select> <br>
		<label for="name2text"> Enter second Number </label>
		<input type="text" name="name2text" placeholder="Enter your second number" value="<?php echo $num22;?>"><br>
		
		<input type="submit" name="submit" value"submit" />
		
      <h5> YOUR ANSWER: </h5>
      <span> <?php echo $num215;?> </span>
   </div>
</body>

</html>
