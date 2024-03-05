<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class UploadFileController extends Controller
{
    public function index(){
        return view('upload');
    }
    public function handleFile(Request $request){
        $file = $request->file('photo');
       
        if($request->hasFile('photo')){

            // Lưu file vào local storage với tên là tên của bạn
            $ $file = $request->file('file');
            $fileName = 'Hoanghuuhung.' . $file->getClientOriginalExtension();
        
            // Store the file with your name
            $file->storeAs('uploads', $fileName);
        
            // Display information
            echo "Tên file sau khi đổi: $fileName<br>";
            echo "Loại file: " . $file->getClientOriginalExtension();
        }else{
            return "Vui lòng chọn tệp cần upload";
        }
    }
}
