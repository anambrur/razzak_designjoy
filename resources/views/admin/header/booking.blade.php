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
                    <form action="{{ route('booking') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Booking Url</label>
                                    <input type="text" name="title" value="" class="form-control"
                                        placeholder="Enter your firstname" id="firstNameinput">
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
            <!-- end page title -->

        </div>
        <!-- container-fluid -->
    </div>
@endsection
