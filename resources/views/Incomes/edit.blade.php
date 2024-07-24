{{-- @extends('layout.app')

@section('title', 'Edit Income') <!-- Dynamic title for this page -->
@section('meta_description', 'Edit income') <!-- Dynamic meta description -->


@section('content')

<!-- Content wrapper -->
<div class="content-wrapper " style="margin-top: 50px">
    <!-- Bootstrap Table with Header - Dark -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="row mb-3">
                    <h5 class="card-header">
                        Update Income
                        <a href="{{ route('incomes.index') }}" class="pull-right"><button type="button" class="btn btn-secondary"> >>Back </button></a>
                    </h5>
                </div>
                <div class="row mb-5">
                    <form action="{{route('incomes.update' ,  ['income' => $income->id]) }}" method="POST" id="prop">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xl">
                                <div class="mb-3"> 
                                    <label for="floor" class="form-label">Amount</label>
                                    <input type="number" class="form-control" id="amount" name="amount"
                                    value="{{ $income->amount }}" placeholder="Amount" required />
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <span>
                                        <textarea name="description" id="description"
                                        placeholder="description" style="resize: none;" required >{{ $income->description }}</textarea>
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

@section('title', 'Edit Income')
@section('meta_description', 'Edit income')

@section('content')

<!-- Content wrapper -->
<div class="content-wrapper mt-5">
    <!-- Bootstrap Container -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Update Income</h5>
                        <a href="{{ route('incomes.index') }}" class="btn btn-secondary">>> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('incomes.update', ['income' => $income->id]) }}" method="POST" id="prop">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="amount" name="amount"
                                    value="{{ old('amount', $income->amount) }}" placeholder="Amount" required />
                                @error('amount')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control"
                                    placeholder="Description" style="resize: none;" required>{{ old('description', $income->description) }}</textarea>
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
