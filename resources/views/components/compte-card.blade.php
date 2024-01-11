<div class="col-sm-4">
    <div class="card m-3" style="width: 18rem;">
        <img src="https://picsum.photos/seed/picsum/200/300" class="card-img-top" alt="Title" style="height: 200px">
        <div class="card-body">
            <h5 class="card-title">{{ $compte->name }}</h5>
            <p class="card-text">{{ Str::limit($compte->biography, 50) }}</p>
            <a href="{{ route('comptes.show', $compte->id) }}" class="stretched-link"></a>
        </div>
    </div>
</div>
