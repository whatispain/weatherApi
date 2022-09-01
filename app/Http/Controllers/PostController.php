<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\WorkingWithCoordinates;
 
//Контроллер создан генератором вместе с файлом миграций.
class PostController extends Controller
{
    //$request->input('key'); получить по ключу

    public function get_data(Request $request)
    {
        if($request->input('coordinates') == null)
            return "error: 'coordinate' parameter is empty";
        if($request->input('date') == null)
            return "error: 'date' parameter is empty";
        //добавить проверку валидности координат.

        $coordinates = (string)$request->input('coordinates');
        
        //echo 'Метод get_data успешно отработал';
        $weather_balloon = new WorkingWithCoordinates();

        return json_encode($weather_balloon->get_weather($coordinates), JSON_UNESCAPED_UNICODE);
        
       


    }


}
