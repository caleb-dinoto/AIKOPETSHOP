<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Model;
use App\Models\Grooming;

class GroomingController extends Controller
{
    public function index()
    {
        return view('groomingdaftar');
    }

    public function store(Request $request)
    {
        $grooming = new Grooming;
        $grooming->nama_owner = $request->nama_owner; 
        $grooming->nomor_hp = $request->nomor_hp; 
        $grooming->jenis_perawatan = $request->jenis_perawatan; 
        $grooming->ukuran_hewan = $request->ukuran_hewan;

        if($request->jenis_perawatan == "Basic Grooming"){
            if($request->ukuran_hewan == "Small"){
                $grooming->harga = "160.000";
            }elseif($request->ukuran_hewan == "Medium"){
                $grooming->harga = "180.000";
            }elseif($request->ukuran_hewan == "Large"){
                $grooming->harga = "205.000";
            }elseif($request->ukuran_hewan == "Extra Large"){
                $grooming->harga = "235.000";
            }
        }elseif($request->jenis_perawatan == "Treatment Jamur"){
            if($request->ukuran_hewan == "Small"){
                $grooming->harga = "130.000";
            }elseif($request->ukuran_hewan == "Medium"){
                $grooming->harga = "140.000";
            }elseif($request->ukuran_hewan == "Large"){
                $grooming->harga = "150.000";
            }elseif($request->ukuran_hewan == "Extra Large"){
                $grooming->harga = "160.000";
            }
        }elseif($request->jenis_perawatan == "Cutting"){
            if($request->ukuran_hewan == "Small"){
                $grooming->harga = "165.000";
            }elseif($request->ukuran_hewan == "Medium"){
                $grooming->harga = "170.000";
            }elseif($request->ukuran_hewan == "Large"){
                $grooming->harga = "180.000";
            }elseif($request->ukuran_hewan == "Extra Large"){
                $grooming->harga = "185.000";
            }
        }elseif($request->jenis_perawatan == "Special Coat"){
            if($request->ukuran_hewan == "Small"){
                $grooming->harga = "30.000";
            }elseif($request->ukuran_hewan == "Medium"){
                $grooming->harga = "35.000";
            }elseif($request->ukuran_hewan == "Large"){
                $grooming->harga = "40.000";
            }elseif($request->ukuran_hewan == "Extra Large"){
                $grooming->harga = "45.000";
            }
        }elseif($request->jenis_perawatan == "Paket Lengkap"){
            if($request->ukuran_hewan == "Small"){
                $grooming->harga = "455.000";
            }elseif($request->ukuran_hewan == "Medium"){
                $grooming->harga = "490.000";
            }elseif($request->ukuran_hewan == "Large"){
                $grooming->harga = "535.000";
            }elseif($request->ukuran_hewan == "Extra Large"){
                $grooming->harga = "580.000";
            }
        }

        $grooming->save();

        return redirect('/daftargrooming')->with('success', 'Berhasil daftar!');
    }

    public function showall()
    {
        $groomings = Grooming::all();
        return view('admin.datagrooming', ['groomings' => $groomings]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $grooming = Grooming::findOrFail($id);
        return view('admin.editgrooming', ['grooming' => $grooming]);
    }

    public function update(Request $request, $id)
    {
        $grooming = Grooming::findOrFail($id);
        $grooming->nama_owner = $request->nama_owner; 
        $grooming->nomor_hp = $request->nomor_hp; 
        $grooming->jenis_perawatan = $request->jenis_perawatan; 
        $grooming->ukuran_hewan = $request->ukuran_hewan;

        if($request->jenis_perawatan == "Basic Grooming"){
            if($request->ukuran_hewan == "Small"){
                $grooming->harga = "160.000";
            }elseif($request->ukuran_hewan == "Medium"){
                $grooming->harga = "180.000";
            }elseif($request->ukuran_hewan == "Large"){
                $grooming->harga = "205.000";
            }elseif($request->ukuran_hewan == "Extra Large"){
                $grooming->harga = "235.000";
            }
        }elseif($request->jenis_perawatan == "Treatment Jamur"){
            if($request->ukuran_hewan == "Small"){
                $grooming->harga = "130.000";
            }elseif($request->ukuran_hewan == "Medium"){
                $grooming->harga = "140.000";
            }elseif($request->ukuran_hewan == "Large"){
                $grooming->harga = "150.000";
            }elseif($request->ukuran_hewan == "Extra Large"){
                $grooming->harga = "160.000";
            }
        }elseif($request->jenis_perawatan == "Cutting"){
            if($request->ukuran_hewan == "Small"){
                $grooming->harga = "165.000";
            }elseif($request->ukuran_hewan == "Medium"){
                $grooming->harga = "170.000";
            }elseif($request->ukuran_hewan == "Large"){
                $grooming->harga = "180.000";
            }elseif($request->ukuran_hewan == "Extra Large"){
                $grooming->harga = "185.000";
            }
        }elseif($request->jenis_perawatan == "Special Coat"){
            if($request->ukuran_hewan == "Small"){
                $grooming->harga = "30.000";
            }elseif($request->ukuran_hewan == "Medium"){
                $grooming->harga = "35.000";
            }elseif($request->ukuran_hewan == "Large"){
                $grooming->harga = "40.000";
            }elseif($request->ukuran_hewan == "Extra Large"){
                $grooming->harga = "45.000";
            }
        }elseif($request->jenis_perawatan == "Paket Lengkap"){
            if($request->ukuran_hewan == "Small"){
                $grooming->harga = "455.000";
            }elseif($request->ukuran_hewan == "Medium"){
                $grooming->harga = "490.000";
            }elseif($request->ukuran_hewan == "Large"){
                $grooming->harga = "535.000";
            }elseif($request->ukuran_hewan == "Extra Large"){
                $grooming->harga = "580.000";
            }
        }

        $grooming->save();

        return redirect('/admin/datagrooming');
    }

    public function destroy($id)
    {
        $grooming = Grooming::find($id);
        $grooming->delete();
        return redirect('/admin/datagrooming');
    }
}
