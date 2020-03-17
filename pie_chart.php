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
$sql = "SELECT area, count(area) FROM data group by area";
if ($result = $conn->query($sql)) {
    $areaLabel = array();
    $areaCount = array();

    while ($row = $result->fetch_assoc()) {
        $aa[] = $row["area"];
        $bb[] = $row["count(area)"];
    }
    $result->free();
}
for ($i=0; $i < count($aa); $i++) { 
    $dataArea[] = array("Label"=>$aa[$i], "y"=>$bb[$i]);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() { 
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title: {
         text: "Contact Area"
     },
     subtitles: [{
         text: ""
     }],
     data: [{
         type: "pie",
         yValueFormatString: "#,##0.00\"%\"",
         indexLabel: "{Label} ({y})",
         dataPoints: <?php echo json_encode($dataArea, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render(); 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
