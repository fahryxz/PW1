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
          <h5 class="mb-0">Tambah Paket</h5>
        </div>
        <div class="card-body">
          <form action = "{{route('paket.store')}}" method = "POST" class="forms-sample">
            @csrf
            
            <div class="mb-3">
              <label for="tiperuang">Tipe Ruang</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  type="text"
                  name="tiperuang"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  value = "{{old('tiperuang')}}"
                />
                @error('tiperuang')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>

            <div class="mb-3">
              <label for="makanan">Makanan</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  type="text"
                  name="makanan"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  value = "{{old('makanan')}}"
                />
                @error('makanan')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>

              <div class="mb-3">
              <label for="grooming">Grooming</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  type="text"
                  name="grooming"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  value = "{{old('grooming')}}"
                />
                @error('grooming')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>

              <div class="mb-3">
              <label for="hargaperhari">Harga</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  type="text"
                  name="hargaperhari"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  value = "{{old('hargaperhari')}}"
                />
                @error('hargaperhari')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
              <div class="form-text">You can use letters, numbers & periods</div>
            </div>
            
            
            <button type="submit" class="btn btn-info">Send</button>
            <a href = "{{route('paket.index')}}" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>

@endsection