<x-master title="Comptes">
    {{-- <a class="btn btn-primary mt-2" href="{{ route('comptes.create') }}" role="button">Ajouter un profil</a> --}}

    <div class="row">
        @foreach ($comptes as $compte)
            <x-compte-card :compte="$compte" />
        @endforeach
    </div>

{{ $comptes->links() }}






    {{-- <x-comptes-table :comptes="$comptes" /> --}}

    {{-- <x-alert type="warning">
        <strong>Les comptes</strong>
    </x-alert>
    <table class="table border border-dark-subtle table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Biography</th>
            <th>Action</th>
        </tr>
        @foreach ($comptes as $compte)
            <tr>
                <td>{{ $compte->id }}</td>
                <td>{{ $compte->name }}</td>
                <td>{{ $compte->email }}</td>
                <td>{{ Str::limit($compte->biography, 50) }}</td>
                <td><a class="btn btn-primary" href="{{ route('comptes.show',$compte->id) }}" role="button">afficher
                        plus</a></td>
            </tr>
        @endforeach
    </table> --}}

</x-master>
