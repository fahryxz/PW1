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
          <h5 class="mb-0">Tambah Customer</h5>
        </div>
        <div class="card-body">
          <form action = "{{route('customer.store')}}" method = "POST" class="forms-sample">
            @csrf
            <div class="mb-3">
              <label for="namaCustomer">Nama Customer</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                  ><i class="bx bx-user"></i
                ></span>
                <input
                  type="text"
                  class="form-control"
                  name= "namaCustomer"
                  placeholder="John Doe"
                  aria-label="John Doe"
                  value = "{{old('namaCustomer')}}"
                />
                @error('namaCustomer')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
            </div>
            
            <div class="mb-3">
              <label for="alamatCustomer">Alamat</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"
                  ><i class="bx bx-buildings"></i
                ></span>
                <input
                  type="text"
                  class="form-control"
                  name="alamatCustomer"
                  placeholder="ACME Inc."
                  value = "{{old('alamatCustomer')}}"
                />
                @error('alamatCustomer')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
            </div>

            <div class="mb-3">
                <label for="nohpCustomer">No HP</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"
                    ><i class="bx bx-buildings"></i
                  ></span>
                  <input
                    type="text"
                    class="form-control"
                    name="nohpCustomer"
                    placeholder="ACME Inc."
                    value = "{{old('nohpCustomer')}}"
                  />
                  @error('nohpCustomer')
                    <span class = "txt-danger">{{$message}} </span>
                  @enderror
                </div>
              </div>

            <div class="mb-3">
              <label for="emailCustomer">Email</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  type="text"
                  name="emailCustomer"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  value = "{{old('emailCustomer')}}"
                />
                @error('emailCustomer')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
              <div class="form-text">You can use letters, numbers & periods</div>
            </div>
            
            
            <button type="submit" class="btn btn-info">Send</button>
            <a href = "{{route('staff.index')}}" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>

@endsection