@props(['animals'])
<div>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Type</th>
        </tr>
     @foreach ($animals as $animal)   
        <tr>
            <td>{{ $animal['id'] }}</td>
            <td>{{ $animal['type'] }}</td>
        </tr>
    @endforeach
    </table>
</div>