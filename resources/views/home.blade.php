@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <a href="{{route('account')}}" class="text-body mb-0  text-sm-center"><strong>P {{$fund->amount}}</strong></a>
            <p>Account</p>
        </div>
        <div class="col-lg-6">
            <h4 class="text-center">Tip of the day:</h4>
            <p class="lead text-center">Follow your instincts. That's where true wisdom manifests itself.</p>
        </div>
        <div class="col-lg-3">
            <p class="text-right mb-0"><strong>JT 20,038</strong></p>
            <p class="text-right">Total Points</p>
        </div>
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="card mb-4">
                <div class="card-header d-flex">
                    Actions
                    {{-- <a class="btn btn-primary ml-auto btn-sm" href="{{route('expenses')}}" role="button">View all</a>
                    <a class="btn btn-primary ml-auto btn-sm" href="{{route('expenses')}}" role="button">View all</a> --}}
                    <div class="btn-group ml-auto" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-info">Fast Actions <span class="badge badge-light">0</span></button>
                        <button type="button" class="btn btn-primary">Dynamic Actions <span class="badge badge-light">4</span></button>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('images/banner1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('images/banner2.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card mb-4">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    You are logged in!
                </div>
            </div> --}}
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-flex">
                    Expenditures
                    <a class="btn btn-primary ml-auto btn-sm" href="{{route('expenses')}}" role="button">View all</a>
                </div>
                
                <div class="card-body">
                    <p>Breakdown of my expenses</p>
                    <table class="table table-borderless">
                        <tbody>
                            @php
                            $holder = [];
                            @endphp
                            @foreach ($expenses as $expense)
                            @php
                            array_push($holder, $expense->amount);    
                            @endphp
                            <tr>
                                <td scope="row">{{$expense->description}} - {{$expense->category}}</td>
                                <td class="text-right">₱ {{$expense->amount}}</td>
                            </tr>
                            @endforeach
                            
                            <tr>
                                <th scope="row">Total Expenditures</th>
                                <th class="text-right" style="border-top:1px solid #cccccc">₱ {{ array_sum($holder) }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-flex">
                    Investments
                    <a class="btn btn-primary ml-auto btn-sm" href="{{ route('investment') }}" role="button">View Investments</a>
                </div>
                
                <div class="card-body">
                    <p>Breakdown of My Investments <span class="text-secondary">(using latest fund prices)</span></p>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td scope="row">ATRAM Peso Money Market Fund</td>
                                <td class="text-right">₱350.62</td>
                            </tr>
                            <tr>
                                <td scope="row">ALFM Money Market Fund</td>
                                <td class="text-right">₱350.62</td>
                                
                            </tr>
                            <tr>
                                <th scope="row">Total Market Value of Investment</th>
                                <th class="text-right" style="border-top:1px solid #cccccc">₱701.24</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-flex">
                    Insurance
                    <a class="btn btn-primary ml-auto btn-sm disabled" href="#" role="button">View Insurance Products</a>
                </div>
                
                <div class="card-body">
                    Features not available at the moment.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-flex">
                    Loans
                    <a class="btn btn-primary ml-auto btn-sm disabled" href="#" role="button">View Available Loans</a>
                </div>
                
                <div class="card-body">
                    Features not available at the moment.
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
