<x-master title="Show">

<table class="table border border-dark-subtle table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Biography</th>
        {{-- <th>Action</th> --}}
    </tr>

        <tr>
            <td>{{ $compte->id }}</td>
            <td>{{ $compte->name }}</td>
            <td>{{ $compte->email }}</td>
            <td>{{$compte->biography}}</td>

        </tr>

</table>

</x-master>
