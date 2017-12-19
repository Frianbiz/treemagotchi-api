<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Validator;

class MapController extends Controller
{
    public function index() {
        return view('front.map');
    }
}
