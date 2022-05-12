<?php

// database connection code

if(isset($_POST['txtName']))

{

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('sql6.freesqldatabase.com', 'sql6491786', 'Cny6i2kJ22','sql6491786');



// get the post records



$txtName = $_POST['txtName'];

$txtEmail = $_POST['txtEmail'];

$txtPhone = $_POST['txtPhone'];

$txtMessage = $_POST['txtMessage'];



// database insert SQL code

$sql = "INSERT INTO `memo`(`6 Fiber`, `12 Fiber`, `90x10`, `95x05`, `80x20`, `85x15`, `70x30`, `75x25`, `60x40`, `65x35`, `50x50`, `55x45`, `joint_closure`, `stay_drum`, `bobbin`, `patch_cord`) VALUES ('$txtName','','','','','','', '$txtEmail','','','','', '$txtPhone','','', '$txtMessage')";

// insert in database 

$rs = mysqli_query($con, $sql);

if($rs)

{

	echo "Contact Records Inserted";

}

}

else

{

	echo "Are you a genuine visitor?";

	

}

?>

