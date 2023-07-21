<div class="m-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Page Name</th>
                <th scope="col">Title</th>
                <th scope="col">keywords</th>
                <th scope="col">description</th>
                <th scope="col">ogSiteName</th>
                <th scope="col">ogUrl</th>
                <th scope="col">ogTitle</th>
                <th scope="col">ogDescription</th>
                <th scope="col">ogImage</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

    @foreach ($seoproperties as $seoproperty)

        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $seoproperty->pageName }}</td>
                <td>{{ $seoproperty->title }}</td>
                <td>{{ $seoproperty->keywords }}</td>
                <td>{{ $seoproperty->description }}</td>
                <td>{{ $seoproperty->ogSiteName }}</td>
                <td>{{ $seoproperty->ogUrl }}</td>
                <td>{{ $seoproperty->ogTitle }}</td>
                <td>{{ $seoproperty->ogDescription }}</td>
                <td>{{ $seoproperty->ogImage }}</td>
                <td style="width:150px">
                    <a class="btn btn-small btn-primary" href="{{ route('admin.seoProperty.edit',$seoproperty->id) }}">Edit</a>
                </td>
            </tr>
        </tbody>

    @endforeach
    </table>
</div>

<script>
    document.getElementById('seoproperties').classList.add('active');
   
</script>
