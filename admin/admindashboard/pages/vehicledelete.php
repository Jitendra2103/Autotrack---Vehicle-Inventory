<?php require_once("_dbconnect.php");

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$deletevehicle = $mysqli->prepare("delete from vehicle where vehicle_id = ?");
	$deletevehicle->bind_param('i',$id);
	
	$deletevehicleresult =$deletevehicle->execute();
	// echo $mysqli->error;	
	// die;
	if($deletevehicleresult)
	{
		header("Location:vehicle.php?msg=success");
	}
	else
	{
		header("Location:vehicle.php?msg=failure");
	}	
}

?>