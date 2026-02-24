<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Calendar</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-5">Full Calendar JS Laravel</h3>
                <div class="col-md-11 offset-1 mt-5 mb-5">
                    <div id="calendar">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                }
            })
        });


        // $(document).ready(function() {
        //     var calendar = $('#calendar').fullCalendar({
        //         editable: true,
        //         selectable: true,
        //         selectHelper: true,
        //         events: '/fullcalendar',
        //         select: function(start, end, allDay) {
        //             var title = prompt('Event Title:');

        //             if (title) {
        //                 var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
        //                 var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

        //                 $.ajax({
        //                     url: '/fullcalendar/create',
        //                     data: {
        //                         title: title,
        //                         start: start,
        //                         end: end
        //                     },
        //                     type: "POST",
        //                     success: function(data) {
        //                         calendar.fullCalendar('refetchEvents');
        //                         alert("Event Created Successfully");
        //                     }
        //                 })
        //             }
        //         },
        //     });
        // });
    </script>
</body>

</html><?php /**PATH E:\Web\LocalServer\OSPanel\home\massageRoom\resources\views/calendar/index.blade.php ENDPATH**/ ?>