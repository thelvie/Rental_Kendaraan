<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </li>
        <li>
          <button type="button" class="navbar-toggle">
            <img class="profile-img" src="./assets/images/profile.png">
          </button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title"><?php echo $page_web;?></li>
        <li class="navbar-search hidden-sm">
          <input id="search" type="text" placeholder="Search..">
          <button class="btn-search"><i class="fa fa-search"></i></button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown notification">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
            <div class="title">User</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username">Admin</h4>
            </div>
             <ul class="action">
              <li>
                <a href="<?php echo base_url();?>admin/setting">
                  Setting
                </a>
              </li>
              <li>
                <a href="<?php echo base_url();?>logout">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>