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

				<div class="form-group mt-2 mr-2 ml-2">
					<table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
				        <thead>
				            <tr>
				                <th>Title</th>
				                <th>Date</th>
				                <th>Occurance</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody>
				        	<?php foreach($data as $row){ ?>
				            <tr>
				                <td><?php echo $row->event_title; ?></td>
				                <td><?php echo $row->start_date.' to '.$row->end_date ?></td>
				                <td><?php echo $row->every_occurance.' '.$row->dwm_occurance.' '.$row->count_occurance.' '.$row->day_occurance.' of the '.$row->dmyq_occurance; ?></td>
				                <td style="text-align: center;">
				                	<a href="<?php echo $row->id; ?>" ><i class="fa fa-list" title="View"></i></a>
				                	&nbsp;&nbsp;
				                	<a href="<?php echo $row->id; ?>" ><i class="fa fa-edit" title="Edit"></i></a>
				                	&nbsp;&nbsp;
				                	<a href="<?php echo $row->id; ?>" ><i class="fa fa-trash" title="Delete"></i></a>
				                </td> 
				            </tr>
				        	<?php } ?>
				        </tbody>
	    			</table>
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
