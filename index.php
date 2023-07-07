<?php
if (isset($_GET['Error'])) {
?>
	<div class="modal fade modal-auto-clear" id="error" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">

					<h5 class="modal-title text-center" id="exampleModalLabel"> <?php echo $_GET['Error']; ?></h5>

					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

			</div>
		</div>
	</div>
<?php } ?>

<?php include 'include/header.php'; ?>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">


				<h5 class="modal-title text-center" id="exampleModalLabel">Sign In</h5>

				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>


			<form action="login.php" method="post" class="modal-body">


				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Email address</label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="mb-3">
					<h6 class="text-center ">don't have an Account ?<a href="#" data-bs-toggle="modal" data-bs-target="#signupmodel" style="color : green; text-decoration : underline;">Register here</a></h6>
				</div>
				<div class="modal-footer ">
					<!-- <button type="button" class="btn btn-outline-primary ">Login</button> -->

					<button type="submit" name="submit" class="btn btn-outline-primary">Login</button>
					<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">close</button>
				</div>
			</form>


		</div>
	</div>
</div>
<div class="modal fade" id="signupmodel" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center" id="exampleModalLabel">Registration</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<form action="registration.php" method="post" class="modal-body">


				<div class="mb-3">
					<input type="text" placeholder="First Name" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
				</div>
				<div class="mb-3">
					<input type="text" placeholder="Last Name" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
				</div>
				<div class="mb-3">
					<input type="text" name="email" id="email" placeholder="Your Email" class="form-control" autocomplete="off" required>
				</div>
				<div class="mb-3">
					<input type="text" name="mobile" id="mobile" class="form-control" maxlength="10" placeholder="Mobile Number" autocomplete="off" required>
				</div>
				<div class="mb-3">
					<input type="text" name="state" id="state" class="form-control" placeholder="Your State" autocomplete="off" required>
				</div>
				<div class="mb-3">
					<input type="text" name="city" id="city" class="form-control" placeholder="Your City" autocomplete="off" required>
				</div>
				<div class="mb-3">
					<input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off" required>
				</div>
				<div class="mb-3">
					<input type="password" name="RepeatPassword" class="form-control" id="RepeatPassword" placeholder="Confirm Password" autocomplete="off" required>
				</div>
				<div class="mb-3">
					<h6 class="text-center">Already have an Account ? <a style=" color : green; text-decoration : underline;" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">login here</a></h6>
				</div>
				<div class="modal-footer ">
					<button type="submit" id="submit" name="submit" value="Register Now" class="btn btn-outline-primary">Register Now</button>
					<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Header Section -->

<!-- Header Section end -->

<!-- Start Home -->
<section class="home  flash" id="home">
	<div class="container-css">
		<br>
		<h1 class=" slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
		<h1 class=" slideInRight" data-wow-delay="1s">We are ready to <span>fit you</span></h1>
		<br>
		<a href="#" class="getstart" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>
	</div>



</section>
<!-- End Home -->

<!-- Start Gallery -->
<section class="gallery" id="gallery">
	<h2>Workout Gallery</h2>
	<div class="content">
		<div class="box slideInLeft">
			<img src="images/gallery1.jpg" alt="gallery" />
		</div>
		<div class="box slideInRight">
			<img src="images/gallery2.jpg" alt="gallery" />
		</div>
		<div class="box slideInLeft">
			<img src="images/gallery3.jpg" alt="gallery" />
		</div>
		<div class="box slideInRight">
			<img src="images/gallery4.jpg" alt="gallery" />
		</div>
	</div>
</section>
<!-- End Gallery -->
<!--start Services -->
<section class="services" id="service">

	<div class="container">
		<h2 class="text-center" style="padding: 20px 20px 20px;">Our Service</h2>
		<div class="row justify-content-center text-center">


			<div class="col-10 col-md-6 col-lg-4">


				<img src="https://powerhousegym.com/wp-content/uploads/2021/03/01-state-of-the-art-equipment.png" alt="State-of-the-Art Equipment" class="img-fluid px-3 pb-4">


				<h3>State-of-the-Art Equipment</h3>

				<p class="grey-text light px-3 mb-5">Each Powerhouse facility offers high quality cardio &amp; strength equipment.</p>

			</div>


			<div class="col-10 col-md-6 col-lg-4">


				<img src="https://powerhousegym.com/wp-content/uploads/2021/03/02-group-classes.png" alt="Group Classes" class="img-fluid px-3 pb-4">


				<h3>Group Classes</h3>

				<p class="grey-text light px-3 mb-5">We offer classes for yoga, spin, Zumba, Circuit Training, MX4 and more.</p>

			</div>


			<div class="col-10 col-md-6 col-lg-4">


				<img src="https://powerhousegym.com/wp-content/uploads/2021/03/03-personal-trainers.png" alt="Personal Trainers" class="img-fluid px-3 pb-4">


				<h3>Personal Trainers</h3>

				<p class="grey-text light px-3 mb-5">Maximize your workout with the help of our personal trainers.</p>

			</div>


			<div class="col-10 col-md-6 col-lg-4">


				<img src="https://powerhousegym.com/wp-content/uploads/2021/03/04-spa-services.png" alt="Spa Services" class="img-fluid px-3 pb-4">


				<h3>Spa Services</h3>

				<p class="grey-text light px-3 mb-5">Relax after an intense workout with any one of our spa services.</p>

			</div>


			<div class="col-10 col-md-6 col-lg-4">


				<img src="https://powerhousegym.com/wp-content/uploads/2021/03/05-childcare.png" alt="Childcare" class="img-fluid px-3 pb-4">


				<h3>Childcare</h3>

				<p class="grey-text light px-3 mb-5">Enjoy your workout knowing your children are safe &amp; nearby.</p>

			</div>


			<div class="col-10 col-md-6 col-lg-4">


				<img src="https://powerhousegym.com/wp-content/uploads/2021/03/06-aquatic-pool.png" alt="Aquatic Pool" class="img-fluid px-3 pb-4">


				<h3>Aquatic Pool</h3>

				<p class="grey-text light px-3 mb-5">Get your cardio on in another way, by swimming laps in the pool.</p>

			</div>


			<div class="col-10 col-md-6 col-lg-4">


				<img src="https://powerhousegym.com/wp-content/uploads/2021/03/07-courts.png" alt="Courts" class="img-fluid px-3 pb-4">


				<h3>Courts</h3>

				<p class="grey-text light px-3 mb-5">Workout with your friends by hitting the racquetball &amp; basketball courts.</p>

			</div>


			<div class="col-10 col-md-6 col-lg-4">


				<img src="https://powerhousegym.com/wp-content/uploads/2021/03/08-private-locker-rooms.png" alt="Private Locker Rooms" class="img-fluid px-3 pb-4">


				<h3>Private Locker Rooms</h3>

				<p class="grey-text light px-3 mb-5">Our locker rooms are equipped to help you be on your way after a workout.</p>

			</div>


			<div class="col-10 col-md-6 col-lg-4">


				<img src="https://powerhousegym.com/wp-content/uploads/2021/03/09-247-access.png" alt="24/7 Access" class="img-fluid px-3 pb-4">


				<h3>24/7 Access</h3>

				<p class="grey-text light px-3 mb-5">Workout when the time is right for you with 24/7 access.</p>

			</div>



		</div>

	</div>

</section>

<!--End Services -->
<!-- start-schedule -->
<section class="schedule section" id="schedule">
	<div class="container">
		<div class="row align-items-center col-lg-12 py-5 col-md-12 col-12"">
				<h2 class=" text-center">Classes Schedule</h2>
			<table class="table table-bordered table-responsive schedule-table aos-init" data-aos="fade-up" data-aos-delay="300">
				<thead class="thead-light">
					<tr class="text-center">
						<th><i class="fa fa-calendar"></i></th>
						<th>Mon</th>
						<th>Tue</th>
						<th>Wed</th>
						<th>Thu</th>
						<th>Fri</th>
						<th>Sat</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><small>7:00 am</small></td>
						<td>
							<strong>Cardio</strong>
							<span>7:00 am - 9:00 am</span>
						</td>
						<td>
							<strong>Power Fitness</strong>
							<span>7:00 am - 9:00 am</span>
						</td>
						<td></td>
						<td></td>
						<td>
							<strong>Yoga Section</strong>
							<span>7:00 am - 9:00 am</span>
						</td>
					</tr>

					<tr>
						<td><small>9:00 am</small></td>
						<td></td>
						<td></td>
						<td>
							<strong>Boxing</strong>
							<span>8:00 am - 9:00 am</span>
						</td>
						<td>
							<strong>Areobic</strong>
							<span>8:00 am - 9:00 am</span>
						</td>
						<td></td>
						<td>
							<strong>Cardio</strong>
							<span>8:00 am - 9:00 am</span>
						</td>
					</tr>

					<tr>
						<td><small>11:00 am</small></td>
						<td></td>
						<td>
							<strong>Boxing</strong>
							<span>11:00 am - 2:00 pm</span>
						</td>
						<td>
							<strong>Areobic</strong>
							<span>11:30 am - 3:30 pm</span>
						</td>
						<td></td>
						<td>
							<strong>Body work</strong>
							<span>11:50 am - 5:20 pm</span>
						</td>
					</tr>

					<tr>
						<td><small>2:00 pm</small></td>
						<td>
							<strong>Boxing</strong>
							<span>2:00 pm - 4:00 pm</span>
						</td>
						<td>
							<strong>Power lifting</strong>
							<span>3:00 pm - 6:00 pm</span>
						</td>
						<td></td>
						<td>
							<strong>Cardio</strong>
							<span>6:00 pm - 9:00 pm</span>
						</td>
						<td></td>
						<td>
							<strong>Crossfit</strong>
							<span>5:00 pm - 7:00 pm</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
<!-- End Schedule -->


<!-- Pricing Section -->
<section class="pricing-section spad">
	<div class="container">
		<div class="section-title text-center">

			<h2>Pricing plans</h2>
			<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
		</div>
		<div class="row">
			<?php

			$sql = "SELECT id, category, titlename, PackageType, PackageDuratiobn, Price, uploadphoto, Description, create_date from tbladdpackage";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_OBJ);
			$cnt = 1;
			if ($query->rowCount() > 0) {
				foreach ($results as $result) {
			?>
					<div class="col-lg-3 col-sm-6">
						<div class="pricing-item begginer">
							<div class="pi-top">
								<h4><?php echo $result->titlename; ?></h4>
							</div>
							<div class="pi-price">
								<h3><?php echo htmlentities($result->Price); ?></h3>
								<p> <?php echo $result->PackageDuratiobn; ?></p>
							</div>
							<ul>
								<?php echo $result->Description; ?>

							</ul>
							<?php if (strlen($_SESSION['uid']) == 0) : ?>
								<a href="" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Join Now</a>
							<?php else : ?>
								<!-- <a href="#" class="site-btn sb-line-gradient">Booking Now</a> -->
								<form method='post'>
									<input type='hidden' name='pid' value='<?php echo htmlentities($result->id); ?>'>


									<input class='site-btn sb-line-gradient' type='submit' name='submit' value='Booking Now' onclick="return confirm('Do you really want to book this package.');">
								</form>
							<?php endif; ?>
						</div>
					</div>
			<?php $cnt = $cnt + 1;
				}
			} ?>
		</div>
	</div>
</section>

<!-- Start Price -->


<section class="price-package" id="price">
	<div class="container">
		<h2>Choose Your Package</h2>
		<p class="title-p">Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
		<div class="content">
			<?php

			$sql = "SELECT id, category, titlename, PackageType, PackageDuratiobn, Price, uploadphoto, Description, create_date from tbladdpackage";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_OBJ);
			$cnt = 1;
			if ($query->rowCount() > 0) {
				foreach ($results as $result) {
			?>
					<div class="box  bounceInUp">
						<div class="inner">
							<div class="price-tag">
								<h3>$<?php echo htmlentities($result->Price);
										echo " / " . $result->PackageDuratiobn;
										?></h3>

							</div>
							<div class="img">
								<img src="images/price1.jpg" alt="price" />
							</div>
							<br>
							<div class="text">
								<h4><?php echo $result->titlename; ?></h4>
								<?php echo $result->Description; ?>
								<?php if (strlen($_SESSION['uid']) == 0) : ?>
									<a href="" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Join Now</a>
							<?php else : ?>
								<form method='post'>
									<input type='hidden' name='pid' value='<?php echo htmlentities($result->id); ?>'>
									<input class='btn' type='submit' name='submit' value='Booking Now' onclick="return confirm('Do you really want to book this package.');">


									</form>
							<?php endif; ?>
							</div>
						</div>
					</div>

			<?php }
			} ?>
		</div>
	</div>
</section>
<!-- End Price -->
<section class="about" id="about">
	<div class="container">
		<h4 class="text-center">About us</h4>
		<div class="content">
			<div class="box  bounceInUp">
				<div class="inner">
					<div class="img">
						<img src="images/about1.jpg" alt="about" />
					</div>
					<div class="text">
						<h4>Free Consultation</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
							has been the industry's standard dummy text ever since the 1500s, when an unknown
							printer took a galley of type and scrambled it to make a type specimen book. It has
							survived not only five centuries</p>
					</div>
				</div>
			</div>
			<div class="box  bounceInUp" data-wow-delay="0.2s">
				<div class="inner">
					<div class="img">
						<img src="images/about2.jpg" alt="about" />
					</div>
					<div class="text">
						<h4>Best Training</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
							has been the industry's standard dummy text ever since the 1500s, when an unknown
							printer took a galley of type and scrambled it to make a type specimen book. It has
							survived not only five centuries</p>
					</div>
				</div>
			</div>
			<div class="box  bounceInUp" data-wow-delay="0.4s">
				<div class="inner">
					<div class="img">
						<img src="images/about3.jpg" alt="about" />
					</div>
					<div class="text">
						<h4>Build Perfect Body</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
							has been the industry's standard dummy text ever since the 1500s, when an unknown
							printer took a galley of type and scrambled it to make a type specimen book. It has
							survived not only five centuries</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer Section -->
<?php include 'include/footer.php'; ?>
<!-- Footer Section end -->

