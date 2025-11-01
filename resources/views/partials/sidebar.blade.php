	<nav id="sidebar" class="sidebar js-sidebar">
		<div class="sidebar-content js-simplebar">
			<a class="sidebar-brand" href="index.html">
				<!-- Logo untuk Light Mode (terlihat secara default) -->
				<img src="{{ asset('img/logo-light.png') }}" id="logo-light" alt="Logo" class="img-fluid" width="132">
				
				<!-- Logo untuk Dark Mode (tersembunyi secara default) -->
				<img src="{{ asset('img/logo-dark.png') }}" id="logo-dark" alt="Logo Dark" class="img-fluid d-none" width="132">
			</a>
			<ul class="sidebar-nav">
				<!-- ===== TOP SECTION ===== -->
				<li class="sidebar-item active">
					<a class="sidebar-link" href="index.html">
						<span class="capsule">
							<i class="icon-box align-middle" data-feather="home" width="18"></i>
							<span class="txt align-middle ms-2">Dashboard</span>
						</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="pages-profile.html">
					<i class="align-middle" data-feather="box" width="18"></i>
					<span class="align-middle ms-2">Product</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="pages-sign-in.html">
					<i class="align-middle" data-feather="heart" width="18"></i>
					<span class="align-middle ms-2">Favorites</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="pages-sign-up.html">
					<i class="align-middle" data-feather="message-square" width="18"></i>
					<span class="align-middle ms-2">Messenger</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="pages-blank.html">
					<i class="align-middle" data-feather="list" width="18"></i>
					<span class="align-middle ms-2">Order Lists</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="pages-blank.html">
					<i class="align-middle" data-feather="shopping-bag" width="18"></i>
					<span class="align-middle ms-2">E-commerce</span>
					</a>
				</li>

				<!-- ===== SECTION TITLE ===== -->
				<li class="sidebar-header text-uppercase">Pages</li>

				<!-- ===== BOTTOM SECTION ===== -->
				<li class="sidebar-item">
					<a class="sidebar-link" href="ui-buttons.html">
					<i class="align-middle" data-feather="folder" width="18"></i>
					<span class="align-middle ms-2">File Manager</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="ui-forms.html">
					<i class="align-middle" data-feather="calendar" width="18"></i>
					<span class="align-middle ms-2">Calendar</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="ui-cards.html">
					<i class="align-middle" data-feather="rss" width="18"></i>
					<span class="align-middle ms-2">Feed</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="ui-typography.html">
					<i class="align-middle" data-feather="check-square" width="18"></i>
					<span class="align-middle ms-2">To Do</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="icons-feather.html">
					<i class="align-middle" data-feather="users" width="18"></i>
					<span class="align-middle ms-2">Contact</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="icons-feather.html">
					<i class="align-middle" data-feather="file-text" width="18"></i>
					<span class="align-middle ms-2">Invoice</span>
					</a>
				</li>

				<!-- ===== SETTINGS & LOGOUT ===== -->
				<li class="sidebar-item">
					<a class="sidebar-link" href="charts-chartjs.html">
					<i class="align-middle" data-feather="settings" width="18"></i>
					<span class="align-middle ms-2">Settings</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="maps-google.html">
					<i class="align-middle" data-feather="log-out" width="18"></i>
					<span class="align-middle ms-2">Log Out</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>