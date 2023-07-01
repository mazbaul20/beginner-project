<div class="m-5">

    <div style="width:600px; margin:0px auto;">
        <form action="{{ route('admin.Hero-properties.update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" hidden value="{{ $showData->id }}">
            <div class="row mb-3">
                <label for="keyLine" class="col-sm-2 col-form-label">KeyLine</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="keyLine" value="{{ $showData->keyLine }}" id="keyLine" placeholder="keyLine">
                </div>
            </div>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" value="{{ $showData->title }}" id="title" placeholder="title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="short_title" class="col-sm-2 col-form-label">Short_title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="short_title" value="{{ $showData->short_title }}" id="short_title" placeholder="short_title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="img" class="col-sm-2 col-form-label">Image link</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="img" value="{{ $showData->img }}" id="short_title" placeholder="img">
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
