<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigurationFileModel;
use App\Models\User;
use Hash;
use Session;
use Validator;
use DataTables;
use Illuminate\Support\Facades\Storage;
use App\Models\WebPageSettingsModel;

class ConfigurationFileController extends Controller
{
	
	/*Load ConfigurationFileList Interface*/
	public function ConfigurationFile(){
		
			$title = 'Configuration File List';
			$data = array();
			if(Session::has('loginID')){

				$WebPageSettingsdata = WebPageSettingsModel::first();
				$data = User::where('user_id', '=', Session::get('loginID'))->first();
				return view("amr.configuration_file", compact('data','title', 'WebPageSettingsdata'));
		
			
			}
	
			
	}   
	
	/*Fetch Site List using Datatable*/
	public function getConfigurationFileList(Request $request)
    {

		$Company = ConfigurationFileModel::get();
		if ($request->ajax()) {
		
		$data= ConfigurationFileModel::select(
		'config_id',
		'config_file',
        'created_at',
        'updated_at'
		);		

		return DataTables::of($data)
				->addIndexColumn()
                ->addColumn('action', function($row){	
					
						$actionBtn = '
						<div class="action_table_menu_switch">
						<a href="#" data-id="'.$row->config_id.'" class="bi bi-pencil-fill btn_icon_table btn_icon_table_edit" id="editconfiguration_file" title="Update Company Information"></a>
						<a href="#" data-id="'.$row->config_id.'" class="bi-trash3-fill btn_icon_table btn_icon_table_delete" id="deleteconfiguration_file" title="Delete Company Information"></a>
						</div>';
					
                    return $actionBtn;
                
				})
				
				->addColumn('created_at_dt_format', function($row){						
                    return $row->created_at;
				})
				
				->addColumn('updated_at_dt_format', function($row){		
				
                    if($row->updated_at=="0000-00-00 00:00:00"){
						return "$row->updated_at";
					}else{
						return $row->created_at;
					}

				})
				
				->rawColumns(['action','created_at_dt_format','updated_at_dt_format'])
                ->make(true);
		}	
    }

	/*Fetch ConfigurationFileList Information*/
	public function ConfigurationFile_info(Request $request){

		$ConfigFileID = $request->ConfigFileID;
		$data = ConfigurationFileModel::find($ConfigFileID, ['config_file']);
		return response()->json($data);
		
	}

	/*Delete ConfigurationFileList Information*/
	public function delete_configuration_file_confirmed(Request $request){
		
			$ConfigFileID = $request->ConfigFileID;
			ConfigurationFileModel::find($ConfigFileID)->delete();
			return 'Deleted';
		
	} 

	public function create_configuration_file_post(Request $request){
		
		$request->validate([
			'configuration_file_name'      	=> 'required|unique:meter_configuration_file,config_file',
        ], 
        [
			'configuration_file_name.required' => 'File Name is Required',
        ]
		);

			#$data = $request->all();
			#insert
					
			$ConfigurationFileList = new ConfigurationFileModel();
			$ConfigurationFileList->meter_model 			= 'N/A';
			$ConfigurationFileList->config_file 			= $request->configuration_file_name;
			$ConfigurationFileList->created_by_user_idx 	= Session::get('loginID');
			$result = $ConfigurationFileList->save();
			
			if($result){
				return response()->json(['success'=>'Configuration File Information Successfully Created!']);
			}
			else{
				return response()->json(['success'=>'Error on Insert Configuration File Information']);
			}

	}
	
	public function update_configuration_file_post(Request $request){
		
		$request->validate([
			'configuration_file_name'  => 'required|unique:meter_configuration_file,config_file,'.$request->ConfigFileID.',config_id',
		], 
		[
			'configuration_file_name.required' => 'File Name is Required',
		]
		);
			
			#$data = $request->all();
			#insert		
			$ConfigurationFileList = new ConfigurationFileModel();
			$ConfigurationFileList = ConfigurationFileModel::find($request->ConfigFileID);
			$ConfigurationFileList->config_file 				= $request->configuration_file_name;
			$ConfigurationFileList->modified_by_user_idx 		= Session::get('loginID');
			$result = $ConfigurationFileList->update();
			
			if($result){
				return response()->json(['success'=>'Configuration File Successfully Updated!']);
			}
			else{
				return response()->json(['success'=>'Error on Update Company Information']);
			}
	
	}
	
}
