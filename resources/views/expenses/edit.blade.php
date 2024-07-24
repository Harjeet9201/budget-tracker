{{-- @extends('layout.app')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Bootstrap Table with Header - Dark -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="row mb-3">
                    <h5 class="card-header">
                        Update expense
                        <a href="{{ route('expenses.index') }}" class="pull-right"><button type="button" class="btn btn-secondary"> >>Back </button></a>
                    </h5>
                </div>
                <div class="row mb-5">
                    <form action="{{route('expenses.update' ,  ['expense' => $expense->id]) }}" method="POST" id="prop">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xl">
                                <div class="mb-3"> 
                                    <label for="floor" class="form-label">Amount</label>
                                    <input type="number" class="form-control" id="amount" name="amount"
                                    value="{{ $expense->amount }}" placeholder="Amount" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <span>
                                        <textarea name="description" id="description"
                                        placeholder="description" style="resize: none;" required >{{ $expense->description }}</textarea>
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
        <!--/ Bootstrap Table with Header Dark -->
    </div>
</div>
@endsection --}}















@extends('layout.app')

@section('title', 'Update Expense')
@section('meta_description', 'Update expense')

@section('content')

<!-- Content wrapper -->
<div class="content-wrapper mt-5">
    <!-- Bootstrap Container -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Update Expense</h5>
                        <a href="{{ route('expenses.index') }}" class="btn btn-secondary">>> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('expenses.update', ['expense' => $expense->id]) }}" method="POST" id="prop">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="amount" name="amount"
                                    value="{{ old('amount', $expense->amount) }}" placeholder="Amount" required />
                                @error('amount')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control"
                                    placeholder="Description" style="resize: none;" required>{{ old('description', $expense->description) }}</textarea>
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
