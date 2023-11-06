<form action="/cabang/update" method="POST" id="frmCabangEdit">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-key" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z"></path>
                    <path d="M15 9h.01"></path>
                 </svg>
                </span>
                <input type="text" value="{{ $cabang->kode_cabang }}" readonly id="kode_cabang" class="form-control" placeholder="Kode Cabang" name="kode_cabang">
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                 </svg>
                </span>
                <input type="text" value="{{ $cabang->nama_cabang }}" id="nama_cabang" class="form-control" name="nama_cabang" placeholder="Nama Cabang">
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                    <path d="M11.87 21.48a1.992 1.992 0 0 1 -1.283 -.58l-4.244 -4.243a8 8 0 1 1 13.355 -3.474"></path>
                    <path d="M15 19l2 2l4 -4"></path>
                 </svg>
                </span>
                <input type="text" value="{{ $cabang->lokasi_cabang }}" id="lokasi_cabang" class="form-control" name="lokasi_cabang" placeholder="Lokasi Cabang">
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radar-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                    <path d="M15.51 15.56a5 5 0 1 0 -3.51 1.44"></path>
                    <path d="M18.832 17.86a9 9 0 1 0 -6.832 3.14"></path>
                    <path d="M12 12v9"></path>
                 </svg>
                </span>
                <input type="text" value="{{ $cabang->radius_cabang }}" id="radius_cabang" class="form-control" name="radius_cabang" placeholder="Radius Cabang">
              </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="form-group">
                <button class="btn btn-primary w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 14l11 -11"></path>
                        <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"></path>
                     </svg>
                    Simpan
                </button>
            </div>
        </div>
    </div>
  </form>
<script>
    $(function(){
        $("#frmCabangEdit").submit(function(){
            var kode_cabang = $("#frmCabangEdit").find("#kode_cabang").val();
            var nama_cabang = $("#frmCabangEdit").find("#nama_cabang").val();
            var lokasi_cabang = $("#frmCabangEdit").find("#lokasi_cabang").val();
            var radius_cabang = $("#frmCabangEdit").find("#radius_cabang").val();
            if(kode_cabang==""){
                // alert('Kode Cabang Harus Diisi');
                Swal.fire({
                title: 'Warning!',
                text: 'Kode Cabang Harus Diisi',
                icon: 'warning',
                confirmButtonText: 'OK'
                }).then((result)=>{
                    $("#kode_cabang").focus();
                });

                return false;
            }else if(nama_cabang==""){
                // alert('Kode Cabang Harus Diisi');
                Swal.fire({
                title: 'Warning!',
                text: 'Nama Cabang Harus Diisi',
                icon: 'warning',
                confirmButtonText: 'OK'
                }).then((result)=>{
                    $("#nama_cabang").focus();
                });

                return false;
            }else if(lokasi_cabang==""){
                // alert('Kode Cabang Harus Diisi');
                Swal.fire({
                title: 'Warning!',
                text: 'Lokasi Cabang Harus Diisi',
                icon: 'warning',
                confirmButtonText: 'OK'
                }).then((result)=>{
                    $("#lokasi_cabang").focus();
                });

                return false;
            }else if(radius_cabang==""){
                // alert('Kode Cabang Harus Diisi');
                Swal.fire({
                title: 'Warning!',
                text: 'Radius Cabang Harus Diisi',
                icon: 'warning',
                confirmButtonText: 'OK'
                }).then((result)=>{
                    $("#radius_cabang").focus();
                });

                return false;
            }
        });
    });

</script>
