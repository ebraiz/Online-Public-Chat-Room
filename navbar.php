<nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">

	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
       <a class="navbar-brand" href="#"><span>Welcome&nbsp;<?php echo $_SESSION['name'] ?>!</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
		  <li><a href="#" data-toggle="modal" data-target="#about">About Me</a></li>
          <li><a href="#" data-toggle="modal" data-target="#feedback">Feedback</a></li>
        </ul>
		<ul class="nav navbar-nav navbar-right">
        
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
      </div>
    </div>
  </div>
</nav>

  <div class="modal fade" id="about" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:url('images/formbackground.jpg')">
          <h3 class="modal-title"><b>About Me</b></h3>
        </div>
        <div class="modal-body" style="background:url('images/formbackground.jpg')">
			<p>
				<h2 align='left'>What is Get Togather:</h2>
					<h4 align='justify'>
						Get Togather is a free Online Public Chat System for everyone living anywhere in the world, and the idea 
						is to gather everyone into a single plat form, and have a lot of fun. Every visitor have to registered 
						themself first, before entering into the chat room. On the right top of the chat room users have some collection of
						musics to enjoy!
					</h4>
			
				<h2 align='left'>Who Am I?</h2>
		
				<h4 align='justify'>
					I am a final year BS (Computer Science) Student of Edwardes College, Peshawar, Pakistan. I am a passionate web developer,
					and always try to develop something innovative, attractive and beautiful. 
				</h4>
				
				<h2 align='left'>Future Plan?</h2>
		
				<h4 align='justify'>
Uptil now, This Chat room is Public, where anyone from anywhere will publish anything. My future plan regarding Get Togather 
is to upgrade it to Private chat room, The Information	which I have received through registration, I will use it later for 
upgradation and want to make something like a messenger.
				</h4>
			</p>
        </div>
        <div class="modal-footer" style="background:url('images/formbackground.jpg')">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="feedback" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:url('images/formbackground.jpg')">
          <h3 class="modal-title"><b>Your Precious Feedback Here</b></h3>
        </div>
        <div class="modal-body" style="background:url('images/formbackground.jpg')">
		<?php include('contact.php'); ?>
        </div>
        <div class="modal-footer" style="background:url('images/formbackground.jpg')">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  