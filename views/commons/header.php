<header>
		<div class="topbar">
			<div class="container">
				<ul>
					<li><i class="fa fa-envelope"></i><?php echo $introduceData[0]["site_email"]?></li>
					<li><i class="fa fa-phone"></i><?php echo $introduceData[0]["site_phone"]?></li>
				</ul>
				<a class="header-book button-show-booking-box" href="#" title="">Đặt lịch ngay</a>
			</div>
		</div>
		<div class="menu-bar">
			<div class="container">
				<div class="logo"><a href="<?php echo ROOT_URL;?>" title=""><img src="./public/images/logo.png" alt="website bông nails" /></a></div>
				<div class="menu">
					<nav>
						<ul>
							<?php
								foreach($menuiData as $value){
									if($value["menui_id"] != "4"){
										echo '<li><a href="'.BASE_URL.$value["menui_link"].'" title='.$value["menui_title"].'>'.$value["menui_name"].'</a></li>';
									}
								}
							?>	
						</ul>
						<div class="header-links">
							<form>
								<input type="text" placeholder="Enter Your Search Keyword" />
								<button><i class="fa fa-search"></i></button>
							</form>
							<!-- <a href="#" title=""><img src="images/cart-icon.png" alt="" /><span>0</span></a> -->
							<a class="search-btn" href="#" title=""><i class="fa fa-search"></i></a>
						</div>
					</nav>
				</div>
			</div>
		</div><!-- Menu  Bar -->
		<div class="responsive-header">
			<div class="logo"><a href="index.html" title=""><img src="images/logo.png" alt="" /></a></div>
			<div class="header-links">
				<form>
					<input type="text" placeholder="Enter Your Search Keyword" />
					<button><i class="fa fa-search"></i></button>
				</form>
				<a class="responsive-menu-btn" href="#" title=""><i class="fa fa-bars"></i></a>
				<a href="cart.html" title=""><img src="images/cart-icon.png" alt="" /><span>0</span></a>
				<a class="search-btn" href="#" title=""><i class="fa fa-search"></i></a>
			</div>
			<ul>
				<?php
					foreach($menuiData as $value){
						if($value["menui_id"] != "4"){
							echo '<li><a href="'.BASE_URL.$value["menui_link"].'" title='.$value["menui_title"].'>'.$value["menui_name"].'</a></li>';
						}
					}
				?>	
			</ul>
		</div><!-- Responsive Header -->
	</header><!-- Header -->