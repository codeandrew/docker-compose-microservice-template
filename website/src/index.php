<html>
<head>
  <title>Website</title>
</head>
<body>
  <h1>Welcome to my shop</h1>
  <ul>
    <?php
    $json = file_get_contents('http://webservice');
    $obj = json_decode($json);

    $products = $obj->products;
    foreach ($products as $key => $product) {
      echo "<li>$product</li>";
    }
    ?>
  </ul>
</body>
</html>

<?php
phpinfo();
