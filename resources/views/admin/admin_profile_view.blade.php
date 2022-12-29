<x-backend.layouts.master>
    <x-slot name="pageTitle">Admin Profile</x-slot>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="w-100 d-flex mt-4" style="justify-content: center">
                        <img class="rounded-circle avatar-xl"   src="{{$adminData->image ? asset('storage/'.$adminData->image) : asset('storage/images/no_profile.png')}}" alt="{{$adminData->image ? $adminData->name : 'Image by <a href="https://pixabay.com/users/wanderercreative-855399/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=973460">Stephanie Edwards</a> from <a href="https://pixabay.com//?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=973460">Pixabay</a>'}}">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{$adminData->name}}</h4>
                            <hr>
                            <h4 class="card-title">User Email: {{$adminData->email}}</h4>
                            <hr>
                            <h4 class="card-title">User Username: {{$adminData->username}}</h4>
                            <hr>
                            <a href="{{route('admin.profile.edit', $adminData->id)}}" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                        </div>
                    </div>
                </div>

                

            </div>
        <div>
    <div>
    
</x-backend.layouts.master>