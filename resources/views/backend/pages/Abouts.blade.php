@extends('backend.layout.app')

@section('content')

    <!--Abouts-page-->
    <div class="m-5">
        <a href="{{ route('admin.abouts.create') }}">
            <button class="btn btn-primary">Create</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Title</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>

            @foreach ($showData as $data)
            <tbody>
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td >{{ $data->title}}</td>
                    <td style="width:500px;">{{ $data->details}}</td>
                    <td style="width:150px">
                        <a class="btn btn-small btn-primary" href="{{ route('admin.abouts.edit',$data->id) }}">Edit</a>

                        <form class="d-inline-block" action="{{ route('admin.abouts.delete') }}" id="delete" method="POST" onsubmit="return  confirm('Do you want to delete?')">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <button class="btn btn-small btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>

            @endforeach
        </table>
    </div>

    <script>
        let Home = document.getElementById('Home').classList.add('active');
        let abouts = document.getElementById('abouts').classList.add('active');
    </script>


@endsection
