<?php $__env->startSection('title', 'Calendar'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />


<?php $__env->startSection('individual_options'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav_title', 'Calendar'); ?>
<?php $__env->startSection('body_content'); ?>

<!-- Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="bookingModalLabel">Booking title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" id="title">
        <span id="titleError" class="text-danger"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="container calendar-page">


 <h3 class="text-center mt-5">Full Calendar JS Laravel</h3>


  <div class="row mt-5 full calendar" id="calendar-wrapper">
     <!-- КАЛЕНДАРЬ -->
    <div class="col-md-11 mx-auto" >
      <div id="calendar"></div>
    </div>
  </div>


                    <!--  (DAY ONLY) -->

  <div class="row mt-5 d-none align-items-stretch" id="calendar-side-wrapper">

    <!-- КАЛЕНДАРЬ (DAY) -->
    <div class="col-lg-8">
        <div id="calendar-day-slot"></div>
    </div>

    <!-- ПРАВАЯ КОЛОНКА -->
    <div class="col-lg-4">
        <div class="calendar-side">
            <div class="calendar-info">
                <h3>Make an appointment</h3>
                <p>Select a convenient date and available time in the calendar on the left.</p>
                <ul class="legend">
                    <li><span class="dot free"></span>Available time</li>
                    <li><span class="dot busy"></span>Busy</li>
                </ul>
                <p class="phone">
                    Or you can call by phone:<br>
                    <strong>+373 69 123 456</strong><br>
                    Gadirca Vladimir
                </p>
                <p class="address">
                  We are located at: <strong>rep.Moldova, or.Singerei,  str.Nicolae Testimitianu 5. IAS, 2nd floor, office 15</strong>
                </p>
                  <a class="roue-btn" href="https://www.google.com/maps/dir/?api=1&destination=Incubatorul+de+Afaceri+Singerei" target="_blank">
                  Geolocation
                  </a>
            </div>

          <div class="calendar-photo">
                <img src="<?php echo e(Vite::asset('resources/images/incubator.jpg')); ?>" alt="Massage room">
            </div>
        </div>
    </div>

  </div>



</div>


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
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/calendar/index.blade.php ENDPATH**/ ?>