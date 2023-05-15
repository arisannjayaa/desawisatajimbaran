@extends('layouts.panel')
@section('title', 'Tambah Berita')
@section('css')
    <link rel="stylesheet" href="{{ asset('') }}assets/extensions/filepond/filepond.css">
    <link rel="stylesheet"
        href="{{ asset('') }}assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/extensions/toastify-js/src/toastify.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/extensions/quill/quill.snow.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/extensions/quill/quill.bubble.css">
@endsection
@section('content')
    <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" placeholder="" name="judul">
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <input type="file" name="deskripsi">
                                    <div id="editor" style="min-height: 200px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-grup">
                            <label for="deskripsi" class="form-label">Gambar</label>
                            <input type="file" class="image-preview-filepond" name="gambar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Unggah berita</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Unggah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('js')
    <script
        src="{{ asset('') }}assets/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js">
    </script>
    <script
        src="{{ asset('') }}assets/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js">
    </script>
    <script src="{{ asset('') }}assets/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js">
    </script>
    <script
        src="{{ asset('') }}assets/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js">
    </script>
    <script src="{{ asset('') }}assets/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js">
    </script>
    <script src="{{ asset('') }}assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js">
    </script>
    <script src="{{ asset('') }}assets/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js">
    </script>
    <script src="{{ asset('') }}assets/extensions/filepond/filepond.js"></script>
    <script src="{{ asset('') }}assets/extensions/toastify-js/src/toastify.js"></script>
    <script src="{{ asset('') }}assets/static/js/pages/filepond.js"></script>
    <script src="{{ asset('') }}assets/extensions/quill/quill.min.js"></script>
    <script src="{{ asset('') }}assets/static/js/pages/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.querySelector("input[name='deskripsi']").value = quill.root.innerHTML;
        });
    </script>
@endsection
