@extends('backend.layout.app')
@section('content')
  <!--start breadcrumb-->
  <div class="positon-relative">
    <div class="d-flex">
      <h1>Product Data</h1>
      <div class="position-absolute end-0 me-4">
        <a class="btn btn-primary" href="">Add New</a>
      </div>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Bus No</th>
        <th scope="col">Trip Date</th>
        <th scope="col">Trip Time</th>
        <th scope="col">Start From</th>
        <th scope="col">Destination</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="col">SL</th>
        <td scope="col">Bus No</td>
        <td scope="col">Trip Date</td>
        <td scope="col">Trip Time</td>
        <td scope="col">Start From</td>
        <td scope="col">Destination</td>
        <td scope="col">Created At</td>
        <td scope="col">
          <a href="#" class="btn btn-primary">Edit</a>
        </td>
      </tr>
      {{-- @foreach($products as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->product_name }}</td>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->price }}</td>
          <td class="px-6 py-4 text-right">
            <a href="{{ route('product.edit.page',$item->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('product.delete',$item->id) }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      @endforeach --}}
    </tbody>
  </table>
@endsection