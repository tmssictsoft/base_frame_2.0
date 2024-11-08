<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function uploadFile(Request $request)
    {
        if ($request->file) {
            $validator = Validator::make($request->all(), [
                'file' => 'required|max:2048|mimes:jpg,jpeg,gif,png,pdf,doc,xlsx,xls',
            ]);
            if ($validator->fails()) {
                return returnData(3000, null, 'File validation failed, Max file size 4MB and supported file type (jpg,jpeg,gif,pdf)');
            }
            $original_name = $request->file('file')->getClientOriginalName();
            $fileName = strtotime(date('Y-m-d m:h:s')) . "_$original_name";
            $path = $request->file('file')->storeAs('uploads', str_replace(' ', '_', $fileName), 'public');
            return returnData(2000, $path);
        }
    }

    public function imageUpload(Request $request){
        $fileName=$request->file('file')->getClientOriginalName();
        $path=$request->file('file')
            ->storeAs('uploads', $fileName, 'public');
        return response()->json(['location'=>env('UPLOAD_PATH')."/".$path]);
    }


}
