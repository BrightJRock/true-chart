<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dv";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$sql = "SELECT *, count(*) FROM data ORDER BY month ";
if ($result = $conn->query($sql)) {
    $areaLabel = array();
    $areaCount = array();
    while ($row = $result->fetch_assoc()) {
        $aa[] = $row["month"];
        $bb[] = $row["count(*)"];
        print_r($bb);
    }
    $result->free();
}
for ($i=0; $i < count($aa); $i++) { 
    $dataArea[] = array("Label"=>$aa[$i], "x"=>$bb[$i], "y"=>$bb[$i]);
}
print_r($dataArea);
?>