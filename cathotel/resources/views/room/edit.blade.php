@extends('layout.main')

@section('content')

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Ubah Room</h5>
        </div>
        <div class="card-body">
        <form action = "{{route('room.update', $room->id)}}" method = "POST" class="forms-sample" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3">
              <label for="kamartersedia">Kamar tersedia</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  type="text"
                  name="kamartersedia"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  value = "{{$room -> kamartersedia}}"
                />
                @error('kamartersedia')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>

            <div class="mb-3">
              <label for="kamarditempati">Kamar Ditempati</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  type="text"
                  name="kamarditempati"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  value = "{{$room -> kamarditempati}}"
                />
                @error('kamarditempati')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>

              <div class="form-text">You can use letters, numbers & periods</div>
            </div>
            
            
            <button type="submit" class="btn btn-info">Send</button>
            <a href = "{{route('room.index')}}" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>

@endsection