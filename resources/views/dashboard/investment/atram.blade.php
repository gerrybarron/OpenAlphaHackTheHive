@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <img src="{{asset('images/atram-graph.jpg')}}" alt="" class="img-fluid">
            <div class="mt-4">
                <h4>Investment Info</h4>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td class="py-0 text-muted" scope="row">Market Value of Investment</td>
                            <td class="text-right py-0 text-muted">350.62</td>
                        </tr>
                        <tr>
                            <td class="py-0 text-muted" scope="row">Pending Subscriptions</td>
                            <td class="text-right py-0 text-muted">0.00</td>
                        </tr>
                        <tr>
                            <td class="py-0 text-muted" scope="row">Pending Redemptions</td>
                            <td class="text-right py-0 text-muted">0.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <h4>Fund Description</h4>
            <p class="text-muted">The objective of the Fund is to maximize income and achieve higher returns compared to regular bank deposits while preseving capital by investing in a portfolio of very liquid, fixed-income instruments and maintaining an average portfolio duration of 1 year or less.</p>
            <hr>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="py-0 text-muted" scope="row">Risk Classifications</td>
                        <td class="text-right py-0 text-muted">Conservative</td>
                    </tr>
                    <tr>
                        <td class="py-0 text-muted" scope="row">Min. Investment Amount</td>
                        <td class="text-right py-0 text-muted">50.00</td>
                    </tr>
                    <tr>
                        <td class="py-0 text-muted" scope="row">Min. Holding Period</td>
                        <td class="text-right py-0 text-muted">None</td>
                    </tr>
                    <tr>
                        <td class="py-0 text-muted" scope="row">Past 1 year return</td>
                        <td class="text-right py-0 text-muted">3.17%</td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-lg-6">
                        <a class="btn btn-primary btn-block" href="#" role="button">Subscribe</a>
                </div>
                <div class="col-lg-6">
                        <a class="btn btn-secondary btn-block" href="#" role="button">Redeem</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection