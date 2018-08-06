<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
      <div class="panel panel-border panel-shadow">
        <div class="panel-heading panel-black text-center"><strong>Temporary Job Search</strong></div>
          <div class="panel-body">


            <form action="submit.php" autocomplete="off" method="POST">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Duration:</label>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="number" class="form-control" name="duration" placeholder="Days/Months" required>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <select name="daymonth" required>
                  <option value="Day(s)">Day(s)</option>
                  <option value="Month(s)">Month(s)</option>
                </select>
                <span class="caret"></span>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <hr>
              </div>


              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Date:</label>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="input-group">
                  <span class="input-group-addon"><label>From:</label></span>
                  <input type="date" class="form-control date" name="datefrom" placeholder="mm/dd/yyyy" required>
                </div>
              </div>



              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 gap">
                <div class="input-group">
                  <span class="input-group-addon"><label>To:</label></span>
                  <input type="date" class="form-control date" name="dateto" placeholder="mm/dd/yyyy" required>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <hr>
              </div>

<!-- Place starts-->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Place:</label>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <label>Division:</label>
                <select id="division" name="division" required>
                  <option value="" selected disabled>--Select--</option>

                  <?php

                  $q = "SELECT division FROM place GROUP BY division ORDER BY division ASC";  #used in: template/profile-body.php,
                	$r = mysqli_query($dbc, $q);

                  while($a = mysqli_fetch_assoc($r)){
                      echo "<option value=".$a['division'].">".$a['division']."</option>";
                      unset($a);
                  }
                  unset($q, $r);
                  ?>

                </select>
                <span class="caret"></span>
              </div>

              <span class="help-block"></span>

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gap">
                <label>Zilla:</label>
                <select id="zilla" name="zilla" required>
                  <option value="" selected disabled>--Select--</option>
                </select>
                <span class="caret"></span>
              </div>

              <span class="help-block"></span>

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gap">
                <label>Thana:</label>
                <select id="thana" name="thana" required>
                  <option value="" selected disabled>--Select--</option>
                </select>
                <span class="caret"></span>
              </div>
<!-- Place ends-->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <hr>
              </div>



              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
                <button class="btn btn-black">Save & Search</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
