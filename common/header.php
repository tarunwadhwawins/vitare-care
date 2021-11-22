<header>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-1 col-md-2 d-flex align-items-center">
        <div class="logo">
          <a href="dashboard"><img src="assets/images/logo.png" alt=""></a>
        </div>
        <div class="menuBar">
          <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="organisation">
          <select class="form-select" aria-label="Default select example">
            <option selected>Select Organisation</option>
            <option value="1">Organisation One</option>
            <option value="2">Organisation Two</option>
            <option value="3">Organisation Three</option>
          </select>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="organisation">
          <select class="form-select" aria-label="Default select example">
            <option selected>Select Location</option>
            <option value="1">Location One</option>
            <option value="2">Location Two</option>
            <option value="3">Location Three</option>
          </select>
        </div>
      </div>
      <div class="col-md-2">
        <input type="text" class="form-control" placeholder="Search" class="searchInput">
      </div>
      <div class="col-xl-3 col-md-2">
        <div class="dropdown quickAction">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Quick Action
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" data-bs-toggle="modal" href="#addAppointment">Add Appointment</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" href="#manangePatients">Add Patient</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" href="#manageCareCoordinator">Add Care Coordinator</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" href="#addTask">Add Task</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="profileNot">
          <ul>
            <li>
              <div class="dropdown quickAction">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" data-bs-toggle="modal" href="#addAppointment">Lorem ipsum dolor sit.</a></li>
                  <li><a class="dropdown-item" data-bs-toggle="modal" href="#manangePatients">Lorem ipsum dolor sit.</a></li>
                  <li><a class="dropdown-item" data-bs-toggle="modal" href="#manageCareCoordinator">Lorem ipsum dolor sit.</a></li>
                  <li><a class="dropdown-item" data-bs-toggle="modal" href="#addTask">Lorem ipsum dolor sit.</a></li>
                </ul>
              </div>
            </li>
            <li>
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="profileTitle">
                    <p class="name">Jane Doe</p>
                    <p class="role">Admin</p>
                  </div>
                  <img src="assets/images/profile.jpg" alt="">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">My Profile</a></li>
                  <li><a class="dropdown-item" href="#">Setting</a></li>
                  <li><a class="dropdown-item" href="index">Log Out</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>