<link rel="StyleSheet" href="STYLE.css">
<?php

$mysqli = new mysqli("localhost", "root", "", "dayskill");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT ID, Name, Address, phone, city, mailid
FROM customers WHERE ID = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($ID, $Name, $Address, $phone, $city, $mailid);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Owner ID</th>";
echo "<td>" . $ID . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Owner Name</th>";
echo "<td>" . $Name . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Owner Name</th>";
echo "<td>" . $Address . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Phone nuber</th>";
echo "<td>" . $phone . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>City</th>";
echo "<td>" . $city . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>mailid</th>";
echo "<td>" . $mailid . "</td>";
echo "</tr>";
echo "</table>";
?>
