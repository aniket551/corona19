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
        <a class="nav-link" href="daywise.php">IndiadaywiseCoronaLive</a>
      </li>
     
     
    </ul>
    
  </div>
</nav>

                       <section class="conona_update container-fluid">
  <div class="my-5">
    <h3 class="text-uppercase text-center">India COVID-19 TRACKER</h3>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
          <tr>
            <th class="text-capitalize table-primary">lastupdatedtime</th>
            <th class="text-capitalize table-success">state</th>
             <th class="text-capitalize table-danger">confirmed</th>
              <th class="text-capitalize table-info">active</th>
              <th class="text-capitalize table-warning">recovered</th>
              <th class="text-capitalize table-active">deaths</th>
          </tr>
          <?php

             $data = file_get_contents('https://api.covid19india.org/data.json');
               $coranalive = json_decode($data, true);
              // echo "<pre>";
              // print_r($coranalive);
              //  echo "<pre>";
               $statescount=count($coranalive['statewise']);  
              //echo  $coranalive['statewise'][1]['state'];
              $i=1;
      while($i < $statescount){
         ?>
         <tr>
           <td class="table-primary"><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
           <td  class="table-success"><?php echo $coranalive['statewise'][$i]['state'] ?></td>
           <td class="table-danger"><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
           <td class="table-info"><?php echo $coranalive['statewise'][$i]['active'] ?></td>
           <td class="table-warning"><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
           <td class="table-active"><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
         </tr>
         <?php
  //echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  //echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
  //echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  //echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  //echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  //echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ; 
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