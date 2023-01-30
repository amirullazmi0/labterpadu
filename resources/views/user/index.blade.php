@extends('user.v_template')

@Section('content')

<div class="index">
    <div class="p-3 mt-5">
        <h3 class="text-uppercase fw-bold text-white">{{ $title }}</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <div class="row">
                    <div class="col-lg-8">
                        <div id='calendar'></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <strong style="color: rgb(60, 83, 212);font-size: 25px" id="theday-date"></strong>
                        </div>
                        <div class="ket border" style="border-radius: 20px;height: 300px;">
                            <div class="text-center"
                                style="border-top-left-radius: 20px;border-top-right-radius: 20px;background-color: rgb(27, 48, 172)">
                                <div class="text-white" style="padding: 15px;font-size: 18px">
                                    Ruangan
                                </div>
                            </div>
                            <div class="table-responsive" style="max-height: 200px">
                                <div class="event">
                                    {{-- <div class="text-center m-3">
                                        <strong id="ruangan-date"></strong>
                                    </div> --}}
                                    <div class="card border shadow-none m-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <small>Tanggal</small>
                                                </div>
                                                {{-- <div class="col-1 d-none d-lg-block">:</div> --}}
                                                <div class="col-lg-8">
                                                    <div class="kotak"><small id="ruangan-date"></small></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <small>Event</small>
                                                </div>
                                                {{-- <div class="col-1 d-none d-lg-block">:</div> --}}
                                                <div class="col-lg-8">
                                                    <div class="kotak"><small id="ruangan-event"></small></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <small>Ruangan</small>
                                                </div>
                                                {{-- <div class="col-1 d-none d-lg-block">:</div> --}}
                                                <div class="col-lg-8">
                                                    <small id="ruangan-name"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ket border mt-2" style="border-radius: 20px;height: 300px;">
                            <div class="text-center"
                                style="border-top-left-radius: 20px;border-top-right-radius: 20px;background-color: rgb(60, 83, 212);">
                                <div class="text-white" style="padding: 15px;font-size: 18px">
                                    Alat
                                </div>
                            </div>
                            <div class="table-responsive" style="max-height: 200px">
                                <div class="event">
                                    <div class="card border shadow-none m-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <small>Tanggal</small>
                                                </div>
                                                {{-- <div class="col-1 d-none d-lg-block">:</div> --}}
                                                <div class="col-lg-8">
                                                    <div class="kotak"><small id="alat-date"></small></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <small>Event</small>
                                                </div>
                                                {{-- <div class="col-1 d-none d-lg-block">:</div> --}}
                                                <div class="col-lg-8">
                                                    <div class="kotak"><small id="alat-event"></small></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <small>Alat</small>
                                                </div>
                                                <div class="col-lg-8">
                                                    <small id="alat-name"></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <small>Lab</small>
                                                </div>
                                                <div class="col-lg-8">
                                                    <small id="alat-lab"></small>
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
        </div>
    </div>

    <script>
        var p_ruangan = @json($p_ruangan);
        var ruangan = @json($ruangan);
        var p_alat = @json($p_alat);
        var alat = @json($alat);
        var lab = @json($lab);

        var today = new Date();
        
        // document.getElementById('theday-date').textContent = new Date(today).toLocaleDateString("id-ID", {
        //     day: "numeric",
        //     month: "long",
        //     year: "numeric"
        // });

        var calendarEl = document.getElementById('calendar');

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar =  new FullCalendar.Calendar(calendarEl, {
                locale: 'id',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth'
                    //timeGridDay
                },
                
                events: [],
                dateClick: function(info) {
                    // document.getElementById('theday-date').textContent = new Date(info.dateStr).toLocaleDateString("id-ID", {
                    //     day: "numeric",
                    //     month: "long",
                    //     year: "numeric"
                    // });
                },
                eventClick: function(info) {                
                    var date_start = new Date(info.event.startStr).toLocaleDateString("id-ID", {
                        day: "numeric",
                        month: "long",
                        // year: "numeric"
                    });
                    if (info.event.endStr == null) {
                        var date_end = new Date(info.event.startStr).toLocaleDateString("id-ID", {
                            day: "numeric",
                            month: "long",
                            // year: "numeric"
                        });
                    }else if (info.event.endStr){
                        var date_end = new Date(info.event.endStr).toLocaleDateString("id-ID", {
                            day: "numeric",
                            month: "long",
                            // year: "numeric"
                        });
                    }
                    if (info.event.id === '1') {
                        
                        if (date_start != date_end) {
                            document.getElementById('ruangan-date').textContent = date_start + " - " + date_end;   
                        } else {
                            document.getElementById('ruangan-date').textContent = date_start;
                        }  
                        
                        document.getElementById('ruangan-event').textContent = info.event.extendedProps.department;

                        ruangan.forEach(function(ruangan) {
                            if (info.event.extendedProps.description == ruangan.id) {    
                                document.getElementById('ruangan-name').textContent = ruangan.name;
                            }
                        });

                    }  
                    
                    if (info.event.id === '2') {
                        
                        if (date_end != null) {
                            document.getElementById('alat-date').textContent = date_start + " - " + date_end;   
                        } else {
                            document.getElementById('alat-date').textContent = date_start; 
                        }  
                        
                        document.getElementById('alat-event').textContent = info.event.extendedProps.department;
                        document.getElementById('alat-name').textContent = info.event.title;

                        alat.forEach(function(alat) {
                            if (info.event.extendedProps.department == alat.id) {
                                document.getElementById('alat-desc').textContent = alat.name;
                            }
                        });
                        lab.forEach(function(lab) {
                            if (info.event.extendedProps.description == lab.id) { 
                                document.getElementById('alat-lab').textContent = lab.name;
                            }
                        });
                    }
                },
            });
            calendar.render();

            p_ruangan.forEach(function(event) {
                if (event.date_end == null) {
                    event.date_end = event.date_start
                }
                ruangan.forEach(function(ruangan) {
                    if (event.ruangan_id == ruangan.id) {
                        calendar.addEvent(
                            {
                                id: "1",
                                title: ruangan.name,
                                start: event.date_start+"T"+event.time_start,
                                end: event.date_end+"T"+event.time_end,
                                extendedProps: {
                                    department: event.event,
                                    description: event.ruangan_id
                                },
                                color: ruangan.color
                            },
                        )
                    }
                });
            });
            p_alat.forEach(function(event) {
                // console.log(event.date_end)
                if (event.date_end == null) {
                    // event.date_end = event.date_start
                }
                alat.forEach(function(alat) {
                    if (event.alat_id == alat.id) {
                        calendar.addEvent(
                            {
                                id: "2",
                                title: alat.name,
                                start: event.date_start,
                                end: event.date_end,
                                extendedProps: {
                                    department: event.event,
                                    description: alat.lab_id,
                                },
                                color: alat.color,
                                allday: true
                            },
                        )
                    }
                });
            });
        });
    </script>

    @endsection