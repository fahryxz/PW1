@extends('layout.main')

@section('content')

    
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Tambah Staff</h5>
        </div>
        <div class="card-body">
          <form action = "{{route('Staff.store')}}" method = "POST" class="forms-sample">
            @csrf
            <div class="mb-3">
              <label for="namastaff">Nama Staff</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                  ><i class="bx bx-user"></i
                ></span>
                <input
                  type="text"
                  class="form-control"
                  name= "namastaff"
                  placeholder="John Doe"
                  aria-label="John Doe"
                  value = "{{old('namastaff')}}"
                />
                @error('namastaff')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
            </div>
            <div class="mb-3">
              <label for="alamatstaff">Alamat</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"
                  ><i class="bx bx-buildings"></i
                ></span>
                <input
                  type="text"
                  name="alamatstaff"
                  class="form-control"
                  placeholder="ACME Inc."
                  aria-label="ACME Inc."
                  aria-describedby="basic-icon-default-company2"
                />
                @error('alamatstaff')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
            </div>
            <div class="mb-3">
              <label for="emailstaff">Email</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  type="text"
                  name="emailstaff"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  aria-describedby="basic-icon-default-email2"
                />
                <span id="basic-icon-default-email2" class="input-group-text">@gmail.com</span>
                @error('emailstaff')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
              <div class="form-text">You can use letters, numbers & periods</div>
            </div>
            
            
            <button type="submit" class="btn btn-info">Send</button>
            <a href = "{{route('Staff.index')}}" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>

@endsection