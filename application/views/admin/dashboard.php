<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

				<link rel="stylesheet"  href="../front-end/style.css">


<style>
	body{

	background: #f4f4f4;
}
.navbar{
	min-height:33px !important; 
	margin-bottom:10px;
border-radius:0; 

}
.navbar-nav > li > a,.navbar-brand {

	padding-top:6px !important;
	padding-bottom :0px!important;
	height:33px; 
}

.header{padding-top: 20px;
         background-color: #333333;
         color: #ffffff;
         margin-bottom:10px;

}
.dropdown{margin-top: 30px;}

.navbar {
  background-color: #f01864;
}
.navbar .navbar-brand {
  color: #0a0b0b;
}
.navbar .navbar-brand:hover,
.navbar .navbar-brand:focus {
  color: #020202;
}
.navbar .navbar-text {
  color: #0a0b0b;
}
.navbar .navbar-text a {
  color: #020202;
}
.navbar .navbar-text a:hover,
.navbar .navbar-text a:focus {
  color: #020202; 
}
.navbar .navbar-nav .nav-link {
  color: #0a0b0b;
  border-radius: .25rem;
  margin: 0 0.25em;
}
.navbar .navbar-nav .nav-link:not(.disabled):hover,
.navbar .navbar-nav .nav-link:not(.disabled):focus {
  color: #020202;
}
.navbar .navbar-nav .nav-item.active .nav-link,
.navbar .navbar-nav .nav-item.active .nav-link:hover,
.navbar .navbar-nav .nav-item.active .nav-link:focus,
.navbar .navbar-nav .nav-item.show .nav-link,
.navbar .navbar-nav .nav-item.show .nav-link:hover,
.navbar .navbar-nav .nav-item.show .nav-link:focus {
  color: #020202;
  background-color: #a409e5;
}
.navbar .navbar-toggle {
  border-color: #a409e5;
}
.navbar .navbar-toggle:hover,
.navbar .navbar-toggle:focus {
  background-color: #a409e5;
}
.navbar .navbar-toggle .navbar-toggler-icon {
  color: #0a0b0b;
}
.navbar .navbar-collapse,
.navbar .navbar-form {
  border-color: #0a0b0b;
}
.navbar .navbar-link {
  color: #0a0b0b;
}
.navbar .navbar-link:hover {
  color: #020202;
}


.main-color-bg{
	 background-color:red! important;
	  border-color: #a409e5!important;
	  color:#cccccc;
}

}

@media (max-width: 575px) {
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #0a0b0b;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #020202;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #020202;
    background-color: #a409e5;
  }
}

@media (max-width: 767px) {
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #0a0b0b;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #020202;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #020202;
    background-color: #a409e5;
  }
}

@media (max-width: 991px) {
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #0a0b0b;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #020202;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #020202;
    background-color: #a409e5;
  }
}

@media (max-width: 1199px) {
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #0a0b0b;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #020202;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #020202;
    background-color: #a409e5;
  }
}

.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
  color: #0a0b0b;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
  color: #020202;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
  color: #020202;
  background-color: #a409e5;
}

.breadcrumb{ 
background: #cccccc;
color:#333333; }

.breadcrumb a {
	color: :#333333;

}

.dash-box{
	 text-align: center;
}

#footer
{
	background:#333333;
	color:#ffffff;
	text-align:center;
	padding:30px;
	margin-top: 30px;
} 
	
</style>
				
</head>
<body>



<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Adminstrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Dashboard</a></li>
            <li><a href="Pages.html">Pages</a></li>
            <li><a href="Post.html">Posts</a></li>
            <li><a href="Users.html">Users</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          
            <li><a href="#">Welcome,Fahima</a></li>
            <li><a href="login.html">Login</a></li>
        
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    

  <header class="header">
    <div class="container">
      <div class="row">
        
      <div class="col-md-10">
          <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> dashboard <small> manage your site</small></h1>
        </div>

        <div class="col-md-2">

          <div class="dropdown">
             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              create content
              <span class="caret"></span>
               </button>

                 <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
             <li><a type="button" data-toggle="modal" data-target="#addpage" >Add page</a></li>
             <li><a href="#"> Add user</a></li>
             <li><a href="#">Add post</a></li>
             <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            </ul>
        </div>
          
        </div>
      </div>
    </div>
  </header>

<section id="breadcrumb">
   <div class="container">
     <ol class="breadcrumb">
       <li class="active"> dashboard</li>
     </ol>
   </div>

</section>

<section id="main">
  <div class="container">
  <div class="row">
 

    <div  class="col-md-3">
      <div class="list-group">
  <a href="index.html" class="list-group-item active main-color-bg">
    dashboard
  </a>
  <a href="Pages.html" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Pages<span class="badge">7</span></a>
  <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Posts<span class="badge">13</span></a>
  <a href="user.html" class="list-group-item">
    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
    User<span class="badge">233</span></a>

</div>

<div class="well">
  <h1>Disk is used</h1>
<div class="progress">
  
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
  </div>
</div>
  <h4>Bandwidth</h4>
<div class="progress">
 
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
    40%
  </div>
</div>
</div>
    </div>

    <div class="col-md-9">
      <div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Website overview</h3>
  </div>
  <div class="panel-body">
     <div class="col-md-3">
      <div class="well dash-box">
      <h2><span class="glyphicon glyphicon-book" aria-hidden="true"></span>7
      </h2><h4>pages</h4> 
    </div>
  </div>

  <div class="col-md-3">
      <div class="well dash-box">
      <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>203
      </h2>
      <h4>Users </h4> 
    </div>
  </div>
  <div class="col-md-3">
      <div class="well dash-box" >
      <h2><span class="glyphicon glyphicon-signal" aria-hidden="true"></span>233
      </h2><h4>upcomming</h4> 
    </div>
  </div>
   
   <div class="col-md-3">
      <div class="well dash-box" >
      <h2><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>203
      </h2><h4>Posts</h4> 
    </div>
  </div>


    </div>

  </div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Latest user</h3>
  </div>
  <div class="panel-body">
    <table class="table  table-striped table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

</div>
</div>
    </div>
   
  </div>
</div>
</section>


<footer id="footer">
  <p>&copyfahima</p>
</footer>


<div class="modal fade" id="addpage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add page</h4>
      </div>
      <div class="modal-body">
    
    <div class="form-group">
    <label>page title</label>
    <input type="text" class="form-control"placeholder="page title">
  </div>

        <div class="form-group">
    <label>page body</label>
    <textarea name="editor1" class="form-control" placeholder="page body"></textarea>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox">published
    </label>
  </div>
   
   <div class="form-group">
    <label>meta tags</label>
    <input type="text" class="form-control"placeholder="add some tags....">
  </div>

 <div class="form-group">
    <label>meta Description</label>
    <input type="text" class="form-control"placeholder="Add meta Description....">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

