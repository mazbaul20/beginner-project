<div class="m-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">KeyLine</th>
                <th scope="col">Title</th>
                <th scope="col">Short_title</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

    @foreach ($showData as $data)

        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->keyLine }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->short_title }}</td>
                <td style="width:150px">
                    <img class="w-25 h-25" src="{{ $data->img }}" alt="image">
                </td>
                <td style="width:150px">
                    <a class="btn btn-small btn-primary" href="{{ route('admin.Hero-properties.edit',$data->id ) }}">Edit</a>
                    <a class="btn btn-small btn-danger" href="#">Delete</a>
                </td>
            </tr>

        </tbody>

    @endforeach
    </table>
</div>

<script>
    let active1 = document.getElementById('Home').classList.add('active');
    let active2 = document.getElementById('Hero').classList.add('active');
</script>
