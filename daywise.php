<!DOCTYPE html>
<html>
<head>
    <title>covin19</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
 
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5"  href="#">COVID-19 </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiastateCoronaLive</a>
      </li>
     
     
    </ul>
    
  </div>
</nav>

 <section class="conona_update container-fluid">
  <div class="my-3">
    <h3 class="text-uppercase text-center">India COVID-19 Day-Wise TRACKER</h3>
  </div>
  <div class="table-responsive">
    <table class="table text-center" id="tb1">
          <?php

             $data = file_get_contents('https://api.covid19india.org/data.json');
               $daywise= json_decode($data, true);
              // echo "<pre>";
              // print_r($coranalive);
              //  echo "<pre>";
               $totalcase = count($daywise ['cases_time_series']);
              //echo  $coranalive['statewise'][1]['state'];
             $i=0;
			while ($i < $totalcase) {
         ?>
        <tr>
        	<th class="text-left">Date & Month</th>
        	<th colspan="5"></th>
        </tr>
        <tr>
        	<td colspan="6" class="text-left"><?php echo $daywise['cases_time_series'][$i]['date']."<br>";  ?></td>
        </tr>
        <tr class="text-capitalize text-white">
        	<th style="color: #fff; background: #2196f3">Total Confirmed</th>
        	<th style="color: #fff; background: #ffc107">Daily Confirmed</th>
        	<th style="color: #fff; background: #008c76FF">Daily Recovered</th>
        	<th style="color: #fff; background: #e91e7f">Daily Deceased</th>
        	<th style="color: #fff; background: #4caf50">Total Recovered</th>
        	<th style="color: #fff; background: #EE2737FF">Total Deceased</th>
        </tr>
        <tr class="mb-5">
        	<td style="background: #bed2f3"><?php echo $daywise['cases_time_series'][$i]['totalconfirmed'] . "<br>";?></td>
        	<td style="background: #ffe493"><?php echo $daywise['cases_time_series'][$i]['dailyconfirmed'] . "<br>";?></td>
        	<td style="background: #9ED9CCEF"><?php echo $daywise['cases_time_series'][$i]['dailyrecovered'] . "<br>";?></td>
        	<td style="background: #fc95c6"><?php echo $daywise['cases_time_series'][$i]['dailydeceased'] . "<br>";?></td>
        	<td style="background: #88d28b"><?php echo $daywise['cases_time_series'][$i]['totalrecovered'] . "<br>";?></td>
        	<td style="background: #fb99a1"><?php echo $daywise['cases_time_series'][$i]['totaldeceased'] . "<br>";?></td>
        </tr>
         <?php

  ?>
   <?php
    $i++;  
  }


          ?>
    </table>
    
  </div>
   
</section>
<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topfunction()" id="mybtn"></i>

</div>



          <footer class="mt-5">
                 <div class="footer_style text-white text-center container-fluid">
                   <p>Copyright by AniketDas</p>
                   <?php
$counter_name = "counter.txt";
if (!file_exists($counter_name))
{
    $f = fopen($counter_name, "w");
    fwrite($f,"0"); fclose($f);
}
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
$counterVal++;
$f = fopen($counter_name, "w");
fwrite($f, $counterVal);
fclose($f);
echo "visitor number $counterVal";
?>
                 </div>
               </footer>

    <script type="text/javascript">
   
     mybutton =document.getElementById('mybtn');
    window.onscroll= function(){scrollfunction()};
    function scrollfunction(){
      if(document.body.scrollTop > 100 || document.documentElement.scrollTop >100)
      {
        mybutton.style.display = "Block";
      }
      else
      {
        mybutton.style.display = "none";
      }
    }
    function topfunction(){
      document.body.scrollTop=0;
      document.documentElement.scrollTop=0;    
    }

  </script> 
</body>
</html>

