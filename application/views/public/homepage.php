<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

$this->load->view('templates/_parts/public_master_slider');
?>
<div class="content_top">
	<div class="container">
		<?php
		for ($i=0; $i < 4; $i++) {
			echo '
			<div class="col-md-3 box_1">
				<a href="single.html"><img src="assets/images/pic'.($i+8).'.jpg" class="img-responsive" alt=""/></a>
				<div class="box_2">
					<div class="special-wrap"><div class="hot_offer"><span class="m_11">Hot Offer</span></div><div class="forclosure"><span class="m_12">Special Offer</span></div></div>
				</div>
				<div class="box_3">
					<h3><a href="single.html">House'.($i+3).'</a></h3>
					<div class="boxed_mini_details clearfix">
						<span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"> </i>2</span>
						<span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>2</span>
						<span class="bedrooms last"><strong>Beds</strong><i class="fa fa-bed"></i>2</span>
					</div>
				</div>
			</div>
			';
		}
		?>
	</div> <!-- END of container -->
	<div class="clearfix"></div>
</div> <!-- END of content_top -->

<div class="container content_bottom">
	<div class="col-md-2">
		<div class="widget">
			<div class="title"><h3><i class="fa fa-meh-o men"> </i>Room For Rent</h3></div>
			<ul class="real-widget">
				<li><a href="#">commencial(3)</a></li>
				<li><a href="#">Housing(16)</a></li>
			</ul>
		</div>
	</div>
	<div class="col-md-7">
		<div class="sap-tabs">
			<div id="horizontalTab" style="display:block;width:100%;margin:0px;">
				<div class="tab_grid">
					<ul class="resp-tab-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab">
							<span>Housing</span>
						</li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">
							<span>Flat</span>
						</li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab">
							<span>Hostel</span>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<ul class="tab_img tab_1">
						<?php
						for ($i=0; $i < 6; $i++) {
							echo '
							<li class="col-md-4">
								<div class="client_box1">
									<img src="assets/images/pic'.($i+1).'.jpg" class="img-responsive">
									<div class="box_type">$&nbsp;650</div>
									<h3 class="m_1"><a href="single.html">Dolor Sit</a></h3>
									<div class="boxed_mini_details clearfix">
										<span class="area first"><strong>Garage</strong> <i class="fa fa-plane icon1"> </i>2</span>
										<span class="status"><strong>Bath</strong> <i class="fa fa-retweet icon1"> </i>2</span>
										<span class="bedrooms last"><strong>Beds</strong> <i class="fa fa-building-o icon1"> </i>2</span>
									</div>
								</div>
							</li>
							';
						}
						?>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
					<ul class="tab_img tab_1">
						<?php
						for ($i=0; $i < 6; $i++) {
							echo '
							<li class="col-md-4">
								<div class="client_box1">
									<img src="assets/images/pic'.($i+1).'.jpg" class="img-responsive">
									<div class="box_type">$&nbsp;650</div>
									<h3 class="m_1"><a href="single.html">Dolor Sit</a></h3>
									<div class="boxed_mini_details clearfix">
										<span class="area first"><strong>Garage</strong> <i class="fa fa-plane icon1"> </i>2</span>
										<span class="status"><strong>Bath</strong> <i class="fa fa-retweet icon1"> </i>2</span>
										<span class="bedrooms last"><strong>Beds</strong> <i class="fa fa-building-o icon1"> </i>2</span>
									</div>
								</div>
							</li>
							';
						}
						?>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<ul class="tab_img tab_1">
						<?php
						for ($i=0; $i < 6; $i++) {
							echo '
							<li class="col-md-4">
								<div class="client_box1">
									<img src="assets/images/pic'.($i+1).'.jpg" class="img-responsive">
									<div class="box_type">$&nbsp;650</div>
									<h3 class="m_1"><a href="single.html">Dolor Sit</a></h3>
									<div class="boxed_mini_details clearfix">
										<span class="area first"><strong>Garage</strong> <i class="fa fa-plane icon1"> </i>2</span>
										<span class="status"><strong>Bath</strong> <i class="fa fa-retweet icon1"> </i>2</span>
										<span class="bedrooms last"><strong>Beds</strong> <i class="fa fa-building-o icon1"> </i>2</span>
									</div>
								</div>
							</li>
							';
						}
						?>
						<div class="clearfix"></div>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="blog_list2">
			<div class="login_box">
				<h3 class="title">Member Login</h3>
				<form>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password">
					</div>
					<input type="submit" value="Sign in"> <a href="<?php echo base_url('register'); ?>">Create Account?</a>
				</form>
			</div>
			<h3>Our Agents</h3>
			<ul class="blog-list3 list_1">
				<li class="blog-list3-img"><img src="assets/images/pic12.jpg" class="img-responsive" alt=""></li>
				<li class="blog-list3-desc">
					<h4><a href="#">Adi Sucipto</a></h4>
					<ul class="admin_desc">
						<li class="list_top"><i class="fa fa-phone-square ph"> </i>
							<p class="m_2">(62)8123453067</p></li>
							<div class="clearfix"> </div>
							<li class="list_top"><i class="fa fa-envelope ph"> </i>
								<p class="m_2"><a href="malito:scp@accost.com">scp@accost.com</a></p></li>
								<div class="clearfix"> </div>
							</ul>
						</li>
						<div class="clearfix"> </div>
					</ul>
					<ul class="blog-list3 list_1">
						<li class="blog-list3-img"><img src="assets/images/pic13.jpg" class="img-responsive" alt=""></li>
						<li class="blog-list3-desc">
							<h4><a href="#">Adi Ramadhan</a></h4>
							<ul class="admin_desc">
								<li class="list_top"><i class="fa fa-phone-square ph"> </i>
									<p class="m_2">(62)85236455556</p></li>
									<div class="clearfix"> </div>
									<li class="list_top"><i class="fa fa-envelope ph"> </i>
										<p class="m_2"><a href="malito:ramdhan@accost.com">ramdhan@accost.com</a></p></li>
										<div class="clearfix"> </div>
									</ul>
								</li>
								<div class="clearfix"> </div>
							</ul>
							<ul class="blog-list3">
								<li class="blog-list3-img"><img src="assets/images/pic7.jpg" class="img-responsive" alt=""></li>
								<li class="blog-list3-desc">
									<h4><a href="#">Bambang Arif</a></h4>
									<ul class="admin_desc">
										<li class="list_top"><i class="fa fa-phone-square ph"> </i>
											<p class="m_2">(62)8123453057</p></li>
											<div class="clearfix"> </div>
											<li class="list_top"><i class="fa fa-envelope ph"> </i>
												<p class="m_2"><a href="malito:bembe@accost.com">bembe@accost.com</a></p></li>
												<div class="clearfix"> </div>
											</ul>
										</li>
										<div class="clearfix"> </div>
									</ul>
								</div>
							</div>
						</div>