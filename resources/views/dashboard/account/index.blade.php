@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <p class="lead">Bank Partners</p>
        </div>
        <div class="col-md-3">
            <div class="c card">
                <a href="{{route('account.bpi')}}">
                <div class="img_container">
                    <img src="{{asset('images/logo/bpi.png')}}" alt="" class="c_img">
                </div>
                <div class="c_content">
                    <div class="row c_content_row">
                            <div class="col-lg-12">
                                <span class="badge badge-success">Linked</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="c card">
                <div class="img_container">
                    <img src="{{asset('images/logo/bdo-logo.jpg')}}" alt="" class="c_img">
                </div>
                <div class="c_content">
                    <div class="row c_content_row">
                        <div class="col-lg-12">
                            <a href="#" class="badge badge-primary">Pending</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="c card">
                <div class="img_container">
                    <img src="{{asset('images/logo/RCBC-logo.jpg')}}" alt="" class="c_img">
                </div>
                <div class="c_content">
                    <div class="row c_content_row">
                        <div class="col-lg-12">
                            <a href="#" class="badge badge-secondary">Unavailable</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="c card">
                <div class="img_container">
                    <img src="{{asset('images/logo/aub.png')}}" alt="" class="c_img">
                </div>
                <div class="c_content">
                    <div class="row c_content_row">
                        <div class="col-lg-12">
                            <a href="#" class="badge badge-secondary">Unavailable</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <p class="lead">Remittance Partners</p>
        </div>
        <div class="col-md-3">
            <div class="c card">
                <div class="img_container">
                    <img src="{{asset('images/logo/MoneyGram-Logo.jpg')}}" alt="" class="c_img">
                </div>
                <div class="c_content">
                    <div class="row c_content_row">
                        <div class="col-lg-12">
                            <a href="#" class="badge badge-secondary">Unavailable</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="c card">
                <div class="img_container">
                    <img src="{{asset('images/logo/wu.png')}}" alt="" class="c_img">
                </div>
                <div class="c_content">
                    <div class="row c_content_row">
                        <div class="col-lg-12">
                            <a href="#" class="badge badge-secondary">Unavailable</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <p class="lead">Payment Partners</p>
        </div>
        <div class="col-md-3">
            <div class="c card">
                <div class="img_container">
                    <img src="{{asset('images/logo/paypal.png')}}" alt="" class="c_img">
                </div>
                <div class="c_content">
                    <div class="row c_content_row">
                        <div class="col-lg-12">
                            <a href="#" class="badge badge-secondary">Unavailable</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('header-styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection