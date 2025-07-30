   <!-- Page level plugins -->
   <script src="{{asset('datatables/2.0.8/js/dataTables.js')}}"></script>
   <script src="{{asset('datatables/responsive/3.0.2/js/dataTables.responsive.js')}}"></script>
   <script src="{{asset('datatables/responsive/3.0.2/js/responsive.dataTables.js')}}"></script>
   <script type="text/javascript">
   // $(window).resize(function(){location.reload();});
	<!--Load Table-->				
	$(function () {
				
		var switchTable = $('#configuration_fileList').DataTable({
			processing: true,
			responsive: true,
			serverSide: true,
			stateSave: true,/*Remember Searches*/
			scrollCollapse: true,
			scrollY: '500px',
			//scrollX: '100%',
			ajax: {
				url : "{{ route('getConfigurationFileList') }}",
				method : 'POST',
				data: { _token: "{{ csrf_token() }}" },Updateconfiguration_fileModal
			},
			columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},    
					{data: 'config_file'},  		
					{data: 'created_at_dt_format', name: 'switch_status', orderable: true, searchable: false},
					{data: 'updated_at_dt_format', name: 'switch_status', orderable: true, searchable: false},
					{data: 'action', name: 'action', orderable: false, searchable: false},
			],
			columnDefs: [
					 { className: 'text-center', targets: [0, 2, 3, 4] },
			],
			
		});

		  /*Add Options*/
		  $('<div class="btn-group" role="group" aria-label="Basic outlined example"style="margin-top: -50px; position: absolute;">'+
		  '<button type="button" class="btn btn-success new_item bi bi-plus-circle" data-bs-toggle="modal" data-bs-target="#Createconfiguration_fileModal" onclick="ResetFormConfiguration_file();"> Configuration File</button>'+
		  '</div>').appendTo('#configuration_file_option');

	autoAdjustColumns(switchTable);

		 /*Adjust Table Column*/
		 function autoAdjustColumns(table) {
			 var container = table.table().container();
			 var resizeObserver = new ResizeObserver(function () {
				 table.columns.adjust();
			 });
			 resizeObserver.observe(container);
		 }	

	});
	
	
	<!--Save New Site-->
	//save-Configuration_file
	$("#save-configuration_file").click(function(event){
			
			event.preventDefault();
			
					/*Reset Warnings*/					  
					$('#configuration_file_nameError').text('');

			document.getElementById('Createconfiguration_fileform').className = "g-3 needs-validation was-validated";
			
			let configuration_file_name 			= $("input[name=configuration_file_name]").val();
			
			$.ajax({
				url: "/create_configuration_file_post",
				type:"POST",
				data:{
				  configuration_file_name:configuration_file_name,
				  _token: "{{ csrf_token() }}"
				},
				success:function(response){
				  console.log(response);
				 
				  if(response) {
					
					$('#configuration_file_nameError').text('');
					
					$('.success_modal_bg').html(response.success);
					$('#SuccessModal').modal('toggle');	
					
					ResetFormConfiguration_file();
					
					var table = $("#configuration_fileList").DataTable();
				    table.ajax.reload(null, false);
				  
				  }
				},
				error: function(error) {
				 console.log(error);	
				
				if(error.responseJSON.errors.configuration_file_name=="The configuration file name has already been taken."){
							  
				  $('#configuration_file_nameError').html("<b>"+ configuration_file_name +"</b> has already been taken.");
				  document.getElementById('configuration_file_nameError').className = "invalid-feedback";
				  document.getElementById('configuration_file_name').className = "form-control is-invalid";
				  $('#configuration_file_name').val("");
				  
				}else{
					
				  $('#configuration_file_nameError').text(error.responseJSON.errors.configuration_file_name);
				  document.getElementById('configuration_file_nameError').className = "invalid-feedback";		
				
				}
				  
				  $('#InvalidModal').modal('toggle');				
				  
				}
			   });
		
	  });

	function ResetFormConfiguration_file(){
			
			event.preventDefault();
			$('#Createconfiguration_fileform')[0].reset();
			
			$('#configuration_file_nameError').text('');
			document.getElementById('configuration_file_nameError').className = "valid-feedback";		
			
			document.getElementById('configuration_file_name').className = "form-control";

			document.getElementById('Createconfiguration_fileform').className = "g-3 needs-validation";
			
			
	}
	
	<!--Select Site For Update-->
	$('body').on('click','#editconfiguration_file',function(){
			
			event.preventDefault();
			let ConfigFileID = $(this).data('id');

			  $.ajax({
				url: "{{ route('ConfigurationFile_info') }}",
				type:"POST",
				data:{
				  ConfigFileID:ConfigFileID,
				  _token: "{{ csrf_token() }}"
				},
				success:function(response){
				  console.log(response);
				  if(response) {
					
					document.getElementById("update-configuration_file").value = ConfigFileID;
					document.getElementById("update-configuration_file").disabled = true;
					
					/*Set Switch Details*/
					document.getElementById("update_configuration_file_name").value = response.config_file;
					$('#Updateconfiguration_fileModal').modal('toggle');					
				  
				  }
				},
				error: function(error) {
				 console.log(error);
					alert(error);
				}
			   });		
	  });
	  
	  
	document.getElementById("update_configuration_file_name").addEventListener('change', doThing_configuration_file_management);
	
	function doThing_configuration_file_management(){

			let ConfigFileID = document.getElementById("update-configuration_file").value;
			let configuration_file_name 			= $("input[name=update_configuration_file_name]").val();
		
			$.ajax({
				url: "/configuration_file_info",
				type:"POST",
				data:{
				  ConfigFileID:ConfigFileID,
				  _token: "{{ csrf_token() }}"
				},
				success:function(response){
				  console.log(response);
				  if(response) {				

					  if(response.config_file===configuration_file_name){
							
							document.getElementById("update-configuration_file").disabled = true;
							
						}else{
							
							document.getElementById("update-configuration_file").disabled = false;
							
						}
					  
				  }
				},
				error: function(error) {
				 console.log(error);
					alert(error);
				}
			   });		 
	   
    }
	
	$("#update-configuration_file").click(function(event){
			
			event.preventDefault();
			
			/*Reset Warnings*/
			let ConfigFileID = document.getElementById("update-configuration_file").value;	
			
			document.getElementById('Updateconfiguration_fileform').className = "g-2 needs-validation was-validated";

			let configuration_file_name 			= $("input[name=update_configuration_file_name]").val();
			
			$.ajax({
				url: "/update_configuration_file_post",
				type:"POST",
				data:{
				  ConfigFileID:ConfigFileID,
				  configuration_file_name:configuration_file_name,
				  _token: "{{ csrf_token() }}"
				},
				success:function(response){
				  console.log(response);
				  if(response) {
					  
					$('#update_configuration_file_nameError').text('');	
					
					$('#switch_notice_on').show();
					$('#sw_on').html(response.success);
					setTimeout(function() { $('#switch_notice_on').fadeOut('fast'); },1000);
					
					$('.success_modal_bg').html(response.success);
					$('#SuccessModal').modal('toggle');	
					
					$('#UpdateUserModal').modal('toggle');
					
					var table = $("#configuration_fileList").DataTable();
				    table.ajax.reload(null, false);
				  
				  }
				},
				error: function(error) {
				 console.log(error);	
				 
				if(error.responseJSON.errors.configuration_file_name=="The configuration file name has already been taken."){
							  
				  $('#update_configuration_file_nameError').html("<b>"+ configuration_file_name +"</b> has already been taken.");
				  document.getElementById('update_configuration_file_nameError').className = "invalid-feedback";
				  document.getElementById('update_configuration_file_name').className = "form-control is-invalid";
				  $('#update_configuration_file_name').val("");
				  
				}else{
					
				  $('#update_configuration_file_nameError').text(error.responseJSON.errors.configuration_file_name);
				  document.getElementById('update_configuration_file_nameError').className = "invalid-feedback";		
				
				}
				
				$('#InvalidModal').modal('toggle');
				  
				}
			   });
	  });
	  
	<!--Switch Deletion Confirmation-->
	$('body').on('click','#deleteconfiguration_file',function(){
			
			event.preventDefault();
			let ConfigFileID = $(this).data('id');
			
			  $.ajax({
				url: "/configuration_file_info",
				type:"POST",
				data:{
				  ConfigFileID:ConfigFileID,
				  _token: "{{ csrf_token() }}"
				},
				success:function(response){
				  console.log(response);
				  if(response) {
					
					document.getElementById("deleteconfiguration_fileConfirmed").value = ConfigFileID;
					
					$('#configuration_file_name_info_confirm').html(response.config_file);
					$('#Configuration_fileDeleteModal').modal('toggle');					
				  
				  }
				},
				error: function(error) {
				 console.log(error);
					alert(error);
				}
			   });	
	  });

	<!--User Confirmed For Deletion-->
	$('body').on('click','#deleteconfiguration_fileConfirmed',function(){
			
			event.preventDefault();

			let ConfigFileID = document.getElementById("deleteconfiguration_fileConfirmed").value;
			
				$.ajax({
				url: "/delete_configuration_file_confirmed",
				type:"POST",
				data:{
				  ConfigFileID:ConfigFileID,
				  _token: "{{ csrf_token() }}"
				},
				success:function(response){
				  console.log(response);
				  
				  if(response) {
					  
					$('.success_modal_bg').html("Configuration File Deleted!");
					$('#SuccessModal').modal('toggle');	

					var table = $("#configuration_fileList").DataTable();
				    table.ajax.reload(null, false);
				  }
				},
				error: function(error) {
				 console.log(error);
				}
			   });	
		
	  });
</script>