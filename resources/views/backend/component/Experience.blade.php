<div class="m-5">
    <a href="{{ route('admin.experience.create') }}">
        <button class="btn btn-primary">Create</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Duration</th>
                <th scope="col">Title</th>
                <th scope="col">Designation</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        @foreach ($experiences as $experience)
            
        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $experience->duration }}</td>
                <td>{{ $experience->title }}</td>
                <td>{{ $experience->designation }}</td>
                <td>{{ $experience->details }}</td>
                <td style="width:150px">
                    <a class="btn btn-small btn-primary" href="{{ route('admin.experience.edit',$experience->id) }}">Edit</a>

                    <form class="d-inline-block" action="{{ route('admin.experience.delete') }}" method="POST" id="delete" onsubmit="return  confirm('Do you want to delete?')">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $experience->id }}">
                        <button class="btn btn-small btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>

        @endforeach
    </table>
</div>

<script>
    let active1 = document.getElementById('Resume').classList.add('active');
    let active2 = document.getElementById('experience').classList.add('active');
</script>
