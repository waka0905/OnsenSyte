<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        // ディレクトリ名
        $dir = 'sample';

        // sampleディレクトリに画像を保存
        $request->file('image')->store('public/' . $dir);

        return redirect('/');
        
    }
}

