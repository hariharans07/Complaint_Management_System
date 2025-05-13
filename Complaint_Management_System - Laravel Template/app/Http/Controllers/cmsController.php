<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cmsController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
    public function eo()
    {
        return view('eo');
    }
    public function faculty()
    {
        return view('faculty');
    }
    public function hod()
    {
        return view('hod');
    }
    public function manager()
    {
        return view('manager');
    }
    public function managerDash()
    {
        return view('managerDash');
    }
    public function principal()
    {
        return view('principal');
    }
    public function work()
    {
        return view('work');
    }
    public function workDash()
    {
        return view('workDash');
    }
    public function worker()
    {
        return view('worker');
    }
}