@extends('layout.app')

@section('title', 'Aout master') <!-- Dynamic title for this page -->
@section('meta_description', 'Meta description for car list page') <!-- Dynamic meta description -->

@section('content')
    <div class="content-area">


        <div class=" container-xxl flex-grow-1 container-p-y px-3 mt-5">
            <div class="row mx-2">
                <div class="card">
                    <div class="row">
                        <h5 class="card-header" style="font-size:20px ; font-weight:600">
                            Expense 
                        </h5>
                        <div class="row my-3">

                            <div class="container-xxl flex-grow-1 container-p-y px-5">
                                <div class="row">
                                    <div class="card">
                                        <h5 class="my-2 mx-2" style="font-size:20px ; font-weight:600">
                                            Expense Records
                                            <a href="{{ route('expenses.create') }}" class="pull-right"><button type="button"
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
                                                @foreach ($expenses as $data)
                                                    @php
                                                        $i++;
                                                        // dd($data->Profile_Pic)
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        {{-- <td>{{ $data->id }}</td> --}}
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
                                                                    <a href=" {{ route('expenses.edit', ['expense' => $data->id]) }}"
                                                                        class="edit-feature-btn" data-id="">
                                                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                                                </div>
                                                                <form
                                                                    action="{{ route('expenses.destroy', ['expense' => $data->id]) }}"
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
