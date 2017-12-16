<!DOCTYPE html>
<?php
include ('Header1.php');
include('sql_connect.php');
?>
    <br><br>
      <div class="text-center">
        <a href="admin_dashboard.php"><button class="navbar-btn nav-button" id="login" style="visibility: visible; animation-name: bounceInRight;">Dashboard</button></a>
        <a href=""><button class="navbar-btn nav-button" id="manage_account" style="visibility: visible; animation-name: bounceInRight;">Manage Accounts</button></a>

      </div>
    <br><br>
      <!-- End page header -->
      <div id="wrapper">
          <div id="page-wrapper">
                <div class="row">
                  <div class="col-xs-2">
                      <h1 class="page-header">
                          <a href="lists_organizations.php"><img src="assets/img/icons/png/reunion-1.png"></a>
                      </h1>
                  </div>
                </div>
          </div>
      </div>
      <div class ="center" class="table-responsive">
                    <table class="table table-bordered table-hover" id='acc'>
                        <thead >
                            <tr>
                                <th class='center'>#</th>
                                <th class='center'>Name</th>
                                <th class='center'>Status</th>
								                <th class='center'>Edit</th>
								                <th class='center'>Blocked</th>
                            </tr>
                            </thead>
                            <tbody id='tableId'>
                            <?php
                                $counter = 0;
                                $table = 'SELECT * FROM user WHERE user_type != "admin" && user_type != "volunteer"';
                                $info = mysqli_query($sql, $table);

                                while($row = mysqli_fetch_array($info)){
								                    echo"
									                    <tr>
										                      <td id='td0".$counter."'>".$row[0]."</td>
										                      <td id='td1".$counter."'>".$row[1]."</td>
                                          <td id='td2".$counter."'>".$row[4]."</td>";
                                          echo"</td>";
                                      		echo"<td id='td3".$counter."'><input type='button' class='btn btn-success btn-xs' id='edit".$counter."' onclick='getEdit(".$counter.")' value='Edit'></td>
                                          <td id='td4".$counter."'><input type='button' class='btn btn-danger btn-xs' id='blocked".$counter."' onclick='getDelete(".$counter.")' value='Blocked'></td>
                                          </tr>";
                                          $counter++;}
                                    ?>
                                    </tbody>
                                </table>
                                <div class='container-fluid' style='text-align:center;'>
                                      <form id='edFormSingle' action='edit.php' onSubmit='return editCheck();' method='post'>
                                          <input type='hidden' id='ed0' name='editElement[]' value=''/>
                                          <input type='hidden' id='ed1' name='editElement[]' value=''/>
                                          <input class="required" type='hidden' id='ed2' name='editElement[]' value=''/>
                                          <input type='submit' id='edSub' value='Edit' hidden/>
                                      </form>
                                      <!-- <form id='delFormSingle' action='AccountDeleteSingle.php' method='post'>
                                          <input type='hidden' id='del0' name='deleteElement' value=''/>
                                          <input type='submit' id='delSub' value='Edit' hidden/>
                                      </form> -->
                                  </div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

    </body>
</html>
<script>
//universal
var chck = 0;
var td = [4];


function addEditDelValue(idnt,id,val){
	document.getElementById(idnt+id).value = val;
}

function getEdit(id){
	var tdEdit = [2];
	var DELETE_KEY_ALT = '"del"';
	var EDIT_KEY_ALT = '"ed"';


	for(var x=0;x!=2;x++){
		td[x] = document.getElementById('td'+x+id).innerHTML;
	}

	for(var y = 0; document.getElementById('edit'+y);y++){
		document.getElementById('edit'+y).disabled = true;
	}

	for(var z=0; z!=4 ;z++){
		addEditDelValue('ed',z,td[z]);
	}
	for(var a=2;a!=4;a++){
		document.getElementById('td'+a+id).innerHTML = "<input onchange='addEditDelValue("+EDIT_KEY_ALT+","+a+",this.value)' id='el2' class='form-control' type='text' name='editElement"+id+"[]' value='"+td[a]+"'>";
	}

	document.getElementById('delete'+id).disabled = true;

	var string2 = "<input type='button' class='btn btn-primary btn-xs' onclick='submit("+EDIT_KEY_ALT+");' value='Done'>";
	var string3 = "<input type='button' class='btn btn-warning btn-xs' onclick='cancelRowEdit("+id+");' value='Cancel'>"
	document.getElementById('td3'+id).innerHTML = string2+"  "+string3;
}


function submit(stringName){
	document.getElementById(stringName+'Sub').click();
}

function getDelete(id){
	var id = document.getElementById('td0'+id).innerHTML;
	var check = confirm("You are about to Delete Account# "+id+" . Are you sure?");

	if(check != false){
		document.getElementById('del0').value = id;
		submit('del');
	}
}

function editCheck(){
	var x;

	for(x=0;x!=4 && document.getElementById('ed'+x).value!='';x++){}
	return (x != 5)? true:false;
}

function validateForm(){
    if (chck != 0){
        var x = confirm('You are currently checked '+chck+' Account(s). Proceed?');
        if(x == false){
			return false;
		}
    }
}
</script>
