@extends('user.v_template')

@Section('content')

<div class="index">
    <div class="p-3 mt-5">
        <h3 class="text-uppercase fw-bold text-white">{{ $title }}</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <div id='calendar'></div>
                </div>
                <div class="col-lg-4">
                    <div class="ket border" style="border-radius: 20px;height: 100px;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var event = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'UTC',
            events: 
                [   
                    {
                        title: 'BCH237',
                        start: '2023-01-12T10:30:00',
                        end: '2023-01-15T11:30:00',
                        extendedProps: {
                            department: 'BioChemistry'
                        },
                        description: 'Lecture'
                    },
                    {
                    title: 'Event 2',
                    start: '2023-01-05',
                    end: '2023-01-07'
                    }
                ],
            }, 
        );
        
        event.render();
    });
</script>
@endsection