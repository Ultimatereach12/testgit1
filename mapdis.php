<?php
    /*$lat1 = 12.7448848;
    $lon1 = 77.8076823;
    $lat2 = 12.7448847;
    $lon2 = 77.8076823;
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles= $dist * 60 * 1.1515;
    $unit = 'K';
    $km   = $miles*1.609344;
    echo $ret = number_format($km,1);
	
	$lat1 = 12.7448847;
    $lon1 = 77.8076823;
    $lat2 = 12.7483126;
    $lon2 = 77.8040218;
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles= $dist * 60 * 1.1515;
    $unit = 'K';
    $km   = $miles*1.609344;
    echo $ret = number_format($km,1);*/
	
	$latitudeFrom = 10.9573762;
	$longitudeFrom = 76.9832077;
	$latitudeTo = 11.0245404;
	$longitudeTo = 76.9883875;
	$earthRadius = 6371000;
	$latFrom = deg2rad($latitudeFrom);
    $lonFrom = deg2rad($longitudeFrom);
    $latTo = deg2rad($latitudeTo);
    $lonTo = deg2rad($longitudeTo);

  $latDelta = $latTo - $latFrom;
  $lonDelta = $lonTo - $lonFrom;

  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
   $ret =  $angle * $earthRadius;
print $m  = floor($ret / 1000);
?>