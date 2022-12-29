<x-backend.layouts.auth>
    <x-slot name='pageTitle'>Forget</x-slot> 
    <x-slot name='header'>Recover Password | Laravel Portfolio</x-slot> 
    <form class="form-horizontal mt-3" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="alert alert-info alert-dismissible fade show" role="alert">
        Enter Your <strong>E-mail</strong> and instructions will be sent to you!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="form-group mb-3">
            <div class="col-xs-12">
                <input class="form-control" type="email" required="" name="email" placeholder="Email" value="{{old('email')}}">
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="form-group pb-2 text-center row mt-3">
            <div class="col-12">
                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Send Email</button>
            </div>
        </div>
    </form>
 </x-backend.layouts.auth>