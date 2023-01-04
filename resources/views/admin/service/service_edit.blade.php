@php
    $feturelength = count($features);
@endphp

<x-backend.layouts.master>
    <x-slot name="pageTitle">Edit Service</x-slot>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Service</h4>
                            <form method="POST" action="{{ route('update.service', $service->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Service
                                        Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="service_title"
                                            value="{{ old('service_title', $service->service_title) }}" type="text"
                                            id="example-text-input">
                                        @error('service_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Service Short
                                        Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="landing_page_short_description" value="" type="text"
                                            id="example-text-input">{{ old('landing_page_short_description', $service->landing_page_short_description) }}</textarea>
                                        @error('landing_page_short_description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Service Landing page
                                        Logo</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="image" name="landing_page_logo"
                                            type="file" id="example-text-input">
                                        @error('landing_page_logo')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Service
                                        Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="image" name="service_image" type="file"
                                            id="example-text-input">
                                        @error('service_image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Service Feature
                                        Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="image" name="service_feature_image"
                                            type="file" id="example-text-input">
                                        @error('service_feature_image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Features</label>
                                    <div class="col-sm-10">
                                        <div class="w-100 d-flex flex-column border" style="padding: 10px">
                                            <div id="serviceFeatureBox" class="w-100 d-flex flex-column ">
                                                @foreach ($features as $key => $feature)
                                                    <textarea class="w-50 form-control" type="text" name="addMoreInputFields[{{ $key }}][services]"
                                                        id="" style="margin-bottom: 12px" placeholder="Add Feature">{{ $feature->features }}</textarea>
                                                @endforeach
                                            </div>
                                            <button id="serviceFeatureBtn"
                                                data-feature-length="{{ $feturelength - 1 }}" class="btn btn-info"
                                                style="width: 15%">Add
                                                more</button>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
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
