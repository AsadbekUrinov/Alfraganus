
<?php $__env->startSection('css'); ?>
	<!-- Data Table CSS -->
	<link href="<?php echo e(URL::asset('plugins/datatable/datatables.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
	<div class="page-leftheader">
		<h4 class="page-title mb-0"><?php echo e(__('Transcribe Results')); ?></h4>
		<ol class="breadcrumb mb-2">
			<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-folder-bookmark mr-2 fs-12"></i><?php echo e(__('AI Panel')); ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo e(route('user.documents')); ?>"> <?php echo e(__('Documents')); ?></a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('All Transcripts')); ?></a></li>
		</ol>
	</div>
</div>
<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('All Transcribe Results')); ?></h3>
					<a class="refresh-button" href="#" data-tippy-content="Refresh Table"><i class="fa fa-refresh table-action-buttons view-action-button"></i></a>
				</div>
				<div class="card-body pt-2">
					<!-- SET DATATABLE -->
					<table id='userResultTable' class='table' width='100%'>
							<thead>
								<tr>
									<th width="1%"></th>
									<th width="5%"><?php echo e(__('Created On')); ?></th> 
									<th width="5%"><?php echo e(__('Title')); ?></th>	
									<th width="5%"><?php echo e(__('Workbook')); ?></th>	
									<th width="2%"><i class="fa fa-music fs-14"></i></th>							
									<th width="2%"><i class="fa fa-cloud-download fs-14"></i></th>								
									<th width="4%"><?php echo e(__('Duration')); ?></th>									
									<th width="2%"><?php echo e(__('Format')); ?></th> 																           	     						           	
									<th width="3%"><?php echo e(__('Size')); ?></th> 																           	     						           	
									<th width="2%"><?php echo e(__('Words')); ?></th> 																           	     						           	
									<th width="4%"><?php echo e(__('Task')); ?></th> 																           	     						           	
									<th width="4%"><?php echo e(__('Actions')); ?></th>
								</tr>
							</thead>
					</table> <!-- END SET DATATABLE -->
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- Data Tables JS -->
<script src="<?php echo e(URL::asset('plugins/datatable/datatables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/results.js')); ?>"></script>
<!-- Green Audio Players JS -->
<script src="<?php echo e(URL::asset('plugins/audio-player/green-audio-player.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/audio-player.js')); ?>"></script>
<script type="text/javascript">
	$(function () {

		"use strict";
		
		function format(d) {
			// `d` is the original data object for the row
			return '<div class="slider">'+
						'<table class="details-table">'+
							'<tr>'+
								'<td class="details-title" width="10%">File Name:</td>'+
								'<td>'+ ((d.file_name == null) ? '' : d.file_name) +'</td>'+
							'</tr>'+
							'<tr>'+
								'<td class="details-title" width="10%">Transcript:</td>'+
								'<td>'+ ((d.transcript == null) ? '' : d.transcript) +'</td>'+
							'</tr>'+
							'<tr>'+
								'<td class="details-result" width="10%">Audio File:</td>'+
								'<td><audio controls preload="none">' +
									'<source src="'+ d.result +'" type="'+ d.audio_type +'">' +
								'</audio></td>'+
							'</tr>'+
						'</table>'+
					'</div>';
		}

		// INITILIZE DATATABLE
		var table = $('#userResultTable').DataTable({
			"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
			responsive: {
				details: {type: 'column'}
			},
			colReorder: true,
			language: {
				"emptyTable": "<div><img id='no-results-img' src='<?php echo e(URL::asset('img/files/no-result.png')); ?>'><br><?php echo e(__('No trascribe tasks created yet')); ?></div>",
				search: "<i class='fa fa-search search-icon'></i>",
				lengthMenu: '_MENU_ ',
				paginate : {
					first    : '<i class="fa fa-angle-double-left"></i>',
					last     : '<i class="fa fa-angle-double-right"></i>',
					previous : '<i class="fa fa-angle-left"></i>',
					next     : '<i class="fa fa-angle-right"></i>'
				}
			},
			pagingType : 'full_numbers',
			processing: true,
			serverSide: true,
			ajax: "<?php echo e(route('user.documents.transcripts')); ?>",
			columns: [{
					"className":      'details-control',
					"orderable":      false,
					"searchable":     false,
					"data":           null,
					"defaultContent": ''
				},
				{
					data: 'created-on',
					name: 'created-on',
					orderable: true,
					searchable: true
				},	
				{
					data: 'title',
					name: 'title',
					orderable: true,
					searchable: true
				},	
				{
					data: 'workbook',
					name: 'workbook',
					orderable: true,
					searchable: true
				},			
				{
					data: 'single',
					name: 'single',
					orderable: true,
					searchable: true
				},				
				{
					data: 'download',
					name: 'download',
					orderable: true,
					searchable: true
				},
				{
					data: 'custom-length',
					name: 'custom-length',
					orderable: true,
					searchable: true
				},
				{
					data: 'format',
					name: 'format',
					orderable: true,
					searchable: true
				},	
				{
					data: 'size',
					name: 'size',
					orderable: true,
					searchable: true
				},	
				{
					data: 'words',
					name: 'words',
					orderable: true,
					searchable: true
				},
				{
					data: 'type',
					name: 'type',
					orderable: true,
					searchable: true
				},		
				{
					data: 'actions',
					name: 'actions',
					orderable: false,
					searchable: false
				}
			]
		});
		
		$('#userResultTable tbody').on('click', 'td.details-control', function () {
			var tr = $(this).closest('tr');
			var row = table.row( tr );
	
			if ( row.child.isShown() ) {
				// This row is already open - close it
				$('div.slider', row.child()).slideUp( function () {
					row.child.hide();
					tr.removeClass('shown');
				} );
			}
			else {
				// Open this row
				row.child( format(row.data()), 'no-padding' ).show();
				tr.addClass('shown');
	
				$('div.slider', row.child()).slideDown();
			}
		});


		$('.refresh-button').on('click', function(e){
			e.preventDefault();
			$("#userResultTable").DataTable().ajax.reload();
		});

		
		// DELETE SYNTHESIZE RESULT
		$(document).on('click', '.deleteResultButton', function(e) {

			e.preventDefault();

			Swal.fire({
				title: '<?php echo e(__('Confirm Result Deletion')); ?>',
				text: '<?php echo e(__('It will permanently delete this transcribe result')); ?>',
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: '<?php echo e(__('Delete')); ?>',
				reverseButtons: true,
			}).then((result) => {
				if (result.isConfirmed) {
					var formData = new FormData();
					formData.append("id", $(this).attr('id'));
					$.ajax({
						headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
						method: 'post',
						url: 'result/transcript/delete',
						data: formData,
						processData: false,
						contentType: false,
						success: function (data) {
							if (data['status'] == 'success') {
								Swal.fire('<?php echo e(__('Result Deleted')); ?>', '<?php echo e(__('Transcribe result has been successfully deleted')); ?>', 'success');	
								$("#userResultTable").DataTable().ajax.reload();								
							} else {
								Swal.fire('<?php echo e(__('Delete Failed')); ?>', '<?php echo e(__('There was an error while deleting this result')); ?>', 'error');
							}      
						},
						error: function(data) {
							Swal.fire('Oops...','Something went wrong!', 'error')
						}
					})
				} 
			})
		});

	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\AI.ai\resources\views/user/documents/transcribe/index.blade.php ENDPATH**/ ?>