<div class="col-sm-4">
    <div class="card m-3" style="width: 18rem;">
        <img src="https://picsum.photos/seed/picsum/200/300" class="card-img-top" alt="Title" style="height: 200px">
        <div class="card-body">
            <h5 class="card-title">{{ $compte->name }}</h5>
            <p class="card-text">{{ Str::limit($compte->biography, 50) }}</p>
            <a href="{{ route('comptes.show', $compte->id) }}" class="stretched-link"></a>
            {{-- <a href="{{ route('comptes.show', $compte->id) }}" ></a> --}}

            {{--
            @auth
                <div class="dropdown">
                <button class="btn btn-warning btn-sm dropdown-toggle text-white" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __("Actions") }}
                    {{ substr(auth()->user()->name, 0, 1) . '. ' . explode(' ', auth()->user()->name)[1] }}
                    {{ ucfirst(substr(auth()->user()->name, 0, 1)) . '.' . ucfirst(explode(' ', auth()->user()->name)[1]) }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('comptes.show', $compte->id) }}"> {{ __("Show") }} </a>
                    <a class="dropdown-item" href="{{ route('comptes.update') }}"> {{ __("Update") }} </a>
                    <a class="dropdown-item" href="{{ route('comptes.delete') }}"> {{ __("Delete") }} </a>
                </div>
            </div>
            @endauth --}}

        </div>

        @auth
            <div class="card-foot border-top px-2 py-1 bg-light" style="z-index: 9;">
                @if (auth()->user()->email === $compte->email)
                    <span class="badge bg-success float-end p-2 ">{{ __("Admin") }}</span>
                @else
                    <form method="POST" action="{{ route('comptes.destroy', $compte->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm float-end" type="submit" onclick="return confirm('Are you sure you want to delete this user?')">{{ __("delete") }}</button>
                    </form>

                    <form method="GET" action="{{ route('comptes.edit', $compte->id) }}">
                        @csrf
                        <button class="btn btn-warning btn-sm float-end mx-1 text-white" type="submit">{{ __("update") }}</button>
                    </form>

                @endif
            </div>
        @endauth

    </div>
</div>
