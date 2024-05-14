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
                        <h5 class="card-title">Crate Book</h5>

                        <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="mb-2">
                                <label for="inputTitle" class="form-label">Book title</label>
                                <input type="text" class="form-control" id="inputTitle" name="title"
                                    value="{{ old('title') }}">
                            </div>

                            <div class="mb-2">
                                <label class="col-sm-2 col-form-label">Category Book</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>-=-=- Choose Category -=-=-</option>
                                        @foreach ($category as $row)
                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label class="col-sm-2 col-form-label">Place Book</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="place_id">
                                        <option selected>-=-=- Choose Place -=-=-</option>
                                        @foreach ($place as $row)
                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label for="inputAuthor" class="form-label">Book Author</label>
                                <input type="text" class="form-control" id="inputAuthor" name="author"
                                    value="{{ old('author') }}">
                            </div>

                            <div class="mb-2">
                                <label for="inputEdition" class="form-label">Book Edition</label>
                                <input type="text" class="form-control" id="inputEdition" name="edition"
                                    value="{{ old('edition') }}">
                            </div>

                            <div class="mb-2">
                                <label for="inputPublishing" class="form-label">Book Publishing</label>
                                <input type="text" class="form-control" id="inputPublishing" name="publishing"
                                    value="{{ old('publishing') }}">
                            </div>

                            <div class="mb-2">
                                <label for="inputISBN" class="form-label">Book ISBN</label>
                                <input type="text" class="form-control" id="inputISBN" name="isbn"
                                    value="{{ old('isbn') }}">
                            </div>

                            <div class="mb-2">
                                <label for="inputImage" class="form-label">Book Image</label>
                                <input type="text" class="form-control" id="inputImage" name="image"
                                    value="{{ old('image') }}">
                            </div>

                            <div class="mb-2">
                                <label for="inputPDF" class="form-label">Book PDF</label>
                                <input type="text" class="form-control" id="inputPDF" name="pdf"
                                    value="{{ old('pdf') }}">
                            </div>



                            <div class="d-flex justify-content-end mt-5">
                                <a href="{{ route('book.index') }}" class="btn btn-secondary mx-2">
                                    Cancel
                                </a>
                                <button class="btn btn-primary">
                                    <i class="bi bi-plus"></i>
                                    Create Book
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
