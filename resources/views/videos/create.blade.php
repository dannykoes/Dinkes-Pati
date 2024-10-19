@extends('layouts.app')

@section('title', 'Tambah Video Baru')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Video Baru</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Videos</a></div>
                    <div class="breadcrumb-item">Tambah</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Tambah Video Baru</h2>

                <div class="card">
                    <form method="POST" action="{{ route('videos.store') }}">
                        @csrf
                        <div class="card-header">
                            <h4>Form Tambah Video</h4>
                        </div>
                        <div class="card-body">
                            <!-- Judul Video -->
                            <div class="form-group">
                                <label for="title">Judul Video</label>
                                <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title') }}" required autofocus>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- YouTube URL -->
                            <div class="form-group">
                                <label for="youtube_url">YouTube URL</label>
                                <input id="youtube_url" class="form-control @error('youtube_url') is-invalid @enderror" type="text" name="youtube_url" value="{{ old('youtube_url') }}" required>
                                @error('youtube_url')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Simpan Video</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
@endpush
