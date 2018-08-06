<?php

if($profileid == 'subs'){

	$start = 10*(int)$pn - 10;
	$end = 10*(int)$pn;

	$q = "SELECT * FROM sub  WHERE username = '$pageid' ORDER BY post_date DESC LIMIT ".$start.','.$end;
	$r = mysqli_query($dbc, $q);
	$num_rows = specific_data_count($dbc, 'sub', 'username', $pageid);

	$numPage = ceil($num_rows/10);

	unset($start, $end, $q);

	if($num_rows == 0){ ?>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
				<div class="alert alert-danger text-center">
					<strong>No Substitutes Search Found!</strong>
				</div>
			</div>
		</div>

	<?php }else{ ?>
		<div class="row">


				<?php
				while($a = mysqli_fetch_assoc($r)){ ?>
						<div class="panel  panel-default">
							<div class="panel-body panel-shadow">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<?php
									$profile = mysqli_fetch_assoc(data_user($dbc, $a['username']));
									?>

									<a class="about-page" href="?page=<?php echo $a['username'];?>"><strong><?php if($profile['doctor']){ echo $profile['fullname']; }else{ echo $profile['college']; }; ?></strong></a>

									<?php if($pageid == $_SESSION['username']){ ?>
									<ul class="tg-list pull-right">
										<li class="tg-list-item">
											<input onclick="toggle(<?php echo $a['id'];?>,'sub')"class="tgl tgl-flip" id="cb<?php echo $a['id'];?>" type="checkbox" <?php if($a['available'] == 1){ echo "checked";} ?>>
											<label class="tgl-btn" data-tg-off="Unavailable!" data-tg-on="Available!" for="cb<?php echo $a['id'];?>"></label>
										</li>
									</ul>
									<?php } ?>


									<hr>
									<p>From <strong><?php echo date ("jS F Y", strtotime($a['date_from'])); ?></strong> to <strong><?php echo date ("jS F Y", strtotime($a['date_to'])); ?></strong></p>
									<?php if($profile['doctor']){ ?>
										<p><label>Hospital: <?php echo $a['hospital_name']; ?></label></p>
									<?php } ?>
									<p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>
									<p><label>Duration: <?php echo $a['duration']." ".$a['day_month']; ?></label></p>


									<!-- Trigger the modal with a button -->
									<p><a href="#" data-toggle="modal" data-target="#modal<?php echo $a['id']; ?>">See Details</a></p>
									<i class="about-page">Posted on <?php echo date ("jS F Y", strtotime($a['post_date'])); ?></i>
									<a href="submit.php?id=<?php echo $a['id'];?>&cat=sub" class="btn btn-default"><strong>See Search Result For This</strong></a>


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
													<a class="about-page" href="page?=<?php echo $a['username'];?>"><strong><?php if($profile['doctor']){ echo $profile['fullname']; }else{ echo $profile['college']; }; ?></strong></a>


													<hr>
													<p>From <strong><?php echo date ("jS F Y", strtotime($a['date_from'])); ?></strong> to <strong><?php echo date ("jS F Y", strtotime($a['date_to'])); ?></strong></p>
													<p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>
													<p><label>Duration: <?php echo $a['duration']." ".$a['day_month']; ?></label></p>
													<p><label>Payment:</label> &#x9f3; <?php echo $a['payment']; ?></p>
													<?php if($profile['doctor']){ ?>
														<p><label>Hospital: <?php echo $a['hospital_name']; ?></label></p>
													<?php } ?>
													<label>Details:</label><p><?php echo $a['details']; ?></p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
			<?php
			unset($a, $profile);
			}
		 ?>


			<div class="text-center">
				<nav aria-label="Page navigation">
					<ul class="pagination">


						<?php if($pn > 1){ ?>

							<li>
								<a href="?page=<?php echo $pageid; ?>&profile=subs&pn=<?php echo $pn-1; ?>" aria-label="Previous">
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

							 <li class="<?php if($pn == $i) echo 'active';?>"><a href="?page=<?php echo $pageid; ?>&profile=subs&pn=<?php echo $i ?>"><?php echo $i; ?></a></li>

						<?php $i++;  } if($pn < $numPage){ ?>
						<li>
							<a href="?page=<?php echo $pageid; ?>&profile=subs&pn=<?php echo $pn+1; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</div>


<?php
	unset($i, $j);
	}
	unset($num_rows, $numPage, $r);
}elseif($profileid == 'ad'){

	$start = 10*(int)$pn - 10;
	$end = 10*(int)$pn;

	$q = "SELECT * FROM job_per  WHERE username = '$pageid' ORDER BY post_date DESC LIMIT ".$start.','.$end;
	$r = mysqli_query($dbc, $q);
	$num_rows = specific_data_count($dbc, 'job_per', 'username', $pageid);;

	$numPage = ceil($num_rows/10);

	unset($start, $end, $q);

	if($num_rows == 0){ ?>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
				<div class="alert alert-danger text-center">
					<strong>No Ads have been posted!</strong>
				</div>
			</div>
		</div>

	<?php }else{ ?>
		<div class="row">


				<?php
				while($a = mysqli_fetch_assoc($r)){ ?>
						<div class="panel  panel-default">
							<div class="panel-body panel-shadow">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<?php
	                $profile = mysqli_fetch_assoc(data_user($dbc, $a['username']));
	                ?>
	                <a class="about-page" href="?page=<?php echo $a['username'];?>"><strong><?php if($profile['doctor']){ echo $profile['fullname']; }else{ echo $profile['college']; }; ?></strong></a>

									<?php if($pageid == $_SESSION['username']){ ?>
									<ul class="tg-list pull-right">
										<li class="tg-list-item">
											<input onclick="toggle(<?php echo $a['id'];?>,'job_per')"class="tgl tgl-flip" id="cb<?php echo $a['id'];?>" type="checkbox" <?php if($a['available'] == 1){ echo "checked";} ?>>
											<label class="tgl-btn" data-tg-off="Unavailable!" data-tg-on="Available!" for="cb<?php echo $a['id'];?>"></label>
										</li>
									</ul>
									<?php } ?>


	                <hr>
	                <p>Deadline: <strong><?php echo date ("jS F Y", strtotime($a['deadline'])); ?></strong></p>
	                <?php if($profile['doctor']){ ?>
	                  <p>Hospital: <strong><?php echo $a['hospital']; ?></strong></p>
	                <?php } ?>
	                <p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>


									<!-- Trigger the modal with a button -->
									<p><a href="#" data-toggle="modal" data-target="#modal<?php echo $a['id']; ?>">See Details</a></p>
									<i class="about-page">Posted on <?php echo date ("jS F Y", strtotime($a['post_date'])); ?></i>


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

													<hr>
													<p>Deadline: <strong><?php echo date ("jS F Y", strtotime($a['deadline'])); ?></strong></p>
													<p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>

													<?php if($profile['doctor']){ ?>
														<p><label>Hospital: <?php echo $a['hospital']; ?></label></p>
													<?php } ?>
													<label>Details:</label><p><?php echo $a['details']; ?></p>





												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
			<?php
			unset($a, $profile);
			}

			?>


			<div class="text-center">
				<nav aria-label="Page navigation">
					<ul class="pagination">


						<?php if($pn > 1){ ?>

							<li>
								<a href="?page=<?php echo $pageid; ?>&profile=subs&pn=<?php echo $pn-1; ?>" aria-label="Previous">
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

							 <li class="<?php if($pn == $i) echo 'active';?>"><a href="?page=<?php echo $pageid; ?>&profile=ad&pn=<?php echo $i ?>"><?php echo $i; ?></a></li>

						<?php $i++;  } if($pn < $numPage){ ?>
						<li>
							<a href="?page=<?php echo $pageid; ?>&profile=subs&pn=<?php echo $pn+1; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</div>


<?php
	unset($i, $j);
	}
	unset($num_rows, $numPage, $r);

}elseif ($profileid == 'jobs') {

		$start = 10*(int)$pn - 10;
	  $end = 10*(int)$pn;

	  $q = "SELECT * FROM job WHERE username = '$pageid' ORDER BY post_date DESC LIMIT ".$start.','.$end;
	  $r = mysqli_query($dbc, $q);
	  $num_rows = specific_data_count($dbc, 'sub', 'username', $pageid);;

	  $numPage = ceil($num_rows/10);

		unset($start, $end, $q);

	  if($num_rows == 0){ ?>

	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
	        <div class="alert alert-danger text-center">
	          <strong>No Jobs Search Found!</strong>
	        </div>
	      </div>
	    </div>

	  <?php }else{ ?>
	    <div class="row">
	        <?php
	          while($a = mysqli_fetch_assoc($r)){ ?>
	            <div class="panel panel-default">
	              <div class="panel-body panel-shadow">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                <?php
		                $profile = mysqli_fetch_assoc(data_user($dbc, $a['username']));
		                ?>


	                	<a class="about-page" href="?page=<?php echo $a['username'];?>"><strong><?php echo $profile['fullname']; ?></strong></a>

										<?php if($pageid == $_SESSION['username']){ ?>
										<ul class="tg-list pull-right">
											<li class="tg-list-item">
										    <input onclick="toggle(<?php echo $a['id'];?>,'job')"class="tgl tgl-flip" id="cb<?php echo $a['id'];?>" type="checkbox" <?php if($a['available'] == 1){ echo "checked";} ?>>
										    <label class="tgl-btn" data-tg-off="Unavailable!" data-tg-on="Available!" for="cb<?php echo $a['id'];?>"></label>
											</li>
										</ul>
										<?php } ?>


										<hr>
		                <p>From <strong><?php echo date ("jS F Y", strtotime($a['date_from'])); ?></strong> to <strong><?php echo date ("jS F Y", strtotime($a['date_to'])); ?></strong></p>
		                <p><label>Place:</label> <?php echo $a['thana']; ?>, <?php echo $a['zilla']; ?>, <?php echo $a['division']; ?></p>
		                <p><label>Duration: <?php echo $a['duration']." ".$a['day_month']; ?></label></p>
										<i class="about-page">Posted on <?php echo date ("jS F Y", strtotime($a['post_date'])); ?></i>
										<a href="submit.php?id=<?php echo $a['id'];?>&cat=job" class="btn btn-default"><strong>See Search Result For This</strong></a>
	              	</div>
	            	</div>
							</div>
	          <?php
						unset($a, $profile);
						}
						?>

	          <div class="text-center">
	            <nav aria-label="Page navigation">
	              <ul class="pagination">


	                <?php if($pn > 1){ ?>

	                  <li>
	                    <a href="?page=<?php echo $pageid; ?>&profile=jobs&pn=<?php echo $pn-1; ?>" aria-label="Previous">
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

	                   <li class="<?php if($pn == $i) echo 'active';?>"><a href="?page=<?php echo $pageid; ?>&profile=jobs&pn=<?php echo $i ?>"><?php echo $i; ?></a></li>

	                <?php $i++;  } if($pn < $numPage){ ?>
	                <li>
	                  <a href="?page=<?php echo $pageid; ?>&profile=jobs&pn=<?php echo $pn+1; ?>" aria-label="Next">
	                    <span aria-hidden="true">&raquo;</span>
	                  </a>
	                </li>
	                <?php } ?>
	              </ul>
	            </nav>
	          </div>

	      </div>
	  <?php
		unset($i, $j);
		}
		unset($num_rows, $numPage, $r);

}else{
	include_once('template/overview.php');
}
