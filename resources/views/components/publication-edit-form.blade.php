@if ($errors->any())
    <x-alert type="danger">
        <h6>Errors:</h6>
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </x-alert>
@endif

<h3>Edit Publication</h3>

<form method="POST" action="{{ route('publications.update', $publication->id) }}" class="row g-3 p-2"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- <div class="d-flex flex-start">
        <img class="rounded-circle shadow-1-strong me-3"
            src="{{ asset('storage/' . $publication->image) }}" alt="avatar" width="100" height="100" />
    </div> --}}

    <div class="col-md-12">

        <span class="badge bg-success float-end p-2 ">{{ __('Nom de proprietaire') }}</span>
    </div>

    <div class="col-md-12">
        <label for="titre" class="form-label">New Titre</label>
        <input type="text" class="form-control" id="titre" name="titre"
            value="{{ old('titre', $publication->titre) }}">
        @error('titre')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="exampleFormControlTextarea1" class="form-label">New Publication</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body">{{ old('body', $publication->body) }}</textarea>
        @error('body')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-12 my-2">
        <label for="formFile" class="form-label">Select Image</label>
        <input class="form-control" name="image" type="file" id="formFile">
    </div>
    <div class="col-12 my-2 d-grid">
        <button class="btn btn-warning btn-block text-white" type="submit">Update</button>
    </div>
</form>
