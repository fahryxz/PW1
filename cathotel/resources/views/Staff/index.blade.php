@extends('layout.main')

@section('content')
 <!-- Bordered Table -->
 <div class="card">
    <h5 class="card-header">Bordered Table</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
            <tr>
            
              <th>Nama Staff</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
         
          <tbody>
            @foreach ($staff as $item)
                <tr>
                    <td>{{ $item['namastaff']}}</td>
                    <td>{{ $item['alamatstaff']}}</td>
                    <td>{{ $item['emailstaff']}}</td>
                    <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-2"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-2"></i> Delete</a
                            >
                          </div>
                        </div>
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