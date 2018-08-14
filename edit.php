 <?php
	include_once('config.php');
 
 if( isset($_POST['eid']) )
	{
		$employee_name = $_POST['employee_name'];
		$employee_id = $_POST['employee_id'];
		$joining_date = $_POST['joining_date'];
		$eid = $_POST['eid'];
		$sql  = "UPDATE test SET employee_name='" . $employee_name . "' WHERE id=" .$eid;
		$sql = "UPDATE test SET employee_name='" . $employee_id . "' WHERE id=" .$eid;
		$sql = "UPDATE test SET employee_name='" . $joining_date . "' WHERE id=" .$eid;

		if ($db->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}
	}
 
 
	if( isset($_REQUEST['eid']) )
	{
		$eid = $_REQUEST['eid'];

	$sql = "SELECT * FROM test  WHERE id=" .$eid;
	$result = $db->query($sql);
	if (!$row = $result->fetch_assoc())
	exit("Employee Not Found");
	
	}
$db->close();
?>
<script>
function validateForm() {
    var x = document.forms["myForm"]["employee_name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
	}
   var z = document.forms["myForm"]["employee_id"].value;
	if (z == "") {
        alert("id must be filled out");
        return false;
	}
	if(z.match(/^\d+/)){
			 alert("please enter corect employee id");
		     return false;
	 }
	var re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;

    if(form.joining_date.value != '' && !form.joining_date.value.match(re)) {
      alert("Invalid date format: " + form.startdate.value);
      form.startdate.focus();
      return false;
    }
 
}
</script>
<form name="myForm" action="welcome.php"
onsubmit="return validateForm()" method="post">
Employee Name:	<input type="text" name="employee_name" value="<?php echo $row['employee_name']; ?>"><br />
Employee ID: <input type="text" name="employee_id" value="<?php echo $row['employee_id']; ?>"><br />
Employee Joining Date: <input type="text" name="joining_date" value="<?php echo $row['joning_date']; ?>">
<input type="hidden" name="eid" value="<?php echo $_REQUEST['eid']; ?>"/>
<input type="submit" value=" Update "/>
</form>
