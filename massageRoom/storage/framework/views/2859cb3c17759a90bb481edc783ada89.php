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
    <?php echo $__env->make('calendar.calendarDay', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  </div>



</div>


<?php echo $__env->make('calendar.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/calendar/calendar.blade.php ENDPATH**/ ?>