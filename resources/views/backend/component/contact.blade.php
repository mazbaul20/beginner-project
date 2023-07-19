<div class="m-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Full Name</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

    @foreach ($contacts as $contact)

        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $contact->fullName }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->message }}</td>
                <td style="width:150px">
                    <form class="d-inline-block" action="{{ route('admin.contact.delete',$contact->id)}}" id="delete" method="POST" onsubmit="return  confirm('Do you want to delete?')">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $contact->id }}">
                        <button class="btn btn-small btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>

    @endforeach
    </table>
</div>

<script>
    document.getElementById('contact').classList.add('active');
   
</script>
