<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="styling.css" />
    <title>WELCOME TO SISHIR POKHREL DOT COM</title>
  </head>
  <body>
    <header id="header">
      <div id="pageTitle">
        <h1><a href="#">Sishir Pokhrel</a></h1>
      </div>

      <div id="menuAndSearch">
      <nav id="menu">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="aboutMe.html">About Me</a></li>
          <li><a href="resume.html">Online Resume</a></li>
          <li><a href="contactMe.html">Photos</a></li>
          <li><a href="#">Feedbacks &#9660;</a>
            <ul class="submenu">
              <li><a href="#top" class="active">Give Feedback</a></li>
              <li><a href="blog.php">See Given Feedbacks</a></li>
            </ul>
          </li>
          <form>
            <div class="search-field">
              <input type="text" onclick="this.value='';" onfocus="this.select()"
                onblur="this.value=!this.value?'Search':this.value;" value="Search" />
              <input class="search-button" type="image" src="search-icon.png">
            </div>
          </form>
        </ul>
      </nav>
    </div>





    </header>
    

    <main id="container">
        <div id="welcome">
                <h3>Welcome to my Admin Panel !!!</h3>
        </div>
                  <?php

              
          if(isset($_POST['submit_form'])){
            $con = mysqli_connect("localhost", "root", "", "sishir");
            if(mysqli_connect_error())
            {
                die("Failed to Connect");
                echo "Sorry";
            }
            $post_date = date_create()->format('Y-m-d');        
            $sql = "INSERT INTO blog_post (post_date, post_title, post_content, post_author, gender, email)
            VALUES ('$post_date','".$_POST["post_title"]."','".$_POST["post_content"]."','".$_POST["post_author"]."','".$_POST["gender"]."','".$_POST["email"]."')";
            if (mysqli_query($con, $sql))
            {
                echo "Congrats";
            }
          }
          ?>

          <div id="submissionItems">
            
          <form name="submit_form" action="" method="POST">
          Author Name
          <br/>
          <br/>
          <input type="text" name="post_author" placeholder="Author name..">  
          <br/>
          <br/>
          Gender

          <br/>
          <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>

          </select>          
 
  <br/>
  <br/>
  <br/>
  Email
  <input type="email" name="email" placeholder="Type Email Here">
  <br/>
  <br/>

          Post Title
          <br/>
          <br/>
          <input type="text" name="post_title" placeholder="Post title here..">
          <br/>
          <br/>
          Your Blog Post
          <br/>
          <br/>
          
          <textarea name="post_content" placeholder="Write something.." cols="35" rows="12"></textarea>
          <br>
        
          <input name="submit_form" type="submit" value="Submit">
          </form>
          </div>



    </main>

    <footer class="footer">
      <div>
        <p>
          Sishir Pokhrel ~ 2019. Copyright &copy; Univeristy of Louisiana at
          Monroe ~ Batch of 2020.
        </p>
      </div>
    </footer>
  </body>
</html>
