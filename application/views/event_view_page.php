<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  	.contentform {
	  padding: 40px 4px;
	}
  </style>
</head>
<body>
	<div class="contentform">
		<div class="container">
			<div class="row card">
				<label class="form-group mt-2 mr-2 ml-2"><i class="fa fa-table"> </i> Event List
					<a href="<?php echo base_url('/') ?>" class="pull-right"> <i class="fa fa-home"> </i> Home </a>
				</label>
				
				<label class="form-group mt-2 mr-2 ml-2" style="font-weight: 600"><i class="fa fa-list-alt">  </i>   Event Title:
				</label>
			
				<div class="form-group mt-2 mr-2 ml-2">
					<table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
				        <thead>
				            <tr>
				                <th>Date</th>
				                <th>Day Name</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>Tiger Nixon</td>
				                <td>System Architect</td>
				            </tr>
				            <tr>
				                <td>Garrett Winters</td>
				                <td>Accountant</td>
				            </tr>
				            <tr>
				                <td>Ashton Cox</td>
				                <td>Junior Technical Author</td>
				                </td>
				                
				            </tr>
				            <tr>
				                <td>Cedric Kelly</td>
				                <td>Senior Javascript Developer</td>
				            </tr>
				            <tr>
				                <td>Airi Satou</td>
				                <td>Accountant</td>
				                </td>   
				            </tr>
				        </tbody>
	    			</table>
				</div>
				<div class="form-group mt-2 mr-2 ml-2">
					<label class="form-inline" style="font-weight: 600">Total Recurrence Event:</label>
				</div>
			</div>
		</div>
	</div> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
