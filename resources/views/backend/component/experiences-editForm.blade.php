@extends('backend.layout.app')
@section('content')

    <div class="m-5">
        <div style="width:600px; margin:0px auto;">
            <form action="{{ route('admin.experience.update')}}" method="post">
                <input type="hidden" name="id" value="{{ $experience->id }}">
                @csrf
                <div class="row mb-3">
                    <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="duration" value="{{ $experience->duration }}" id="duration" placeholder="duration" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="{{ $experience->title }}" id="title" placeholder="title" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="designation" value="{{ $experience->designation }}" id="designation" placeholder="designation" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="details" class="col-sm-2 col-form-label">Details</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="details" value="{{ $experience->details}}" id="details" placeholder="details" required>
                    </div>
                </div>


                {{-- button --}}
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button class="btn btn-success">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        document.getElementById('Resume').classList.add('active');
        document.getElementById('experience').classList.add('active');
    </script>
@endsection


