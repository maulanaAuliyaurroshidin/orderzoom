<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class AdminController extends Controller
{
	public function dashboard()
	{
		$pesanan = DB::table('pesan')->count();
		$pendapatan = DB::table('pesan')->join('kategori','pesan.id_ktgr','=','kategori.id_kategori')
						->sum('kategori.harga');
					//	->select('pesan.*','kategori.*','kategori')
			return view('admin.admin', compact('pesanan','pendapatan'));
	//	$dashboard = DB::table('pesan')
	//	->join('kategori','pesan.id_ktgr','=','kategori.id_kategori')
	//	->get();
		
    	
	//	return view('admin.admin',['pesan' => $dashboard]);
 
	}
	public function view()
	{
    	
		$pesan = DB::table('pesan')
		->join('kategori','pesan.id_ktgr','=','kategori.id_kategori')
		->orderby('id','desc')
		->paginate(10);
		
    	
		return view('admin.listpesan',['pesan' => $pesan]);
 
	}
	public function baru()
	{
		$baru = DB::table('pesan')
		->join('kategori','pesan.id_ktgr','=','kategori.id_kategori')
		->where('bukti', null)
		->where('status', null)
		->orderby('id','desc')
		->paginate(10);
		
    	
		return view('admin.baru',['pesan' => $baru]);
 
	}
	public function selesai()
	{
		$baru = DB::table('pesan')
		->join('kategori','pesan.id_ktgr','=','kategori.id_kategori')
		->where('status', '1')
		->whereNotNull('bukti')
		->orderby('id','desc')
		->paginate(10);
		
    	
		return view('admin.selesai',['pesan' => $baru]);
 
	}
}