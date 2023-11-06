@extends('layouts.admin.tabler')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Data Izin / Sakit
          </h2>
        </div>

      </div>
    </div>
  </div>
<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-12">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if (Session::get('warning'))
                    <div class="alert alert-warning">
                        {{ Session::get('warning') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="/presensi/izinsakit" method="GET" autocomplete="off">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                                    <path d="M16 3v4"></path>
                                    <path d="M8 3v4"></path>
                                    <path d="M4 11h16"></path>
                                    <path d="M11 15h1"></path>
                                    <path d="M12 15v3"></path>
                                 </svg>
                                </span>
                                <input type="text" value="{{ Request('dari') }}" id="dari" class="form-control" placeholder="Dari" name="dari">
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                                    <path d="M16 3v4"></path>
                                    <path d="M8 3v4"></path>
                                    <path d="M4 11h16"></path>
                                    <path d="M11 15h1"></path>
                                    <path d="M12 15v3"></path>
                                 </svg>
                                </span>
                                <input type="text" value="{{ Request('sampai') }}" id="sampai" class="form-control" placeholder="Sampai" name="sampai">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-barcode" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7v-1a2 2 0 0 1 2 -2h2"></path>
                                    <path d="M4 17v1a2 2 0 0 0 2 2h2"></path>
                                    <path d="M16 4h2a2 2 0 0 1 2 2v1"></path>
                                    <path d="M16 20h2a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M5 11h1v2h-1z"></path>
                                    <path d="M10 11l0 2"></path>
                                    <path d="M14 11h1v2h-1z"></path>
                                    <path d="M19 11l0 2"></path>
                                 </svg>
                                </span>
                                <input type="text" value="" id="nik" class="form-control" placeholder="NIK" name="nik">
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-signature" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 17c3.333 -3.333 5 -6 5 -8c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 4.877 2.5 6c1.5 2 2.5 2.5 3.5 1l2 -3c.333 2.667 1.333 4 3 4c.53 0 2.639 -2 3 -2c.517 0 1.517 .667 3 2"></path>
                                 </svg>
                                </span>
                                <input type="text" value="" id="nama_karyawan" class="form-control" placeholder="Nama User" name="nama_karyawan">
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select name="status_approved" id="status_approved" class="form-select">
                                    <option value="">Pilih Status</option>
                                    <option value="0">Pending</option>
                                    <option value="1">Disetujui</option>
                                    <option value="2">Ditolak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                        <path d="M21 21l-6 -6"></path>
                                     </svg>
                                     Cari Data
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Izin</th>
                            <th>Tanggal</th>
                            <th>NIK</th>
                            <th>Nama User</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Status Approve</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($izinsakit as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->kode_izin }}</td>
                                <td>
                                    {{ date('d-m-Y',strtotime($d->tgl_izin_dari)) }} s/d {{ date('d-m-Y',strtotime($d->tgl_izin_sampai)) }}
                                </td>
                                <td>{{ $d->nik }}</td>
                                <td>{{ $d->nama_lengkap }}</td>
                                <td>{{ $d->jabatan }}</td>
                                <td>{{ $d->status == "i" ? "Izin":"Sakit" }}</td>
                                <td>{{ $d->keterangan }}</td>
                                <td>
                                    @if($d->status_approved==1)
                                    <span class="badge bg-success">Disetujui</span>
                                    @elseif($d->status_approved==2)
                                    <span class="badge bg-danger">Ditolak</span>
                                    @else
                                    <span class="badge bg-warning">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if($d->status_approved==0)
                                    <a href="#" class="btn btn-sm btn-primary approve" kode_izin="{{ $d->kode_izin }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                                            <path d="M11 13l9 -9"></path>
                                            <path d="M15 4h5v5"></path>
                                         </svg>
                                    </a>
                                    @else
                                    <a href="/presensi/{{ $d->kode_izin }}/batalkanizinsakit" class="btn btn-sm btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 10l4 4m0 -4l-4 4"></path>
                                            <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
                                         </svg>
                                         Batalkan
                                    </a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $izinsakit->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-izinsakit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Izin/Sakit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/presensi/approveizinsakit" method="POST">
                @csrf
                <input type="hidden" id="kode_izin_form" name="kode_izin_form">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <select name="status_approved" id="status_approved" class="form-select">
                                <option value="1">Disetujui</option>
                                <option value="2">Ditolak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12">
                        <div class="form-group">
                            <button class="btn btn-primary w-100" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 14l11 -11"></path>
                                    <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"></path>
                                 </svg>
                                 Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
</div>
@endsection

@push('myscript')
<script>
    $(function(){
        $(".approve").click(function(e){
            e.preventDefault();
            var kode_izin = $(this).attr("kode_izin");
            $("#kode_izin_form").val(kode_izin);
            $("#modal-izinsakit").modal("show");
        });

        $("#dari, #sampai").datepicker({
            autoclose: true,
            todayHighlight: true,
            format:'yyyy-mm-dd'
        });
    });
</script>
@endpush
