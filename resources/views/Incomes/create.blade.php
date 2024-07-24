@extends('layout.app')

@section('title', 'Add new income')
@section('meta_description', 'Add new income')

@section('content')

    <div class="content-wrapper mt-5">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mx-1">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Add New Income</h5>
                            <a href="{{ route('incomes.index') }}" class="pull-right">
                                <button type="button" class="btn btn-secondary"> >>Back</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <!-- Display validation errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger mb-3">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('incomes.store') }}" method="POST" enctype="multipart/form-data" id="prop">
                                @csrf
                                <div class="mb-3">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="number" class="form-control" id="amount" name="amount"
                                        placeholder="Amount" value="{{ old('amount') }}" required />
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" class="form-control"
                                        placeholder="Description" style="resize: none;" required>{{ old('description') }}</textarea>
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
