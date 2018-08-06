<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
      <?php
      if(isset($_GET['success']) && $_GET['success'] == 'true'){ ?>
        <div class="alert alert-success alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Ad has been posted.
        </div>
      <?php
      unset($_GET);
      }

      if(isset($_GET['duplicate']) && $_GET['duplicate'] == 'true'){ ?>
        <div class="alert alert-danger alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            You have already posted this Ad.
        </div>
      <?php }
      unset($_GET);
      ?>
      <div class="panel panel-border panel-shadow">
        <div class="panel-heading panel-black text-center"><strong>Ad for Job Vacancy</strong></div>
          <div class="panel-body">


            <form action="" autocomplete="off" method="POST">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Deadline:</label>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <input type="date" class="form-control date" name="deadline" placeholder="Last date of Application" required>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <hr>
              </div>

  <!-- Place starts-->
              <?php
              if($user['doctor']){ ?>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="input-group">
      							<span class="input-group-addon"><i class="fa fa-hospital-o fa-fw"></i></span>
      							<input type="text" class="form-control" name="hospital" placeholder="Name of the Institution" required>
    						  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <hr>
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
              <?php } ?>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Details:</label>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <textarea type="text" class="form-control" rows="3" name="details" placeholder="Write about the job in details, like payments and what to do" required></textarea>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <hr>
              </div>

              <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xs-offset-4 col-sm-offset-5 col-md-offset-5 col-lg-offset-5">
                <button class="btn btn-black">Post</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
