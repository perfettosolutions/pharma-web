@extends('visitor.layouts.app')
@section('title', 'Product')
@section('content')
    <div class="breadcrumb">
        <h3>Product</h3>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($data as $product)
                <div class="col-md-3  py-3">
                    <div class="card">
                        <img src="{{ asset($product['image']) }}" class="card-img-top" alt="{{ $product['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title text-black">{{ $product['title'] }}</h5>

                            <a href="{{ asset($product['pdf']) }}" download="{{ $product['title'] }}"
                                class="btn  btn-danger" target="_blank">Download PDF</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>



    </div>
@endsection
