<div class="m-5">

    <div style="width:600px; margin:0px auto;">
        <form action="{{ route('admin.abouts.update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $showData->id }}">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" value="{{ $showData->title }}" id="title" placeholder="title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="details" class="col-sm-2 col-form-label">Details</label>
                <div class="col-sm-10">
                    <textarea name="details" class="form-control" id="details" cols="30" rows="10" >{{$showData->details }}</textarea>
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
    let active1 = document.getElementById('Home').classList.add('active');
</script>
