<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WelcomeController extends Controller
{


    public  function welcome ($name= '',$lastname= '', $age='', Request $req)

    {
        $ciao= DB::table('users') -> get();
	dd($ciao);
        return 'WEB ROUTE';
//        $message='';
        $lang = $req ->input('lang');
        //uguale a
        //$lang = $req ->lang;
        switch($lang){
            case 'us':
                $message= "Hello world ".$name." ".$lastname." ".$age;
                break;
            case 'es':
                $message= "mucho bonito ".$name." ".$lastname." ".$age;
                break;
        }
        return $message;
    }


}
