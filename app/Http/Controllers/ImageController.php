<?php

namespace App\Http\Controllers;

use App\Models\c;
use App\Models\images;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    
    public function uploadImages(Request $req)
    {
        // dd($req->all());
        // [if ($req->hasFile('image-upload'));
        // $image = $req->file('image-upload');
        // $response = $image->store('images', 'public');]


        // dd(asset('/storage/' . $response));
        // [return back();]

        $file = $req->hasFile('image-upload');
        if($file){
            $newFile = $req->file('image-upload');
            $file_path = $newFile->store('images');
            // dd($file_path);

            images::create([
                'picture' => $file_path,
            ]);
        }

    }

}
