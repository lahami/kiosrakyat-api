<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koperasi;

class KoperasiController extends Controller
{
    // view all
    public function index(){
        $koperasi = Koperasi::all();
        // dd($koperasi);
        return $koperasi;
    }

    // view by id
    public function show($id){
        $idKoperasi = Koperasi::find($id);
        // dd($idKoperasi);
        return $idKoperasi;
    }

    // cerate
    public function create(Request $request){
        $post = $request->json()->all();
        // dd($post);
        $save = Koperasi::create($post);
        return $save;
    }

    // edit
    public function update(Request $request, $idKoperasi){
        $post = $request->json()->all();
        $idKoperasi = Koperasi::where('id_adminkoperasi',$idKoperasi)->update($post);
        
        // dd($idKoperasi);
        return $idKoperasi;
    }

    // delete
    public function destroy($id){
        $idKoperasi = Koperasi::find($id) -> delete();
        
        // if(!$idKoperasi){
        //     return response()->json([
        //         'status' => 'fail',
        //         'result' => 'delete gagal'
        //     ]);
        // }
        
        
    }
}
