<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Tuga;
use App\Models\User;

class PrintController extends Controller
{
    public function index($id)
    {
        //echo $id;
        $tugas = Tuga::find($id);
        // var_dump($tugas);die;
        return view('print', compact('tugas'));
    }
}
