<!-- ===== footer ===== -->
<footer class="footer-site">
  <header>
    <a href="#header">Back to Top</a>
  </header>
  <main class="flex gap">
    <nav class="footer-nav">
      <h2 class="accordion">Navigation</h2>
      <ul class="flex-column panel">
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact us</a></li>
        <li><a href="">Journals</a></li>
      </ul>
    </nav>

    <nav class="footer-nav">
      <h2 class="accordion">Browse Journal Content</h2>
      <ul class="flex-column panel">
        <li><a href="">Most Popular</a></li>
        <li><a href="">About the Journal</a></li>
        <li><a href="">Current Issue</a></li>
        <li><a href="">Subscribe</a></li>
        <li><a href="">For Authors</a></li>
        <li><a href="">Past Issues</a></li>
        <li><a href="">Register on the website</a></li>
        <li><a href="">Get eTOC Alerts</a></li>
      </ul>
    </nav>

    <nav class="footer-nav">
      <h2 class="accordion">For Journal Authors</h2>
      <ul class="flex-column panel">
        <li><a href="">Submit an article</a></li>
        <li><a href="">How to publish with us</a></li>
      </ul>
    </nav>

    <nav class="footer-nav">
      <h2 class="accordion">Customer Service</h2>
      <ul class="flex-column panel">
        <li class="address">
          <p>Faculté des Sciences</p>
          <p>
            4 Avenue Ibn Battouta
            B.P. 1014 RP, Rabat
          </p>
          <p>
            Tel : + 212 (0) 5 37 77 18 34/35/38
            Fax : + 212 (0) 5 37 77 42 61
          </p>

        </li>
        <li><a href="">abdessamad.ennaddam@um5r.ac.ma</a></li>
        <li><a href="">oumaima.benabdelbaqi@um5r.ac.ma</a></li>
      </ul>
    </nav>
  </main>

  <footer>
    Copyright &copy; 2021 Science Publishing Corporation Inc. All rights reserved.
  </footer>

</footer>

<?php switch ($_SERVER['PHP_SELF']) {

  case "/Jarida/Home/php/index.php":
  case "/jarida/Home/php/index.php": ?>

    <script src="/Jarida/Home/js/sideshow.js"></script>

  <?php break; ?>

  <?php case "/Jarida/Articles/php/myArticles.php": ?>

    <script src="/Jarida/Articles/js/confirmation.js"></script>
    <script src="/Jarida/Articles/js/articleNote.js"></script>

    <?php break; ?>

<?php } ?>

<script src="/Jarida/All/js/menu.js"></script>
<script src="/Jarida/All/js/accordion.js"></script>
<script src="/Jarida/All/js/header.js"></script>
<script src="/Jarida/All/js/drop_down_category.js"></script>
<script src="/Jarida/All/js/loader.js"></script>
<script src="/Jarida/All/js/subCategories.js"></script>

</body>

</html>