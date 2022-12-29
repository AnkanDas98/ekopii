<x-backend.layouts.master>
    <x-slot name="pageTitle">Admin Profile</x-slot>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Profile</h4>
                            <form method="POST" action="{{ route('admin.profile.update', $adminData->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name"
                                            value="{{ old('name', $adminData->name) }}" type="text"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="username"
                                            value="{{ old('username', $adminData->username) }}" type="text"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email"
                                            value={{ old('email', $adminData->email) }} type="email"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile
                                        Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="image" name="profile_image" type="file"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="avatar-lg" id="showImage"
                                            src="{{ $adminData->image ? asset('storage/' . $adminData->image) : asset('storage/images/no_profile.png') }}"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Update
                                    profile</button>
                            </form>
                            <!-- end row -->

                            <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <div>
                <div>

</x-backend.layouts.master>
