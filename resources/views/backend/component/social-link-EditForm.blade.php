@extends('backend.layout.app')
@section('content')

    <div class="m-5">
        <div style="width:600px; margin:0px auto;">
            <form action="{{ route('admin.social-links.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $social_links->id }}">
                <div class="row mb-3">
                    <label for="twitterLink" class="col-sm-2 col-form-label">Twitter-Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="twitterLink" value="{{ $social_links->twitterLink }}" id="twitterLink" placeholder="twitterLink" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="githubLink" class="col-sm-2 col-form-label">Github-Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="githubLink" value="{{ $social_links->githubLink }}" id="githubLink" placeholder="githubLink" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="linkdinLink" class="col-sm-2 col-form-label">Linkdin-Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="linkdinLink" value="{{ $social_links->linkdinLink }}" id="linkdinLink" placeholder="linkdinLink" required>
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
        document.getElementById('Home').classList.add('active');
        document.getElementById('social').classList.add('active');
    </script>
@endsection


