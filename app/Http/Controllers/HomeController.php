<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
  
class HomeController extends Controller {
    public function order($id)
            {
                $ktgr = DB::table('kategori')->where('id_kategori', $id)->get();
                $tgl = DB::table('pesan')->whereNotNull('tanggal')->whereNotNull('bukti')->get();
                //dd($db);
                return view('order',['kategori' => $ktgr])->with(['tanggal' => $tgl]);
            }
    public function ktgr()
    {
        $db = DB::table('kategori')->get();
        //dd($db);
        return view('home', ['s' => $db]);
    }
}