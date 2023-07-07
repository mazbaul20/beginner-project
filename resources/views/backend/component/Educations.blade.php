<div class="m-5">
    <a href="{{ route('admin.educations.create') }}">
        <button class="btn btn-primary">Create</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Duration</th>
                <th scope="col">Institution Name</th>
                <th scope="col">Field</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        @foreach ($educations as $education)
            
        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $education->duration }}</td>
                <td>{{ $education->institutionName }}</td>
                <td>{{ $education->field }}</td>
                <td>{{ $education->details }}</td>
                <td style="width:150px">
                    <a class="btn btn-small btn-primary" href="{{ route('admin.educations.edit',$education->id) }}">Edit</a>

                    <form class="d-inline-block" action="{{ route('admin.educations.delete') }}" method="POST" id="delete" onsubmit="return  confirm('Do you want to delete?')">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $education->id }}">
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
    let active2 = document.getElementById('education').classList.add('active');
</script>
