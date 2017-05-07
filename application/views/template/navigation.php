<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url("Welcome/index");?>">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url("Welcome/users");?>">USERS</a></li>
                <li><a href="<?php echo site_url("Welcome/objednavka");?>">OBJEDNAT</a></li>
                <li><a href="<?php echo site_url("Welcome/me");?>">Me</a></li>
            </ul>
        </div>
    </div>
</nav>

