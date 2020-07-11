 <?php
$data = file_get_contents('https://api.covid19api.com/summary');
$country= json_decode($data, true);
  echo "<pre>";
               print_r($country);
                echo "<pre>";
?>