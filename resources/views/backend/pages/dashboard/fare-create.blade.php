@extends('backend.layout.app')
@section('content')
  <!--start breadcrumb-->
  <h1 class="text-center">Create Location</h1>
  <div style="width:500px; margin:0px auto;">
    <form action="" method="post">
      @csrf
      <div class="mb-3">
        <label for="productName" class="form-label">Base Location *</label>
        <select name="product_id" class="form-select" aria-label="Default select example" required>
            <option disabled selected>Select one</option>
            {{-- @foreach ($products as $item)
                <option value="{{ $item->id }}">{{$item->product_name}}</option>
            @endforeach --}}
        </select>
      </div>
      <div class="mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <select name="product_id" class="form-select" aria-label="Default select example" required>
            <option disabled selected>Select one</option>
            {{-- @foreach ($products as $item)
                <option value="{{ $item->id }}">{{$item->product_name}}</option>
            @endforeach --}}
        </select>
      </div>
      <div class="mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <select name="product_id" class="form-select" aria-label="Default select example" required>
            <option disabled selected>Select one</option>
            {{-- @foreach ($products as $item)
                <option value="{{ $item->id }}">{{$item->product_name}}</option>
            @endforeach --}}
        </select>
      </div>
      <div class="mb-3">
        <label for="distance" class="form-label">Distance in KM *</label>
        <input type="number" class="form-control" name="distance" id="distance" placeholder="distance in km..." required>
      </div>
      <div class="mb-3">
        <label for="stopageOrder" class="form-label">Stopage Order *</label>
        <input type="number" class="form-control" name="stopageOrder" id="stopageOrder" placeholder="stopage order..." required>
      </div>
      <button type="submit" class="btn btn-primary">Location Create</button>
    </form>
  </div>
@endsection