<!-- Your footer goes here -->
  <footer>
    <h6>Footer :)</h6>
  </footer>
  <!-- General js file -->
  <script src="/src/js/main.js"></script>
  <?php
    /* your compiled js file for the route */
    if (file_exists('src/js'.$request.'.js')) {
      echo '<script src="/src/js'.$request.'.js"></script>';
    }
  ?>
</body>
</html>