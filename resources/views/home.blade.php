@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <a href="{{route('account')}}" class="text-body mb-0"><strong>P 10,000</strong></a>
            <p>Account</p>
        </div>
        <div class="col-lg-6">
            <h4 class="text-center">Tip of the day:</h4>
            <p class="lead text-center">The more actions you finish, the more you earn!</p>
        </div>
        <div class="col-lg-3">
            <p class="text-right mb-0"><strong>20000</strong></p>
            <p class="text-right">Total Points</p>
        </div>
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-flex">
                    Insurance
                    <a class="btn btn-primary ml-auto btn-sm" href="#" role="button">View Insurance Products</a>
                </div>
                
                <div class="card-body">
                    
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-flex">
                    Loans
                    <a class="btn btn-primary ml-auto btn-sm" href="#" role="button">View Available Loans</a>
                </div>
                
                <div class="card-body">
                    
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-flex">
                    Investments
                    <a class="btn btn-primary ml-auto btn-sm" href="#" role="button">View Investment Products</a>
                </div>
                
                <div class="card-body">
                    <p>Breakdown of My Investments <span class="text-secondary">(using latest fund prices)</span></p>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td scope="row">ATRAM Peso Money Market Fund</td>
                                <td class="text-right">350.62</td>
                            </tr>
                            <tr>
                                <td scope="row">ATRAM Peso Money Market Fund</td>
                                <td class="text-right">350.62</td>
                                
                            </tr>
                            <tr>
                                <th scope="row">Total Market Value of Investment</th>
                                <th class="text-right" style="border-top:1px solid #cccccc">750</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
