<div class="modal fade" id="showModalBook{{ $row->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Show Book - {{ $row->title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Book Name :</strong> {{ $row->title }}</li>
                    <li class="list-group-item"><strong>Book Place :</strong> {{ $row->place->name }}</li>
                    <li class="list-group-item"><strong>Book Category :</strong> {{ $row->category->name }}</li>
                    <li class="list-group-item"><strong>Book Author :</strong> {{ $row->author }}</li>
                    <li class="list-group-item"><strong>Book Edition :</strong> {{ $row->edition }}</li>
                    <li class="list-group-item"><strong>Book Publishing :</strong> {{ $row->publishing }}</li>
                    <li class="list-group-item"><strong>Book ISBN :</strong> {{ $row->isbn }}</li>
                    <li class="list-group-item"><strong>Book Image :</strong> {{ $row->image }}</li>
                    <li class="list-group-item"><strong>Book PDF :</strong> {{ $row->pdf }}</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
