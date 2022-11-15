<?php
sleep(1);
include('../config.php');

$username=$_POST['username'];
$email_id=$_POST['email_id'];
$mobile=$_POST['mobile'];

$query=mysqli_query($conn,"insert into stduent_registration
	                                                       SET username='$username',
	                                                           email_id='$email_id',
	                                                           mobile='$mobile'");

if($query)
{
	$attr=array('status'=>'success','msg'=>'Record submitted successfully !');

}
else
{
	$attr=array('status'=>'error','msg'=>'Error ! Try after sometime');

}


echo json_encode($attr);