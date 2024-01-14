@if ($errors->any())
{{-- 1ER METHODE --}}
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

<form method="POST" action="{{ route('comptes.update',$compte->id) }}" class="row g-3 p-2" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-md-12 my-2">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" name="image" type="file" id="formFile">
    </div>
    <div class="col-md-12">
        <label for="name" class="form-label">New Full Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$compte->name) }}">
    </div>

    <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" value="{{ old('email',$compte->email) }}">
    </div>

    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">New Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password">
    </div>

    <div class="col-md-4">
       <label for="password_confirmation" class="form-label">Confirm New Password</label>
       <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
   </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Update Biographie</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="biography" >{{ old('biography',$compte->biography) }}</textarea>
    </div>
    <div class="col-12 my-2 d-grid">
        <button class="btn btn-warning btn-block text-white" type="submit">{{ __('Update') }}</button>
    </div>
</form>
