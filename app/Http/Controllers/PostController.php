<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Контроллер создан генератором вместе с файлом миграций.
class PostController extends Controller
{
    public function get_data(Request $request){
        echo 'Метод get_data успешно отработал';
        dd($request);
    }
}
