<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller AS BaseController;

class Controller extends BaseController
{
    public function index()
    {
        //
    }

    public function blank()
    {
        return view('master.blank');
    }

    public function json($status, $msg, $data = [])
    {
        return response()->json([
            'status'=> $status,
            'msg'=> $msg,
            'data'=> $data,
        ]);
    }
}
