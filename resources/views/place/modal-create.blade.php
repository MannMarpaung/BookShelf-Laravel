<div class="modal fade" id="createModalPlace" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Place</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('place.store') }}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('POST')
                    <div class="col-12">
                        <label for="placeName" class="form-label">Place Name</label>
                        <input type="text" class="form-control" id="placeName" name="name"
                            value="{{ old('name') }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
