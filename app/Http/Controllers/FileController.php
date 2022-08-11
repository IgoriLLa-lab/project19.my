<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {

        Storage::disk('local')->put('example.txt', 'Contents');
        Storage::disk('s3')->put('avatars/1.txt', 'fasfdsfsfsdfsd1312323');

        echo File::get(storage_path('app\public\file.txt'));

        echo File::get(storage_path('app\example.txt'));

        echo Storage::disk('local')->exists('example.txt');

//        echo Storage::disk('s3')->exists('avatars/1.txt');

        $url = Storage::url('file.txt');
        $url1 = Storage::url('example.txt');

        echo "Это адрес до файла " . $url;
        echo "Это адрес до файла example" . $url1;

        return view('index');
    }

}
