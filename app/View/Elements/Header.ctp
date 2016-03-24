
<!-- Header -->
<header>
  <!-- Navigation -->
  <div class="navbar yamm navbar-default" id="sticky">
    <div class="container">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="index.html" class="navbar-brand">         
			<!-- Logo -->
			<div id="logo"> 
				<?php echo $this->Html->image("logo.png",array('id'=>"default-logo",'alt'=>'Starhotel','style'=>'height:44px;'));?>
				<?php echo $this->Html->image("logo-retina.png",array('id'=>"retina-logo",'alt'=>'Starhotel','style'=>'height:44px;'));?>
			</div>
        </a> 
	  </div>
      <div id="navbar-collapse-grid" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown active"> <a href="index.html"><?php echo __('home'); ?></a>
          </li>
		  <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Rooms<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="room-list.html">Room List View</a></li>
              <li><a href="room-detail.html">Room Detail</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Features<b class="caret"></b></a>
            <div class="dropdown-menu"> 
              <div class="yamm-content">
                <div class="row">
                  <ul class="col-sm-3 list-unstyled mt20">
                    <li>
                      <p><strong>Elements</strong></p>
                    </li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="icons.html">Icons</a></li>
                    <li><a href="404.html">404 Page</a></li>
                  </ul>				
				  <ul class="col-sm-3 list-unstyled mt20">
                    <li>
                      <p><strong>Layout</strong></p>
                    </li>
					<li><a href="boxed-pattern.html"><i class="fa fa-square-o"></i> Boxed</a></li>
					<li><a href="index.html"><i class="fa fa-arrows-h"></i> Wide</a></li>
                    <li><a href="boxed-background.html"><i class="fa fa-picture-o"></i> Image</a></li>
                  </ul>					  
				  <ul class="col-sm-6 list-unstyled mt20">
                    <li>
                      <p><strong>Yamm! Megamenu</strong></p>
 	  			      <ul class="list-unstyled">
					    <li class="row">
					      <ul class="col-sm-12 list-unstyled">
							<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere justo posuere, commodo nibh sit amet, malesuada nisi. Nam vitae mauris vel ante laoreet placerat. Praesent pellentesque consectetur lobortis. Pellentesque lacinia nibh leo, sed pharetra tortor sagittis id. Cras a scelerisque eros. Nunc ornare diam turpis, id vulputate massa sagittis sed.
							</li>
                          </ul>
					    </li>
					  </ul>
			        </li>	
				  </ul>		
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Blog<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="blog.html">Blog grid</a></li>
              <li><a href="blog-post.html">Blog post</a></li>
            </ul>
          </li>
          <li> <a href="gallery.html">Gallery</a></li>
          <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Contact<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="contact-01.html">Contact 1</a></li>
              <li><a href="contact-02.html">Contact 2</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
