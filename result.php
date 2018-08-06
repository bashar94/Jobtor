<?php

if(isset($_GET['type']) && isset($_GET['division']) && isset($_GET['zilla']) && isset($_GET['thana']) && ((isset($_GET['month']) && isset($_GET['year']))||(isset($_GET['from']) && isset($_GET['to']) && isset($_GET['day_month'])
&& isset($_GET['duration']))  )){

  $start = 25*(int)$pn - 25;
  $end = 25*(int)$pn;


  $division = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['division']));
  $zilla = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['zilla']));
  $thana = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['thana']));


  if(mysqli_real_escape_string($dbc, htmlspecialchars($_GET['type'])) == 'pjob'){

    $month = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['month']));
    $year = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['year']));

    $q = "SELECT * FROM job_per WHERE deadline >= CURDATE() AND MONTH(deadline) >= '$month' AND YEAR(deadline) >='$year' AND username <> '$_SESSION[username]' AND available = 1 ORDER BY (CASE WHEN division = '$division' THEN 1 WHEN zilla = '$zilla' THEN 2 WHEN thana = '$thana' THEN 3 ELSE 4 END) LIMIT ".$start.','.$end;
    $r = mysqli_query($dbc, $q);

    $q = "SELECT COUNT(id) as count FROM job_per WHERE deadline >= CURDATE() AND MONTH(deadline) >= '$month' AND YEAR(deadline) >='$year' AND username <> '$_SESSION[username]' AND available = 1";
    $result = mysqli_query($dbc, $q);

    $num_rows = mysqli_fetch_assoc($result)['count'];

    $numPage = ceil($num_rows/25);

    if($num_rows == 0){ ?>

      <div class="row">
      	<div id="fb" class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
          <div class="alert alert-danger text-center">
            <strong>No Result Found!</strong>
          </div>
        </div>
      </div>

    <?php }else{ ?>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">

          <?php
          while($a = mysqli_fetch_assoc($r)){ ?>
              <div class="panel  panel-default">
                <div class="panel-body panel-shadow">
                  <?php
                  $profile = mysqli_fetch_assoc(data_user($dbc, $a['username']));
                  ?>
                  <a class="about-page" href="?page=<?php echo $a['username'];?>"><strong><?php if($profile['doctor']){ echo $profile['fullname']; }else{ echo $profile['college']; }; ?></strong></a>
                  <a class="btn btn-primary pull-right" target="_blank" href="<?php echo $profile['fb_profile'];?>"><strong>Facebook</strong></a>
                  <hr>
                  <p>Deadline: <strong><?php echo date ("jS F Y", strtotime($a['deadline'])); ?></strong></p>
                  <?php if($profile['doctor']){ ?>
                    <p>Hospital: <strong><?php echo $a['hospital']; ?></strong></p>
                  <?php } ?>
                  <p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>

                  <!-- Trigger the modal with a button -->
                  <a href="#" data-toggle="modal" data-target="#modal<?php echo $a['id']; ?>">See Details</a>

                  <!-- Modal -->
                  <div id="modal<?php echo $a['id']; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Details</h4>
                        </div>
                        <div class="modal-body">
                          <a class="about-page" href="?page=<?php echo $a['username'];?>"><strong><?php if($profile['doctor']){ echo $profile['fullname']; }else{ echo $profile['college']; }; ?></strong></a>
                          <a class="btn btn-primary pull-right" target="_blank" href="<?php echo $profile['fb_profile'];?>"><strong>Facebook</strong></a>
                          <hr>
                          <p>Deadline: <strong><?php echo date ("jS F Y", strtotime($a['deadline'])); ?></strong></p>
                          <p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>

                          <?php if($profile['doctor']){ ?>
                            <p><label>Hospital: <?php echo $a['hospital']; ?></label></p>
                          <?php } ?>
                          <label>Details:</label><p><?php echo $a['details']; ?></p>
                          <hr>

                          <h3 class="text-center">User Profile</h3>
                          <div class="profile-userpic">
                      			<img src="<?php echo $profile['pp_url']?>" class="img-responsive">
                          </div>
                          <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      				<?php if($profile['doctor']){ ?>
                      					<h5 class="about-page">Institute:  <strong><?php echo $profile['college']; ?></strong></h5>
                      					<h5 class="about-page">Work1: <strong><?php echo $profile['work1']; ?></strong></h5>
                      					<?php if($profile['work2'] != null){ ?>
                      						<h5 class="about-page">Work2:  <strong><?php echo $profile['work2']; ?></strong></h5>
                      					<?php } ?>
                      					<h5 class="about-page">MBBS Reg. No:  <strong><?php echo $profile['mbbs_reg']; ?></strong></h5>
                      					<h5 class="about-page">Designation: <strong><?php echo $profile['designation']; ?></strong></h5>
                      				<?php }else{ ?>
                      					<h5 class="about-page">Representative: <strong><?php echo $profile['fullname'];?></strong></h5>
                                <h5 class="about-page">Street Address: <strong><?php echo $profile['street'];?></strong></h5>

                      				<?php } ?>
                      			</div>

                      			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    					<h5><a class="about-page" href="#">Email: <strong><?php echo $profile['email']; ?></strong></a></h5>
                    					<h5 class="about-page">Phone: <strong><?php echo $profile['phone']; ?></strong></h5>
                    					<?php if($profile['doctor']){ ?>
                    						<h5 class="about-page">Birthday:  <strong><?php echo date ("jS F Y", strtotime($profile['birthdate'])); ?></strong></h5>
                    					<?php } ?>
                      			</div>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>


                </div>
              </div>
        <?php
          unset($profile, $a);
          }   ?>


        <div class="text-center">
          <nav aria-label="Page navigation">
            <ul class="pagination">


              <?php if($pn > 1){ ?>

                <li>
                  <a href="?page=result&pn=<?php echo ($pn-1)."&month=$month&year=$year&division=$division&zilla=$zilla&thana=$thana&type=pjob"; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>

              <?php }

              $i = 1;
              $j = 5;
              if($pn > 3){
                $i = $pn - 2;
                $j = $pn + 2;

              }

              if($numPage - $pn < 2){
                if($numPage >= 5){
                  $i = $numPage - 4;
                }
                $j = $numPage;
              }
              while($i <= $j){ ?>

                 <li class="<?php if($pn == $i) echo 'active';?>"><a href="?page=result&pn=<?php echo $i."&month=$month&year=$year&division=$division&zilla=$zilla&thana=$thana&type=pjob"; ?>"><?php echo $i; ?></a></li>

              <?php $i++;  } if($pn < $numPage){ ?>
              <li>
                <a href="?page=result&pn=<?php echo ($pn+1)."&month=$month&year=$year&division=$division&zilla=$zilla&thana=$thana&type=pjob"; ?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
              <?php } ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>

  <?php
  }
  unset($month, $year, $q, $r, $result, $num_rows, $numPage, $i, $j);

  ?>

    <div class="row">
      <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5">
        <a href="?page=jobp"  class="btn btn-black btn-block"><strong> Search More Jobs</strong></a>
      </div>
    </div>


<?php
  }elseif(isDate(mysqli_real_escape_string($dbc, htmlspecialchars($_GET['from']))) && isDate(mysqli_real_escape_string($dbc, htmlspecialchars($_GET['to'])))){

    $from = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['from']));
    $to = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['to']));
    $day_month = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['day_month']));
    $duration = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['duration']));

    if(mysqli_real_escape_string($dbc, htmlspecialchars($_GET['type'])) == 'sub'){


      $q = "SELECT * FROM job WHERE date_from >= CURDATE() AND username <> '$_SESSION[username]' AND available = 1 ORDER BY ABS(DATEDIFF(date_from, '$from')), (CASE WHEN division = '$division' THEN 1 WHEN zilla = '$zilla' THEN 2 WHEN thana = '$thana' THEN 3 WHEN day_month = '$day_month' THEN 4 WHEN duration = ".$duration." THEN 5 ELSE 6 END), ABS(DATEDIFF(date_to, '$to')) LIMIT ".$start.','.$end;
      $r = mysqli_query($dbc, $q);
      $q = "SELECT COUNT(id) as count FROM job WHERE date_from >= CURDATE() AND username <> '$_SESSION[username]' AND available = 1";
      $result = mysqli_query($dbc, $q);
      $num_rows = mysqli_fetch_assoc($result)['count'];

      $numPage = ceil($num_rows/25);

      if($num_rows == 0){ ?>

        <div class="row">
        	<div id="fb" class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div class="alert alert-danger text-center">
              <strong>No Result Found!</strong>
            </div>
          </div>
        </div>

      <?php }else{ ?>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">

            <?php
            while($a = mysqli_fetch_assoc($r)){ ?>
              <div class="panel panel-default">
                <div class="panel-body panel-shadow">
                  <?php
                  $profile = mysqli_fetch_assoc(data_user($dbc, $a['username']));
                  ?>
                  <a class="about-page" href="?page=<?php echo $a['username'];?>"><strong><?php echo $profile['fullname']; ?></strong></a>

                  <a class="pull-right" target="_blank" href="<?php echo $profile['fb_profile'];?>"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                  <hr>
                  <p>From <strong><?php echo date ("jS F Y", strtotime($a['date_from'])); ?></strong> to <strong><?php echo date ("jS F Y", strtotime($a['date_to'])); ?></strong></p>
                  <p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>
                  <p><label>Duration: <?php echo $a['duration']." ".$a['day_month']; ?></label></p>

                  <!-- Trigger the modal with a button -->
                  <a href="#" data-toggle="modal" data-target="#modal<?php echo $a['id']; ?>">See Details</a>

                  <!-- Modal -->
                  <div id="modal<?php echo $a['id']; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Details</h4>
                        </div>
                        <div class="modal-body">
                          <a class="about-page" href="?page=<?php echo $a['username'];?>"><strong><?php echo $profile['fullname']; ?></strong></a>

                          <a class="btn btn-primary pull-right" target="_blank" href="<?php echo $profile['fb_profile'];?>"><strong>Facebook</strong></a>
                          <hr>
                          <p>From <strong><?php echo date ("jS F Y", strtotime($a['date_from'])); ?></strong> to <strong><?php echo date ("jS F Y", strtotime($a['date_to'])); ?></strong></p>
                          <p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>
                          <p><label>Duration: <?php echo $a['duration']." ".$a['day_month']; ?></label></p>
                          <hr>

                          <h3 class="text-center">User Profile</h3>
                          <div class="profile-userpic">
                      			<img src="<?php echo $profile['pp_url']?>" class="img-responsive">
                          </div>
                          <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                      					<h5 class="about-page">Institute:  <strong><?php echo $profile['college']; ?></strong></h5>
                      					<h5 class="about-page">Work1: <strong><?php echo $profile['work1']; ?></strong></h5>
                      					<?php if($profile['work2'] != null){ ?>
                      						<h5 class="about-page">Work2:  <strong><?php echo $profile['work2']; ?></strong></h5>
                      					<?php } ?>
                      					<h5 class="about-page">MBBS Reg. No:  <strong><?php echo $profile['mbbs_reg']; ?></strong></h5>
                      					<h5 class="about-page">Designation: <strong><?php echo $profile['designation']; ?></strong></h5>
                      			</div>

                      			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    					<h5><a class="about-page" href="#">Email: <strong><?php echo $profile['email']; ?></strong></a></h5>
                    					<h5 class="about-page">Phone: <strong><?php echo $profile['phone']; ?></strong></h5>
                    					<h5 class="about-page">Birthday:  <strong><?php echo date ("jS F Y", strtotime($profile['birthdate'])); ?></strong></h5>
                      			</div>
                          </div>
                          <hr>


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            <?php
            unset($a, $profile);


            } ?>

              <div class="text-center">
                <nav aria-label="Page navigation">
                  <ul class="pagination">


                    <?php if($pn > 1){ ?>

                      <li>
                        <a href="?page=result&pn=<?php echo ($pn-1)."&from=$a[date_from]&to=$a[date_to]&division=$a[division]&zilla=$a[zilla]&thana=$a[thana]&duration=$a[duration]&day_month=$a[dat_month]&type=sub"; ?>" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>

                    <?php }

                    $i = 1;
                    $j = 5;
                    if($pn > 3){
                      $i = $pn - 2;
                      $j = $pn + 2;

                    }

                    if($numPage - $pn < 2){
                      if($numPage >= 5){
                        $i = $numPage - 4;
                      }
                      $j = $numPage;
                    }
                    while($i <= $j){ ?>

                       <li class="<?php if($pn == $i) echo 'active';?>"><a href="?page=result&pn=<?php echo $i."&from=$a[date_from]&to=$a[date_to]&division=$a[division]&zilla=$a[zilla]&thana=$a[thana]&duration=$a[duration]&day_month=$a[dat_month]&type=sub"; ?>"><?php echo $i; ?></a></li>

                    <?php $i++;  } if($pn < $numPage){ ?>
                    <li>
                      <a href="?page=result&pn=<?php echo ($pn+1)."&from=$a[date_from]&to=$a[date_to]&division=$a[division]&zilla=$a[zilla]&thana=$a[thana]&duration=$a[duration]&day_month=$a[dat_month]&type=sub"; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
      <?php  } ?>

      <div class="row">
        <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5">
          <a href="?page=subs"  class="btn btn-black btn-block"><strong> Search More Substitutes</strong></a>
        </div>
      </div>

  <?php
    unset($q, $r, $result, $num_rows, $numPage, $i, $j);

    }elseif(mysqli_real_escape_string($dbc, htmlspecialchars($_GET['type'])) == 'job'){


        $q = "SELECT * FROM sub WHERE date_from >= CURDATE() AND username <> '$_SESSION[username]' AND available = 1 ORDER BY ABS(DATEDIFF(date_from, '$from')), (CASE WHEN division = '$division' THEN 1 WHEN zilla = '$zilla' THEN 2 WHEN thana = '$thana' THEN 3 WHEN day_month = '$day_month' THEN 4 WHEN duration = '$duration' THEN 5 ELSE 6 END), ABS(DATEDIFF(date_to, '$to')) LIMIT ".$start.", ".$end;
        $r = mysqli_query($dbc, $q);
        $q = "SELECT COUNT(id) as count FROM sub WHERE date_from >= CURDATE() AND username <> '$_SESSION[username]' AND available = 1";
        $result = mysqli_query($dbc, $q);
        $num_rows = mysqli_fetch_assoc($result)['count'];

        $numPage = ceil($num_rows/25);

        if($num_rows == 0){ ?>

          <div class="row">
          	<div id="fb" class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
              <div class="alert alert-danger text-center">
                <strong>No Result Found!</strong>
              </div>
            </div>
          </div>

        <?php }else{ ?>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">

              <?php
              while($a = mysqli_fetch_assoc($r)){ ?>
                  <div class="panel  panel-default">
                    <div class="panel-body panel-shadow">
                      <?php
                      $profile = mysqli_fetch_assoc(data_user($dbc, $a['username']));
                      ?>
                      <a class="about-page" href="?page=<?php echo $a['username'];?>"><strong><?php if($profile['doctor']){ echo $profile['fullname']; }else{ echo $profile['college']; }; ?></strong></a>
                      <a class="btn btn-primary pull-right" target="_blank" href="<?php echo $profile['fb_profile'];?>"><strong>Facebook</strong></a>
                      <hr>
                      <p>From <strong><?php echo date ("jS F Y", strtotime($a['date_from'])); ?></strong> to <strong><?php echo date ("jS F Y", strtotime($a['date_to'])); ?></strong></p>
                      <?php if($profile['doctor']){ ?>
                        <p><label>Hospital: <?php echo $a['hospital_name']; ?></label></p>
                      <?php } ?>
                      <p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>
                      <p><label>Duration: <?php echo $a['duration']." ".$a['day_month']; ?></label></p>

                      <!-- Trigger the modal with a button -->
                      <a href="#" data-toggle="modal" data-target="#modal<?php echo $a['id']; ?>">See Details</a>

                      <!-- Modal -->
                      <div id="modal<?php echo $a['id']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Details</h4>
                            </div>
                            <div class="modal-body">
                              <?php if($profile['doctor']){ ?>
                                <a class="about-page" href="?page=<?php echo $a['username'];?>"><strong><?php echo $profile['fullname']; ?></strong></a>
                              <?php }else{ ?>
                                <a class="about-page" href="?page=<?php echo $a['username'];?>"><strong><?php echo $profile['college']; ?></strong></a>
                              <?php } ?>
                              <a class="btn btn-primary pull-right" target="_blank" href="<?php echo $profile['fb_profile'];?>"><strong>Facebook</strong></a>
                              <hr>
                              <p>From <strong><?php echo date ("jS F Y", strtotime($a['date_from'])); ?></strong> to <strong><?php echo date ("jS F Y", strtotime($a['date_to'])); ?></strong></p>
                              <?php if($profile['doctor']){ ?>
                                <p><label>Hospital: <?php echo $a['hospital_name']; ?></label></p>
                              <?php } ?>
                              <p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>
                              <p><label>Duration: <?php echo $a['duration']." ".$a['day_month']; ?></label></p>
                              <p><label>Payment:</label> &#x9f3; <?php echo $a['payment']; ?></p>
                              <label>Details:</label><p><?php echo $a['details']; ?></p>
                              <hr>

                              <h3 class="text-center">User Profile</h3>
                              <div class="profile-userpic">
                          			<img src="<?php echo $profile['pp_url']?>" class="img-responsive">
                              </div>
                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          				<?php if($profile['doctor']){ ?>
                          					<h5 class="about-page">Institute:  <strong><?php echo $profile['college']; ?></strong></h5>
                          					<h5 class="about-page">Work1: <strong><?php echo $profile['work1']; ?></strong></h5>
                          					<?php if($profile['work2'] != null){ ?>
                          						<h5 class="about-page">Work2:  <strong><?php echo $profile['work2']; ?></strong></h5>
                          					<?php } ?>
                          					<h5 class="about-page">MBBS Reg. No:  <strong><?php echo $profile['mbbs_reg']; ?></strong></h5>
                          					<h5 class="about-page">Designation: <strong><?php echo $profile['designation']; ?></strong></h5>
                          				<?php }else{ ?>
                          					<h5 class="about-page">Representative: <strong><?php echo $profile['fullname'];?></strong></h5>
                                    <h5 class="about-page">Street Address: <strong><?php echo $profile['street'];?></strong></h5>

                          				<?php } ?>
                          			</div>

                          			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        					<h5><a class="about-page" href="#">Email: <strong><?php echo $profile['email']; ?></strong></a></h5>
                        					<h5 class="about-page">Phone: <strong><?php echo $profile['phone']; ?></strong></h5>
                        					<?php if($profile['doctor']){ ?>
                        						<h5 class="about-page">Birthday:  <strong><?php echo date ("jS F Y", strtotime($profile['birthdate'])); ?></strong></h5>
                        					<?php } ?>
                          			</div>
                              </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
            <?php

            unset($a, $profile);

          } ?>


            <div class="text-center">
              <nav aria-label="Page navigation">
                <ul class="pagination">


                  <?php if($pn > 1){ ?>

                    <li>
                      <a href="?page=result&pn=<?php echo ($pn-1)."&from=$a[date_from]&to=$a[date_to]&division=$a[division]&zilla=$a[zilla]&thana=$a[thana]&duration=$a[duration]&day_month=$a[dat_month]&type=job"; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>

                  <?php }

                  $i = 1;
                  $j = 5;
                  if($pn > 3){
                    $i = $pn - 2;
                    $j = $pn + 2;

                  }

                  if($numPage - $pn < 2){
                    if($numPage >= 5){
                      $i = $numPage - 4;
                    }
                    $j = $numPage;
                  }
                  while($i <= $j){ ?>

                     <li class="<?php if($pn == $i) echo 'active';?>"><a href="?page=result&pn=<?php echo $i."&from=$a[date_from]&to=$a[date_to]&division=$a[division]&zilla=$a[zilla]&thana=$a[thana]&duration=$a[duration]&day_month=$a[dat_month]&type=job";?>"><?php echo $i; ?></a></li>

                  <?php $i++;  } if($pn < $numPage){ ?>
                  <li>
                    <a href="?page=result&pn=<?php echo ($pn+1)."&from=$a[date_from]&to=$a[date_to]&division=$a[division]&zilla=$a[zilla]&thana=$a[thana]&duration=$a[duration]&day_month=$a[dat_month]&type=job"; ?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </nav>
            </div>
          </div>
        </div>

      <?php  }?>

        <div class="row">
          <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5">
            <a href="?page=jobs"  class="btn btn-black btn-block"><strong> Search More Jobs</strong></a>
          </div>
        </div>

    <?php

    unset($q, $r, $result, $num_rows, $numPage, $i, $j);
    }

    unset($from, $to, $day_month, $duration);
  }else{ ?>
    <div class="text-center">
      <h1><small>Wrong Entry!</small></h1>
    </div>
<?php
  }
  unset($start, $end, $division, $zilla, $thana, $_GET);
}else{ ?>
  <div class="text-center">
    <h1><small>Wrong Entry!</small></h1>
  </div>
<?php

}
