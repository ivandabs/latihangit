<?php

namespace App\Http\Controllers;

use Crypt;
use Session;
use Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

// use App\User;
// use App\Http\Controllers\Controller;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
         

        $result['mahasiswa'] = $mahasiswa;
        return view('mahasiswa', $result);
    }

    public function tambah()
    {
    	return view ('form_mahasiswa');
    }

    public function save()
    {
    	$save['created'] = date('Y-m-d H:i:s');
    	$save['nim']=Request::input('nim');
    	$save['nama']=Request::input('nama');
    	$action=DB::table('mahasiswa')->insert($save);
    	if ($action) {
    		return redirect('/')->with(['message'=>'Data Berhasil Disimpan']);
    	}else
    	{
    		return redirect('/')->back()->with(['message'=>'failed']);
    	}
    }

    public function edit($id)
    {
    	$id_decrypt = Crypt::decrypt($id);
        $mahasiswa = DB::table('mahasiswa')->where('id',$id_decrypt)->first();
    	$data['mahasiswa'] = $mahasiswa;

        if (empty($mahasiswa)){
            $msg['message'] = 'Data not found';
            return redirect('/')->with($msg);
        }else{
            $result['mahasiswa'] = $mahasiswa;
            return view('form_edit_mahasiswa',$result);
        }

    	// return view('mahasiswa-edit');
    }

    public function hapus($id)
    {
        $id_decrypt = Crypt::decrypt($id);

        // return $id_decrypt;

        $mahasiswa = DB::table('mahasiswa')->where('id',$id_decrypt)->delete();


        if ($mahasiswa){
            $msg['message'] = 'Data berhasil dihapus';
            return redirect('/')->with($msg);
        }else{
            $msg['message'] = 'Failed';
            return redirect()->back()->with($msg);
        }
        
    }

    public function update($id)
    {
        $id_decrypt = Crypt::decrypt($id);
        // return $id_decrypt;

        $save['updated'] = date('Y-m-d H:i:s');
        $save['nim']=Request::input('nim');
        $save['nama']=Request::input('nama');
        $action=DB::table('mahasiswa')->where('id',$id_decrypt)->update($save);
        if ($action) {
            return redirect('/')->with(['message'=>'Data Berhasil Diubah']);
        }else
        {
            return redirect('/')->back()->with(['message'=>'failed']);
        }
    }

    public function latihan()
    {
        return view ('latihan');
    }
}


