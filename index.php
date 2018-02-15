<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Template Website</title>
    <link rel="stylesheet" href="css/style.css">
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script src="js/main.js"></script>
  </head>
  <body>
    <header>
      <div class="button">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <div class="search">
        <input type="text" placeholder="Search">
        <input type="submit" name="submit" value="Search">
      </div>
    </header>

    <div class="container">
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
      <div class="sub-header">
        <img src="img/header.jpg" alt="">
      </div>

      <div class="hr">
        <hr>
      </div>

      <div class="card">
        <ul>
          <li>Simple</li>
          <li class="change">$50</li>
          <li>Page 5</li>
          <li>Transfer ftp</li>
          <li>Hosting 30 day free</li>
          <li>Time 5-6 day</li>
        </ul>

        <ul>
          <li class="header-blue">Standard</li>
          <li class="change">$100</li>
          <li>Page 15</li>
          <li>Transfer ftp</li>
          <li>Hosting 60 day free</li>
          <li>Time 10-15 day</li>
        </ul>
        <ul>
          <li>Premium</li>
          <li class="change">$200</li>
          <li>Page unlimited</li>
          <li>Transfer ftp</li>
          <li>Hosting 100 day free</li>
          <li>Time 25-30 day</li>
        </ul>
      </div>

      <div class="content">
        <h2>About Me  &  Project</h2>
        <div class="img">
          <img src="http://s3.amazonaws.com/digitaltrends-uploads-prod/2017/08/Mac-Screenshot.jpg" alt="">
          <img src="https://sixcolors.com/images/content/2017/macbook-6c.jpg" alt="">
          <img src="http://s3.amazonaws.com/digitaltrends-uploads-prod/2015/12/apple-macbook-pro-13-ret-2015-inuse-1500x1000.jpg" alt="">
          <img src="https://i2.wp.com/blog.neweb.co/wp-content/uploads/2016/03/1458436661-8604-MB-SideProfile.jpg" alt="">
        </div>
        <hr class="hrlinie">

        <div class="text-info">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
      </div>

      <div class="contact">
        <h3>Contact</h3>
        <form action="index.php" method="POST" class="myform" id="myform">
          <input type="text" name="name" placeholder="Name">
          <input type="text" name="email" placeholder="Email">
          <input type="text" name="subject" placeholder="Subject"><br>
          <textarea name="mesaj" placeholder="Mesaj"></textarea><br>
          <input type="submit" name="submit" value="Trimite">
        </form>
		
		<?php 
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['mesaj'].' '.$numme.' '.$email;
			
			mail('mihaimihai01111@gmail.com', $message, $subject)
		
		?>
      </div>

      <footer>
        <div class="img-footer"></div>
        <hr class="hrlinie">
        <div class="footer-link">
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Portofolio</a></li>
          </ul>
          <hr class="hrlinie">
        </div>

        <div class="footer-copyright">
          <span>Copyright &copy;2018 All right</span>
        </div>
      </footer>
    </div>

  </body>
</html>
