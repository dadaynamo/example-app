<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
//oppure use View;
class PageController extends Controller
{
    protected $data=[
        [
            'name'=>'Mattia',
            'lastname'=>'Dado'
        ],
        [
            'name'=>'Cesare',
            'lastname'=>'Anzellotti'
        ],
        [
            'name'=>'Raoul',
            'lastname'=>'Morizio'
        ]
    ];
    public function about()
    {
         return View::make('about');
        //return 'about';
        //return view('about');

    }
    public function blog()
    {
        //return View::make('blog');
        //return 'about';
        return view('blog',['img_url'=>'http://lorempixel.com/400/200/sports','img_title'=>'ciave titolo 2']);

    }
        public function staff()
        {


            //chiamara di una view classica
            //return view('staff',['title'=>'our staff','staff'=>$this->data]);

            /* chiamata con metodo with ()
            return view('staff')
                ->with('staff',$this->data)
                ->with('title','Nostro staff');
            */

            //creazione view con metodi eloquent parlanti
            /*
            return view('staff')
                ->withStaff($this->data)
                ->withTitle('our staff');
            */

            //metodo funzione compact
            $staff = $this->data;
            $title='OUR STAFF';
            return view('staffb', compact('title','staff'));

            }
}
