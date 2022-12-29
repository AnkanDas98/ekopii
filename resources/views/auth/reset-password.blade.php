<x-backend.layouts.auth>
    <x-slot name='pageTitle'>Reset Password</x-slot>
    <x-slot name='header'>Reset Password</x-slot>
    <form class="form-horizontal mt-3" method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="email" required="" name="email" value=""
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
                <input class="form-control" type="password" required="" name="password_confirmation"
                    placeholder="Confirm Password">
            </div>
        </div>


        <div class="form-group mb-3 text-center row mt-3 pt-1">
            <div class="col-12">
                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>
    </form>
</x-backend.layouts.auth>
