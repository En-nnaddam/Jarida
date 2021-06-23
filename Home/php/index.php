<?php require('../../All/php/header.php'); ?>

    <div class="container-vid">
      <video class="background-vid" autoplay muted loop>
        <source src="/Jarida/All/vid/newspapers.mp4">
      </video>
      <div class="blend"></div>
      
    </main>
    <!--* Barre de recherche -->
    <main id="main-vid" class="flex">
        <p>
          Get Real time notifications of science, space and technology&nbsp;! Stay Tuned 
        </p>
        <form action="./search.php" class="flex-center gap">
          <div class="flex-center bar-search gap">
            <label for="search"><i class="fas fa-search"></i></label>
            <input
              type="search"
              name="article"
              placeholder="Search Products"
            />
          </div>
          <input type="submit" name="search" value="Search" id="search" />
        </form>

    </main>
    <!--* ==================== -->

    </div>

    <!-- ===== End video section ===== -->

    <!-- Slideshow container -->
    <div class="slideshow-container">
      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="/Jarida/All/img/slideshow/Maria.jpg" alt="Article" style="width: 100%" />
        <div class="text">Article Text</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="/Jarida/All/img/slideshow/Akhil-Bhalla.jpg" alt="Article" style="width: 100%" />
        <div class="text">Article Two</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="/Jarida/All/img/slideshow/Neil-Jenkins.jpg" alt="Article" style="width: 100%" />
        <div class="text">Article Three</div>
      </div>


      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br />

    <!-- The dots/circles -->
    <div style="text-align: center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <!-- ===== End Sideshow ===== --> 

    <?php require('../../All/php/footer.php') ?>