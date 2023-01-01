<x-backend.layouts.master>
    <x-slot name="pageTitle">Config About Page</x-slot>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Config About Page</h4>
                            <form method="POST" action="{{ route('store.setting') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short
                                        Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="short_description" value="{{ old('short_description') }}" type="text"
                                            id="example-text-input"></textarea>
                                        @error('short_description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Who we are</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="who_we_are" value="{{ old('who_we_are') }}" type="text" id="example-text-input"></textarea>
                                        @error('who_we_are')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Why Us</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="who_us" value="{{ old('who_us') }}" type="text" id="example-text-input"></textarea>
                                        @error('who_us')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Company
                                        Growth</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="company_growth" value="{{ old('company_growth') }}" type="text"
                                            id="example-text-input"></textarea>
                                        @error('company_growth')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Our Mission</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="our_mission" value="{{ old('our_mission') }}" type="text"
                                            id="example-text-input"></textarea>
                                        @error('our_mission')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Our Vision</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="our_vision" value="{{ old('our_vision') }}" type="text"
                                            id="example-text-input"></textarea>
                                        @error('our_vision')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Gallery
                                        Images</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="image" name="image[]" type="file"
                                            id="example-text-input" multiple>
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Features</label>
                                    <div class="col-sm-10">
                                        <div class="w-100 d-flex flex-column border" style="padding: 10px">
                                            <div id="featureBox" class="w-100 d-flex flex-column ">
                                                <textarea class="w-50 form-control" type="text" name="addMoreInputFields[0][feature]" id=""
                                                    style="margin-bottom: 12px" placeholder="Add Feature"></textarea>
                                            </div>
                                            <button id="featureBtn" class="btn btn-info" style="width: 15%">Add
                                                more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="avatar-lg" id="showImage"
                                            src="{{ asset('storage/images/no_profile.png') }}" alt="Card image cap">
                                    </div>
                                </div> --}}
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
