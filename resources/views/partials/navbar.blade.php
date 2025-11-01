			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          			<i class="hamburger align-self-center"></i>
        		</a>

				<div class="flex-grow-1 d-none d-sm-block"></div>

				<form class="d-none d-sm-inline-block mx-1" action="#" method="GET">
					<div class="position-relative px-1">
						<!-- Ikon kaca pembesar (Feather) -->
						<i data-feather="search" class="position-absolute top-50 translate-middle-y text-secondary search-icon"
						style="left: .85rem; width: 1rem; height: 1rem;"></i>

						<!-- Input rounded-pill dengan warna gelap -->
						<input type="text" name="q"
							class="form-control form-control-lg rounded-pill ps-5"
							placeholder="Search"
							{{-- style="min-width:280px; background:#2A2E34; color:#ECF0F1;"> --}}
							>
					</div>
				</form>
				
				<div class="flex-grow-1 d-none d-sm-block"></div>

				<div class="navbar-collapse collapse" style="flex-basis:auto; flex-grow:0;">
					<ul class="navbar-nav navbar-align">
                        <li class="nav-item">
                            <a class="nav-icon js-theme-toggle" href="#" aria-label="Toggle theme">
                                <span class="theme-icon align-middle" aria-hidden="true"></span>
                            </a>
                        </li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<!-- 1. File blade / html -->
<li class="nav-item dropdown user-dd">
  {{-- MOBILE : only gear -----------------------}}
  <a class="nav-icon dropdown-toggle d-inline-block d-sm-none"
     href="#" data-bs-toggle="dropdown">
    <i data-feather="settings"></i>
  </a>

  {{-- DESKTOP : avatar + texts + round arrow --}}
  <div class="d-none d-sm-flex align-items-center">
    {{-- avatar ----------------}}
    <span class="avatar-box">
      <img src="{{ asset('img/avatar.png') }}" alt="Moni Roy">
    </span>

    {{-- stacked texts --------}}
    <div class="info mx-2">
      <div class="name">Moni Roy</div>
      <div class="role">Admin</div>
    </div>

    {{-- round arrow button --}}
    <a href="#" class="arrow-circle" data-bs-toggle="dropdown-menu" data-bs-target="#userDropdown">
      <i data-feather="chevron-down"></i>
    </a>
  </div>

  {{-- dropdown menu ---------}}
  <div class="dropdown-menu dropdown-menu-end" id="userDropdown">
    <a class="dropdown-item" href="pages-profile.html">
      <i class="align-middle me-1" data-feather="user"></i> Profile
    </a>
    <a class="dropdown-item" href="#">
      <i class="align-middle me-1" data-feather="pie-chart"></i> Analytics
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="index.html">
      <i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy
    </a>
    <a class="dropdown-item" href="#">
      <i class="align-middle me-1" data-feather="help-circle"></i> Help Center
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Log out</a>
  </div>
</li>
					</ul>
				</div>
			</nav>