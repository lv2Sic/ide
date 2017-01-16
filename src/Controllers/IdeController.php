<?php

namespace Lv2Sic\Ide\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IdeController extends Controller
{
    public function index(Request $request)
    {
    	return view('ide::index');
    }
}
