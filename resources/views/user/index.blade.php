@extends('user.v_template')

@Section('content')

<div class="index">
    <div class="p-3 mt-5">
        <h3 class="text-uppercase fw-bold text-white">{{ $title }}</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div class="row">
                    <div class="col-lg-8">
                        <div id='calendar'></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ket border" style="border-radius: 20px;height: 300px;">
                            <div class="text-center"
                                style="border-top-left-radius: 20px;border-top-right-radius: 20px;background-color: rgb(91, 79, 252);">
                                <div class="text-white" style="padding: 15px;font-size: 18px">
                                    Keterangan
                                </div>
                            </div>
                            <div class="event p-3">
                                <div class="row">
                                    <div class="col-4">Tanggal</div>
                                    <div class="col-1 d-none d-lg-block">:</div>
                                    <div class="col-lg-7" id="ruangan-date">
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-4">Waktu</div>
                                    <div class="col-1 d-none d-lg-block">:</div>
                                    <div class="col-lg-7" id="ruangan-time">
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-4">Event</div>
                                    <div class="col-1 d-none d-lg-block">:</div>
                                    <div class="col-lg-7">
                                        <div class="kotak" id="ruangan-event"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Ruangan</div>
                                    <div class="col-1 d-none d-lg-block">:</div>
                                    <div class="col-lg-7">
                                        <div class="kotak" id="ruangan-desc"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var p_ruangan = @json($p_ruangan);
    var ruangan = @json($ruangan);
    var p_alat = @json($p_alat);
    var alat = @json($alat);

    var calendarEl = document.getElementById('calendar');

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar =  new FullCalendar.Calendar(calendarEl, {
            locale: 'id',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: [],
            dateClick: function(info) {
                document.getElementById('ruangan-date').textContent = new Date(info.dateStr).toLocaleDateString("id-ID", {
                    day: "numeric",
                    month: "long",
                    // year: "numeric"
                });
                document.getElementById('ruangan-desc').textContent = "";
                document.getElementById('ruangan-event').textContent = "";
                // document.getElementById('ruangan-event').textContent = info;
            },
            eventClick: function(info) {                
                var date_start = new Date(info.event.startStr).toLocaleDateString("id-ID", {
                    day: "numeric",
                    month: "long",
                    // year: "numeric"
                });
                var date_end = new Date(info.event.endStr).toLocaleDateString("id-ID", {
                    day: "numeric",
                    month: "long",
                    // year: "numeric"
                });
                if (info.event.endStr) {
                    document.getElementById('ruangan-date').textContent = date_start + " - " + date_end;   
                } else {
                    document.getElementById('ruangan-date').textContent = date_start;   
                }

                ruangan.forEach(function(ruangan) {
                    if (info.event.id == ruangan.id) {
                        console.log(ruangan.name)   
                        document.getElementById('ruangan-desc').textContent = ruangan.name;
                    }
                });
                document.getElementById('ruangan-event').textContent = info.event.title;

                console.log(info.event.extendedProps)
            },
        });
        calendar.render();

        p_ruangan.forEach(function(event) {
            calendar.addEvent(
                {
                    id: event.id,
                    title: event.event,
                    start: event.date_start+"T"+event.time_start,
                    end: event.date_end+"T"+event.time_end,
                    extendedProps: {
                        department: ruangan.name,
                        description: "Lecture"
                    },
                    color: "rgb(70, 224, 39)"
                },
            )
        });
        p_alat.forEach(function(event) {
            calendar.addEvent(
                {
                    id: event.id,
                    title: event.event,
                    start: event.date_start,
                    end: event.date_end,
                    extendedProps: {
                        department: alat.name,
                        description: "Lecture"
                    },
                    color: "rgb(243, 119, 36)"
                },
            )
        });
    });
</script>

@endsection