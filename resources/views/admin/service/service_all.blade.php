<x-backend.layouts.master>
    <x-slot name="pageTitle">All Services</x-slot>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Service Tables</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">All Service</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Services</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Service Title</th>
                                        <th>Service Short Description</th>
                                        <th>Service Landing page Logo</th>
                                        <th>Service Image</th>
                                        <th>Service Feature Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($services as $key => $service)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $service->service_title }}</td>
                                            <td>{{ substr($service->landing_page_short_description, 0, 40) . '...' }}
                                            </td>
                                            <td><img src="{{ asset('storage/' . $service->landing_page_logo) }}"
                                                    alt="{{ $service->service_titlee }}" height="60px" width="60px"
                                                    srcset=""></td>
                                            <td><img src="{{ asset('storage/' . $service->service_image) }}"
                                                    alt="{{ $service->service_title }}" height="60px" width="60px"
                                                    srcset="">
                                            </td>

                                            <td><img src="{{ asset('storage/' . $service->service_feature_image) }}"
                                                    alt="{{ $service->service_title }}" height="60px" width="60px"
                                                    srcset="">
                                            </td>
                                            <td>
                                                <a href="{{ route('edit.service', $service->id) }}"
                                                    class="btn btn-info mr-2" title="Edit Data"><i
                                                        class="fa fa-edit"></i></a>
                                                <form id="deleteForm"
                                                    action="{{ route('delete.service', $service->id) }}" method="POST"
                                                    class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger deleteBtn"
                                                        title="Delete Data"><i class="fa fa-trash"></i></button>
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
