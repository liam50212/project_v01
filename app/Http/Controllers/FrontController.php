<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('front.01guest_data');
    }

    public function index2()
    {
        return view('front.02install_add');
    }

    public function index3()
    {
        return view('front.03install_record');
    }

    public function index4()
    {
        return view('front.04install_edit');
    }

    public function index5()
    {
        return view('front.05install_update');
    }

    public function index6()
    {
        return view('front.06fix_add');
    }

    public function index7()
    {
        return view('front.07fix_record');
    }

    public function index8()
    {
        return view('front.08fix_edit');
    }

    public function index9()
    {
        return view('front.09fix_update');
    }

    public function index10()
    {
        return view('front.10purchase_history');
    }

    public function index11()
    {
        return view('front.11guest_total');
    }
}
