<?php
$sql = mysqli_connect("localhost", "root", "", "test");

if (!$sql) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  echo "ERROR! Connection Failed!";
  exit();
}


if (isset($_POST["submit"]))
{
	if (!empty($_POST["advocacies"])){
      $advocacies = $_POST["advocacies"];
		  foreach ($advocacies as $selected){
      //store selected in array $advocacy_string[]
      $advocacy_string[] = $selected;
		}
    //implode here
     $advocacy_implode = implode (', ', $advocacy_string);

    $query = "INSERT INTO test_implode VALUES ('',
                                             '$advocacy_implode')";
		 $data = mysqli_query($sql, $query);
		   if ($data){
		     echo "<script>alert('Data inserted to Database')</script>";
		   }
		   else{
		     echo "<script>alert('Error in query')</script>";
		   }
	}
	else{
		echo "<script>alert('Select at least one advocacy')</script>";
	}
}
?>
<html>
<form method="POST">
	<input type="checkbox" name="advocacies[]" value="animals"> Animals<br>
	<input type="checkbox" name="advocacies[]" value="children"> Children<br>
	<input type="checkbox" name="advocacies[]" value="education"> Education<br>
	<input type="checkbox" name="advocacies[]" value="environment"> Environment<br>
	<input type="checkbox" name="advocacies[]" value="faithbased"> Faith-Based<br>
	<input type="checkbox" name="advocacies[]" value="healthcare"> Health Care<br>
	<input type="checkbox" name="advocacies[]" value="homeless"> Homeless<br>
	<input type="checkbox" name="advocacies[]" value="hunger"> Hunger<br>
	<input type="checkbox" name="advocacies[]" value="lgbt"> LGBT<br>
	<input type="checkbox" name="advocacies[]" value="people with disabilities"> People with Disabilities<br>
	<input type="checkbox" name="advocacies[]" value="riskreducation"> Risk Reduction<br>
	<input type="checkbox" name="advocacies[]" value="seniorcitizens"> Senior Citizens<br>
	<input type="checkbox" name="advocacies[]" value="women"> Women<br>
	<input type="checkbox" name="advocacies[]" value="youth"> Youth<br>
    <br>
	<input type="submit" name="submit" value="INSERT TO DATABASE!!">
</form>
</html>
