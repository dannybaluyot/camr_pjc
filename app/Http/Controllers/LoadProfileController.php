<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use Illuminate\Validation\Rule;
use Validator;

class LoadProfileController extends Controller
{
	
	/*Load CompanyList Interface*/
	public function LoadProfile(Request $request){
		
			$dest_dir = trim($request->dest_dir);
			@$overwrite = $request->overwrite;
 
			$dir = ("$dest_dir");
			 
			$date_upload = date("Y-m-d");
			$time_upload = date("H:i:s");

			//echo "$dest_dir $overwrite $dir - $date_upload|$time_upload";

			$request->validate([
					'file_contents'	=> 'required|mimes:csv,txt'
			   ],[
					'file_contents.required' 				=> 'CSV file is Required',
			   ]
			);

			 if ($request->hasFile('file_contents')) {

				$path = "files/".$dir;
				$file = $request->file('file_contents');
				//@$file_name = time().'_'.@$file->getClientOriginalName();
				@$file_name = @$file->getClientOriginalName();

				if(!File::exists($path)) {

					//	path does not exist
					//	Create Folder
					Storage::makeDirectory($path);

					/*Get Device IP Address*/
					$device_ip_address = request()->ip();
					
					//Save File
					if($overwrite==1){
						
						$upload = $file->storeAs($path, $file_name);

					}else{

						$upload = $file->storeAs($path, $file_name);

					}
					
					



				}


			 }

	}   
	
}
