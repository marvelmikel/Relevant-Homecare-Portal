
<x-guest-layout>

    <div class="account-content">
        {{-- <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a> --}}
        <div class="container">

        <div class="account-logo">
        <a href="/"><img src="{{ URL::asset('assets/img/logo.png')}}" alt="Admin Dashboard"></a>
        </div>
        <div class="mb-4 text-sm text-gray-600" style="color:#fff">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <div class="account-box">
        <div class="account-wrapper">

        <div class="lock-user">
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <x-jet-validation-errors class="mb-4" />
        <img alt="" src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" class="rounded-circle">
        <h4>Relevant Home Care Forgot Password</h4>
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
        <div class="form-group">
        <label>Email</label>
        <input id="email" class="form-control"  type="email" name="email" :value="old('email')" required autofocus/>
        </div>

        <div class="form-group text-center">
        <button class="btn btn-primary account-btn" type="submit"> {{ __('Email Password Reset Link') }}</button>
        </div>
        </form>

        </div>
        </div>
        </div>
        </div>

</x-guest-layout>





