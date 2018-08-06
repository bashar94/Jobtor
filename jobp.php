<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
      <div class="panel panel-border panel-shadow">
        <div class="panel-heading panel-black text-center"><strong>Permanent Job Search</strong></div>
          <div class="panel-body">


            <form action="submit.php" autocomplete="off" method="POST">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Joining Month:</label>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <select name="month" required>
                  <option value="" selected disabled>--Month--</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
                <span class="caret"></span>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <select name="year" required>
                  <option value="" selected disabled>--Year--</option>
                  <option value="<?php echo date("Y"); ?>"><?php echo date("Y"); ?></option>
                  <option value="<?php echo date("Y")+1; ?>"><?php echo date("Y")+1; ?></option>
                  <option value="<?php echo date("Y")+2; ?>"><?php echo date("Y")+2; ?></option>
                  <option value="<?php echo date("Y")+3; ?>"><?php echo date("Y")+3; ?></option>
                </select>
                <span class="caret"></span>
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



              <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xs-offset-4 col-sm-offset-5 col-md-offset-5 col-lg-offset-5">
                <button class="btn btn-black">Search</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
