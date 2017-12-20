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
                          <a href="lists_organizations.php"><img src="assets/img/icons/png/team-3.png"></a>
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
                                <th class='center'>First Name</th>
																<th class='center'>Last Name</th>
								                <th class='center'>Edit</th>
								                <th class='center'>Blocked</th>
                            </tr>
                            </thead>
                            <tbody id='tableId'>
                            <?php
                                $counter = 0;
                                $table = 'SELECT * FROM user WHERE user_type != "admin" && user_type != "organization"';
                                $info = mysqli_query($sql, $table);

                                while($row = mysqli_fetch_array($info)){
								                    echo"
									                    <tr>
										                      <td id='td0".$counter."'>".$row[0]."</td>
										                      <td id='td1".$counter."'>".$row[4]."</td>
                                          <td id='td2".$counter."'>".$row[5]."</td>";
                                          echo"</td>";
                                      		echo"<td id='td3".$counter."'><input type='button' class='btn btn-success btn-xs' id='edit".$counter."' onclick='getEdit(".$counter.")' value='Edit'></td>
                                          <td id='td4".$counter."'><input type='button' class='btn btn-danger btn-xs' id='blocked".$counter."' onclick='getDelete(".$counter.")' value='Blocked'></td>
                                          </tr>";
                                          $counter++;}
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

    </body>
</html>
