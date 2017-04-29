

<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    padding-right: 10px;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
    font-size:25px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

.a{
    list-style-type: none;
    margin: 0;
    padding: 0;
    padding-right: 10px;
    overflow: hidden;
    background-color: skyblue;
    position: fixed;
    top: 0;
    width: 100%;
    font-size:25px;

text-align: center;}



.b {
    list-style-type: none;
    margin: 0;
    padding: 0;
    padding-right: 10px;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 50px;
    width: 100%;
    font-size:25px;
}

 .head {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>
</head>
<body background="images/bill2.jpg">
<ul class="a">
  <a class="head"  href="#home"> J&J Daily Expense Tracker System</a>
</ul>
<ul class="b">
    <li><a  href="mybills.php">My Bills</a></li>
  <li><a  href="addbills.php">Add Bills</a></li>
  <li><a  href="deletebills.php">Delete Bills</a></li>
  <li><a  class="active" href="report.php">Report</a></li>
  <li><a   href="contact.php">Contact Us</a></li>
</ul>

<div style="padding:20px;margin-top:80px;:#1abc9c;height:1500px;color: white">

<br>
<table>
<tr>
<td>name</td><td>amount</td><td>date</td>
</tr>

<?php
include 'connection.php';
session_start();
$user=$_SESSION['user'];

if(($_SESSION['type']))
{$type=$_SESSION['type'];

 echo $_SESSION['type'];

$query="SELECT * FROM bills WHERE username='$user' and type='$type'";
        $result = mysqli_query($connection,$query);
        if (!$result) echo "INSERT failed: $query<br>" .      $connection->error . "<br><br>";
        else
        {  
        while($row=mysqli_fetch_row($result))
            {
                ?><tr><td><?php echo $row[1]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td></tr><?php

            } 
        }
    }
    else{
        ?> 
        <script type="text/javascript">
        window.confirm("select your bills !!");
        window.location="mybills.php";
        </script><?php }


?>

</table>
</div>

</body>
</html>

