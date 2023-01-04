<x-backend.layouts.auth>
    <x-slot name='pageTitle'>Login</x-slot>
    <x-slot name='header'>Sign In</x-slot>
    <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="email" required="" name="email" value="{{ old('email') }}"
                    placeholder="Email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="password" required="" name="password" placeholder="Password">
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="remember_me">
                    <label class="form-label ms-1" for="remember_me">{{ __('Remember me') }}</label>
                </div>
            </div>
        </div>

        <div class="form-group mb-3 text-center row mt-3 pt-1">
            <div class="col-12">
                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>

        <div class="form-group mb-0 row mt-2">
            <div class="col-sm-7 mt-3">
                <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your
                    password?</a>
            </div>
        </div>
    </form>
</x-backend.layouts.auth>
