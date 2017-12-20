<!DOCTYPE html>
<?php include ('Header1.php');?>
    <br><br>
      <div class="text-center">
        <a href="admin_dashboard.php"><button class="navbar-btn nav-button wow bounceInRight login animated" id="login" style="visibility: visible; animation-name: bounceInRight;">Dashboard</button></a>
        <a href=""><button class="navbar-btn nav-button" id="login" style="visibility: visible; animation-name: bounceInRight;">Manage Accounts</button></a>
      </div>
    <br><br>
      <!-- End page header -->
      <div class="row">
        <div class="col-xs-3 m-padding">
              <div class="welcome-estate ">
                  <a href="lists_volunteers.php"><img src="assets/img/icons/png/team-3.png" alt=""></a>
                  <h3>New Volunteers</h3>
              </div>
        </div>
        <div class="col-xs-3 m-padding">
              <div class="welcome-estate ">
                  <a href="lists_organizations.php"><img src="assets/img/icons/png/reunion-1.png" alt=""></a>
                  <h3>New Organizations</h3>
              </div>
        </div>
        <div class="col-xs-3 m-padding">
            <div class="welcome-estate">
              <a href="events.php"><img src="assets/img/icons/png/archives.png" alt=""></a>
              <h3>New Events</h3>
        </div>
        </div>
            <div class="col-xs-3 m-padding">
                  <div class="welcome-estate">
                    <a href=""><img src="assets/img/icons/png/seo.png" alt=""></a>
                    <h3>Performance</h3>
                  </div>
            </div>
      </div>
        <?php include ('Footer.php');?>
    </body>
</html>
