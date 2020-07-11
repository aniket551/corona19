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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sysid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiastateCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="daywise.php">IndiadaywiseCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#conid">Contact</a>
      </li>
     
    </ul>
    
  </div>
</nav>


    <div class="main_header">
      <div class="row w-100 h-100 ">
          <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="img/coro.jpg" width="300" height="300">
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
          <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
          <h1>Let's Stay Safe & Fight Together Against Cor <samp class="corona"><img src="img/co.jpg" width="50" height="50"></samp> na Virus</h1>
          </div>
          </div>
      </div>

</div>

<!--**************************** corona latest update********************************************* -->
<section class="conona_update">
  <div class="mb-3">
      <h3 class="text-uppercase text-center">INDIA COVID-19 TRACKER</h3>
  </div>
    <div class="d-flex justify-content-around align-items-center mt-5  count_style">
      <?php
$data = file_get_contents('https://api.covid19api.com/summary');
$country= json_decode($data, true);
?>
    <div>
      <p><img src="img/man.jpg" width="50" height="50">Total Confirmed</p>
      <h1 class="count"><?php echo  $country ['Countries'] [101] ['TotalConfirmed'];?></h1>
    </div>
    <div>
      <p> <img src="img/man1.jpg" width="50" height="50">New Active<sup style="color:red;">*</sup></p>
      <h1 class="count"><?php echo  $country ['Countries'] [101] ['NewConfirmed'];?></h1>
    </div>
    <div>
      <p><img src="img/man2.jpg" width="50" height="50">Total Recovered</p>
      <h1 class="count"><?php echo  $country ['Countries'] [101] ['TotalRecovered'];?></h1>
    </div>
    <div>
      <p><img src="img/man3.jpg" width="50" height="50">Total Deaths</p>
      <h1 class="count"><?php echo  $country ['Countries'] [101] ['TotalDeaths'];?></h1>
    </div>
    </div>
</section>
<section class="conona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase text-center">WORLD COVID-19 TRACKER</h3>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
          <tr>
            <th >Country</th>
            <th>TotalConfirmed</th>
             <th>TotalRecovered</th>
              <th>TotalDeaths</th>
              <th>NewRecovered</th>
              <th>NewDeaths</th>
          </tr>
    </table>
    
  </div>
   
</section>

<!-- <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
<div class="section_header text-center mb-5 mt-4">
          <h3 class="text-uppercase text-center"> COVID-19 STATE WISE % FIGURE</h3>
<div id="chartContainer1" style="height: 300px; width: 100%;"></div>
</div> -->

<!--**************************** try********************************************* -->



<!--**************************** corona about********************************************* -->
<div class="container-fluid sub_section pt-5" id="aboutid">
      <div class="section_header text-center mb-5 mt-4">
          <h1>About COVID-19</h1>
      </div>
      <div class="row pt-5">
          <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
              <img src="img/about.jpg" class="img-fluid" >
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <h2>What is COVID-19 (Corona-Virus) </h2>
            <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic
               respiratory disease, and cancer are more likely to develop serious illness.</p>
            <p>At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated
               information as soon as clinical findings become available.</p>
            <p>Coronavirus disease (COVID-19) is an infect
              ious disease caused by a newly discovered coronavirus.</p>
          </div>
      </div>
</div>
<!--**************************** corona Symptoms********************************************* -->
<div class="container-fluid pt-5" id="sysid">
      <div class="section_header text-center mb-5 mt-4">
          <h1>COVID-19 Symptoms</h1>
      </div>
      <div  class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/cough.jpg" class="img-fluid" width="90" height="90">
                  <figcaption> Cough </figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/nose.jpg" class="img-fluid" width="90" height="90">
                  <figcaption> Runny Nose </figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/fever.jpg" class="img-fluid" width="90" height="90">
                  <figcaption> Fever </figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/cold.jpg" class="img-fluid" width="50" height="50">
                  <figcaption> Cold </figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/tired.jpg" class="img-fluid" width="90" height="90">
                  <figcaption> Tiredness </figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/breath.png" class="img-fluid" width="90" height="90">
                  <figcaption>Difficulty Breath </figcaption>
              </figure>
            </div>
        </div>

      </div>
</div>

<!--**************************** corona 6 step ********************************************* -->
<div class="container-fluid sub_section pt-5 " id="preid">
      <div class="section_header text-center mb-5 mt-4">
          <h1>6 Steps Prevention Against Coronavirus</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/hand.jpg" class="img-fluid" width="90" height="90">
                
              </figure>
              </div>
              <div class="col-lg8 col-md-8 col-12">
                  <p>Wash your hands regularly for 20 seconds,with
                    soap and water or alcohol-based hand rub.</p>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/cover.jpg" class="img-fluid" width="70" height="70">
                
              </figure>
              </div>
              <div class="col-lg8 col-md-8 col-12">
                  <p>Cover your nose and mouth with a disposable 
                    tissue or fiexed elbow when you cough or sneeze.</p>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/social.jpg" class="img-fluid" width="90" height="90">
                
              </figure>
              </div>
              <div class="col-lg8 col-md-8 col-12">
                  <p>Avoid close contact with people who are unwell.</p>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/home.jpg" class="img-fluid" width="90" height="90">
                
              </figure>
              </div>
              <div class="col-lg8 col-md-8 col-12">
                  <p>Stay home and self isolate from others in the householdif
                    you fell unwell.</p>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/tv.jpg" class="img-fluid" width="150" height="150">
                
              </figure>
              </div>
              <div class="col-lg8 col-md-8 col-12">
                  <p>Stay informed by watching news & follow the recommended practices.</p>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                  <img src="img/BOY.jpg" class="img-fluid" width="70" height="70">
                
              </figure>
              </div>
              <div class="col-lg8 col-md-8 col-12">
                  <p>If you have fever, cough and difficulty breathing seek medical care early.</p>
              </div>
            </div>

          </div>
          
        </div>
        
      </div>

</div>

<!--**************************** contact ********************************************* -->
<div class="container-fluid  pt-5 " id="conid">
      <div class="section_header text-center mb-5 mt-4">
          <h1>Contact Us ASAP</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
      <form action="db.php" method="POST" onsubmit="return validation()" class="bg-light">
          <div class="form-group">
    <label for="user" class="font-weight-bold">USer Name</label>
    <input type="text" class="form-control" name="user" id="user" placeholder="username" autocomplete="off">
    <span id="username" class="text-danger font-weight-bold"> </span>
  </div>
  <div class="form-group">
    <label class="font-weight-bold">Email address</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="name@example.com" autocomplete="off">
    <span id="emailids" class="text-danger font-weight-bold"> </span>
  </div>
  <div class="form-group">
    <label class="font-weight-bold">Phone Number</label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="phonenumber" autocomplete="off" >
    <span id="mobileno" class="text-danger font-weight-bold"> </span>
  </div>
  <div class="form-group">
       <label>Select Symptoms</label><br>
       <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
         <input type="checkbox" class="custom-control-input" id="checkbox1" name="corona[]" value="cold">
         <label class="custom-control-label" for="checkbox1">Cold</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
         <input type="checkbox" class="custom-control-input" id="checkbox2" name="corona[]" value="fever">
         <label class="custom-control-label" for="checkbox2">Fever</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
         <input type="checkbox" class="custom-control-input" id="checkbox3" name="corona[]" value="breath">
         <label class="custom-control-label" for="checkbox3">Difficulty in Breath</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
         <input type="checkbox" class="custom-control-input" id="checkbox4" name="corona[]" value="tired">
         <label class="custom-control-label" for="checkbox4">Feeling Weak</label>
        </div>

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe how you are feeling</label>
    <textarea class="form-control" name="ex" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" autocomplete="off">Submit</button>
</form>

          </div>

        </div>

      </div>
</div>

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
    /*------------pie-----------*/
    /*window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer1", {
	theme: "",
	exportFileName: "Doughnut Chart",
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "state wise % report"
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "doughnut",
		innerRadius: 90,
		showInLegend: true,
		toolTipContent: "<b>{name}</b>: {y}",
		indexLabel: "{name} - #percent%",
		dataPoints: [
			{ y: 194, name: "MAHARASHTRA" },
			{ y: 182, name: "KERALA" },
			{ y: 35, name: "HARYANA" },
			{ y: 69, name: "UTTAR PRADESH" },
			{ y: 49, name: "DELHI" },
			{ y: 81, name: "KARNATAKA" },
			{ y: 13, name: "LADAKH" },
			{ y: 56, name: "RAJASTHAN" },
			{ y: 3, name: "HIMACHAL PRADESH" },
			{ y: 42, name: "TAMIL NADU" },
			{ y: 19, name: "ANDHRA PRADESH" },
			{ y: 58, name: "GUJARAT" },
			{ y: 38, name: "JAMMU AND KASHMIR" },
			{ y: 38, name: "PUNJAB" }
		]
	}]
});
chart.render();

function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();
}
var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "COVID-19 State Wise figure"
	},
	axisY: {
		title: "Report"
	},
	legend: {
		cursor:"pointer",
		itemclick : toggleDataSeries
	},
	toolTip: {
		shared: true,
		content: toolTipFormatter
	},
	data: [{
		type: "bar",
		showInLegend: true,
		name: "CONFIRMED",
		color: "blue",
		dataPoints: [
			{ y: 196, label: "MAHARASHTRA" },
			{ y: 182, label: "KERALA" },
			{ y: 35, label: "HARYANA" },
			{ y: 69, label: "UTTAR PRADESH" },
			{ y: 49, label: "DELHI" },
			{ y: 81, label: "KARNATAKA" },
			{ y: 13, label: "LADAKH" },
			{ y: 56, label: "RAJASTHAN" },
			{ y: 3, label: "HIMACHAL PRADESH" },
			{ y: 42, label: "TAMIL NADU" },
			{ y: 19, label: "ANDHRA PRADESH" },
			{ y: 58, label: "GUJARAT" },
			{ y: 38, label: "JAMMU AND KASHMIR" },
			{ y: 38, label: "PUNJAB" }
		]
	},
	{
		type: "bar",
		showInLegend: true,
		name: "RECOVERED",
		color: "green",
		dataPoints: [
			{ y: 25, label: "MAHARASHTRA" },
			{ y: 12, label: "KERALA" },
			{ y: 11, label: "HARYANA" },
			{ y: 11, label: "UTTAR PRADESH" },
			{ y: 6, label: "DELHI" },
			{ y: 5, label: "KARNATAKA" },
			{ y: 3, label: "LADAKH" },
			{ y: 3, label: "RAJASTHAN" },
			{ y: 2, label: "HIMACHAL PRADESH" },
			{ y: 2, label: "TAMIL NADU" },
			{ y: 1, label: "ANDHRA PRADESH" },
			{ y: 1, label: "GUJARAT" },
			{ y: 1, label: "JAMMU AND KASHMIR" },
			{ y: 1, label: "PUNJAB" }
		]
	},
	{
		type: "bar",
		showInLegend: true,
		name: "DEATH",
		color: "red",
		dataPoints: [
			{ y: 7, label: "MAHARASHTRA" },
			{ y: 1, label: "KERALA" },
			{ y: 0, label: "HARYANA" },
			{ y: 0, label: "UTTAR PRADESH" },
			{ y: 2, label: "DELHI" },
			{ y: 3, label: "KARNATAKA" },
			{ y: 0, label: "LADAKH" },
			{ y: 0, label: "RAJASTHAN" },
			{ y: 1, label: "HIMACHAL PRADESH" },
			{ y: 1, label: "TAMIL NADU" },
			{ y: 0, label: "ANDHRA PRADESH" },
			{ y: 5, label: "GUJARAT" },
			{ y: 1, label: "JAMMU AND KASHMIR" },
			{ y: 1, label: "PUNJAB" },
		]
	}]
});
chart.render();

function toolTipFormatter(e) {
	var str = "";
	var total = 0 ;
	var str3;
	var str2 ;
	for (var i = 0; i < e.entries.length; i++){
		var str1 = "<span style= \"color:"+e.entries[i].dataSeries.color + "\">" + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ;
		total = e.entries[i].dataPoint.y + total;
		str = str.concat(str1);
	}
	str2 = "<strong>" + e.entries[0].dataPoint.label + "</strong> <br/>";
	str3 = "<span style = \"color:Tomato\">Total: </span><strong>" + total + "</strong><br/>";
	return (str2.concat(str)).concat(str3);
}

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}
}*/
 /*------------bar graph -----------*/
 
function fetch(){
  $.get("https://api.covid19api.com/summary",
     function(data){
      //console.log(data['Countries'].length)
      var tbval= document.getElementById('tbval');
      for(var i=1;i<(data['Countries'].length); i++){
        var x=tbval.insertRow();
        x.insertCell(0);
        tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
        tbval.rows[i].cells[0].style.background='#7a4a91';
        tbval.rows[i].cells[0].style.color='#fff';

        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
        tbval.rows[i].cells[1].style.background='#4bb7d8';

        x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
        tbval.rows[i].cells[2].style.background='#4bb7d8';

         x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
        tbval.rows[i].cells[3].style.background='#4bb7d8';

        x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewRecovered'];
        tbval.rows[i].cells[4].style.background='#4bb7d8';

        x.insertCell(5);
        tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewDeaths'];
        tbval.rows[i].cells[5].style.background='#4bb7d8';
      }
     }

     );
}




/*------------others -----------*/
    function validation(){
      var user = document.getElementById('user').value;
      var email = document.getElementById('email').value;
      var phone = document.getElementById('phone').value;

      if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the username field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				return false;
			}

      if(email == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the emailid field";
				return false;
			}
			if(email.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" ** . Invalid Position";
				return false;
			}

      if(phone == ""){
				document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(phone)){
				document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(phone.length!=10){
				document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
				return false;
			}
    }
      
      $('.count').counterUp({
    delay: 10,
    time: 10000
    
});


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
