<div class="container">

      <div class="page-header">
        <h1>Non-responsive Bootstrap</h1>
        <p class="lead">Disable the responsiveness of Bootstrap by fixing the width of the container and using the first grid system tier.</p>
      </div>

      <h3>What changes</h3>
      <p>Note the lack of the <code>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</code>, which disables the zooming aspect of sites in mobile devices. In addition, we reset our container's width and are basically good to go.</p>

      <h3>Regarding navbars</h3>
      <p>As a heads up, the navbar component is rather tricky here in that the styles for displaying it are rather specific and detailed. Overrides to ensure desktop styles display are not as performant or sleek as one would like. Just be aware there may be potential gotchas as you build on top of this example when using the navbar.</p>

      <h3>Non-responsive grid system</h3>
      <div class="row">
        <div class="col-xs-4">One third</div>
        <div class="col-xs-4">One third</div>
        <div class="col-xs-4">One third</div>
      </div>

    </div> <!-- /container -->

<div class="container">
	<div class="row">
		<div class="col-xs-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="" method="POST" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-xs-12">
								<label for="" class="">Name</label>
								<input type="text" name="pro_name" id="pro_name" class="form-control" value="" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<label for="" class="">Description</label>
								<textarea name="pro_description" id="pro_description" class="form-control" rows="3" required="required"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<label for="" class="">Image</label>
								<input type="file" name="pro_img" id="pro_img" class="form-control" value="" pattern="" title="">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<button type="button" class="btn btn-primary pull-right" id="add_product">Add Product</button>
							</div>
						</div>
					</form>
				</div>
			</div>		
		</div>
		<div class="col-xs-9">
			<div class="panel panel-primary">
				<!-- Default panel contents -->
				<div class="panel-heading"><b>Products</b></div>
				<div class="panel-body">
					<!-- Table -->
					<table class="table table-bordered">
						<thead>
							<tr class="active">
								<th>Image</th>
								<th>Name</th>
								<th>Description</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center" colspan="5"><small>No Products Available</small></td>
							</tr>	
						</tbody>
					</table>
				</div>
			</div>
		</div>	
	</div>	
</div>

<script type="text/javascript">
$(document).ready(function() {
	
	$('#add_product').click(function() {
		pro_name = $('#pro_name').val();
		pro_description = $('#pro_description').val();

		if ( pro_name == '' || pro_description == '' ) {
			show_alert_box('alert-danger', 'Error' ,'Please complete all information!');
		} else {

			$.ajax({
				url: 'admin/dashboard/add_product',
				type: 'POST',
				data: {
					pro_name:pro_name,
					pro_description:pro_description
				},
				success:function(data) {
					if (data) {
						show_alert_box('alert-danger', 'Error!' ,data);
					} else {
						show_alert_box('alert-success', 'Success!' ,'Successfully added new Product!');
					}
				}
			});
			
		}

	});

	function show_alert_box(alert_type, title, message) {
		
		$('.hide_alert').fadeIn('slow');
		$('.hide_alert').addClass('show_alert');
		$('.hide_alert').addClass(alert_type);
		$('.hide_alert').find('strong').html(title);
		$('.hide_alert').find('span').html(message);
		
		setTimeout(function() {
			$('.hide_alert').fadeOut('slow');
		}, 3000);	

		setTimeout(function() {
	    	$('.hide_alert').find('strong').html('');
			$('.hide_alert').find('span').html('');
			$('.hide_alert').removeClass('show_alert');
			$('.hide_alert').removeClass(alert_type);
	    }, 3200);

	}

});
</script>