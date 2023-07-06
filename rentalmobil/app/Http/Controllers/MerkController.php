<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;
class MerkController extends Controller
{
    function index()
    {
        return view('pages.merk.index');
    }

    function create()
    {
        return view('pages.merk.create');
    }

    function store(Request $request)
    {
       $merkData = new Merk;
       $merkData->merk = $request->merk;
       $merkData->save();

       return redirect()->to('/merk')->with('success', 'data sukses disimpan');

    }

}
    