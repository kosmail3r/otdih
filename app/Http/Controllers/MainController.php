<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class MainController extends Controller
{
    public function indexAction ()
    {
        //получить данные для слайдеров
        $sliderData = Slider::all();
        //
        return view('main', ['sliders' => $sliderData]);
    }
}
