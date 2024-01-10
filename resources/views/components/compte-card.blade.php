<div class="col-sm-4">
    <div class="card m-3" style="width: 18rem;">
        <img src="https://picsum.photos/id/237/200/300" class="card-img-top" alt="Title">
        <div class="card-body">
            <h5 class="card-title">{{ $compte->name }}</h5>
            <p class="card-text">{{ Str::limit($compte->biography, 50) }}</p>
            <a href="{{ route('comptes.show', $compte->id) }}" class="stretched-link"></a>
        </div>
    </div>
</div>
