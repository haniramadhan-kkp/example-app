@extends('admin.layouts.app')

@section('content')

    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Pengaturan Website</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#0">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#0">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Form Elements
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <!-- ========== form-elements-wrapper start ========== -->
    <div class="form-elements-wrapper">
        <div class="row">
            <div class="col-lg-6">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <h6 class="mb-25">Homepage</h6>
                    <div class="input-style-1">
                        <input type="text" placeholder="Judul Website"/>
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                        <input type="text" placeholder="Judul Tag Utama"/>
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                        <label>Deskripsi Tag Utama</label>
                        <textarea placeholder="Message" rows="5"></textarea>
                    </div>
                    {{-- end input --}}
                    <div class="input-style-1">
                        <input type="text" placeholder="Judul Tag About"/>
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                        <label>Deskripsi Tag About</label>
                        <textarea placeholder="Message" rows="5"></textarea>
                    </div>
                    {{-- end input --}}
                </div>
                <!-- end card -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- ========== form-elements-wrapper end ========== -->


@endsection
