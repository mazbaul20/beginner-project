@extends('backend.layout.app')
@section('content')

    <div class="m-5">
        <div style="width:600px; margin:0px auto;">
            <form action="{{ route('admin.project.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="title" placeholder="title" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="previewLink" class="col-sm-2 col-form-label">PreviewLink</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="previewLink" id="previewLink" placeholder="previewLink" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="thumbnailLink" class="col-sm-2 col-form-label">ThumbnailLink</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="thumbnailLink" id="thumbnailLink" placeholder="thumbnailLink" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="details" class="col-sm-2 col-form-label">Details</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="details" id="details" placeholder="details" required>
                    </div>
                </div>

                {{-- button --}}
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button class="btn btn-success">Create</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        document.getElementById('project').classList.add('active');
    </script>
@endsection
