<?php

namespace App\Http\Controllers;

class ExampleAdminController extends Controller
{
    function getDashboard(){
        return view('admin.template.dashboard');
    }
    function getForm(){
        return view('admin.template.form');
    }
    function getTable(){
        return view('admin.template.table');
    }
}
