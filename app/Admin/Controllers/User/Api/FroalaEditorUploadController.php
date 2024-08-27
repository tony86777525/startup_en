<?php

namespace App\Admin\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class FroalaEditorUploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        $image = request()->file('file');

        //保存到当前默认disk
        $path = $image->store('images');

        //保存到本地或者选定特定的disk
        $url = Storage::disk('admin')->put('images',$image);
        $url = Storage::disk('admin')->url($url);

        $data = ['link' => $url];

        return json_encode($data);

    }
}
