@extends('backend.layout.app')
@section('content')

    <div class="m-5">
        <div style="width:600px; margin:0px auto;">
            <a href="{{ route('admin.seoProperty') }}">
                <button class="btn btn-primary">Back</button>
            </a>
            
            <form action="{{ route('admin.seoProperty.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $seoProterty->id }}">
                
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">pageName</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pageName" id="pageName" value="{{ $seoProterty->pageName}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="institutionName" value="{{ $seoProterty->title}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="keywords" class="col-sm-2 col-form-label">keywords</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="keywords" id="keywords" value="{{ $seoProterty->keywords}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" id="description" value="{{ $seoProterty->description}}"  required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ogSiteName" class="col-sm-2 col-form-label">ogSiteName</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ogSiteName" id="ogSiteName" value="{{ $seoProterty->ogSiteName}}"  required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ogUrl" class="col-sm-2 col-form-label">ogUrl</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ogUrl" id="ogUrl" value="{{ $seoProterty->ogUrl}}"  required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ogTitle" class="col-sm-2 col-form-label">ogTitle</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ogTitle" id="ogTitle" value="{{ $seoProterty->ogTitle}}"  required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ogDescription" class="col-sm-2 col-form-label">ogDescription</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ogDescription" id="ogDescription" value="{{ $seoProterty->ogDescription}}"  required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ogImage" class="col-sm-2 col-form-label">ogImage</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ogImage" id="ogImage" value="{{ $seoProterty->ogImage}}"  required>
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
        document.getElementById('seoproperties').classList.add('active');
    </script>
@endsection


