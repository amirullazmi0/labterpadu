$(document).ready(function () {
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    var calendar = document.getElementById('calendar');

    var data = json($data);

    console.log(data);

    var event = new FullCalendar.Calendar(calendar, {
        timeZone: 'UTC',
        events:
            [
                {
                    title: 'wkwk',
                    start: '2023-01-12',
                    end: '2023-01-18',
                },
            ],
    });

    event.render();
});

// document.addEventListener('DOMContentLoaded', function () {
//     var calendarEl = document.getElementById('calendar');
//     var event = new FullCalendar.Calendar(calendarEl, {
//         timeZone: 'UTC',
//         events:
//             [
//                 {
//                     title: 'BCH237',
//                     start: '2023-01-12T10:30:00',
//                     end: '2023-01-15T11:30:00',
//                     extendedProps: {
//                         department: 'BioChemistry'
//                     },
//                     description: 'Lecture'
//                 },
//                 {
//                     title: 'Event 2',
//                     start: '2023-01-05',
//                     end: '2023-01-07'
//                 }
//             ],
//     },
//     );

//     event.render();
// });