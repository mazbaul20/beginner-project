@extends('backend.layout.app')
@section('content')

    <div class="m-5">
        <div style="width:600px; margin:0px auto;">
            <form action="{{ route('admin.skill.update') }}" method="post">
                <input type="hidden" name="id" value="{{ $skill->id }}">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Skill Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $skill->name }}" required>
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
        document.getElementById('skills').classList.add('active');
    </script>
@endsection


