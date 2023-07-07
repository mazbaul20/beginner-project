<div class="m-5">
    <a href="{{ route('admin.skill.create') }}">
        <button class="btn btn-primary">Create</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        @foreach ($skills as $skill)
            
        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $skill->name }}</td>
                <td style="width:150px">
                    <a class="btn btn-small btn-primary" href="{{ route('admin.skill.edit',$skill->id) }}">Edit</a>

                    <form class="d-inline-block" action="{{ route('admin.skill.delete') }}" method="POST" id="delete" onsubmit="return  confirm('Do you want to delete?')">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $skill->id }}">
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
    let active2 = document.getElementById('skills').classList.add('active');
</script>
