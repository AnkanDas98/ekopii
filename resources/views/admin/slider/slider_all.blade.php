<x-backend.layouts.master>
    <x-slot name="pageTitle">Slider Data</x-slot>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Slider Tables</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Slider Tables</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Sliders</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Slider Short Title</th>
                                        <th>Slider Long Title</th>
                                        <th>Slider Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($sliders as $key => $slider)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $slider->slider_short_title }}</td>
                                            <td>{{ $slider->slider_long_title }}</td>
                                            <td><img src="{{ asset('storage/' . $slider->slider_image) }}"
                                                    alt="{{ $slider->slider_short_title }}" height="60px"
                                                    width="60px" srcset=""></td>
                                            <td>{{ $slider->status ? 'Active' : 'Inactive' }}
                                            </td>
                                            <td>
                                                <a href="{{ route('edit.slider', $slider->id) }}"
                                                    class="btn btn-info mr-2" title="Edit Data"><i
                                                        class="fa fa-edit"></i></a>
                                                <form id="deleteForm" action="{{ route('delete.slider', $slider->id) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger deleteBtn"
                                                        title="Delete Data"><i class="fa fa-trash"></i></button>
                                                </form>

                                                <form action="{{ route('update.slider.status') }}" method="POST"
                                                    class="d-inline-block mr-2">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="slider_id" value="{{ $slider->id }}">
                                                    <button type="submit"
                                                        class="btn {{ $slider->status ? 'btn-danger' : 'btn-success' }}"
                                                        title="{{ $slider->status ? 'Inactive Now' : 'Actice Now' }}"><i
                                                            class="fa {{ $slider->status ? 'fa-arrow-down' : 'fa-arrow-up' }}"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</x-backend.layouts.master>
