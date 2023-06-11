@extends('layout.main')

@section('content')
 <!-- Bordered Table -->
 <div class="card">
    <h5 class="card-header">Daftar Customer</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <div class="mb-3">
            <a href = "{{ route('customer.create')}}" type="button" class="btn btn-info btn-rounded btn-fw">+Tambah</a>
          </div>
        <table class="table table-bordered">
          <thead>
            <tr>
            
              <th>Nama Customer</th>
              <th>Alamat</th>
              <th>No HP</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
         
          <tbody>
            @foreach ($customers as $item)
                <tr>
                    <td>{{ $item['namaCustomer']}}</td>
                    <td>{{ $item['alamatCustomer']}}</td>
                    <td>{{ $item['nohpCustomer']}}</td>
                    <td>{{ $item['emailCustomer']}}</td>
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