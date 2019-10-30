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
              <li><a href="admin.php">Give Feedback</a></li>
              <li><a href="blog.php" class="active"">See Given Feedbacks</a></li>
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
                <h3>Blog</h3>
        </div>


                    <?php

            $con = mysqli_connect("localhost", "root", "", "sishir");
            if(mysqli_connect_error())
            {
                die("Failed to Connect");
                echo "Sorry";
            }

            $sql = "SELECT * FROM blog_post";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>

                                <h2>
                                <?php echo $row["post_title"] ?>
                                </h2>
                                                    
                                <?php echo $row["post_date"]; ?>
            <hr>
                        <p>
                        <?php echo $row["post_content"] ?>
                        </p>
                        <p>
                        <?php echo $row["post_author"] ?>
                        </p> 
                        <p>
                        <?php echo $row["gender"] ?>
                        </p>
                        <p>
                        <?php echo $row["email"] ?>
                        </p>                                      

            <?php
                }
            }
            ?>        



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
