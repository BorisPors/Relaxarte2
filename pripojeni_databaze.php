<?
$conn = mysqli_connect ("a025um.forpsi.com", "f136355", "RuS6t2DS","f136355") or die ("Nepodařilo se připojit k databázovému serveru");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>