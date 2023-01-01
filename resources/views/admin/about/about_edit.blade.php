@php
    $feturelength = count($aboutFeatures);
@endphp

<x-backend.layouts.master>
    <x-slot name="pageTitle">Config About Page</x-slot>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Config About Page</h4>

                            <form method="POST" action="{{ route('about.update', $about->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short
                                        Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="short_description" value="" type="text" id="example-text-input">{{ old('short_description', $about->short_description) }}</textarea>
                                        @error('short_description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Who we are</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="who_we_are" value="" type="text" id="example-text-input">{{ old('short_description', $about->who_we_are) }}</textarea>
                                        @error('who_we_are')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Why Us</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="who_us" value="" type="text" id="example-text-input">{{ old('who_us', $about->who_us) }}</textarea>
                                        @error('who_us')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Company
                                        Growth</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="company_growth" value="" type="text" id="example-text-input">{{ old('company_growth', $about->company_growth) }}</textarea>
                                        @error('company_growth')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Our Mission</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="our_mission" value="" type="text" id="example-text-input">{{ old('our_mission', $about->owr_mission) }}</textarea>
                                        @error('our_mission')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Our Vision</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="our_vision" value="" type="text" id="example-text-input">{{ old('our_mission', $about->owr_vision) }}</textarea>
                                        @error('our_vision')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Features</label>
                                    <div class="col-sm-10">
                                        <div class="w-100 d-flex flex-column border" style="padding: 10px">
                                            <div id="featureBox" class="w-100 d-flex flex-column ">
                                                @foreach ($aboutFeatures as $key => $feature)
                                                    <textarea class="w-50 form-control" type="text" name="addMoreInputFields[{{ $key }}][feature]"
                                                        id="" style="margin-bottom: 12px" placeholder="Add Feature">{{ $feature->feature }}</textarea>
                                                @endforeach
                                            </div>
                                            <button id="featureBtn" data-feature-length="{{ $feturelength - 1 }}"
                                                class="btn btn-info" style="width: 15%">Add
                                                more</button>
                                        </div>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info waves-effect waves-light">Update
                                    About</button>
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
