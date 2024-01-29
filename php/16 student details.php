<html>
<body>
    <form action="" method="REQUEST">
        Name   :   <input type=text name="name1"><br><br>
        Email  :  <input type=text name=email><br><br>
        Address: <textarea name=address> </textarea><br><br>
	Gender : <input type="radio" name="gender" 
                <?php if (isset($gender) && $gender=="female") echo "checked";?>
           	value="female">Male
          	<input type="radio" name="gender"
          	<?php if (isset($gender) && $gender=="male") echo "checked";?>
	  	value="male">Female
          	<input type="radio" name="gender"
          	<?php if (isset($gender) && $gender=="other") echo "checked";?>
          	value="other">Other </br></br>

        Date Of Birth : <input type="date" name="dateOfBirth"> </br></br>

       <input type="submit" value="submit" name="formsubmit"> </br></br>
</form>
</body>
</html>


<?php
if(isset($_GET['formsubmit']))
{
    echo "Name  : " . $_REQUEST["name1"] . "<br>";
    echo "Email : " . $_REQUEST["email"] . "<br>";
    echo "Address : " . $_REQUEST["address"] . "<br>";
    echo "Gender :" . $_REQUEST["gender"]. "<br>";
    echo "Date of Birth : ".$_REQUEST["dateOfBirth"]. "<br>";
}
?>
