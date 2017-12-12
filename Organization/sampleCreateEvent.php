<html>
<?php require ("../sql_connect.php"); ?>
<body>


<form action ="insert_event.php" method="POST">
  <label>TITLE <small>(required)</small></label>
  <input name="eventTitle" type="text" class="form-control" placeholder="Andrew...">
  <label>DESCRIPTION <small>(required)</small></label>
  <input name="eventDesc" type="text" class="form-control" placeholder="Andrew...">
  <label>LOCATIONe <small>(required)</small></label>
  <input name="eventLocation" type="text" class="form-control" placeholder="Andrew...">
  <label>TIMEIN <small>(required)</small></label>
  <input name="eventStart" type="text" class="form-control" placeholder="Andrew...">
  <label>TIME OUT <small>(required)</small></label>
  <input name="eventEnd" type="text" class="form-control" placeholder="Andrew...">
  <label>MATERIALe <small>(required)</small></label>
  <input name="eventMatReq" type="text" class="form-control" placeholder="Andrew...">
  <label>AGE REQ<small>(required)</small></label>
  <input name="eventAgeReq" type="text" class="form-control" placeholder="Andrew...">
  <label>GENDER <small>(required)</small></label>
  <input name="eventGenderReq" type="text" class="form-control" placeholder="Andrew...">
  <label>OCCUPTION <small>(required)</small></label>
  <input name="eventOccuptReq" type="text" class="form-control" placeholder="Andrew...">
  <label>VOLUNTEER NO <small>(required)</small></label>
  <input name="eventnVolunteer" type="text" class="form-control" placeholder="Andrew...">
  <label>TRAINING ATTENDANCE <small>(required)</small></label>
  <input name="eventTrainingAttend" type="text" class="form-control" placeholder="Andrew...">
  <label>PARTNER ORG<small>(required)</small></label>
  <input name="eventPartnerOrg" type="text" class="form-control" placeholder="Andrew...">
  <label>IMAGE <small>(required)</small></label>
  <input name="eventImage" type="text" class="form-control" placeholder="Andrew...">
  <input type='submit' class='btn btn-finish btn-primary' name='signup' value='SIGN UP' />
  </body>
</html>
