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
          <h5 class="mb-0">Ubah Staff</h5>
        </div>
        <div class="card-body">
          <form action = "{{route('staff.update', $staff->id)}}" method = "POST" class="forms-sample">
            @csrf
            @method('patch')
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
                  value = "{{$staff->namastaff}}"
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
                  class="form-control"
                  name="alamatstaff"
                  placeholder="ACME Inc."
                  value = "{{$staff-> alamatstaff}}"
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
                  value = "{{$staff->emailstaff}}"
                />
                @error('emailstaff')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
             
            </div>
            
            
            <button type="submit" class="btn btn-info">Send</button>
            <a href = "{{route('staff.index')}}" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>

@endsection