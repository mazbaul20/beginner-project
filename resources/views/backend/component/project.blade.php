<div class="m-5">
    <a href="{{ route('admin.project.create') }}">
        <button class="btn btn-primary">Create</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Title</th>
                <th scope="col">previewLink</th>
                <th scope="col">thumbnailLink</th>
                <th scope="col">details</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

    @foreach ($projects as $project)

        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->previewLink }}</td>
                <td style="width:150px">
                    <img class="w-25 h-25" src="{{ $project->thumbnailLink }}" alt="image">
                </td>
                <td>{{ $project->details }}</td>
                <td style="width:150px">
                    <a class="btn btn-small btn-primary" href="{{ route('admin.project.edit',$project->id ) }}">Edit</a>

                    <form class="d-inline-block" action="{{ route('admin.project.delete',$project->id)}}" id="delete" method="POST" onsubmit="return  confirm('Do you want to delete?')">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $project->id }}">
                        <button class="btn btn-small btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>

    @endforeach
    </table>
</div>

<script>
    document.getElementById('project').classList.add('active');
   
</script>
