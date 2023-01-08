@extends('layouts.main')
@section('custom-head')
    <link href="{{ url('/vendor/powerful-calendar/style.css') }}" rel="stylesheet">
    <link href="{{ url('/vendor/powerful-calendar/theme.css') }}" rel="stylesheet">
@endsection
@section('container')
        @include('partials.overview')
        <div class="col-md-6 col-sm-12 mt-5">
            <div class="card mb-4" style="width: 100%;">
                <div class="card-header py-3">
                    <h6 class="m-0 text-title1 text-blue">Jadwal Donor Terdekat</h6>
                </div>
                <div class="card-body">
                    <div class="calendar-container"></div>
                    <div class="detail-schedule">
                        @if($schedules->count())
                            <h6 class="m-0 text-title1 text-blue mb-5">Detail acara</h6>
                            @foreach($schedules as $schedule)
                                @php($newDate = \Carbon\Carbon::parse($schedule->schedule_donor_notes))
                                <a class="text-decoration-none" href="{{ url('/account') }}">
                                    <div class="bg-red rounded shadow-md mb-3">
                                        <div class="row py-2">
                                            <div class="col-2">
                                                <div class="tile d-flex">
                                                    <p class="m-auto text-title1 text-blue">{{ $newDate->translatedFormat('d') }}</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="box-event border-left">
                                                    <h6 class="text-title1 text-white ml-3">{{ $newDate->translatedFormat('D, d F Y') }}</h6>
                                                    <p class="text-body2 text-white ml-3 mt-1 text-truncate">{{ $schedule->institutions->name_institutions }}</p>
                                                    <p class="text-body2 text-white ml-3">{{ $newDate->translatedFormat('h:i') }}</p>
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex">
                                                <img class="img-fluid my-auto"
                                                     src="{{ url('/images/icon/ic_arrow_right.svg') }}"
                                                     alt="next">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <p class="text-center">Belum melakukan pendaftaran donor</p>
                        @endif

                    </div>

                    <hr>
                </div>
            </div>
        </div>
@endsection
@section('custom-script')
    <script> let dataCovid = @json($covidData) </script>
    <script>
        let dataRaw = @json($schedules);
        const dataSchedule = [];
        for (let i = 0; i < dataRaw.length; i++) {
            dataSchedule.push(dataRaw[i]['schedule_donor_notes']);
        }
    </script>
    <script src="{{ url('/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('/js/chart-covid.js') }}"></script>
    <script src="{{ url('/vendor/powerful-calendar/calendar.min.js') }}"></script>
    <script src="{{ url('/js/calendar.js') }}"></script>
@endsection
