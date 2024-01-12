<div class="container w-75 my-2 bg-light p-5">
    <h3>Authentication</h3>
    
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

    <form method="POST" action="{{ route('signin') }}">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
            <input type="login" id="form2Example1" class="form-control" name="login" value="{{ old('login') }}" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" id="form2Example2" class="form-control" name="password" />
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
        </div>
        <!-- Submit button -->


    </form>
</div>
