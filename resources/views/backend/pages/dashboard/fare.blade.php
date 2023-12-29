@extends('backend.layout.app')
@section('content')
  <!--start breadcrumb-->
  <div class="positon-relative">
    <div class="d-flex">
      <h1>Product Data</h1>
      <div class="position-absolute end-0 me-4">
        <a class="btn btn-primary" href="{{ route('fare.create') }}">Add New</a>
      </div>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Base Location</th>
        <th scope="col">Start From</th>
        <th scope="col">Destination</th>
        <th scope="col">Fare Amount</th>
        <th scope="col">Effective Date</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($fares as $fare)
        <tr>
          <th scope="col">{{ $loop->iteration }}</th>
          <td scope="col">{{ $fare->baseLocation->place_name }}</td>
          <td scope="col">{{ $fare->startFrom->place_name }}</td>
          <td scope="col">{{ $fare->destinationLocation->place_name }}</td>
          <td scope="col">Tk. {{ $fare->fare_amt }}</td>
          <td scope="col">{{ $fare->effect_from }}</td>
          <td scope="col">{{ $fare->created_at }}</td>
          <td scope="col">
            <a href="#" class="btn btn-primary">Edit</a>
          </td>
        </tr>
      @endforeach
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