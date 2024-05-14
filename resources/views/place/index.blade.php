@extends('parent')

@section('content')
    <div class="pagetitle">
        <h1>Place</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Place Table</h5>

                        <div class="justify-content-end d-flex">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModalPlace">
                                <i class="bi bi-plus"></i>
                                Create Place
                            </button>
                        </div>
                        @include('place.modal-create')

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($place as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td class="d-flex">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModalPlace{{ $row->id }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        @include('place.modal-edit')
                                        <form action="{{ route('place.destroy', $row->id) }}" method="post">
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
