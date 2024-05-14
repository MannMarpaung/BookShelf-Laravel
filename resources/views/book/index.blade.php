@extends('parent')

@section('content')
    <div class="pagetitle">
        <h1>Book</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Book Table</h5>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('book.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus"></i>
                                Create Book
                            </a>
                        </div>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Place</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($book as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->category->name }}</td>
                                    <td>{{ $row->place->name }}</td>
                                    <td class="d-flex">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showModalBook{{ $row->id }}">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        @include('book.show-modal')

                                        <a href="{{ route('book.edit', $row->id) }}" class="btn btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('book.destroy', $row->id) }}" method="post">
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
                                        <td class="text-center" colspan="5">Data Is Empty</td>
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
