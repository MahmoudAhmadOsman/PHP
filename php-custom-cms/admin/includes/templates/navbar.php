<!--Start of Navbar Menu -->
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_nav_bar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Dreamia <span>
                    Systems</span></a>
            </div>
            <div class="collapse navbar-collapse" id="main_nav_bar">
                <ul class="nav navbar-nav  navbar-right">
    <li class="active" class="slide-section"><a href="index.php"><?php echo lang('Home')?></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Dreamia<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#history">History</a></li>
                            <li><a href="#mission">Our Mission</a></li>
                            <li><a href="team.php">Management Team</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Wedget 2000</a></li>
                            <li><a href="#">Wedget 3000</a></li>
                            <li><a href="#widget-four.php">Wedget 4000</a></li>
                        </ul>
                    </li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#buy">Where to Buy</a></li>
                    <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Mahmoud<span class="caret"></span></a>
                <ul class="dropdown-menu">
                        <li><a href="members.php?do=Edit&userid=<?php echo $_SESSION['ID']?> ">Edit Profile</a></li>
                             <li><a href="#">Settings</a></li>
                            <li><a href="logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!--End of Navbar Menu -->