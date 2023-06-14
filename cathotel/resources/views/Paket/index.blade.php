@extends('layout.main')

@section('content')
 <!-- Bordered Table -->
 <div class="card">
    <h5 class="card-header">Daftar Paket</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <div class="mb-3">
            <a href = "{{ route('paket.create')}}" type="button" class="btn btn-info btn-rounded btn-fw">+Tambah</a>
          </div>
        <table class="table table-bordered">
          <thead>
            <tr>
            
              <th>Tipe Ruang</th>
              <th>Makanan</th>
              <th>Grooming</th>
              <th>Harga Perhari</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($paket as $item)
                <tr>
                    <td>{{ $item['tiperuang']}}</td>
                    <td>{{ $item['makanan']}}</td>
                    <td>{{ $item['grooming']}}</td>
                    <td>{{ $item['hargaperhari']}}</td>
                    <td>
                      
                          
                      <a href=""
                      ><i class="bx bx-edit-alt me-2"></i> Edit</a
                    >
                    <a  href=""
                      ><i class="bx bx-trash me-2"></i> Delete</a
                    >
                        
                      </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
         
  <!--/ Bordered Table -->
  {{-- ok --}}
@endsection