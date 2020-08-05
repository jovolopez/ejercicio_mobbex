@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card" style="align-items: center;flex-flow: row;">
                    <aside style="width: 50%;border-right: #e4e4e4 1px solid;">
                        <img src="@if ($product->photo)/storage/{{$product->photo}}.jpg @else/storage/imagenotfound.png @endif" class="card-img-top" alt="...">
                    </aside>
                    <div class="card-body" style="width: 50%; flex-flow: wrap;">
                        <h2 class="card-title">{{ $product->title }}</h5>
                        <h5>{{ $product->price }}$ ARS</h6>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-primary" style="margin: 4px;">Buy now!</a>
                        <a href="/product/{{$product->id}}/order" class="btn btn-secondary" style="margin: 4px;">Pay with bank transfer or deposit</a>
                        <a href="#" class="btn btn-light" style="margin: 4px;">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
