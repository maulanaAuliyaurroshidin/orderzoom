<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
  
class OrderController extends Controller {

        public function save(Request $request)
            {
               DB::table('pesan')->insert([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'telp' => $request->telp,
                    'instansi' => $request->instansi,
                    'alamat' => $request->alamat,
                    'tanggal' => $request->tanggal


                ]);dd($request->all());
            }

}