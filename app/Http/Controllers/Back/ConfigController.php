<?php

namespace App\Http\Controllers\Back;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index(){

        return view('back.config.index',[
            'config'=> Config::paginate(7)                //SELECT * FROM configs
        ]);
    }

    
    public function update(Request $request, string $id){

        $data = $request->validate([
            'name' => 'required|min:3',
            'value' => 'required|min:3',
        ]);

        Config::find($id)->update($data);       //UPDTE configs SET ... WHERE id=$id

        return back()->with('success', 'Configs has been updated');

    }
}
