<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Usuario | Tratamiento | Calendario</title>
    <link href='{{ asset('packages/core/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('packages/daygrid/main.css') }}' rel='stylesheet' />
    <script src='{{ asset('packages/core/main.js') }}'></script>
    <script src='{{ asset('packages/interaction/main.js') }}'></script>
    <script src='{{ asset('packages/daygrid/main.js') }}'></script>
    <script>

    document.addEventListener('DOMContentLoaded', function() {

        var calendarEl = document.getElementById('calendar');

        var eventos = JSON.parse("{{$event}}".replace(/&quot;/g,'"'));
        console.log(eventos);
        var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid' ],
        header: {
            left: 'prevYear,prev,next,nextYear today',
            center: 'title',
            right: 'dayGridMonth,dayGridWeek,dayGridDay'
        },
        defaultDate: eventos[0].start,
        navLinks: true, // can click day/week names to navigate views
        editable: false,
        eventLimit: true, // allow "more" link when too many events
        events:eventos,

        });

        calendar.render();

    });

    </script>
    <style>

    body {
        margin: 40px 10px;
        padding: 0;
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }

    </style>
</head>
<body>

  <div id='calendar'></div>
<h1>{{$event}}</h1>
</body>
</html>
