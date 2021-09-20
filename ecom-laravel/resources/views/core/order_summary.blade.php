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

        @php
            $total_amount = 0;
            $total_payable_amount = 0;
            $total_actual_amount = 0;
            $tax = 0;
        @endphp

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            @if(!empty($order->orderItem))
              @foreach ($order->orderItem as $o)
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                    <h6 class="my-0 text-dark h6">{{$o->product->title}}</h6>
                    <small class="text-muted">{{$o->product->category->cat_title}}</small>
                    </div>
                    <div class=" col d-flex justify-content-end align-items-center small">
                        <a href="{{route('removecart',['id'=>$o->product->id])}}" class="btn btn-danger btn-sm px-3">-</a>
                        <span class="">{{$o->qty}}</span>
                        <form action="{{route('addcart',['id'=>$o->product->id])}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm px-3">+</button>
                        </form>
                    </div>

                    @php
                    $total_amount += $o->product->discount_price * $o->qty;
                    $total_actual_amount += $o->product->price * $o->qty;
                    $tax = $total_amount*0.18;
                    $total_payable_amount = $total_amount + $tax;
                    if($order->coupon_id){
                        $total_payable_amount = $total_amount + $tax;
                        $total_payable_amount -= $order->coupon->amount;
                    }
                    @endphp

                    <span class="my-auto text-success fw-bold"><del class="text-danger">Rs.{{$o->product->price}}</del>&nbsp &nbsp Rs. {{$o->product->discount_price}}</span>
                    <span><a href="{{route('removeItemCart',['id'=>$o->product->id])}}" class="nav-link"><i class="bi bi-trash-fill h3 text-danger"></i></a></span>
                </li>
              @endforeach
            @else
                <li class="list-group-item lead ps-2 alert-warning p-2">Sorry cart is empty</li>
            @endif
          </ul>
          <!-- Cart -->

        </div>
        <!--Grid column-->



        <div class="col-md-4 mb-4">
            <div class="list-group">
              <div class="list-group-item list-group-item-action ">Total Amount <span class="float-end">Rs. {{$total_amount}}</span></div>
              <div class="list-group-item list-group-item-action ">Total Tax (18% GST) <span class="float-end">Rs. {{$tax}}</span></div>
              <div class="list-group-item list-group-item-action ">Discount) <span class="float-end">Rs. {{$total_actual_amount - $total_amount}}</span></div>
              @if($order->coupon_id)
                <a href="" class="list-group-item list-group-item-action bg-warning text-white">Coupon Discount <span class="float-end">Rs. {{$order->coupon->amount}}</span></a>
              @endif
              <a href="" class="list-group-item list-group-item-action">Total Payable Amount  <span class="float-right">Rs. {{$total_payable_amount}}</span></a>
            </div>

          <!-- Promo code -->
            @if(!$order->coupon_id)
              <form class="card p-2" action="{{route('addCoupon')}}" method="post">
                @csrf
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-secondary btn-md waves-effect m-0" type="submit">Redeem</button>
                  </div>
                </div>
              </form>
            @endif
          <!-- Promo code -->
        </div>

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  @endsection
