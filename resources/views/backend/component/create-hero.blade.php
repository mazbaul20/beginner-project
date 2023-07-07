@extends('backend.layout.app')

@section('content')


    <div class="m-5">

        <div style="width:600px; margin:0px auto;">
            <form action="{{ route('admin.Hero-properties.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="keyLine" class="col-sm-2 col-form-label">KeyLine</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="keyLine" id="keyLine" placeholder="keyLine" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" placeholder="title" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="short_title" class="col-sm-2 col-form-label">Short_title</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="short_title" id="short_title" placeholder="short_title" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="img" class="col-sm-2 col-form-label">Image link</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="img" value="" id="short_title" placeholder="img" required>
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
        let active1 = document.getElementById('Home').classList.add('active');
    </script>


@endsection
