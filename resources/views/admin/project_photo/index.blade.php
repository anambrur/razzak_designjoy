@extends('admin.layout')
@section('title')
    Price | section
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

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        <script>
                            if (typeof jQuery == 'undefined') {
                                document.write('<script src="https://code.jquery.com/jquery-3.6.0.min.js"><\/script>');
                            }
                        </script>
                        <script>
                            $(document).ready(function() {
                                setTimeout(function() {
                                    $('.alert').fadeOut('slow');
                                }, 3000);
                            });
                        </script>
                    @endif

                    <div class="card">
                        <form action="{{ route('project_photo.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="card">
                                <div class="card-header text-white">
                                    <h4>Project Image</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="price">Photo</label>
                                            <input type="file" name="image" class="form-control" id="price">
                                            @error('image')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <div class="mt-4">
                                                <button type="submit" class="btn text-white bg-danger">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="card">
                            <div class="card-body">
                                <table class="table table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projectPhotos as $photo)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/images/' . $photo->image) }}" alt=""
                                                        style="width: 200px">
                                                </td>
                                                <td>
                                                    {{-- <a href="{{ route('price.edit', $photo->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('price.delete', $photo->id) }}"
                                                        class="btn btn-danger">Delete</a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end page title -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection
