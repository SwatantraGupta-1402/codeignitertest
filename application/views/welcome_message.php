<?php
defined('BASEPATH') OR exit('No direct script access allowed');
///error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
	  	body {
	  margin: auto;
	  background: #eaeaea;  
	  font-family: 'Open Sans', sans-serif;
	}

	.info p {
	  text-align:center;
	  color: #999;
	  text-transform:none;
	  font-weight:600;
	  font-size:15px;
	  margin-top:2px
	}

	.info i {
	  color:#F6AA93;
	}
	form h5 {
	  font-size: 18px;
	  background: #F6AA93 none repeat scroll 0% 0%;
	  color: rgb(255, 255, 255);
	  padding: 22px 25px;
	  border-radius: 5px 5px 0px 0px;
	  margin: auto;
	  text-shadow: none; 
	  text-align:left
	}

	form {
	  border-radius: 5px;
	  max-width:1000px;
	  width:100%;
	  margin: 5% auto;
	  background-color: #FFFFFF;
	  overflow: hidden;
	}

	p span {
	  color: #F00;
	}

	p {
	  margin: 0px;
	  font-weight: 500;
	  line-height: 2;
	  color:#333;
	}

	h5 {
	  text-align:center; 
	  color: #666;
	  text-shadow: 1px 1px 0px #FFF;
	  margin:50px 0px 0px 0px
	}

	input {
	  border-radius: 0px 5px 5px 0px;
	  border: 1px solid #eee;
	  margin-bottom: 15px;
	  width: 75%;
	  height: 40px;
	  float: left;
	  padding: 0px 15px;
	}

	a {
	  text-decoration:inherit
	}

	textarea {
	  border-radius: 0px 5px 5px 0px;
	  border: 1px solid #EEE;
	  margin: 0;
	  width: 75%;
	  height: 130px; 
	  float: left;
	  padding: 0px 15px;
	}

	.form-group {
	  overflow: hidden;
	  clear: both;
	}

	.icon-case {
	  width: 35px;
	  float: left;
	  border-radius: 5px 0px 0px 5px;
	  background:#eeeeee;
	  height:42px;
	  position: relative;
	  text-align: center;
	  line-height:40px;
	}

	i {
	  color:#555;
	}

	.contentform {
	  padding: 40px 4px;
	}

	.bouton-contact{
	  background-color: #098250;
	  color: #FFF;
	  text-align: center;
	  width: 100%;
	  border:0;
	  padding: 17px 25px;
	  border-radius: 0px 0px 5px 5px;
	  cursor: pointer;
	  margin-top: 40px;
	  font-size: 18px;
	}

	.leftcontact {
	  width:49.5%; 
	  float:left;
	  border-right: 0px;
	  box-sizing: border-box;
	  padding: 0px 15px 0px 0px;
	}

	.rightcontact {
	  width:49.5%;
	  float:right;
	  box-sizing: border-box;
	  padding: 0px 0px 0px 15px;
	}

	.validation {
	  display:none;
	  margin: 0 0 10px;
	  font-weight:400;
	  font-size:13px;
	  color: #DE5959;
	}

	#sendmessage {
	  border:1px solid #fff;
	  display:none;
	  text-align:center;
	  margin:10px 0;
	  font-weight:600;
	  margin-bottom:30px;
	  background-color: #EBF6E0;
	  color: #5F9025;
	  border: 1px solid #B3DC82;
	  padding: 13px 40px 13px 18px;
	  border-radius: 3px;
	  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
	}

	#sendmessage.show,.show  {
	  display:block;
	}
	.error{
		color: red;
	}
  </style>
</head>
<body>

<!-- <h5>Elegant Form.</h5>
   <div class="info"><a href="#" target="_blank"><p> Made with <i class="fa fa-heart"></i> by Swatantra Gupta </p></a></div> -->
    <?php //echo validation_errors(); ?>
    <!-- <?php echo $success_msg; ?> -->
    <div class="contentform">
    	<form method="post" action="<?php echo base_url('') ?>" class="form-group">
      	<h5>Elegant Form Made with <i class="fa fa-heart"></i> by Swatantra Gupta <a href="<?php echo base_url('index.php/event_list') ?>" class="form-group" style="margin-left: 184px;">Event List</a> <a href="<?php echo base_url('index.php/event_view_page') ?>" class="form-group pull-right">Event View Page</a></h5>
		<div class="container">
			<br>
			<table class="form-group table table-stripped table-bordered">
				<tr>
					<td>
						<!-- <div class="row"> -->
				            <div class="col-md-11">
				              <p>Event Title<span>*</span></p>
				              <div class="error"><?php echo form_error('event_title','<span class="error">','</span>'); ?></div>
				              <span class="icon-case"><i class="fa fa-male"></i></span>
				                <input type="text" class="" name="event_title" value="<?php echo set_value('event_title'); ?>" id="event_title" placeholder="Event Title"/>
				                <div class="validation"></div>
				       		</div>
				       	<!-- </div> -->
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group col-md-11">
				            <p>Start Date <span>*</span></p>
				            <div class="error"><?php echo form_error('start_date','<span class="error">','</span>'); ?></div>
				            <span class="icon-case"><i class="fa fa-calendar"></i></span>
				        	<input type="date" name="start_date" id="start_date" value="<?php echo set_value('start_date'); ?>" />
				        	<div class="validation"></div>
				      	</div>
					</td>
					<td>
						<div class="form-group col-md-11">
				            <p>End Date <span>*</span></p>
				            <div class="error"><?php echo form_error('end_date','<span class="error">','</span>'); ?></div>
				            <span class="icon-case"><i class="fa fa-calendar"></i></span>
				        	<input type="date" name="end_date" id="end_date" value="<?php echo set_value('end_date'); ?>" />
				        	<div class="validation"></div>
			      		</div>	
					</td>
				</tr>
				<tr>
					
					<td>
						<div class="custom-control custom-radio">
							<div class="error"><?php //echo form_error('repeat','<span class="error">','</span>'); ?></div>
					    	<input type="radio" class="custom-control-input" id="repeatRadio" name="repeat" value="repeat">
					    	<label class="custom-control-label" for="repeatRadio">Repeat</label>
					  </div>
					</td>
					<td>
						<div class="form-group">
							<select class="form-control col-md-9" name="every_occurance">
				        		<option value="">--Select--</option>
				        		<option value="Every">Every</option>
						      	<option value="Every Other">Every Other</option>
						      	<option value="Every Third">Every Third</option>
						      	<option value="Every Fourth">Every Fourth</option>
			        		</select>
		        		</div>
					</td>
					<td>
						<div class="form-group ">
				            <!-- <span class=""><i class="fa fa-list"></i></span> -->
				        	<select class="form-control col-md-9" name="dwm_occurance">
				        		<option value="">--Select Days--</option>
						      	<option value="Day">Day</option>
						      	<option value="Week">Week</option>
						      	<option value="Month">Month</option>
						      	<option value="Year">Year</option>
				        	</select>
				      	</div>
					</td>
				</tr>
				<tr>
					<td style="width:35%">
						<div class="custom-control custom-radio">
					    	<input type="radio" class="custom-control-input" id="repeatontheRadio" name="repeat_on_the" value="repeat_on_the">
					    	<label class="custom-control-label" for="repeatontheRadio">Repeat on the</label>
					  </div>
					</td>
					<td style="">
						<div class="form-group">
				        	<select class="form-control col-md-9" name="count_occurance" >
				        		<option value="">--Select--</option>
				        		<option value="First">First</option>
						      	<option value="Second">Second</option>
						      	<option value="Third">Third</option>
						      	<option value="Fourth">Fourth</option>
						      	<option value="Fifth">Fifth</option>
				        	</select>
				      	</div>
					</td>
					<td style="">
						<div class="form-group">
				        	<select class="form-control col-md-9" name="day_occurance" >
				        		<option value="">--Select--</option>
				        		<option value="Sunday">Sunday</option>
						      	<option value="Monday">Monday</option>
						      	<option value="Tuesday">Tuesday</option>
						      	<option value="Wednesday">Wednesday</option>
						      	<option value="Thursday">Thursday</option>
						      	<option value="Friday">Friday</option>
						      	<option value="Saturday">Saturday</option>
				        	</select>
				      	</div>
					</td>
					<td>
						<label class="form-group" style="margin-top: 0px;">of the</label>
				      	<div class="form-inline">
				        	<select class="form-control col-md-9" name="dmyq_occurance">
				        		<option value="">--Select--</option>
						      	<option value="Month">Month</option>
						      	<option value="3 Month">3 Month</option>
						      	<option value="4 Month">4 Month</option>
						      	<option value="6 Month">6 Month</option>
						      	<option value="Year">Year</option>
				        	</select>
				      	</div>
					</td>
				</tr>
			</table>
			
	       	

	       	
		    <!-- <div class="row">
	       		<label class="form-group ml-2" style="display: none !important;">Reccurance:</label>
	       		<div class="form-group col-md-3" style="margin-left: 97px;">
		            <input type="radio" class="" name="repeat_on_the" value="Repeat on The">
		            <label class="form-inline">Repeat on the</label>
		        	<div class="validation"></div>
		      	</div>
		      	<div class="form-group col-md-2">
		            <p><span>*</span></p>
		            <span class=""><i class="fa fa-list"></i></span>
		        	<select class="form-control" name="count_occurance" >
		        		<option value="">--Select--</option>
		        		<option value="">First</option>
				      	<option value="">Second</option>
				      	<option value="">Third</option>
				      	<option value="">Fourth</option>
				      	<option value="">Fifth</option>
		        	</select>
		        	<div class="validation"></div>
		      	</div>
		      	<div class="form-group col-md-2">
		            <span class=""><i class="fa fa-list"></i></span>
		        	<select class="form-control" name="day_occurance" >
		        		<option value="">Sunday</option>
				      	<option value="">Monday</option>
				      	<option value="">Tuesday</option>
				      	<option value="">Wednesday</option>
				      	<option value="">Thursday</option>
				      	<option value="">Friday</option>
				      	<option value="">Saturday</option>
		        	</select>
		        	<div class="validation"></div>
		      	</div>
		      	<label class="form-group" style="margin-top: 7px;">of the</label>
		      	<div class="form-group col-md-2">
		        	<select class="form-control" name="dmyq_occurance">
		        		<option value="">--Select--</option>
				      	<option value="">Month</option>
				      	<option value="">3 Month</option>
				      	<option value="">4 Month</option>
				      	<option value="">6 Month</option>
				      	<option value="">Year</option>
		        	</select>
		        	<div class="validation"></div>
		      	</div>
	       	</div>       -->
  		</div>
  		<button type="submit" name="submit" id="submit" class="bouton-contact">Submit</button>
	</form> 
</div>
		

<!-- <div class="container card">
	<div class="row">

	  <form class="form-group" action="#" method="post">
	    <label for="event_title" class="mb-2 mr-sm-2">Event Title:</label>
	    <input type="text" class="form-control mb-2 mr-sm-2" id="event_title" placeholder="Enter Event Title Name" name="event_title">
	    <div class="form-inline form-group">
		    <label for="start_date" class="mb-2 mr-sm-2">Start Date:</label>
		    <input type="date" class="form-control mb-2 mr-sm-2" id="start_date" placeholder="Select Start Date" name="start_date">
		    <label for="end_date" class="mb-2 mr-sm-2">End Date:</label>
		    <input type="date" class="form-control mb-2 mr-sm-2" id="end_date" placeholder="Select End Date" name="end_date">
	    </div>
	   	
	    <div class="form-inline form-group">
	    	<label class="">Recurrance:</label>
	      	<input type="radio" class="form-control-sm " name="repeat">
	      	<label class="">Repeat</label> 
	      	<select class="form-control mb-2 mr-sm-2" name="occurance" id="occurance" width="">
		      	<option value="">--Select Occurance--</option>
		      	<option value="">Every</option>
		      	<option value="">Weekly</option>
		      	<option value="">Monthly</option>
		      	<option value="">Yearly</option>
	      	</select>
		    <select class="form-control mb-2 mr-sm-2" name="day_occurance" id="day_occurance" width="100%">
		      	<option value="">--Select Days--</option>
		      	<option value="">Day</option>
		      	<option value="">2nd Day</option>
		      	<option value="">3rd Day</option>
		      	<option value="">4rth Day</option>
		    </select>
	    </div>
	    <div class="form-inline">
	    	<label class="mb-2 mr-sm-2" style="margin-left: 80px;"></label>
	      	<input type="radio" class="mb-2 mr-sm-2" name="repeat">
	      	<label class="mb-2 mr-sm-2">Repeat on the</label> 
	      	<select class="form-control mb-2 mr-sm-2" name="occurance" id="occurance" width="">
		      	<option value="">--Select Count--</option>
		      	<option value="">First</option>
		      	<option value="">Second</option>
		      	<option value="">Third</option>
		      	<option value="">Fourth</option>
		      	<option value="">Fifth</option>
	      	</select>
		    <select class="form-control mb-2 mr-sm-2" name="day_occurance" id="day_occurance" width="100%">
		      	<option value="">--Select Days--</option>
		      	<option value="">Sunday</option>
		      	<option value="">Monday</option>
		      	<option value="">Tuesday</option>
		      	<option value="">Wednesday</option>
		      	<option value="">Thursday</option>
		      	<option value="">Friday</option>
		      	<option value="">Saturday</option>
		    </select>
		    <label class="mb-2 mr-sm-2">of the</label>
		    <select class="form-control mb-2 mr-sm-2" name="dmy_occurance" id="dmy_occurance" width="100%">
		      	<option value="">--Select Occurance--</option>
		      	<option value="">Day</option>
		      	<option value="">Weekly</option>
		      	<option value="">Month</option>
		      	<option value="">Quaterly</option>
		      	<option value="">Half-Yearly</option>
		      	<option value="">Yearly</option>
		    </select> 
	    </div>
	    <div class="form-group">
	    	<button type="submit" name="submit" value="" id="submit" class="btn btn-primary">Submit</button>
	    </div>
	  </form>
  </div>
</div> -->
</body>
</html>
