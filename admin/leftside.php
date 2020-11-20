
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
	  <h3><a href="index.php">PharmaListing</a></h3>
	  </div>
	  
	  <nav class="navbar navbar-expand-lg navbar-primary ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                     <a class="navbar-brand" href="../index.php">Home</a>
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                  <li class="nav-item active">
                                    <a class="nav-link" href="../about.php">About <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="../faq.php">FAQ</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link disabled" href="#"></a>
                                  </li>
                                </ul>
                  </div>
                </nav>






      <div class="right_area">
        <a href="../forms/logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="1.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="../forms/addcategory.php"><i class="fas fa-cogs"></i><span>ADD CATEGORY</span></a>
        <a href="../forms/adddrug.php"><i class="fas fa-table"></i><span>ADD DRUG</span></a>
        <a href="../forms/register.php"><i class="fas fa-th"></i><span>ADD NEW USER</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="1.png" class="profile_image" alt="">
        <h4>Jessica</h4>
      </div>
      <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="../forms/addcategory.php"><i class="fas fa-cogs"></i><span>ADD CATEGORY</span></a>
      <a href="../forms/adddrug.php"><i class="fas fa-table"></i><span>ADD DRUG</span></a>
      <a href="../forms/register.php"><i class="fas fa-th"></i><span>ADD NEW USER</span></a>
      <a href="../forms/viewalldrug.php"><i class="fas fa-info-circle"></i><span>VIEW DRUG</span></a>
      <a href="../forms/registerpharm.php"><i class="fas fa-sliders-h"></i><span>ADD NEW USER</span></a>
      <a href="../forms/logout.php"><i class="fas fa-sign-out-alt"></i><span>LOG OUT</span></a>

      
 
    </div>
    <!--sidebar end-->

    <script type="text/javascript">
      $(document).ready(function(){
        $('.nav_btn').click(function(){
          $('.mobile_nav_items').toggleClass('active');
        });
      });
      </script>
  