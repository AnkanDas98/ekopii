<x-backend.layouts.master>
    <x-slot name="pageTitle">Update Password</x-slot>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">        
                            <h4 class="card-title mb-4">Update Password</h4>  
                            <form method="POST" action="{{route('admin.change.password', auth()->user()->id)}}"> 
                                @csrf
                                @method('PUT')           
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="old_password"  type="password" id="example-text-input">
                                        @error('old_password')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="new_password" type="password"  id="example-text-input">
                                        @error('new_password')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="confirm_password" type="password"  id="example-text-input">
                                    </div>
                                </div>
                                
                               
                                <button type="submit" class="btn btn-info waves-effect waves-light">Update Password</button>
                            </form>
                            <!-- end row -->
                            
                            <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        <div>
    <div>
 
</x-backend.layouts.master >