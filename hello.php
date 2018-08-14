<!DOCTYPE html>
<html>
<body>

<?php
include_once("config.php");
$employee_name=$employee_id=$joining_date="";
$validate_flag = true;
$employee_name = "";
$employee_id = "";
$joining_date = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$validate_message = "";
$employee_name = $_POST['e_name'];
$employee_id = $_POST['e_id'];
$joining_date = $_POST['j_date'];

	if (trim($employee_name) == "")
	{
		$validate_message =  "Employee Name cannot be blank<br />";
		$validate_flag =false;
	}
	if (trim($employee_id) == "")
	{
		$validate_message .=  "Employee ID cannot be blank<br />";
		$validate_flag =false;
	}
	if (trim($joining_date) == "")
	{
		$validate_message .=  "joining date cannot be blank<br />";
		$validate_flag =false;
	}
	if(preg_match("/^(\d{4})-(\d{2})-(\d{2})$/", $joining_date, $matches))
	{
		$validate_message .= "wrong date input enter in yyyy-mm-dd";
		$validate_flag =false;
	}
	if(preg_match("/^[a-zA-Z ]*$/", $employee_id, $matches))
	{
		$validate_message .= "wrong employee id";
		$validate_flag =false;
	}
	if ($validate_flag )
	{
		$sql = "INSERT INTO test(`employee_name`,`employee_id`,`joning_date`) VALUES('" . $employee_name . "','" . $employee_id . "','" . $joining_date . "')";
		if ($db->query($sql) === TRUE) {
			header("Location:welcome.php");
		} else {
			echo "Error: " . $sql . "<br>" . $db->error;
		}
	}
}

?>

<?php 
	if($validate_flag == false)
	echo $validate_message;
?>
<form name="myForm" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>""
method="post">
Name: <input type="text" name="e_name" value="<?php echo $employee_name; ?>">

<br> </br>

employee id:<input type="text" name="e_id" value="<?php echo $employee_id; ?>">
<br> </br>

joining date:<input type="text" name="j_date">
<input type="submit" value="Submit">
</form>


</body>
</html>
