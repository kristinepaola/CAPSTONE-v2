
      <div class="form-group">
      <!--User-->
      <div id='input0Error'></div>
               <input id = 'input1' type = 'text'   name='reg[]' placeholder = 'Username' class="form-control">  <br>         
      <!--Password-->
      <div id='input1Error'></div>
                <input id = 'input2' type = 'password' name='reg[]' placeholder = 'Password' class="form-control"> <br>
      <!--Password Confirm-->
      <div id='input2Error'></div>
                <input id = 'input3' type = 'password' name='reg[]'placeholder = 'Confirm Password' class="form-control"> <br>
      <!--Name & Address-->
      <div id='input3Error'></div>
                <input  id='input4'type = 'text'   name='reg[]' placeholder = 'First Name' class="form-control"><br>
      <div id='input4Error'></div>
        <input  id='input9'type = 'text'   name='reg[]' placeholder = 'Last Name' class="form-control"><br>
      <!--Address-->
                <input id='input5' type = 'text'   name='reg[]' placeholder = 'Address' class="form-control"> <br>
      <!--EmailAddress-->
      <div id='input5Error'></div>
                <input id = 'input6' type = 'text'   name='reg[]' placeholder ='Email Address' class="form-control"> <br>

                <div id='formRegistration'>
          <input id = 'input7' type = 'text'   name='client[]' placeholder = 'Weight Value' class='form-control'>
            <select id = 'input7Unit' name ='client[]' class='form-control' onchange='weightConvert();'> 
              <option value = 'kg'>Kilograms</option>
              <option value = 'lb'>Pounds</option>
            </select><br>

          <input id = 'input8' type='text' name='client[]' placeholder='Height Value' class='form-control'>
            <select id = 'input8Unit' name='client[]' class='form-control' onchange='heightConvert();'>>
              <option value = 'ft'>Feet</option>
              <option value = 'cm'>Centimeters</option>
            </select>

                    <h3>Subscription</h3><span class='text-danger' id='input6Error'></span>
                    <input id="input11Start" name="client[]" type="date" hidden/>
                    <input id="input11" name="client[]" type="date" hidden/>

                    <select id='subsc' name ='client[]' class='form-control'>
                        <option value = '0' selected>----</option>
                        <option value = '1' >1 Month</option>
                        <option value = '2'>2 Months</option>
                        <option value = '6'>6 Months</option>
                        <option value = '12'>1 Year</option>
                    </select>

                    <br>
        </div>
        <input id='submitRegistration' type='submit' hidden>
      </div>
      </form>
                <br>
        <input id ='submitRegistrationButton' type='button' class='btn btn-block btn-primary' value='Register' onclick='infoCheck();'>
                <br>
                <br>
  
</div>
</div>
            </div>
      </div>
</div>
<script>
var lastChangeRegistration = "client";

function textNoNumber(id){
  var check = true;
  var x;
  var string = document.getElementById('input'+id).value.toUpperCase();
  
  for( x=0;x != string.length && (string[x] >= 'A' && string[x] <= 'Z');x++){}
  if(x !== string.length){
    check = false;
  }
  
  return check;
}

function textLength(id){
  var check = false;
  var string = document.getElementById('input'+id).value;
  
  if(string.length > 5){
    check = true;
  }
  
  return check;
}

function textCompare(id,id2){
  var check = true;
  var string = document.getElementById('input'+id).value;
  var string2 = document.getElementById('input'+id2).value;
  
  if(string !== string2){
    check = false;
  }
  
  return check;
}

function textEmailAddValidation(id){
  var emailCheck = /\S+@\S+\.\S+/;
  var string = document.getElementById('input'+id).value;
  
  return emailCheck.test(string);
}

function weightConvert(){
  var unit = document.getElementById('input7Unit').value;
  var val = document.getElementById('input7').value;
  
  if(!isNaN(val) && val != 0){
    if(unit === 'kg'){
      val = val * 2.2;
    }else{
      val = val * 0.45;
    }
    val = val.toFixed(2);
    document.getElementById('input7').value = val;
  }else{
    alert("Value is not a number.");
  }
}

function heightConvert(){
  var unit = document.getElementById('input8Unit').value;
  var val = document.getElementById('input8').value;
  
  if(!isNaN(val) && val != 0){
  
    if(unit === 'ft'){
      val = val * 0.0328084;
    }else{
      val = val * 30.48;
    }
    val = val.toFixed(2);
    document.getElementById('input8').value = val;
  }else{
    alert("Value is not a number.");
  }
}

function clientAddons(){
  var stringWeight = "<input id = 'input7' type = 'text'   name='client[]' placeholder = 'Weight Value' class='form-control'>";
  var stringHeight = "<input id = 'input8' type='text' name='client[]' placeholder='Height Value' class='form-control'>";
  var stringHeightUnit = "<select id = 'input8Unit' name='client[]' class='form-control' onchange='heightConvert();'><option value = 'ft' selected>Feet</option><option value = 'cm'>Centimeters</option></select><br>";
  var stringWeightUnit = "<select id = 'input7Unit' name ='client[]' class='form-control' onchange='weightConvert();'> <option value = 'kg' selected>Kilograms</option><option value = 'lb'>Pounds</option></select><br>";
    var stringSub = "<h3>Subscription</h3><span class='text-danger' id='input6Error'></span><input type='date' id='input11Start' name='client[]'hidden/><input id='input11' name='client[]' type='date' hidden/><select id='subsc' class='form-control' ><option value = '0' selected>----</option> <option value = '1'>1 Month</option><option value = '2'>2 Months</option><option value = '6'>6 Months</option><option value = '12'>1 Year</option></select><br>";
  return stringWeight+stringWeightUnit+stringHeight+stringHeightUnit+stringSub;
}

function staffAddons(){
    var stringError = "<span class='text-danger' id='input7Error'></span>";
  var stringStaffLabel = "<input class='form-control' id='input10' type='text' name='staff' placeholder='Label'>";
  return stringError+stringStaffLabel;
}

function changeAccountType(){
  var type = document.getElementById('input0').value;
  var form = document.getElementById('formRegistration');
  
  if(lastChangeRegistration !== type){
    if(lastChangeRegistration === 'client' || lastChangeRegistration === 'staff'){
      form.innerHTML = '';
    }
    if(type === 'client'){
      form.innerHTML = clientAddons();
    }else if(type === 'staff'){
      form.innerHTML = staffAddons();
    }
    lastChangeRegistration = type;
  }
}

function infoCheck(){
  var check = [];
  var y;
  var type = document.getElementById('input0').value;
  var max = 8;

    for(var z=0;z!=max;z++){
    check[z] = true;
  }
  
  for(var x=0;x!=6;x++){
    document.getElementById('input'+x+'Error').innerHTML = '';
  }
  if(type === 'client'){
        document.getElementById('input6Error').innerHTML = '';
        if(document.getElementById('subsc').value == 0){
            check[7] = false;
            document.getElementById('input6Error').innerHTML = "*Must Input Subscription";
        }else{
            var cur = new Date();
            var inc = document.getElementById('subsc').value;
            var inc2 = cur.getMonth();
            document.getElementById('input11Start').valueAsDate = cur;
            var MonthAdd = Number(inc)+Number(inc2);
            cur.setMonth(MonthAdd);
            document.getElementById('input11').valueAsDate = cur;
        }
    }else if(type === 'staff'){
      document.getElementById('input7Error').innerHTML = '';
        if(document.getElementById('input10').innerHTML == ''){
            check[6] = false;
            document.getElementById('input7Error').innerHTML = "*Must Input Occupation";
        }
    }

  
  if(!textLength(1)){
    check[0] = false;
    document.getElementById('input0Error').innerHTML = "<span class='text-danger'>*Must be at least 6 characters long<span>";
  }
  if(!textLength(2)){
    check[1] = false;
    document.getElementById('input1Error').innerHTML = "<span class='text-danger'>*Must be at least 6 characters long<span>";
  }
  if(!textCompare(2,3)){
    check[2] = false;
    document.getElementById('input2Error').innerHTML = "<span class='text-danger'>*Not Identical<span>";
  }
  if(!textNoNumber(4)){
    check[3] = false;
    document.getElementById('input3Error').innerHTML = "<span class='text-danger'>*Might Contain Special Character(s) or Number(s)<span>";
  }
  if(!textEmailAddValidation(6)){
    check[4] = false;
    document.getElementById('input5Error').innerHTML = "<span class='text-danger'>*Empty OR Wrong Input of Email Address<span>";
  }
    if(!textNoNumber(9)){
        check[5] = false;
        document.getElementById('input4Error').innerHTML = "<span class='text-danger'>*Might Contain Special Character(s) or Number(s)<span>";
    }
  for(y=0;y!=max && check[y] != false;y++){}
  
  if(y == max){
    document.getElementById('submitRegistration').click();
  }
}

  
</script>

