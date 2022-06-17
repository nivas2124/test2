<?php
if(isset($_POST['from']))
{
    $from = $_POST['from'];
    $to = $_POST['to'];

    require('var.php');
    $sql = "SELECT * FROM `memo` WHERE CONVERT(date, Date) BETWEEN '$from' AND '$to' RDER BY `Date` ASC";
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
          
         echo $sql;

    }else{
        echo 'wrong' ;
        echo $sql;
    }


}
else{

    echo 'doomed';
}

?>