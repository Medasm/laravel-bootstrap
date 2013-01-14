<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
 
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="/">Laravel Bootstrap</a>
      <ul class="nav">
        <?php foreach ($nav_items as $item) { ?>
          <li><a href="<?php echo $item['url'] ?>"><?php echo $item['title']; ?></a></li>
        <?php } ?>
      </ul>

      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse navbar-responsive-collapse">
        <ul class="nav pull-right">
          <li><a href="/auth/logout/">Logout</a></li>
        </ul>
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div>
 
    </div>
  </div>
</div>
