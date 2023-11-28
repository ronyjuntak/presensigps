<style>
    .historicontent{
        display: flex;
        margin-top: 15px;
    }

    .datapresensi{
        margin-left: 10px;
    }

    .card {
        border: 1px solid blue;
    }
</style>

@if ($histori->isEmpty())
<div class="alert alert-outline-warning">
    <p>Data Belum Ada</p>
</div>
@endif
@foreach ($histori as $d)
@if($d->status=="h")
            <div class="card mb-1">
                <div class="card-body">
                    <div class="historicontent">
                        <div class="iconpresensi">
                            <ion-icon name="finger-print-outline" style="font-size:48px" class="text-success"></ion-icon>
                        </div>
                        <div class="datapresensi">
                            <h3 style="line-height: 3px">{{ $d->nama_jam_kerja }}</h3>
                            <h4 style="margin: 0px !important">{{ date("d-m-Y",strtotime($d->tgl_presensi)) }}</h4>
                            <span>
                                {!! $d->jam_in != null ? date("H:i",strtotime($d->jam_in)) : '<span class="text-danger">Belum Absen</span>' !!}
                            </span>
                            <span>
                                {!! $d->jam_out != null ? "-". date("H:i",strtotime($d->jam_out)) : '<span class="text-danger">- Belum Absen</span>' !!}
                            </span>
                            <br>
                            <span>{!! date("H:i",strtotime($d->jam_in)) > date("H:i",strtotime($d->jam_masuk)) ? '<span class="text-danger">Terlambat</span>' : '<span class="text-success">Tepat Waktu</span>' !!}</span>
                            <div id="keterangan" class="mt-2">
                                @php
                                //Jam Ketika Absen
                                $jam_in = date("H:i",strtotime($d->jam_in));

                                //Jam Jadwal Masuk
                                $jam_masuk = date("H:i",strtotime($d->jam_masuk));

                                $jadwal_jam_masuk = $d->tgl_presensi." ".$jam_masuk;
                                $jam_presensi = $d->tgl_presensi." ".$jam_in;
                                @endphp
                                @if($jam_in > $jam_masuk)
                                @php
                                $jmlterlambat = hitungjamterlambat($jadwal_jam_masuk,$jam_presensi);
                                $jmlterlambatdesimal = hitungjamterlambatdesimal($jadwal_jam_masuk,$jam_presensi);
                                @endphp
                                <span class="danger">Terlambat {{ $jmlterlambat }} ({{ $jmlterlambatdesimal }} Jam)</span>
                                @else
                                <span style="color:green">Tepat Waktu</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($d->status=="i")
            <div class="card mb-1">
                <div class="card-body">
                    <div class="historicontent">
                        <div class="iconpresensi">
                            <ion-icon name="document-outline" style="font-size:48px" class="text-warning"></ion-icon>
                        </div>
                        <div class="datapresensi">
                            <h3 style="line-height: 3px">IZIN - {{ $d->kode_izin }}</h3>
                            <h4 style="margin: 0px !important">{{ date("d-m-Y",strtotime($d->tgl_presensi)) }}</h4>
                            <span>
                                {{ $d->keterangan }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($d->status=="s")
            <div class="card mb-1">
                <div class="card-body">
                    <div class="historicontent">
                        <div class="iconpresensi">
                            <ion-icon name="medkit-outline" style="font-size:48px" class="text-primary"></ion-icon>
                        </div>
                        <div class="datapresensi">
                            <h3 style="line-height: 3px">Sakit - {{ $d->kode_izin }}</h3>
                            <h4 style="margin: 0px !important">{{ date("d-m-Y",strtotime($d->tgl_presensi)) }}</h4>
                            <span>
                                {{ $d->keterangan }}
                            </span>
                            <br>
                            @if(!empty($d->doc_sid))
                            <span style="color:blue">
                                <ion-icon name="document-attach-outline"></ion-icon> SID
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endif
@endforeach
