@extends('visitor.layouts.app')
@section('title', 'Product')
@section('content')
    <style>
        .page-item.active>.page-link {
            background-color: #85181D !important;
            border-color: #85181D !important;
            color: white !important;
        }

        .page-link {
            color: #85181D !important;
        }
    </style>
    <div class="breadcrumb">
        <h3>Product</h3>
    </div>


    <div class="container">
        <div class="row">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Content</th>
                        <th>PDF</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $data)
                        <tr>
                            <td>{{ $data['title'] }}</td>
                            <td>{!! str_replace(',', ',<br>', $data['content']) !!}</td>
                            <td>
                                <a href="{{ asset('pdf/' . $data['pdf']) }}" download="{{ 'pdf/' . $data['title'] }}"
                                    class="btn  btn-danger" target="_blank">Download PDF</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex align-items-center justify-content-end">

                {{ $products->links() }}
            </div>
        </div>



    </div>
@endsection
