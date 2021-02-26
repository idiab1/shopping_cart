@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary" href="{{route('products.index')}}" role="button">Our product</a>
        </div>
    </div>
    <section>
        <div class="row">
            @foreach ($latestProducts as $lProduct)
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <img src="{{$lProduct->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$lProduct->title}}</h5>
                            <p class="card-text">${{$lProduct->price}}</p>
                            <a class="btn btn-primary" href="{{route('cart.add', $lProduct->id)}}" role="button">buy</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
