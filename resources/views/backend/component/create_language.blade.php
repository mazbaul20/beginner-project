@extends('backend.layout.app')
@section('content')

    <div class="m-5">
        <div style="width:600px; margin:0px auto;">
            <form action="{{ route('admin.language.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="language name" required>
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
        document.getElementById('Resume').classList.add('active');
        document.getElementById('language').classList.add('active');
    </script>
@endsection
