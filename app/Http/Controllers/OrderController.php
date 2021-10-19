<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;
 
  
class OrderController extends Controller {

        public function save(Request $request)
            {

                $config=['table'=>'pesan','length'=>10,'prefix'=>'INV-'];
                $id = IdGenerator::generate($config);

                $kode = array('kd' => $id);
                
                DB::table('pesan')->insert([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'telp' => $request->telp,
                    'instansi' => $request->instansi,
                    'alamat' => $request->alamat,
                    'tanggal' => $request->tanggal,
                    'id_ktgr' => $request->id_kategori,
                    'id' => $id
                ]);
                
                $kode_pesan = array('p'=>session()->get('kde'));
                session()->put('kde', with($kode['kd']));
                return redirect('bayar/pembayaran');

                
            }
            public function pembayaran(Request $request)
            {
                $kode_pesan = array('p'=>session()->get('kde'));
                $db = DB::table('pesan')->join('kategori', 'pesan.id_ktgr', '=', 'kategori.id_kategori')->where('id',$kode_pesan)->get();
                foreach($db as $k)
                {
                    $k = array('k'=>$k);
                }
                //dd($k);
                return view('pembayaran')->with($k)->with($kode_pesan);
            }

            public function getSessionData(Request $request)
            {
                if(session()->has('kde'))
                {
                    echo session()->get('kde');
                }
                else
                {
                    echo 'No Data';
                }
            }
            public function deleteSessionData(Request $request)
            {
                session()->forget('kde');
                return redirect('/');
            }
            public function uploadbukti($id)
            { 
                
                $kode_pesan = array('p'=>session()->get('kde'));
                $db = DB::table('pesan')->join('kategori', 'pesan.id_ktgr', '=', 'kategori.id_kategori')->where('id',$kode_pesan)->get(); 

                foreach($db as $k)
                {
                    $k = array('k'=>$k);
                    
                }

                return view('uploadbukti',['id' => $id])->with($kode_pesan)->with($k);
            }
            public function upload(Request $request)
            { 
                $path = $request->file('bukti')->store('kntl');
                dd($path);


                //DB::table('pesan')->where('id',$request->id)->update([
                  //  'bukti' => $request->bukti,
                //]); 
                //dd($request->all());
                session()->forget('kde');
                return view('uploadberhasil');
            }
            

            public function cari(Request $request)
            {
                $cari = $request->cari;
                    $pesan= DB::table('pesan')->join('kategori', 'pesan.id_ktgr', '=', 'kategori.id_kategori')
                    ->where('id','like',"%".$cari."%")
                    ->get();
                    $pp = array('p'=>$cari);

                    foreach($pesan as $k)
                {
                    $k = array('k'=>$k);
                    
                }
                    //->paginate(10);
                    //dd($pp);
                  return view('uploadbukti')->with($pp)->with($k);
            }  
            public function viewcari()
            {
                $kode_pesan = array('p'=>session()->get('kde'));
                return view('pencarian')->with($kode_pesan);
            }
            
}