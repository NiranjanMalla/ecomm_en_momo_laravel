
@extends('master')

@section('content')

<h1>Continue Shopping..</h1>
<div class="container mt-3">
    <h2>Your Orders</h2>
    <table class="table">
      <thead>
        <tr class="align-text-bottom">
              {{-- <th>Remove from the cart</th> --}}
            <th>Products</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Payment Method</th>
            <th>Payment Status</th>
            <th>Delevery Address</th>
            <th>Contact No.</th>

        </tr>
      </thead>

      <tbody>
        @foreach ($orders as $item)

        <tr class="align-text-bottom">

          <td>{{ $item->id }}
              <img class="cart-img" src="{{ $item->gallery }}" alt="">
          </td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->description }}</td>
          <td>{{ $item->price }}</td>
          {{-- <td><a class="text-danger" href="/removecart/{{ $item->cart_id }}"><i class="fa fa-trash"></i></a></td> --}}
          <td>{{ $item->payment_method }}</td>
          <td>{{ $item->payment_status }}</td>
          <td>{{ $item->address }}</td>
          <td>{{ $item->contact_number }}</td>



        </tr>
        @endforeach

      </tbody>
    </table>
  </div>


@endsection
