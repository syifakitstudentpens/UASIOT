@extends('layout.main')
@section('title', 'Tambah Data')
@section('judul_halaman', 'Tambah Data Siswa')

@section('isi')
<script type="text/javascript">
  $(document).ready(function(){
      setInterval(function(){
        $("#nokartu").load('/nokartu')
      },0);
  });
</script>
		 <form action="{{url('/postsiswa')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                  
                    <div id="nokartu"></div>

                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control"  name="nama" autocomplete="off" placeholder="Nama Siswa">
                      </div>
                    </div>

                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control"  name="email" autocomplete="off" placeholder="example@gmail.com">
                      </div>
                    </div>

                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelas</label>
                        <div class="col-sm-12 col-md-7">
                       <input type="text" class="form-control"  name="Kelas" autocomplete="off" placeholder="Jabatan">
                    </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{url('/siswa')}}" class="btn btn-danger">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
@endsection
