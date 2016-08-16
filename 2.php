<?php
// Input numbers
$nums = array(
  '01142980271',
  '01132970001',
  '01244132331',
  '79312123451',
  '011496313334',
  '0113299',
  '07931309190',
  '08451234567',
  '09134545151',
);

// Code prefixes
$code = array(
  "01" => "Geographic area codes since 1995",
  "02" => "Geographic area codes after 2000",
  "07" => "Mobile phones",
  "08" => "Non-geographic",
);

include('2inc.php'); // City codes
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Problem 2</title>
</head>
<body>
<h1>Problem 2</h1>
<pre>
<?php
print_r($nums);
?>
</pre>
<table>
<?php
// Loop through each telephone number
foreach($nums as $value)
{
  $num = trim($value); // remove whitespace
  $prefix = substr($num,0,2); // first two characters
  if(substr($num,0,1) != "0" || strlen($num) != 11){
    $msg = "Invalid number";
  }elseif($prefix == "01" || $prefix == "02" || $prefix == "07" || $prefix == "08")
  {
    $msg = $code[$prefix];
    if($prefix == "01" || $prefix == "02")
    {
      $msg = $cities[substr($num,0,4)];
    }
  }else
  {
    $msg = "Other";
  }
  echo "  <tr><td>".$num."</td><td>".substr($num,0,5)."</td><td>".$msg."</td></tr>\n";
}
?>
</table>
</body>
</html>


