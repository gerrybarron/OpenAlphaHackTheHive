@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-flex">
                    Investments
                    <a class="btn btn-primary ml-auto btn-sm" href="{{ route('investment.products') }}" role="button">View Investment Products</a>
                </div>
                
                <div class="card-body">
                    <p>Details</p>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Risk Profile</th>
                                <th class="text-right">Moderately Conservative</th>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <p>Breakdown of My Investments <span class="text-secondary">(using latest fund prices)</span></p>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td scope="row">ATRAM Peso Money Market Fund</td>
                                <td class="text-right">350.62</td>
                            </tr>
                            <tr>
                                <td scope="row">ALFM Money Market Fund</td>
                                <td class="text-right">350.62</td>
                                
                            </tr>
                            <tr>
                                <th scope="row">Total Market Value of Investment</th>
                                <th class="text-right" style="border-top:1px solid #cccccc">750</th>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <p>My Pending Orders</p>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td scope="row">Total Subscriptions</td>
                                <td class="text-right">0.00</td>
                            </tr>
                            <tr>
                                <td scope="row">Total Redemptions</td>
                                <td class="text-right">0.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('header-styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection