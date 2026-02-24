<script>
        $(document).ready(function() {

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

           var booking = <?php echo json_encode($events, 15, 512) ?>;
let start_date = null;
let end_date = null;

$('#calendar').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
    },
viewRender: function(view) {

    const side = $('#calendar-side-wrapper');
    const main = $('#calendar-wrapper');

    if (view.name === 'agendaDay') {

        main.addClass('d-none');
        side.removeClass('d-none');

        $('#calendar').appendTo('#calendar-day-slot');

    } else {

        side.addClass('d-none');
        main.removeClass('d-none');

        $('#calendar').appendTo('#calendar-wrapper .col-md-11');
    }
},


    allDaySlot: false,
    scrollTime: false,

     height: 'parent',
    contentHeight: 'auto',



    minTime: "09:00:00",
    maxTime: "18:00:00",

    slotDuration: '01:00:00',
    slotLabelInterval: "01:00",
    axisFormat: 'H:mm',
    slotLabelFormat: 'H:mm',

    events: booking,
    selectable: true,
    selectHelper: true,

    select: function(start, end) {
        if(start.hour() < 9 || start.hour() > 17){
            $('#calendar').fullCalendar('unselect');
            return;
        }
        start_date = moment(start).format('YYYY-MM-DD HH:mm');
        end_date   = moment(end).format('YYYY-MM-DD HH:mm');

        $('#title').val('');
        $('#titleError').html('');
        $('#bookingModal').modal('show');
    }
});

$('#saveBtn').on('click', function () {
    let title = $('#title').val();

    $.ajax({
        url: "<?php echo e(route('calendar.store')); ?>",
        type: "POST",
        data: { title, start_date, end_date },

        success: function () {
            $('#bookingModal').modal('hide');
        },
        error: function (error) {
            if (error.status === 422) {
                $('#titleError').html(error.responseJSON.errors.title[0]);
            }
        }

    });

});
});


</script>
<?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/calendar/scripts.blade.php ENDPATH**/ ?>