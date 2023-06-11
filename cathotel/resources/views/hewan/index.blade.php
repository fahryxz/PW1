@extends('layout.main')

@section('content')
 <!-- Bordered Table -->
 <div class="card">
    <h5 class="card-header">Daftar Staff</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <div class="mb-3">
            <a href = "{{ route('hewan.create')}}" type="button" class="btn btn-info btn-rounded btn-fw">+Tambah</a>
          </div>
        <table class="table table-bordered">
          <thead>
            <tr>
            
              <th>Nama Hewan</th>
              <th>Nama Pemilik</th>
              <th>Jenis Hewan</th>
              <th>Jenis Kelamin</th>
              <th>Breed</th>
              <th>Actions</th>
            </tr>
          </thead>
         
          <tbody>
            @foreach ($hewans as $item)
                <tr>
                    <td>{{ $item['namaHewan']}}</td>
                    <td>{{ $item['idCustomer'] -> namaCustomer}}</td>
                    <td>{{ $item['jenisHewan']}}</td>
                    <td>{{ $item['jkHewan']}}</td>
                    <td>{{ $item['breedHewan']}} </td>
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
@endsection