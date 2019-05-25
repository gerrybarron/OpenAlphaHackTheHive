@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('account.bpi.store') }}" method="post">
                @csrf
                <div class="col-lg-8">
                    <div class="c mb-4">
                        <div class="img_container">
                            <img src="{{asset('images/logo/bpi3.png')}}" alt="" class="c_img">
                        </div>
                    </div>
                    <p class="text-center text-muted">Confirmation</p>
                    
                    <input type="hidden" name="amount" value="{{session('amount')}}" min="1" step="1" class="form-control" placeholder="0.00">
                    
                    <p class="lead text-center">You are about to cash in</p>
                    <p class="lead text-center">₱ {{session('amount')}}</p>
                    <p class="lead text-center">using your BPI Account</p>

                    <div class="mt-5">
                        <p class="text-center text-muted">Please review to ensure that the details are correct before you proceed.</p>
                        <button type="submit" class="btn btn-primary btn-block">Confirm</button>
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