<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IzinabsenController extends Controller
{
    public function create()
    {
        return view('izin.create');
    }

    public function store(Request $request)
    {
        $nik = Auth::guard('karyawan')->user()->nik;
        $tgl_izin_dari = $request->tgl_izin_dari;
        $tgl_izin_sampai = $request->tgl_izin_sampai;
        $status = "i";
        $keterangan = $request->keterangan;

        $bulan = date("m",strtotime($tgl_izin_dari));
        $tahun = date("Y",strtotime($tgl_izin_dari));
        $thn = substr($tahun,2,2);
        $lastizin = DB::table('pengajuan_izin')
            ->whereRaw('MONTH(tgl_izin_dari)="'.$bulan.'"')
            ->whereRaw('YEAR(tgl_izin_dari)="'.$tahun.'"')
            ->orderBy('kode_izin','desc')
            ->first();
        $lastkodeizin = $lastizin != null ? $lastizin->kode_izin : "";
        $format = "IZ".$bulan.$thn;
        $kode_izin = buatkode($lastkodeizin,$format,4);

        $data = [
            'kode_izin'=>$kode_izin,
            'nik'=>$nik,
            'tgl_izin_dari'=>$tgl_izin_dari,
            'tgl_izin_sampai'=>$tgl_izin_sampai,
            'status'=>$status,
            'keterangan'=>$keterangan
        ];

        $simpan = DB::table('pengajuan_izin')->insert($data);

        if($simpan){
            return redirect('/presensi/izin')->with(['success'=>'Data Berhasil Disimpan']);
        }else{
            return redirect('/presensi/izin')->with(['error'=>'Data Gagal Disimpan']);
        }
    }

    public function edit($kode_izin)
    {
        $dataizin = DB::table('pengajuan_izin')->where('kode_izin',$kode_izin)->first();
        return view('izin.edit',compact('dataizin'));
    }

    public function update($kode_izin, Request $request)
    {
        $tgl_izin_dari = $request->tgl_izin_dari;
        $tgl_izin_sampai = $request->tgl_izin_sampai;
        $keterangan = $request->keterangan;

        try {
            //code...
            $data = [
                'tgl_izin_dari' =>$tgl_izin_dari,
                'tgl_izin_sampai' =>$tgl_izin_sampai,
                'keterangan' =>$keterangan
            ];

            DB::table('pengajuan_izin')->where('kode_izin',$kode_izin)->update($data);
            return redirect('/presensi/izin')->with(['success'=>'Data Berhasil Disimpan']);
        } catch (\Exception $e) {
            return redirect('/presensi/izin')->with(['error'=>'Data Gagal Disimpan']);
        }
    }
}
