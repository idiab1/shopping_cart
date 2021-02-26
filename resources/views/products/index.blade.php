@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Products section-->
    <section>
        @if (session()->has('success'))
            
        @endif
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <img src="{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text">{{$product->price}}</p>
                            <a class="btn btn-primary" href="{{route('cart.add', $product->id)}}" role="button">buy</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
