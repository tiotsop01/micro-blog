<?php
session_start();
include_once('header.php');
include_once('functions.php');

$_SESSION['userid'] = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>My Social</title>
</head>
<body>

  <nav class="navbar navbar-toggleable navbar-inverse bg-inverse fixed-top">
    <div class="container">
      <button class="navbar-toggler navbar-toggle-right"
      data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
      </button>
      <a href="#" class="navbar-brand">My Social</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home-section" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#explore-head-section" class="nav-link">Explore</a>
          </li>
          <li class="nav-item">
            <a href="#create-head-section" class="nav-link">Create</a>
          </li>
          <li class="nav-item">
            <a href="#share-head-section" class="nav-link">Share</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME SECTION  -->
  <header id="home-section">
    <div class="dark-overlay">
      <div class="home-inner">
        <div class="container">
          <div class="row">
            <div class="col-md-8 d-none d-md-block">
              <h1 class="display-4">Gain revenue and <strong>profits</strong>
               by <strong>building social profiles</strong></h1>
               <div class="d-flex flex-row">
                 <div class="p-4 align-self-start">
                   <i class="fa fa-check"></i>
                </div>
                   <div class="p-4 align-self-end">
                     Lorem ipsum dolor sit amet, consectetur adipisicing
                     elit. Cum eligendi dolorem, esse expedita deserunt nihil
                     nobis veritatis? Magni modi id, ipsam
                   </div>
               </div>
               <div class="d-flex flex-row">
                 <div class="p-4 align-self-start">
                   <i class="fa fa-check"></i>
                 </div>
                   <div class="p-4 align-self-end">
                     Lorem ipsum dolor sit amet, consectetur adipisicing
                     elit. Cum eligendi dolorem, esse expedita deserunt nihil
                     nobis veritatis? Magni modi id, ipsam
                   </div>
               </div>
               <div class="d-flex flex-row">
                 <div class="p-4 align-self-start">
                   <i class="fa fa-check"></i>
                 </div>
                   <div class="p-4 align-self-end">
                     Lorem ipsum dolor sit amet, consectetur adipisicing
                     elit. Cum eligendi dolorem, esse expedita deserunt nihil
                     nobis veritatis? Magni modi id, ipsam
                   </div>
               </div>
             </div>
               <div class="col-md-4">
                 <div class="card card-primary card-form text-center">
                   <div class="card-block">
                     <h3>Sign Up Today</h3>
                     <p>Please fill out this form to register</p>
                     <form >
                       <div class="form-group">
                         <input type="text" name="username"
                         class="form-control form-control-lg"
                         placeholder="Username">
                       </div>
                       <div class="form-group">
                         <input type="email" name="email"
                         class="form-control form-control-lg"
                         placeholder="Email">
                       </div>
                       <div class="form-group">
                         <input type="password" name="password"
                         class="form-control form-control-lg"
                         placeholder="Password">
                       </div>
                       <div class="form-group">
                         <input type="password" name="confirm-password"
                         class="form-control form-control-lg"
                         placeholder="Confirm Password">
                       </div>
                       <input type="submit" name="" value="Submit" class="btn
                       btn-outline-secondary btn-block">
                     </form>
                   </div>
                 </div>

               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- EXPLORER HEAD  -->
  <section id="explore-head-section">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="py-5">
          <h1 class="display-4">Explore</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Exercitationem veniam obcaecati officia
             sunt aut illum nulla optio, soluta pariatur fugit.</p>
             <a href="" class="btn btn-outline-secondary">Find Out More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPLORER SECTION -->
  <section id="explorer-section" class="bg-faded text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/explore-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>Exploerer Learn & Connect</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Nesciunt veniam, nobis eius officiis, praesentium impedit
            temporibus quos ab! Ipsam repellat, velit laboriosam eius
            quibusdam corrupti perferendis esse molestiae deleniti.
            Nemo!</p>
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
             </div>
                <div class="p-4 align-self-end">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                  elit. Cum eligendi dolorem, esse expedita deserunt nihil
                  nobis veritatis? Magni modi id, ipsam
                </div>
            </div>
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
             </div>
                <div class="p-4 align-self-end">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                  elit. Cum eligendi dolorem, esse expedita deserunt nihil
                  nobis veritatis? Magni modi id, ipsam
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CREATE HEAD  -->
  <section id="create-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="py-5">
          <h1 class="display-4">Create</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Exercitationem veniam obcaecati officia
             sunt aut illum nulla optio, soluta pariatur fugit.</p>
             <a href="" class="btn btn-outline-secondary">Find Out More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CREATE SECTION -->
  <section id="create-section" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Create Your Passion</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Nesciunt veniam, nobis eius officiis, praesentium impedit
            temporibus</p>
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
             </div>
                <div class="p-4 align-self-end">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                  elit. Cum eligendi dolorem, esse expedita deserunt nihil
                  nobis veritatis? Magni modi id, ipsam
                </div>
            </div>
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
             </div>
                <div class="p-4 align-self-end">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                  elit. Cum eligendi dolorem, esse expedita deserunt nihil
                  nobis veritatis? Magni modi id, ipsam
                </div>
            </div>
        </div>
        <div class="col-md-6">
          <img src="img/create-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
      </div>
    </div>
  </section>

  <!-- SHARE HEAD  -->
  <section id="share-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="py-5">
          <h1 class="display-4">Share</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Exercitationem veniam obcaecati officia
             sunt aut illum nulla optio, soluta pariatur fugit.</p>
             <a href="" class="btn btn-outline-secondary">Find Out More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SHARE SECTION -->
  <section id="share-section" class="bg-faded text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/share-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>Share Your Creations with the World!</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Nesciunt veniam, nobis eius officiis, praesentium impedit
            temporibus quos ab! Ipsam repellat, velit laboriosam eius
            quibusdam corrupti perferendis esse molestiae deleniti.
            Nemo!</p>
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
             </div>
                <div class="p-4 align-self-end">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                  elit. Cum eligendi dolorem, esse expedita deserunt nihil
                  nobis veritatis? Magni modi id, ipsam
                </div>
            </div>
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
             </div>
                <div class="p-4 align-self-end">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                  elit. Cum eligendi dolorem, esse expedita deserunt nihil
                  nobis veritatis? Magni modi id, ipsam
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!--MAIN FOOTER  -->
  <footer id="main-footer" class="bg-inverse">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="py-4">
            <h1 class="h3">My Social</h1>
            <p>Copyright &copy; 2018</p>
            <button class="btn btn-primary" data-toggle="modal"
            data-target="#contactModal">Contact Us</button>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- CONTACT MODAL  -->
  <div class="modal fade" id="contactModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
          <button class="close" data-dismiss="modal"><span>&time;</span></button>
        </div>
        <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="Email" class="form-control">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" class="form-control"></textarea>
              </div>
            </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btn-block">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <?php
if (isset($_SESSION['message'])){
    echo "<b>". $_SESSION['message']."</b>";
    unset($_SESSION['message']);
}
?>
<h2>Users you're following</h2>

<?php
$users = show_users($_SESSION['userid']);
if (count($users)){
    $myusers = array_keys($users);
}else{
    $myusers = array();
}
$myusers[] = $_SESSION['userid'];

$posts = show_posts($myusers,5);
?>
</ul>
<?php
}else{
?>
<p><b>You're not following anyone yet!</b></p>
<?php
}
?>

<p><a href='users.php'>see list of users</a></p>
<form method='post' action='add_post.php'>
<p>Your status:</p>
<textarea name='body' rows='5' cols='40' wrap=VIRTUAL></textarea>
<p><input type='submit' value='submit'/></p>
</form>

<?php
$posts = show_posts($_SESSION['userid']);

if (count($posts)){
?>
<table border='1' cellspacing='0' cellpadding='5' width='500'>
<?php
foreach ($posts as $key => $list){
    echo "<tr valign='top'>\n";
    echo "<td>".$list['userid'] ."</td>\n";
    echo "<td>".$list['body'] ."<br/>\n";
    echo "<small>".$list['stamp'] ."</small></td>\n";
    echo "</tr>\n";
}
?>
</table>
<?php
}else{
?>
<p><b>You haven't posted anything yet!</b></p>
<?php
}
?>


  <script> src="js/jquery.min.js"</script>
  <script> src="js/tether.min.js"</script>
  <script> src="js/bootstrap.min.js"</script>
</body>
</html>
