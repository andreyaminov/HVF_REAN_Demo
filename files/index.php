<?php
$srv = "<%= @srv %>";
$user = "<%= @user %>";
$pwd = "<%= @pwd %>";
$db = "<%= @db %>";

$conn = mysqli_connect($srv,$user,$pwd,$db) or die('Error connecting to MySQL server.');
?>

<head>
</head>
<style>
body {
  background-image: url('https://raw.githubusercontent.com/andreyaminov/HVF_REAN_Demo/master/HitachiBackground2.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>
<h1 style="color:white;">Simple Web App connected to external DB</h1>
<h2 style="color:white;">This concludes our demo, for more informaption please contact:</h2>

<table style="width:60%;color:white;">
<tr>
<th align="left">Firstname</th>
<th align="left">Lastname</th>
<th align="left">Role</th>
<th align="left">Email</th>
<th align="left">Phone</th>
</tr>


<?php
$sql = "SELECT * FROM cloud_architects";
$res = mysqli_query($conn, $sql) or die('Error querying database.');


while ($row = mysqli_fetch_array($res)) {
  echo '<tr><td>' . $row['firstname'] . '</td><td>' . $row['lastname'] . '</td><td>' . $row['role'] . '</td><td>' . $row['email'] . '</td><td>'. $row['phone'] . '</td></tr>';
}
?>




</table>

<p style="color:white;">Download the Forrester Report</p>

<img src="https://raw.githubusercontent.com/andreyaminov/HVF_REAN_Demo/master/ForresterReportQR.jpg" class="center" width="150" height="150">



</body>
</html>
