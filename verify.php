<?php
if (isset($_POST['voterid']))    

{    

$voterid=$_POST['voterid'];

$voterid=stripcslashes($voterid);

$con=mysqli_connect("localhost", "root", "");

mysqli_select_db($con,"voterid");

$result=mysqli_query($con,"select * from voterinfo where voteid='$voterid'")
 or die("no data available".mysql_error()); 

$row=mysqli_fetch_array($result);

if ($row['voteid']==$voterid)

{

header('location:avm4.php');

}

else
{
echo("data not found");
}

}
?>
