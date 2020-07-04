<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index($id)
    {
        $pertanyaan = JawabanModel::cari($id);

        return view('jawaban.index', compact('pertanyaan'));
    }

    public function store(Request $request)
    {
        $jawaban_baru = JawabanModel::save($request->all());
        return redirect('/jawaban');
    }
}
