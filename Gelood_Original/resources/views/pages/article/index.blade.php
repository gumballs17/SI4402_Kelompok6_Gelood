@extends('layouts.main')
@section('custom-head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
@endsection
@section('container')
    <div class="row">
        @foreach($datas as $data)
            <div class="col-md-5 mb-4" style="margin-top:50px;">
                <div class="card h-100">
                    <img src="{{ $data->thumbnail_articel ?? url('https://source.unsplash.com/350x200?blood') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->name_articel }}</h5>
                        <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#detailModal{{$loop->index}}">Selengkapnya</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#detailModal{{$loop->index}}">
            </a>
        @endforeach
        @foreach($datas as $data)
            <div class="modal fade" id="detailModal{{ $loop->index }}" tabindex="-1" aria-labelledby="detailModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title font-weight-bold text-title1 text-blue text-truncate"
                                id="detailModalLabel">
                                Detail Acara
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex flex-column">
                                <img class="img-fluid rounded"
                                     src="{{ $data->thumbnail_articel ?? url('https://source.unsplash.com/350x200?blood') }}"
                                     alt="image">
                                <p class="ellipsis-2 text-blue text-title1 mt-2">{{ $data->name_articel }}</p>
                                <p>
                                    <span class="text-primary text-body1 mt-2">Dorplas</span>
                                    <span class="text-secondary text-body1">&bull;</span>
                                </p>
                                <p class="text-blue text-title1 mt-2">Deksripsi</p>
                                <p class="text-body1 mt-1">{{ $data->desc_articel }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('custom-script')
    <script>
        let timeout = null;
        $("input[type='search']").keyup(function () {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                $('#search-form').submit();
            }, 1000);
        });
    </script>
@endsection


