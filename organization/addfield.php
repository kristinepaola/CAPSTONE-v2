<html>
<span>Occupation</span>
<input name="occupation" type="text" style="width:250px;" id="occupation">
<input name="nVolunteersOccupation" type="number" style="width:50px;" id="nVolunteersOccupation">
<button class="btn btn-success" id="addfield"><span>+</span></button>
<div id="occtarget" style="padding-left:78px;"></div>
<div id="nocctarget"></div>
<div id="btntarget"></div>

</html>
<script src="../assets/js//jquery-1.10.2.min.js"></script>
<script>
  $(document).ready(function(){
    var occupation = '<input name="occupation" type="text" style="width:250px;" id="occupation"><br><input name="nVolunteersOccupation" type="number" style="width:50px;" id="nVolunteersOccupation"><br><button class="btn btn-success" id="addfield"><span>+</span></button><br>';
    $("#addfield").on("click", function(){
      $("#occtarget").append(occupation);
    });
  });
</script>
