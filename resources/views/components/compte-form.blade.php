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
 <form method="POST" action="{{ route('comptes.store') }}" class="row g-3 p-2">
     @csrf
     <div class="col-md-12">
         <label for="name" class="form-label">Full Name</label>
         <input type="text" class="form-control" id="name" name="name">
         {{-- @error('name')
             <div class="text-danger">
                 {{ $message }}
             </div>
         @enderror --}}
     </div>

     <div class="col-md-6">
         <label for="inputEmail4" class="form-label">Email</label>
         <input type="email" class="form-control" id="inputEmail4" name="email">
         {{-- @error('email')
             <div class="text-danger">
                 {{ $message }}
             </div>
         @enderror --}}
     </div>
     <div class="col-md-6">
         <label for="inputPassword4" class="form-label">Password</label>
         <input type="password" class="form-control" id="inputPassword4" name="password">
         {{-- @error('password')
             <div class="text-danger">
                 {{ $message }}
             </div>
         @enderror --}}
     </div>

     <div class="mb-3">
         <label for="exampleFormControlTextarea1" class="form-label">Biographie</label>
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="biography"></textarea>
         {{-- @error('biography')
             <div class="text-danger">
                 {{ $message }}
             </div>
         @enderror --}}
     </div>
     <div class="col-12 my-2 d-grid">
         <button class="btn btn-primary btn-block" type="submit">Ajouter</button>
     </div>
 </form>
