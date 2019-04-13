<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kio;

class KiosController extends Controller
{
    // viwe all
    public function index(){
        $kios = Kio::all();
        //dd($kios);
        return $kios;
    }

    // view by id
    public function show($id){
        $idKios = Kio::find($id);
        // dd($idKios);
        return $idKios;
    }

    // cerate
    public function create(Request $request){
        $post = $request->json()->all();
        // dd($post);
        $save = Kio::create($post);
        return $save;
    }

    // edit
    public function update(Request $request, $idKios){
        $post = $request->json()->all();
        $idKios = Kio::where('id_kios',$idKios)->update($post);
        
        // dd($idKios);
        return $idKios;
    }

    // delete
    public function destroy($id){
        $idKios = Kio::find($id) -> delete();
        
        // if(!$idKios){
        //     return response()->json([
        //         'status' => 'fail',
        //         'result' => 'delete gagal'
        //     ]);
        // }
        
        
    }
}
