@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('account.bpi.phaseone') }}" method="post">
                @csrf
                <div class="col-lg-8">
                    <div class="c mb-4">
                        <div class="img_container">
                            <img src="{{asset('images/logo/bpi3.png')}}" alt="" class="c_img">
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">₱</div>
                        </div>
                        <input type="number" name="amount" min="1" step="1" class="form-control" placeholder="0.00">
                    </div>
                    <p class="text-center text-muted mt-2">Enter Amount</p>
                    
                    <p class="text-muted mt-5">MY BPI ACCOUNTS</p>
                    <hr>
                    <div>
                        <p>SAVINGS  <span class="ml-5">XXXXXXXXX11223</span> </p>
                    </div>
                    <div class="mt-5">
                        <p class="text-center text-muted">Please check the amount before you proceed.</p>
                        <button type="submit" class="btn btn-primary btn-block">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('header-styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection