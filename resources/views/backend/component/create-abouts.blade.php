@extends('backend.layout.app')
@section('content')

    <div class="m-5">
        <div style="width:600px; margin:0px auto;">
            <form action="{{ route('admin.abouts.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" placeholder="title" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="details" class="col-sm-2 col-form-label">Details</label>
                    <div class="col-sm-10">
                        <textarea name="details" class="form-control" id="details" cols="30" rows="10" placeholder="about details" required></textarea>
                    </div>
                </div>

                {{-- button --}}
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button class="btn btn-success">Insert</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection

<script>
    let active1 = document.getElementById('Home').classList.add('active');
</script>
