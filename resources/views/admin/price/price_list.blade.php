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
                    @endif

                    <div class="card">
                        <form action="{{ route('price.store') }}" method="post">
                            @csrf
                            <div class="card p-3">
                                <div class="row">
                                    @foreach ($prices as $price)
                                    @endforeach

                                    <input type="hidden" name="price_id" value="{{ $price->id }}">

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="web_basic" class="form-label">Web Basic Price</label>
                                            <input type="text" name="web_basic" value="{{ $price->web_basic }}"
                                                class="form-control @error('web_basic') is-invalid @enderror"
                                                placeholder="Enter Web Basic Price" id="web_basic">
                                            @error('web_basic')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="web_standard" class="form-label">Web Standard Price</label>
                                            <input type="text" name="web_standard" value="{{ $price->web_standard }}"
                                                class="form-control @error('web_standard') is-invalid @enderror"
                                                placeholder="Enter Web Standard Price" id="web_standard">
                                            @error('web_standard')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="web_pro" class="form-label">Web Pro Price</label>
                                            <input type="text" name="web_pro" value="{{ $price->web_pro }}"
                                                class="form-control @error('web_pro') is-invalid @enderror"
                                                placeholder="Enter Web Pro Price" id="web_pro">
                                            @error('web_pro')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div><!--end col-->

                                </div><!--end row-->
                            </div>
                            <div class="card p-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="logo_basic" class="form-label">Logo Basic Price</label>
                                            <input type="text" name="logo_basic" value="{{ $price->logo_basic }}"
                                                class="form-control @error('logo_basic') is-invalid @enderror"
                                                placeholder="Enter Logo Basic Price" id="logo_basic">
                                            @error('logo_basic')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="logo_standard" class="form-label">Logo Standard Price</label>
                                            <input type="text" name="logo_standard" value="{{ $price->logo_standard }}"
                                                class="form-control @error('logo_standard') is-invalid @enderror"
                                                placeholder="Enter Logo Standard Price" id="logo_standard">
                                            @error('logo_standard')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="logo_pro" class="form-label">Logo Pro Price</label>
                                            <input type="text" name="logo_pro" value="{{ $price->logo_pro }}"
                                                class="form-control @error('logo_pro') is-invalid @enderror"
                                                placeholder="Enter Logo Pro Price" id="logo_pro">
                                            @error('logo_pro')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div><!--end col-->

                                </div><!--end row-->
                            </div>
                            <div class="card p-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="marketing_basic" class="form-label">Marketing Basic Price</label>
                                            <input type="text" name="marketing_basic"
                                                value="{{ $price->marketing_basic }}"
                                                class="form-control @error('marketing_basic') is-invalid @enderror"
                                                placeholder="Enter Marketing Basic Price" id="marketing_basic">
                                            @error('marketing_basic')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="marketing_standard" class="form-label">Marketing Standard
                                                Price</label>
                                            <input type="text" name="marketing_standard"
                                                value="{{ $price->marketing_standard }}"
                                                class="form-control @error('marketing_standard') is-invalid @enderror"
                                                placeholder="Enter Marketing Standard Price" id="marketing_standard">
                                            @error('marketing_standard')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="marketing_pro" class="form-label">Marketing Pro Price</label>
                                            <input type="text" name="marketing_pro"
                                                value="{{ $price->marketing_pro }}"
                                                class="form-control @error('marketing_pro') is-invalid @enderror"
                                                placeholder="Enter Marketing Pro Price" id="marketing_pro">
                                            @error('marketing_pro')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div><!--end col-->

                                </div><!--end row-->
                            </div>

                            <div class="card-body">
                                <div class="row p-2">
                                    <div class="col-md-12 text-center bg-secondary">
                                        <button type="submit" class="btn text-white">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
            <!-- end page title -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection
