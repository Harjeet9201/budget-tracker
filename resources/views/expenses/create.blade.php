{{-- @extends('layout.app')

@section('title', 'Add new expense') <!-- Dynamic title for this page -->
@section('meta_description', 'Add new expense') <!-- Dynamic meta description -->

@section('content')

    <div class="content-wrapper">
        <!-- Bootstrap Table with Header - Dark -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Basic Layout -->
            <div class="row  mx-1">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0" style="font-size:20px ; font-weight:600">Add New Expense</h5> 
                            <a href="{{route('expenses.index')}}" class="pull-right"><button type="button"
                                class="btn btn-secondary"> >>Back
                            </button></a>
                        </div>
                        <div class="card-body">
                            <form action="{{ Route('expenses.store')}}" method="POST" enctype="multipart/form-data" id="prop">
                                @csrf 
                                <div class="row">
                                    <div class="col-xl">
                                        <div class="mb-3"> 
                                            <label for="floor" class="form-label">Amount</label>
                                            <input type="number" class="form-control" id="amount" name="amount"
                                                placeholder="Amount" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <span>
                                                <textarea name="description" id="description"
                                                placeholder="description" style="resize: none;" required></textarea>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" id="submit" class="btn btn-primary" name="submit"
                                    value="Save" />
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}





















@extends('layout.app')

@section('title', 'Add New Expense')
@section('meta_description', 'Add new expense')

@section('content')

<!-- Content wrapper -->
<div class="content-wrapper mt-5">
    <!-- Bootstrap Container -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add New Expense</h5>
                        <a href="{{ route('expenses.index') }}" class="btn btn-secondary">>> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('expenses.store') }}" method="POST" enctype="multipart/form-data" id="prop">
                            @csrf
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="amount" name="amount"
                                    placeholder="Amount" value="{{ old('amount') }}" required />
                                @error('amount')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control"
                                    placeholder="Description" style="resize: none;" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" id="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
