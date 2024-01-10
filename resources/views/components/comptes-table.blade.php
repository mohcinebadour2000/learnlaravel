@props(['comptes'])
<div class="p-3 ">
    <table class="table border border-dark-subtle table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Biography</th>
        </tr>

     @foreach ($comptes as $compte)   
        <tr>
            <td>{{ $compte->id }}</td>
            <td>{{ $compte->name }}</td>
            <td>{{ $compte->email }}</td>
            <td>{{ Str::limit($compte->biography,50) }}</td>
        </tr>
    @endforeach
    </table>
   
</div>