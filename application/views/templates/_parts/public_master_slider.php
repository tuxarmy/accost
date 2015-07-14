<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li><img src="<?php echo base_url('assets/images/banner.jpg'); ?>" class="img-responsive" alt="">
				<div class="banner_desc">
					<div class="container">
						<h1>Looking for an accommodation in yogyakarta?</h1>
						<h2>Don't waste your time, we will find it for you.</h2>
					</div>
				</div>
			</li>
			<li><img src="<?php echo base_url('assets/images/banner1.jpg') ?>" class="img-responsive" alt=""/>
				<div class="banner_desc">
					<div class="container">
						<h1>Looking for an accommodation in yogyakarta?</h1>
						<h2>Don't waste your time, we will find it for you.</h2>
					</div>
				</div>
			</li>
			<li><img src="<?php echo base_url('assets/images/banner2.jpg'); ?>" class="img-responsive" alt="">
				<div class="banner_desc">
					<div class="container">
						<h1>Looking for an accommodation in yogyakarta?</h1>
						<h2>Don't waste your time, we will find it for you.</h2>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="search_form">
		<div class="container">
			<div class="col-xs-10 dropdown-buttons">
				<div class="col-xs-4 dropdown-button">
					<div class="section_room">
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All Locations</option>
							<option value="null">Business</option>         
							<option value="AX">First Class</option>
							<option value="AX">Premium Economy</option>
						</select>
					</div>
				</div>
				<div class="col-xs-4 dropdown-button">
					<div class="section_room">
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All Property types</option>
							<option value="null">House</option>         
							<option value="AX">Apartment</option>
							<option value="AX">Premium Economy</option>
						</select>
					</div>
				</div>
				<div class="col-xs-4 dropdown-button">
					<div class="section_room">
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All contracts</option>
							<option value="null">Sale</option>         
							<option value="AX">Rent</option>
							<option value="AX">Sold</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-xs-2 submit_button"> 
				<form>
					<input type="submit" value="Search">
				</form>
			</div>
		</div>
	</div>
</div>