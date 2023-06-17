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
                    <form action = "{{route('paket.destroy', $item->id)}}" method = "post">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger btn-rounded show_confirm">Hapus</button>
                        <a href="{{route('paket.edit', $item->id)}}" class = "btn btn-warning btn-rounded">Ubah</a>
                      </form>
                      </td>
                      
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
         
  <!--/ Bordered Table -->
  <script src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection