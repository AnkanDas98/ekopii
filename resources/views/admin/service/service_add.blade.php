<x-backend.layouts.master>
    <x-slot name="pageTitle">Add Slider</x-slot>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Slider</h4>
                            <form method="POST" action="{{ route('store.slider') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Slider Short
                                        Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="slider_short_title"
                                            value="{{ old('slider_short_title') }}" type="text"
                                            id="example-text-input">
                                        @error('slider_short_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Slider
                                        Long Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="slider_long_title"
                                            value="{{ old('slider_long_title') }}" type="text"
                                            id="example-text-input">
                                        @error('slider_long_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Slider
                                        Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="image" name="slider_image" type="file"
                                            id="example-text-input">
                                        @error('slider_image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="avatar-lg" id="showImage"
                                            src="{{ asset('storage/images/no_profile.png') }}" alt="Card image cap">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Add</button>
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
