@extends('core.base')

@section('content')
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
              @foreach ($order->orderItem as $o)
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                    <h6 class="my-0 text-dark h6">{{$o->product->title}}</h6>
                    <small class="text-muted">{{$o->product->category->cat_title}}</small>
                    </div>
                    <div class=" col d-flex justify-content-end align-items-center small">
                        <button class="btn btn-danger btn-sm px-3">-</button>
                        <span class="">{{$o->qty}}</span>
                        <form action="{{route('addcart',['id'=>$o->product->id])}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm px-3">+</button>
                        </form>
                    </div>
                    <span class="my-auto text-success fw-bold"><del class="text-danger">Rs.{{$o->product->price}}</del>&nbsp &nbsp Rs. {{$o->product->discount_price}}</span>
                </li>
              @endforeach
          </ul>
          <!-- Cart -->

        </div>
        <!--Grid column-->

        <div class="col-md-4 mb-4">

          <!-- Promo code -->
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>
              </div>
            </div>
          </form>
          <!-- Promo code -->
        </div>

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  @endsection
