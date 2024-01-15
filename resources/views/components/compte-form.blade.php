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

     {{-- 2EME METHODE --}}
     {{-- @foreach ($errors->all() as $error)
         <x-alert type="danger">
             {{ $error }}
         </x-alert>
     @endforeach --}}
 @endif
 {{-- @once
        @isset($errors)
            erroes here
        @endisset
    @endonce --}}
 <form method="POST" action="{{ route('comptes.store') }}" class="row g-3 p-2" enctype="multipart/form-data">
     @csrf
     <div class="col-md-12">
         <label for="name" class="form-label">Full Name</label>
         <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
         {{-- @error('name')
             <div class="text-danger">
                 {{ $message }}
             </div>
         @enderror --}}
     </div>

     <div class="col-md-4">
         <label for="inputEmail4" class="form-label">Email</label>
         <input type="email" class="form-control" id="inputEmail4" name="email" value="{{ old('email') }}">
         {{-- @error('email')
             <div class="text-danger">
                 {{ $message }}
             </div>
         @enderror --}}
     </div>
     <div class="col-md-4">
         <label for="inputPassword4" class="form-label">Password</label>
         <input type="password" class="form-control" id="inputPassword4" name="password">
         {{-- @error('password')
             <div class="text-danger">
                 {{ $message }}
             </div>
         @enderror --}}
     </div>

     <div class="col-md-4">
         <label for="password_confirmation" class="form-label">Confirm Password</label>
         <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
         {{-- @error('password')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror --}}
     </div>

     <div class="col-md-12">
         <label for="exampleFormControlTextarea1" class="form-label">Biographie</label>
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="biography">{{ old('biography') }}</textarea>
         {{-- @error('biography')
             <div class="text-danger">
                 {{ $message }}
             </div>
         @enderror --}}
     </div>
     <div class="col-md-12 my-2">
         <label for="formFile" class="form-label">Image</label>
         <input class="form-control" name="image" type="file" id="formFile">
     </div>
     <div class="col-12 my-2 d-grid">
         <button class="btn btn-primary btn-block" type="submit">Ajouter</button>
     </div>
 </form>

{{-- ********************************************************** --}}

 <div class="container rounded bg-light mt-5 mb-5">
    <div class="row">
        <div class="col-md-12 border-right ">
            <div class="d-flex flex-column align-items-center text-center p-3 py-0">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <div class="col-md-4">
                    <input type="file" class="form-control" value="">
                </div>
            </div>
        </div>
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Full Name</label><input type="text" class="form-control" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" value=""></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control"  value=""></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control"  value=""></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" value=""></div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Country</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="col-md-6"><label class="labels">State/Region</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
