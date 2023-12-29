@extends('backend.layout.app')
@section('content')
  <!--start breadcrumb-->
  <h1 class="text-center">Create Location</h1>
  <div style="width:500px; margin:0px auto;">
    <form action="" method="post">
      @csrf
      <div class="mb-3">
        <label for="placeName" class="form-label">Place Name *</label>
        <input type="text" class="form-control" name="placeName" id="placeName" placeholder="place name..." required>
      </div>
      <div class="mb-3">
        <label for="distance" class="form-label">Distance in KM *</label>
        <input type="number" class="form-control" name="distance" id="distance" placeholder="distance in km..." required>
      </div>
      <div class="mb-3">
        <label for="stopageOrder" class="form-label">Stopage Order *</label>
        <input type="number" class="form-control" name="stopageOrder" id="stopageOrder" placeholder="stopage order..." required>
      </div>
      <button type="submit" class="btn btn-primary">Location Update</button>
    </form>
  </div>
@endsection