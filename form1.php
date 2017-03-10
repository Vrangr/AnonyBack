<?php

session_start();

?>
<html>
	<head>
		<title>Signed in</title>
		<link rel="stylesheet" href="signedin.css" type="text/css"/>
	</head>
	<body>
		<div id="container" style="float:left;">

			<div id="image" style="float:left;">
				<img src="index.gif"  align="left"style="width:90px;height:90px;"/>
			</div>

			<div id="texts" style="float:left;font-size:100px;font-family:Lucida Console;"> 
			AnonyBack
			</div>

		</div>
		<br/><br/><br/><br/><br/><br/>
		<ul class="navibar">
			<!--<li><a href="pending.php">Pending</a></li>-->
			<li><a href="signcreatenew.php">Create new</a></li>
			<li><a href="previous.php">Previous</a></li>
			<li><a href="signedin.php">Home</a><li>
			<li style="float:right;" id="signin"><a href="#">Logout</a></li>
			<li style="float:right;" id="register"><a href="#">Hello <?php echo $_SESSION['userName'];?>!</a></li>
		</ul>
		 
		<div class="left" style="clear:left;">
				<table>
				
					<tr>
					
						<td>
						<p style="font-family:Helvetica">Admin id</p>
						</td>
						<td>
						<p style="font-family:Helvetica">:<?php echo $_SESSION['adminid'];?></p>
						</td>
					
					</tr>
					
					<tr>
					
						<td>
						<p style="font-family:Helvetica">User name</p>
						</td>
						<td>
						<p style="font-family:Helvetica">:<?php echo $_SESSION['fname']. ' '.$_SESSION['lname'];?></p>
						</td>
					
					</tr>
					
					<tr>
					
						<td>
						<p style="font-family:Helvetica">Company id</p>
						</td>
						<td>
						<p style="font-family:Helvetica">:<?php echo $_SESSION['cid']; ?></p>
						</td>
					
					</tr>
					
					<tr>
					
						<td>
						<p style="font-family:Helvetica">Company Name</p>
						</td>
						<td>
						<p style="font-family:Helvetica">:<?php echo $_SESSION['cname'];?></p>
						</td>
					
					</tr>
					
				
				</table>
				
		</div>
		</div>
		<div class="playarea" >
			<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.15410" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
      JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
      JotForm.calendarOther = {"today":"Today"};
      JotForm.setCalendar("5", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
    JotForm.clearFieldOnHide="disable";
    JotForm.onSubmissionError="jumpToFirstError";
   });
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.15410" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.15410" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.15410" />
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    .form-all{
        width:590px;
        color:Black !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
</style>

<form class="jotform-form" action="https://submit.jotform.me/submit/62991056096464/" method="post" name="form_62991056096464" id="62991056096464" accept-charset="utf-8">
  <input type="hidden" name="formID" value="62991056096464" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header">
              Employee Complaint
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Tell us what happened in the form below.
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> Date of Complaint </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[limitDate]" id="month_5" name="q5_dateOf[month]" type="tel" size="2" data-maxlength="2" value="" />
            <span class="date-separate">
              &nbsp;-
            </span>
            <label class="form-sub-label" for="month_5" id="sublabel_month" style="min-height: 13px;"> Month </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[limitDate]" id="day_5" name="q5_dateOf[day]" type="tel" size="2" data-maxlength="2" value="" />
            <span class="date-separate">
              &nbsp;-
            </span>
            <label class="form-sub-label" for="day_5" id="sublabel_day" style="min-height: 13px;"> Day </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[limitDate]" id="year_5" name="q5_dateOf[year]" type="tel" size="4" data-maxlength="4" value="" />
            <label class="form-sub-label" for="year_5" id="sublabel_year" style="min-height: 13px;"> Year </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <img class="showAutoCalendar" alt="Pick a Date" id="input_5_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle;" />
            <label class="form-sub-label" for="input_5_pick" style="min-height: 13px;">  </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"> Supervisor’s name </label>
        <div id="cid_6" class="form-input-wide jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_6" name="q6_supervisorsName" size="20" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Describe accurately the details of your complaint and against whom: </label>
        <div id="cid_7" class="form-input-wide jf-required">
          <textarea id="input_7" class="form-textarea" name="q7_describeAccurately" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Describe how the incident you are complaining about has impacted negatively on your work: </label>
        <div id="cid_8" class="form-input-wide jf-required">
          <textarea id="input_8" class="form-textarea" name="q8_describeHow" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> Describe how the company can deal effectively with your complaint: </label>
        <div id="cid_9" class="form-input-wide jf-required">
          <textarea id="input_9" class="form-textarea" name="q9_describeHow9" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10"> Give additional comments which you believe will be important during further investigations of your complaint: </label>
        <div id="cid_10" class="form-input-wide jf-required">
          <textarea id="input_10" class="form-textarea" name="q10_giveAdditional" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:left" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button">
              Submit Complaint
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="62991056096464" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "62991056096464-62991056096464";
  </script>
</form>
		</div>
	</body>
</html>