/*This Script will load the List of Site List Access for Every User*/
$(function () {
    
		var siteTable = $('#siteList').DataTable({
			"language": {
						"lengthMenu":'<label class="col-form-label">Limit: </label> <select class="form-select form-control form-control-sm">'+
			             '<option value="10">10</option>'+
			             '<option value="20">20</option>'+
			             '<option value="30">30</option>'+
			             '<option value="40">40</option>'+
			             '<option value="50">50</option>'+
			             '<option value="-1">All</option>'+
			             '</select> '
			    },
			processing: true,
			serverSide: true,
			stateSave: true,/*Remember Searches*/
			ajax: "{{ route('SiteList') }}",
			columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
					{data: 'company_no'},           
					{data: 'business_entity'},
					{data: 'site_code'},
					{data: 'site_name'},
					{data: 'site_cut_off'},
					{data: 'status', name: 'status', orderable: true, searchable: true},
					{data: 'action', name: 'action', orderable: false, searchable: false},
			]
		});
	});