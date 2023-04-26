<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalender Peminjaman</title>

    <link href="{{ asset('landingpage/img/sp-ikon.png')}}" rel="icon">
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
</head>
<body>
    <div class="container">
        <div id='calendar'>
            <script>
                $(document).ready(function() {
                    $('#calendar').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        events: {
                            url: '/calendar-data',
                        },
                        editable: false,
                        eventLimit: true,
                        eventRender: function(event, element) {
                            element.find('.fc-title').append('<br/>' + event.start.format('MMM DD, YYYY h:mm a') + ' - ' + event.end.format('MMM DD, YYYY h:mm a'));
                        }
                    });

                    var events = {!! $events !!}; // menangkap data JSON dari controller

                    $('#calendar').fullCalendar('removeEvents'); // hapus acara sebelumnya dari kalender

                    $('#calendar').fullCalendar('addEventSource', events); // tambahkan acara baru ke kalender
                });
            </script>
        </div>
    </div>   
</body>
</html>