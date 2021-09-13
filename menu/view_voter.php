<h3>Table without DataTable Header</h3>
		
		<script type="text/javascript">
		jQuery( window ).load( function() {
			var $table2 = jQuery( "#table-2" );
			
			// Initialize DataTable
			$table2.DataTable( {
				"sDom": "tip",
				"bStateSave": false,
				"iDisplayLength": 8,
				"aoColumns": [
					{ "bSortable": false },
					null,
					null,
					null,
					null
				],
				"bStateSave": true
			});
			
			// Highlighted rows
			$table2.find( "tbody input[type=checkbox]" ).each(function(i, el) {
				var $this = $(el),
					$p = $this.closest('tr');
				
				$( el ).on( 'change', function() {
					var is_checked = $this.is(':checked');
					
					$p[is_checked ? 'addClass' : 'removeClass']( 'highlight' );
				} );
			} );
			
			// Replace Checboxes
			$table2.find( ".pagination a" ).click( function( ev ) {
				replaceCheckboxes();
			} );
		} );
			
		// Sample Function to add new row
		var giCount = 1;
		
		function fnClickAddRow() {
			jQuery('#table-2').dataTable().fnAddData( [ '<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount + ".1", giCount + ".2", giCount + ".3", giCount + ".4" ] );
			replaceCheckboxes(); // because there is checkbox, replace it
			giCount++;
		}
		</script>
		
		<table class="table table-bordered table-striped datatable" id="table-2">
			<thead>
				<tr>
					<th>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</th>
					<th>Student Name</th>
					<th>Average Grade</th>
					<th>Curriculum / Occupation</th>
					<th>Actions</th>
				</tr>
			</thead>
			
			<tbody>
			
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
			
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
			
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
			
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
			
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
			</tbody>
		</table>
		
		<br />
		
		<a href="javascript: fnClickAddRow();" class="btn btn-primary">
			<i class="entypo-plus"></i>
			Add Row
		</a>
		
		