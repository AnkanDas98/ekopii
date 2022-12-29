<x-backend.layouts.auth>
   <x-slot name='pageTitle'>Register</x-slot> 
   <x-slot name='header'>Register</x-slot> 
    <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="text" required="" name="name" value="{{old('name')}}" placeholder="Name">
                @error('name')
                    <p class="text-danger">{{$message}}</p>      
                @enderror
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="text" required="" name="username" value="{{old('username')}}" placeholder="Username">
                @error('username')
                <p class="text-danger">{{$message}}</p>      
            @enderror
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="email" required="" name="email" value="{{old('email')}}" placeholder="Email">
                @error('email')
                <p class="text-danger">{{$message}}</p>      
            @enderror
            </div>
        </div>


        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="password" required="" name="password" placeholder="Password">
                @error('password')
                <p class="text-danger">{{$message}}</p>      
            @enderror
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="password" required="" name="password_confirmation" placeholder="Confirm Password">
                @error('password_confirmation')
                <p class="text-danger">{{$message}}</p>      
            @enderror
            </div>
        </div>

        

        <div class="form-group text-center row mt-3 pt-1">
            <div class="col-12">
                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
            </div>
        </div>

        <div class="form-group mt-2 mb-0 row">
            <div class="col-12 mt-3 text-center">
                <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
            </div>
        </div>
    </form>
</x-backend.layouts.auth>