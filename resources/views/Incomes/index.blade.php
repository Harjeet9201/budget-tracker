@extends('layout.app')

@section('title', 'Income') <!-- Dynamic title for this page -->
@section('meta_description', 'Manage income') <!-- Dynamic meta description -->

@section('content')
    <div class="content-area">


        <div class=" container-xxl flex-grow-1 container-p-y px-3 mt-5">
            <div class="row mx-2">
                <div class="card">
                    <div class="row">
                        <h5 class="card-header" style="font-size:20px ; font-weight:600">
                            Income 
                        </h5>
                        <div class="row my-3">

                            <div class="container-xxl flex-grow-1 container-p-y px-5">
                                <div class="row">
                                    <div class="card">
                                        <h5 class="my-2 mx-2" style="font-size:20px ; font-weight:600">
                                            Income Records
                                            <a href="{{ route('incomes.create') }}" class="pull-right"><button type="button"
                                                    class="btn btn-outline-primary" style="font-size:16px ; font-weight:500"><i class="bx bx-plus me-1"></i>Add New
                                                    Record</button></a>
                                        </h5>
                                    </div>

                                    <div class="table-responsive text-nowrap my-3">
                                        <table class="table table-bordered" id="tblemployeee">
                                            <thead class="table-dark" style="text-align:center">
                                                <tr>
                                                    <th>S.No.</th>
                                                    <th>Amount</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0" style="text-align:center">
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach ($incomes as $data)
                                                    @php
                                                        $i++;
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td>
                                                            {{ $data->amount }}

                                                        </td>
                                                        <td>
                                                            <p>{{$data->description}}</p>
                                                        </td>
                                                        
                                                        <td>
                                                            <div
                                                                class="d-flex align-items-center justify-content-center gap-5">
                                                                <div>
                                                                    <a href=" {{ route('incomes.edit', ['income' => $data->id]) }}"
                                                                        class="edit-feature-btn" data-id="">
                                                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                                                </div>
                                                                <form
                                                                    action="{{ route('incomes.destroy', ['income' => $data->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" style="all: unset;"> <span
                                                                            style="cursor: pointer"
                                                                            onclick="return confirmDelete();"><i
                                                                                class="fa fa-trash fa-lg"></i></span></button>
                                                                </form>
                                                                
                                                            </div>
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
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this item?");
        }
    </script>
@endsection


{{-- @extends('layout.app')

@section('title', 'Incomes')
@section('meta_description', 'List of incomes')

@section('content')

    <div class="content-wrapper mt-5">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mx-1">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Incomes</h5>
                            <a href="{{ route('incomes.create') }}" class="btn btn-primary">Add New Income</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Received At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($incomes as $income)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>${{ number_format($income->amount, 2) }}</td>
                                            <td>{{ $income->description }}</td>
                                            <td>
                                                {{ $income->received_at ? $income->received_at->format('d/m/Y') : 'N/A' }}
                                            </td>
                                            <td>
                                                <a href="{{ route('incomes.edit', $income->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('incomes.destroy', $income->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
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
    </div>

@endsection --}}
