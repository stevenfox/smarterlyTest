<?php
include 'config.php';
# Our Current Location
$location = ['51.301819','-0.337613'];

$result = $link->query("SELECT  *  FROM `boxes` ");
$hav_result=[];
$output = "<table>";
while($row = mysqli_fetch_array($result)) {
  $hav_result[i] = haversineF(location[0], location[1], .row['lat'], .row['lng'], $earthRadius);
  if ($hav_result[i]> $hav_result[i-1]){
    $temp= $hav_result[i-1];
    $hav_result[i-1]= $hav_result[i];
    $hav_result[i]=temp;
  }
    $output .= "<tr>";
      $output .= "<td>".$row['category']."</td>";
      $output .= "<td>".$row['type']."</td>";
      $output .= "<td>".$hav_result."</td>";
      $output .= "<td>".$row['depot']."</td>";
      $output .= "<td>".$row['outcode']."</td>";
      $output .= "<td>Collected At: ".$row['collection']."</td>";
    $output .= "</tr>";
    i++;
}

echo $output;

function haversineF($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
  // convert from degrees to radians
  $latFrom = deg2rad($latitudeFrom);
  $lonFrom = deg2rad($longitudeFrom);
  $latTo = deg2rad($latitudeTo);
  $lonTo = deg2rad($longitudeTo);

  $latDelta = $latTo - $latFrom;
  $lonDelta = $lonTo - $lonFrom;

  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
  return $angle * $earthRadius;
}

?>
