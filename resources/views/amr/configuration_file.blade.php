@extends('layouts.layout')  
@section('content')  

<main id="main" class="main">	
    <section class="section">
	
          <div class="card">
		  
			  <div class="card card-12-btm">
			  
				<div class="card-header" style="text-align:center;">
                             
				  
				  <div class="row">
					
						  <div class="col-sm-12">
						  
						  <h5 class="card-title bi bi-person-lines-fill">&nbsp;{{ $title }}</h5>    
						  <!--OPTIONS HERE-->
							<div class="d-flex justify-content-end" id="configuration_file_option"></div>
						  </div>
						  
						  
						</div>
				  
				  </div>
				</div>			  
		 
            <div class="card-body">
				<div class="row">
				<div class="p-1" align="">
									<div class="table-responsive">
										<table class="table dataTable display nowrap cell-border" id="configuration_fileList" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>#</th>
													<!--<th nowrap>Code</th>-->
													<th class="all">File Name</th>
													<th>Date Created</th>
													<th>Date Updated</th>	
													<th class="all">Action</th>
												</tr>
											</thead>				
											
											<tbody>
												
											</tbody>
											
											
										</table>
									</div>		
				</div>									
                </div>   
            </div>
          </div>

	<!-- Switch Delete Modal-->
    <div class="modal fade" id="Configuration_fileDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header header_modal_bg">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
 					<div class="btn-sm btn-warning btn-circle bi bi-exclamation-circle btn_icon_modal"></div>
                </div>
                <div class="modal-body warning_modal_bg" id="modal-body">
				Are you sure you want to delete this Configuration file?</div>
				<div style="margin:10px;">
				File Name: <span id="configuration_file_name_info_confirm"></span><br>
				</div>
                <div class="modal-footer footer_modal_bg">         
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="deleteconfiguration_fileConfirmed" value=""><i class="bi bi-trash3 form_button_icon"></i>Delete</button>
					<button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="bi bi-x-circle form_button_icon"></i>Cancel</button>
                </div>
            </div>
        </div>
    </div>	

	<!--Modal to Create Configuration file-->
	<div class="modal fade" id="Createconfiguration_fileModal" tabindex="-1">
           <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header modal-header_form">
                      <h5 class="modal-title">Create Configuration file</h5>
					  <div class="btn-group" role="group" aria-label="Basic outlined example">		
						<button type="button" class="btn btn-danger bi bi-x-circle form_button_icon" data-bs-dismiss="modal"></button>
					  </div>
                    </div>
                    <div class="modal-body">

					  <form class="g-2 needs-validation" id="Createconfiguration_fileform">
					  
						<div class="row mb-2">
						  <label for="configuration_file_name" class="col-sm-3 col-form-label" title="Configuration File Name">File Name:</label>
						  <div class="col-sm-9">
							<input type="text" class="form-control" name="configuration_file_name" id="configuration_file_name" value="" required>
							<span class="valid-feedback" id="configuration_file_nameError" title="Required"></span>
						  </div>
						</div>
						
						</div>
						
                    <div class="modal-footer modal-footer_form">
						
						  <button type="submit" class="btn btn-success btn-sm bi bi-save-fill form_button_icon" id="save-configuration_file"> Submit</button>
						  <button type="submit" class="btn btn-primary btn-sm bi bi-backspace-fill form_button_icon" id="clear-configuration_file" onclick="ResetFormConfiguration_file();"> Reset</button>
						  
					</div>
					</form><!-- End Multi Columns Form -->
                  </div>
                </div>
                  </div>
	
	<!--Modal to Create Configuration file-->
	<div class="modal fade" id="Updateconfiguration_fileModal" tabindex="-1">
           <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header modal-header_form">
                      <h5 class="modal-title">Update Configuration File</h5>
					  <div class="btn-group" role="group" aria-label="Basic outlined example">		
						<button type="button" class="btn btn-danger bi bi-x-circle form_button_icon" data-bs-dismiss="modal"></button>
					  </div>
                    </div>
                    <div class="modal-body">

					  <form class="g-2 needs-validation" id="Updateconfiguration_fileform">                     
					  
						<div class="row mb-2">
						  <label for="update_configuration_file_name" class="col-sm-3 col-form-label">File Name:</label>
						  <div class="col-sm-9">
							<input type="text" class="form-control " name="update_configuration_file_name" id="update_configuration_file_name" value="" required>
							<span class="valid-feedback" id="update_configuration_file_nameError"></span>
						  </div>
						</div>
						
						</div>
						
                    <div class="modal-footer modal-footer_form">
						  <button type="submit" class="btn btn-success btn-sm bi bi-save-fill form_button_icon" id="update-configuration_file"> Submit</button>
					</div>
					</form><!-- End Multi Columns Form -->
                  </div>
                </div>
            </div>
	

    </section>
</main>


@endsection

