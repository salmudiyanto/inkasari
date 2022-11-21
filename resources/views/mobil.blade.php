@extends('home')
@section('isi')
    
<div class="content-wrapper">
    
    <div class="row">
      <div class="col-xl-6 grid-margin stretch-card flex-column">
          <h5 class="mb-2 text-titlecase mb-4">Mobil</h5>
        <div class="row">
          <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Mobil</h4>
                    <form class="forms-sample" action="{{ route('simpanmobil') }}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                      <div class="form-group">
                          <label for="merk">Merk</label>
                          <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan Merk Mobil">
                      </div>
                      <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Masukkan Tipe Mobil">
                      </div>
                      <div class="form-group">
                        <label for="plat">Plat Nomor Kendaraan</label>
                        <input type="text" class="form-control" id="plat" name="plat" placeholder="Masukkan Plat Nomor Kendaraan">
                      </div>
                      <div class="form-group">
                        <label for="gambar">Gambar Kendaraan</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light">Reset</button>
                </form>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 grid-margin stretch-card flex-column">
          <h5 class="mb-2 text-titlecase mb-4"></h5>
        <div class="row h-100">
          <div class="col-md-12 stretch-card">
              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Mobil</h4>
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>Plat Kendaraan</th>
                                <th>Merk/Tipe</th>
                                <th>Gambar</th>
                                <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($mobil as $data)
                            <tr>
                                <td>{{ $data->plat }}</td>
                                <td>{{ $data->merk }}/{{ $data->tipe }}</td>
                                <td><img src="{{ asset('images/'.$data->gambar) }}" alt="" style="width: 100%"></td>
                                <td>{{ $data->stat }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
        </div>
        </div>
      </div>
    </div>

</div>
@endsection