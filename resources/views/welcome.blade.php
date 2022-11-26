<x-guest-layout>

    <div class="account-content">
        {{-- <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a> --}}
        <div class="container">

        {{-- <div class="account-logo">
        <a href="/"><img src="{{ URL::asset('assets/img/f.png')}}" alt="Admin Dashboard"></a>
        </div> --}}

        <div class="account-box">
        <div class="account-wrapper">

        <div class="lock-user">
            @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <x-jet-validation-errors class="mb-4"  style="color:aliceblue"/>
        <img alt="" style="height:100px" src="{{ URL::asset('assets/img/f.png')}}" class="rounded-circle">
        <h4>Relevant Home Care Login</h4>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="form-group">
        <label>Email</label>
        <input id="email" class="form-control"  type="email" name="email" :value="old('email')" required autofocus>
        </div>
        <div class="form-group">
        <label>Password</label>
        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
        </div>
        <div class="form-group text-center">
        <button class="btn btn-primary account-btn" type="submit">{{ __('Log in') }}</button>
        </div>
        <div class="account-footer">
            @if (Route::has('password.request'))
        <p><a href="{{ route('password.request') }}">Forgot your password? </a></p>
        @endif
        </div>
        </form>

        </div>
        </div>
        </div>
        </div>

</x-guest-layout>





