<div class="navbar">
	<!-- nav left -->
	<ul class="navbar-nav" style="display: flex; justify-content: center; align-items: center;">
		<li class="nav-item">
			<a class="nav-link">
				<i class="fas fa-bars" onclick="collapseSidebar()"></i>
			</a>
		</li>
		<li class="nav-item" style="margin-left: 50px;">
			<!-- <img src="assets/AT-pro-black.png" alt="ATPro logo" class="logo logo-light">
				<img src="assets/AT-pro-white.png" alt="ATPro logo" class="logo logo-dark"> -->
			<h2 style=" font-weight: 900;" class="ml3">Tiny College</h2>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
		</li>
	</ul>
	<!-- end nav left -->
	<!-- form -->
	<form class="navbar-search">
		<input type="text" name="Search" class="navbar-search-input" placeholder="Search...">
		<i class="fas fa-search"></i>
	</form>
	<!-- end form -->
	<!-- nav right -->
	<ul class="navbar-nav nav-right">
		<li class="nav-item mode">
			<a class="nav-link" href="#" onclick="switchTheme()">
				<i class="fas fa-moon dark-icon"></i>
				<i class="fas fa-sun light-icon"></i>
			</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link">
				<i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i>
				<span class="navbar-badge">15</span>
			</a>
			<ul id="notification-menu" class="dropdown-menu notification-menu">
				<div class="dropdown-menu-header">
					<span>
						Thông báo
					</span>
				</div>
				<div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
					<li class="dropdown-menu-item">
						<a href="#" class="dropdown-menu-link">
							<div>
								<i class="fas fa-tasks"></i>
							</div>
							<span>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
								<br>
								<span>
									15/07/2029
								</span>
							</span>
						</a>
					</li>
				</div>
				<div class="dropdown-menu-footer">
					<span>
						View all notifications
					</span>
				</div>
			</ul>
		</li>
		<li class="nav-item avt-wrapper">
			<div class="avt dropdown">
				<img src="https://png.pngtree.com/png-clipart/20210512/ourlarge/pngtree-gray-white-cute-pet-dog-avatar-png-image_3268181.png" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
				<ul id="user-menu" class="dropdown-menu">
					<li class="dropdown-menu-item">
						<a class="dropdown-menu-link">
							<div>
								<i class="fas fa-user-tie"></i>
							</div>
							<span>Profile</span>
						</a>
					</li>
					<li class="dropdown-menu-item">
						<a href="#" class="dropdown-menu-link">
							<div>
								<i class="fas fa-cog"></i>
							</div>
							<span>Settings</span>
						</a>
					</li>
					<li class="dropdown-menu-item">
						<a href="#" class="dropdown-menu-link">
							<div>
								<i class="far fa-credit-card"></i>
							</div>
							<span>Payments</span>
						</a>
					</li>
					<li class="dropdown-menu-item">
						<a href="#" class="dropdown-menu-link">
							<div>
								<i class="fas fa-spinner"></i>
							</div>
							<span>Projects</span>
						</a>
					</li>
					<li class="dropdown-menu-item">
						<a href="#" class="dropdown-menu-link">
							<div>
								<i class="fas fa-sign-out-alt"></i>
							</div>
							<span>Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</li>
	</ul>
	<!-- end nav right -->
</div>

<script>
	// Wrap every letter in a span
	var textWrapper = document.querySelector('.ml3');
	textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

	anime.timeline({
			loop: true
		})
		.add({
			targets: '.ml3 .letter',
			opacity: [0, 1],
			easing: "easeInOutQuad",
			duration: 2250,
			delay: (el, i) => 150 * (i + 1)
		}).add({
			targets: '.ml3',
			opacity: 0,
			duration: 1000,
			easing: "easeOutExpo",
			delay: 1000
		});
</script>