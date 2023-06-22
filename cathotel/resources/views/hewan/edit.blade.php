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
          <h5 class="mb-0">Ubah Hewan</h5>
        </div>
        <div class="card-body">
          <form action = "{{route('hewan.update', $hewan -> id)}}" method = "POST" class="forms-sample">
            @csrf
            @method('patch')
            <div class="mb-3">
              <label for="namaHewan">Nama Hewan</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                  ><i class="bx bx-user"></i
                ></span>
                <input
                  type="text"
                  class="form-control"
                  name= "namaHewan"
                  placeholder="John Doe"
                  aria-label="John Doe"
                  value = "{{$hewan -> namaHewan}}"
                />
                @error('namaHewan')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
            </div>
            
            <div class="mb-3">
              <label for="customer_id">Nama Pemilik</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"
                  ><i class="bx bx-buildings"></i
                ></span>
                <select name = "customer_id" class="form-select" >
                  
                  @foreach($customer as $item)
                      <option 
                      @if ($hewan->customer_id == $item -> id)
                      selected
                      @endif

                      value = "{{$item['id']}}">
                      {{$item -> customer}} - {{$item['namaCustomer']}}
                      </option>
                  @endforeach
                  
                </select>
                @error('customer_id')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
            </div>

            <div class="mb-3">
              <label for="jenisHewan">Jenis Hewan</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  type="text"
                  name="jenisHewan"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  value = "{{$hewan->jenisHewan}}"
                />
                @error('jenisHewan')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
             
            </div>
            
            <div class="form-group">
              <label for="jkHewan">Jenis Kelamin</label>
              
              {{-- <select name = "jkHewan" class="form-control" >
                  <option value = "Perempuan"> Perempuan </option>
                  <option value = "Laki-Laki"> Laki-Laki </option> --}}
                
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jkHewan" value = "{{$hewan->jkHewan}}">
                    <label class="form-check-label" for="jkHewan">
                      Perempuan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jkHewan" value = "{{$hewan->jkHewan}}">
                    <label class="form-check-label" for="jkHewan">
                      Laki-laki
                    </label>
                  </div>
                
              </select>
              @error('jkHewan')
              <span class = "txt-danger">{{$message}} </span>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="breedHewan">Breed Hewan</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  type="text"
                  name="breedHewan"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  value = "{{$hewan -> breedHewan}}"
                />
                @error('breedHewan')
                  <span class = "txt-danger">{{$message}} </span>
                @enderror
              </div>
              
            </div>
            <button type="submit" class="btn btn-info">Send</button>
            <a href = "{{route('hewan.index')}}" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>

@endsection