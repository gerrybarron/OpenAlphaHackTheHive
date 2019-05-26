@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            @if (count($errors) > 0)
            <div class="bd-callout bd-callout-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-danger">
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="card mb-4">
                <div class="card-header d-flex">
                    Expenditures
                    <a class="btn btn-primary ml-auto btn-sm" href="#!" data-toggle="modal" data-target="#addModal" role="button">Add</a>
                </div>
                
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $expense)
                            <tr>
                                <th scope="row">{{ $expense->id }}</th>
                                <td>{{ $expense->category }}</td>
                                <td>{{ $expense->description }}</td>
                                <td>₱ {{ $expense->amount }}</td>
                                <td>{{ $expense->created_at->format('M d Y H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#receipt{{ $expense->id}}">View Receipt</a>
                                    {{-- <a href="#" class="badge badge-primary">Primary</a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="{{route('expense.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Expense</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="Bills">Bills</option>
                            <option value="Family">Family</option>
                            <option value="Tuition">Tuition</option>
                            <option value="Health">Health</option>
                            <option value="Groceries">Groceries</option>
                            <option value="Leisure">Leisure</option>
                            <option value="Transportation">Transportation</option>
                            <option value="Tax">Tax</option>
                            <option value="Loans">Loans</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Investment">Investment</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">P</div>
                            </div>
                            <input type="number" min="1" class="form-control" name="amount" id="amount" placeholder="0.00">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">Receipt</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Receipt Modal -->
@foreach ($expenses as $expense)
<div class="modal fade" id="receipt{{ $expense->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Receipt for {{ $expense->description}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{asset('storage/'.$expense->receiptGallery->filename)}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection