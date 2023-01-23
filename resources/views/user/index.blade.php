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
    $(document).ready(function () {
        var data = @json($p_ruangan);
        // var name = data.name;

        // data.forEach(function(item) {
        //     console.log(item);
        // });
        
        var calendar = document.getElementById('calendar');

        var event = new FullCalendar.Calendar(calendar, 
           { 
               events:[
                    {
                        title: data[0].name,
                        start: data[0].date_start,
                        end: data[0].date_end,
                        color: 'green',   
                    },
                ],
           }
       );
       event.render();

        @json($p_ruangan).forEach(function(item) {
        });

    });
</script>

@endsection