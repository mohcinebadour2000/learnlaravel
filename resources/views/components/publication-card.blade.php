<div class="card-body p-4">
    <div class="d-flex flex-start">
        <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('storage/' . $publication->image) }}" alt="avatar"
            width="60" height="60" />
        <div>
            <h6 class="fw-bold mb-1">{{ $publication->titre }}</h6>
{{--
            {{ auth()->user()->id }}
            {{ $publication->profile_id }} --}}

            @auth
                @if (auth()->user()->id === $publication->compte_id)
                    <form method="POST" action="{{ route('publications.destroy', $publication->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm float-end mx-1" type="submit"
                            onclick="return confirm('Are you sure you want to delete this publication?')"><i
                                class="fas fa-trash"></i></button>
                    </form>

                    <form method="GET" action="{{ route('publications.edit', $publication->id) }}">
                        @csrf
                        <button class="btn btn-warning btn-sm float-end mx-1 text-white" type="submit"><i
                                class="fas fa-pencil-alt"></i></button>
                    </form>

                    @endif
                    @endauth
                    <form method="GET" action="">
                        @csrf
                        <button class="btn btn-success btn-sm float-end mx-1 text-white" type="submit"><i
                                class="fas fa-comments"></i></button>
                    </form>



            <div class="d-flex align-items-center mb-3">
                <p class="mb-0">
                    <small>{{ $publication->created_at->format('Y-m-d \a\t H:i:s') }}</small>
                    <span class="badge rounded-pill bg-light">
                        <a href="{{ route('comptes.show',$publication->compte_id) }}" class="text-dark" style="text-decoration: none;">
                            @if (Auth::id() === $publication->compte_id)
                            {{ __('creator') }}
                            @else
                            {{ __('publisher') }}
                            @endif
                        </a>
                    </span>
                </p>
            </div>

            <p class="mb-0">
                {{ $publication->body }}
            </p>

        </div>
    </div>
</div>
<hr class="my-0" />

{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ __('Confirmation de suppression') }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{ __('Are you sure you want to delete this publication?') }}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Confirmer</button>
        </div>
      </div>
    </div>
  </div> --}}
