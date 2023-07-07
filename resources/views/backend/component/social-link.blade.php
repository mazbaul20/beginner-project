<div class="m-5">
    <a href="{{ route('admin.social-links.create') }}">
        <button class="btn btn-primary">Create</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Twitter-Link</th>
                <th scope="col">Github-Link</th>
                <th scope="col">Linkdin-Link</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

    @foreach ($social_links as $link)

        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $link->twitterLink }}</td>
                <td>{{ $link->githubLink }}</td>
                <td>{{ $link->linkdinLink }}</td>
                <td style="width:150px">
                    <a class="btn btn-small btn-primary" href="{{ route('admin.social-links.show',$link->id) }}">Edit</a>

                    <form class="d-inline-block" action="{{ route('admin.social-links.delete') }}" id="delete" method="POST" onsubmit="return  confirm('Do you want to delete?')">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $link->id }}">
                        <button class="btn btn-small btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>

    @endforeach
    </table>
</div>

<script>
    let active1 = document.getElementById('Home').classList.add('active');
    let active2 = document.getElementById('social').classList.add('active');
</script>
