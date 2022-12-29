@if(session('success'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-success alert-dismissible fade show" style="position: fixed; top: 10px; right: 16px; z-index: 1030;"  role="alert">

                <strong>✔ {{ session('success') }}</strong>       
              </div>
@endif

@if(session('error'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-danger alert-dismissible fade show" style="position: fixed; top: 0; right: 16px; z-index: 1030;"  role="alert">
        <strong> {{ session('error') }}</strong>       
    </div>
@endif

@if(session('info'))
     <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-info alert-dismissible fade show" style="position: fixed; top: 0; right: 16px; z-index: 1030;"  role="alert">

        <strong> {{ session('info') }}</strong>       
    </div>
@endif