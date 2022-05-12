<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VokalModel;

class VokalController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }

    public function store(Request $request)
    {
        $arr = $request->all();
        VokalModel::setVokal($arr['kata']);
        return view('hasil', ["hasil" => VokalModel::getHasil(), "jumlah" => VokalModel::getHitung()]);
    }
}
