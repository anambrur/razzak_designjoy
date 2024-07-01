@extends('admin.layout')
@section('title')
    Header | section
@endsection


@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Starter</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>
                        </div>

                    </div>
                    {{-- form --}}
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('header.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Logo Upload</label>
                                    <input class="form-control" name="photo" type="file" id="formFile">
                                    <div class="m-3">
                                        <img src="{{ Storage::url($header->logo) }}" width="200px" height="50px" alt="Header Logo">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="firstNameinput" class="form-label">Title</label>
                                            <input type="text" name="title" value="{{ $header->title }}"
                                                class="form-control" placeholder="Enter your firstname" id="firstNameinput">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="lastNameinput" class="form-label"> Title Sencond</label>
                                            <input type="text" name="secondary_title"
                                                value="{{ $header->secondary_title }}" class="form-control"
                                                placeholder="Enter your lastname" id="lastNameinput">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end page title -->

        </div>
        <!-- container-fluid -->
    </div>
@endsection
