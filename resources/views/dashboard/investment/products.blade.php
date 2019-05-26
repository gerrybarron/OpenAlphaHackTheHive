@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="text-center lead mb-0">Risk Profile: <strong>Moderately Conservative</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <p class="text-muted lead">Investment Products</p>
            </div>

            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="c">
                            <div class="img_container">

                                <img src="{{ asset('/images/logo/ATRAM.jpg') }}" alt="" class="c_img">
                            </div>
                        </div>
                        <strong class="text-center">ATRAM Peso Money Market Fund</strong>
                        <p>Risk Classification: Conservative</p>
                        <a class="btn btn-primary btn-block" href="{{route('investment.atram')}}" role="button">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="c">
                            <div class="img_container">

                                <img src="{{ asset('/images/logo/alfm.png') }}" alt="" class="c_img">
                            </div>
                        </div>
                        <strong class="text-center">ALFM Money Market Fund</strong>
                        <p>Risk Classification: Conservative</p>
                        <a class="btn btn-primary btn-block" href="investment.alfm" role="button">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('header-styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection