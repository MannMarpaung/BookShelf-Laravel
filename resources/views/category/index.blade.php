@extends('parent')

@section('content')
    <div class="pagetitle">
        <h1>Category</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Category Table</h5>

                        <div class="justify-content-end d-flex">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModalCategory">
                                <i class="bi bi-plus"></i>
                                Create Category
                            </button>
                        </div>
                        @include('category.modal-create')

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($category as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td class="d-flex">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModalCategory{{ $row->id }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        @include('category.modal-edit')
                                        <form action="{{ route('category.destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="3">Data Is Empty</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
