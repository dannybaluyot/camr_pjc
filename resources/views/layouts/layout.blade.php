@include('layouts.header')
</head>

<body>
@yield('content')
 
@include('layouts.footer')

<?php

if (Request::is('site')){

?>
   

@include('layouts.site_script')
<?php

}

else if (Request::is('site_details/'.@$SiteData[0]->site_id)){

?>
 
@include('layouts.site_details_script')
@include('layouts.site_details_gateway_script')
@include('layouts.site_details_meter_script')
@include('layouts.site_details_meter_location_script')
<?php
}
else if (Request::is('site_details_2/'.@$SiteData[0]->site_id)){

?>
 
@include('layouts.site_details_script')
@include('layouts.site_details_gateway_script')
@include('layouts.site_details_meter_script')
@include('layouts.site_details_meter_location_script')

<?php
}
elseif (Request::is('user')){
?>
@include('layouts.user_script')
<?php
}
elseif (Request::is('company')){
?>
@include('layouts.company_script')
<?php
}
elseif (Request::is('configuration_file')){
?>
@include('layouts.configuration_file_script')
<?php
}
elseif (Request::is('division')){
?>
   
@include('layouts.division_script')
<?php
}
elseif (Request::is('sap_report')){
?>
@include('layouts.generate_sap_report_script')
<?php
}
elseif (Request::is('consumption_report')){
?>
  <!-- <style>
   .dt-scroll-headInner{
    width: 100% !important;
	}
   .table.dataTable{
	width: 100% !important;
	} 
   </style>-->
@include('layouts.generate_meter_consumption_report_script')
<?php
}
elseif (Request::is('demand_report')){
?>
@include('layouts.generate_meter_demand_report_script')
<?php
}
elseif (Request::is('raw_report')){
?>
@include('layouts.generate_raw_report_datatable_script')
<?php
}elseif (Request::is('site_report')){
?>
  <!-- <style>
   .dt-scroll-headInner{
    width: 100% !important;
	}
   .table.dataTable{
	width: 100% !important;
	} 
   </style>-->
@include('layouts.generate_site_report_script')

<?php

}
?>
</body>


<script>

	
	document.getElementById("account_user_real_name").addEventListener('change', doThing_account_settings);
	document.getElementById("account_user_name").addEventListener('change', doThing_account_settings);
	document.getElementById("user_email_address").addEventListener('change', doThing_account_settings);

	document.getElementById("account_user_password").addEventListener('change', doThing_account_settings);
	
	function doThing_account_settings(){
		
		let user_real_name 			= $("input[name=account_user_real_name]").val();
		let user_name 				= $("input[name=account_user_name]").val();
		let user_password 			= $("input[name=account_user_password]").val();
		let user_email_address 		= $("input[name=user_email_address]").val();
		
		$.ajax({
				url: "/user_info",
				type:"POST",
				data:{
				  UserID:{{$data->user_id}},
				  _token: "{{ csrf_token() }}"
				},
				success:function(response){
				  console.log(response);
				  if(response) {				
				  
				  
				  if(user_password!==''){
						
						// alert('S1');
						if(response.user_real_name===user_real_name && response.user_name===user_name && response.user_email_address===user_email_address){
							
							document.getElementById("account-user").disabled = false;
							
						}else{
							
							document.getElementById("account-user").disabled = false;
							
						}
					
				  }else{
					  
					  // alert('S2');
					  if(response.user_real_name===user_real_name && response.user_name===user_name && response.user_email_address===user_email_address){
							
							document.getElementById("account-user").disabled = true;
							// $('#user_email_addressError').text('');
							// document.getElementById('user_email_addressError').className = "valid-feedback";
							
						}else{
							
							document.getElementById("account-user").disabled = false;
							
						}
					  
				  }
				  
				  }
				},
				error: function(error) {
				 console.log(error);
					alert(error);
				}
			   });		 
	   
    }	
		

	function doThing_account_settings_PW(){
       // alert('Horray! Someone wrote "' + this.value + '"!');
	   if(this.value==''){
		   document.getElementById("account-user").disabled = true;
	   }else{
		   document.getElementById("account-user").disabled = false;
	   }
    }	
	
	<!--Selected Account For Update-->
	$('body').on('click','#accountUser',function(){
			
			event.preventDefault();
			$('#AccountUserform')[0].reset();
			$('#user_email_addressError').text('');
			document.getElementById('user_email_addressError').className = "valid-feedback";
				  
			  $.ajax({
				url: "/user_info",
				type:"POST",
				data:{
				  UserID:{{$data->user_id}},
				  _token: "{{ csrf_token() }}"
				},
				success:function(response){
				  console.log(response);
				  if(response) {
					
					document.getElementById("account-user").disabled = true;
					document.getElementById("account-user").value = {{$data->user_id}};
					
					/*Set Switch Details*/
					document.getElementById("account_user_real_name").value = response.user_real_name;
					document.getElementById("account_user_name").value = response.user_name;
					document.getElementById("user_email_address").value = response.user_email_address;
					
					$('#UserProfileModal').modal('toggle');					
				  
				  }
				},
				error: function(error) {
				 console.log(error);
					alert(error);
				}
			   });		
	  });

	$("#account-user").click(function(event){
			
			event.preventDefault();
			
					/*Reset Warnings*/
					let userID = document.getElementById("account-user").value;
					$('#account_user_real_nameError').text('');				  
					$('#account_user_nameError').text('');
					$('#account_user_passwordError').text('');

			document.getElementById('AccountUserform').className = "g-2 needs-validation was-validated";

			let user_real_name 			= $("input[name=account_user_real_name]").val();
			let user_name 				= $("input[name=account_user_name]").val();
			let user_password 			= $("input[name=account_user_password]").val();
			let user_email_address 		= $("input[name=user_email_address]").val();
			
			$.ajax({
				url: "/user_account_post",
				type:"POST",
				data:{
				  userID:userID,
				  user_real_name:user_real_name,
				  user_name:user_name,
				  user_password:user_password,
				  user_email_address:user_email_address,
				  _token: "{{ csrf_token() }}"
				},
				success:function(response){
				  console.log(response);
				  if(response) {
					  					
					$('#account_user_real_nameError').text('');
					$('#account_switch_timerError').text('');	
					$('#account_switch_timerError').text('');	
					$('#user_email_addressError').text('');	
					
					$('.success_modal_bg').html(response.success);
					$('#SuccessModal').modal('toggle');
					//$('#UserProfileModal').modal('toggle');
					$('#UserProfileModal').modal('toggle');	
					document.getElementById("account-user").disabled = true;
				  
				  }
				},
				error: function(error) {
				 console.log(error);	
				 
				 document.getElementById("account-user").disabled = true;
				 
				if(error.responseJSON.errors.user_real_name=="The user real name has already been taken."){
							  
				  $('#account_user_real_nameError').html("<b>"+ user_real_name +"</b> has already been taken.");
				  document.getElementById('account_user_real_nameError').className = "invalid-feedback";
				  document.getElementById('account_user_real_name').className = "form-control is-invalid";
				  $('#account_user_real_name').val("");
				  
				}else{
					
				  $('#account_user_real_nameError').text(error.responseJSON.errors.user_real_name);
				  document.getElementById('account_user_real_nameError').className = "invalid-feedback";		
				
				}
				
				if(error.responseJSON.errors.user_name=="The user name has already been taken."){
							  
				  $('#account_user_nameError').html("<b>"+ user_name +"</b> has already been taken.");
				  document.getElementById('account_user_nameError').className = "invalid-feedback";
				  document.getElementById('account_user_name').className = "form-control is-invalid";
				  $('#account_user_name').val("");
				  
				}else{
					
				  $('#account_user_nameError').text(error.responseJSON.errors.user_name);
				  document.getElementById('account_user_nameError').className = "invalid-feedback";		
				
				}
				
				if(error.responseJSON.errors.user_email_address=="The user email address has already been taken."){
							  
				  $('#user_email_addressError').html("<b>"+ user_email_address +"</b> has already been taken.");
				  document.getElementById('user_email_addressError').className = "invalid-feedback";
				  document.getElementById('user_email_address').className = "form-control is-invalid";
				  $('#user_email_address').val("");
				  
				}else{
					
				  $('#user_email_addressError').text(error.responseJSON.errors.user_email_address);
				  document.getElementById('user_email_addressError').className = "invalid-feedback";		
				  document.getElementById('user_email_address').className = "form-control is-invalid";
				  
				}
					
				  $('#account_user_passwordError').text(error.responseJSON.errors.user_password);
				  document.getElementById('account_user_passwordError').className = "invalid-feedback";		
				  
				
				$('#InvalidModal').modal('toggle');
				  
				}
			   });
	  });

	<!--Selected Account For Update-->
	$('body').on('click','#navbar_header_title',function(){
			
			event.preventDefault();
		
			  $.ajax({
				url: "/web_settings_info",
				type:"POST",
				data:{
				  _token: "{{ csrf_token() }}"
				},
				success:function(response){
				  console.log(response);
				  if(response) {
					
					/*Set Switch Details*/
					document.getElementById("navigation_header_title").value = response.navigation_header_title;
					document.getElementById("header_navigation_width").value = response.header_navigation_width;
					document.getElementById("login_page_logo_width").value = response.login_page_logo_width;
					
					if(response.default_web_settings == 0){
					
						document.getElementById("default_web_settings").checked = false;
						document.getElementById("navigation_header_title").disabled = false;
						document.getElementById("header_navigation_width").disabled = false;
						document.getElementById("login_page_logo_width").disabled = false;
						document.getElementById("image_logo").disabled = false;
						document.getElementById("header_title_settings_submit").disabled = false;

					}else{
					
						document.getElementById("default_web_settings").checked = true;
						document.getElementById("navigation_header_title").disabled = true;
						document.getElementById("header_navigation_width").disabled = true;
						document.getElementById("login_page_logo_width").disabled = true;
						document.getElementById("image_logo").disabled = true;
						document.getElementById("header_title_settings_submit").disabled = true;

					}
					
					/*Display Image*/
					if(response.image_logo != null){
						
						var img_holder = $('.img-holder');
						var img_holder_login = $('.img-holder_login');
						
						img_holder.empty();
						img_holder_login.empty();
						
						image_src = "data:image/jpg;image/png;base64,"+response.image_logo;
						
						$('<img/>',{'src':image_src,'class':'img-fluid','style':'max-width:'+response.header_navigation_width+'px;margin-bottom:0px;'}).appendTo(img_holder);
						$("#image_logo_div").show();
						
						$('<img/>',{'src':image_src,'class':'img-fluid','style':'max-width:'+response.login_page_logo_width+'px;margin-bottom:0px;'}).appendTo(img_holder_login);
						$("#image_logo_div_login").show();
						
					}else{
						
						
						
					}
					
					$('#WebPageSettingsTitleModal').modal('toggle');					
				  
				  }
				},
				error: function(error) {
				 console.log(error);
					alert(error);
				}
			   });		
	  });
	  
	/*Upload Function*/
    $('#WebPageSettingsTitleform').on('submit', function(e){
		
                e.preventDefault();
	 		
				$('#navigation_header_titleError').text('');
				$('#header_navigation_widthError').text('');
				$('#login_page_logo_widthError').text('');
				//$('#purchase_order_payment_amountError').text('');
			
				document.getElementById('WebPageSettingsTitleform').className = "g-3 needs-validation was-validated";
				
				var form = this;
				
				$.ajax({
                    url:$(form).attr('action'),
                    method:$(form).attr('method'),
                    data:new FormData(form),
                    processData:false,
                    dataType:'json',
                    contentType:false,
                    beforeSend:function(){
                        $(form).find('span.error-text').text('');
                    },
                    success:function(data){
					
						console.log(data);
						
						$('#switch_notice_on').show();
						$('#sw_on').html(data.success);
						setTimeout(function() { $('#switch_notice_on').fadeOut('fast'); },1000);

						location.reload();
					
                    },error: function(error) {
					
						console.log(error);	
						
						$('#switch_notice_off').show();
						$('#sw_off').html('The image logo must be a file of type: jpg, png, jpeg.');
						setTimeout(function() { $('#switch_notice_off').fadeOut('slow'); },1000);							
					
					
				}
                });
            });

            //Reset input file
            $('input[type="file"][name="image_logo"]').val('');
            //Image preview
            $('input[type="file"][name="image_logo"]').on('change', function(){
				
				let header_navigation_width 	= $("input[name=header_navigation_width]").val();
				let login_page_logo_width 		= $("input[name=login_page_logo_width]").val();
				
                var img_path = $(this)[0].value;
                var img_holder = $('.img-holder');
				var img_holder_login = $('.img-holder_login');
                var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();

                if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                     if(typeof(FileReader) != 'undefined'){
                          
						  img_holder.empty();
						  img_holder_login.empty();
						  
                          var reader = new FileReader();
                          reader.onload = function(e){
                              $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'max-width:'+header_navigation_width+'px;margin-bottom:5px;'}).appendTo(img_holder);
							  $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'max-width:'+login_page_logo_width+'px;margin-bottom:5px;'}).appendTo(img_holder_login);
                          }
                          img_holder.show();
						  img_holder_login.show();
						  
                          reader.readAsDataURL($(this)[0].files[0]);
						  document.getElementById("header_title_settings_submit").disabled = false;
						  
                     }else{
                         $(img_holder).html('This browser does not support FileReader');
                     }
                }else{
                    $(img_holder).empty();
					$(img_holder_login).empty();
						
						$('#switch_notice_off').show();
						$('#sw_off').html("File Not Supported");
						setTimeout(function() { $('#switch_notice_off').fadeOut('slow'); },1000);	
						document.getElementById("header_title_settings_submit").disabled = true;
						
                }
            });
			
function default_web_settings_action(){
 
if(document.getElementById("default_web_settings").checked == false){
	
					document.getElementById("navigation_header_title").disabled = false;
					document.getElementById("header_navigation_width").disabled = false;
					document.getElementById("login_page_logo_width").disabled = false;
					document.getElementById("image_logo").disabled = false;
					document.getElementById("header_title_settings_submit").disabled = false;

					}else{
						
					document.getElementById("navigation_header_title").disabled = true;
					document.getElementById("header_navigation_width").disabled = true;
					document.getElementById("login_page_logo_width").disabled = true;
					document.getElementById("image_logo").disabled = true;
					document.getElementById("header_title_settings_submit").disabled = false;


					}

}			
			
			
		
</script>
</html>