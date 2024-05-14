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
                        <h5 class="card-title">Edit Book</h5>

                        <form action="{{ route('book.update', $book->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label for="inputTitle" class="form-label">Book title</label>
                                <input type="text" class="form-control" id="inputTitle" name="title"
                                    value="{{ $book->title }}">
                            </div>

                            <div class="mb-2">
                                <label class="col-sm-2 col-form-label">Category Book</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
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
                                        @foreach ($place as $row)
                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label for="inputAuthor" class="form-label">Book Author</label>
                                <input type="text" class="form-control" id="inputAuthor" name="author"
                                    value="{{ $book->author }}">
                            </div>

                            <div class="mb-2">
                                <label for="inputEdition" class="form-label">Book Edition</label>
                                <input type="text" class="form-control" id="inputEdition" name="edition"
                                    value="{{ $book->edition }}">
                            </div>

                            <div class="mb-2">
                                <label for="inputPublishing" class="form-label">Book Publishing</label>
                                <input type="text" class="form-control" id="inputPublishing" name="publishing"
                                    value="{{ $book->publishing }}">
                            </div>

                            <div class="mb-2">
                                <label for="inputISBN" class="form-label">Book ISBN</label>
                                <input type="text" class="form-control" id="inputISBN" name="isbn"
                                    value="{{ $book->isbn }}">
                            </div>

                            <div class="mb-2">
                                <label for="inputImage" class="form-label">Book Image</label>
                                <input type="text" class="form-control" id="inputImage" name="image"
                                    value="{{ $book->image }}">
                            </div>

                            <div class="mb-2">
                                <label for="inputPDF" class="form-label">Book PDF</label>
                                <input type="text" class="form-control" id="inputPDF" name="pdf"
                                    value="{{ $book->pdf }}">
                            </div>



                            <div class="d-flex justify-content-end mt-5">
                                <a href="{{ route('book.index') }}" class="btn btn-secondary mx-2">
                                    Cancel
                                </a>
                                <button class="btn btn-warning" type="submit">
                                    <i class="bi bi-pencil"></i>
                                    Edit Book
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
