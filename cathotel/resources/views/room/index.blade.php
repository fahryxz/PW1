@extends('layout.main')

@section('content')
 <!-- Bordered Table -->
 <div class="card">
    <h5 class="card-header">Daftar Room</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <div class="mb-3">
            <a href = "{{ route('room.create')}}" type="button" class="btn btn-info btn-rounded btn-fw">+Tambah</a>
          </div>
        <table class="table table-bordered">
          <thead>
            <tr>
            
              <th>Kamar Tersedia</th>
              <th>kamar Ditempati</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($rooms as $item)
                <tr>
                    <td>{{ $item['kamartersedia']}}</td>
                    <td>{{ $item['kamarditempati']}}</td>
                    <td>
                    <form action = "{{route('room.destroy', $item->id)}}" method = "post">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger btn-rounded show_confirm">Hapus</button>
                        <a href="{{route('room.edit', $item->id)}}" class = "btn btn-warning btn-rounded">Ubah</a>
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