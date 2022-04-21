<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
<iframe width="560" height="315" src="https://www.youtube.com/embed/1aqI7EnfbVM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h1 class="text-center text-danger mb-5" 
  style="font-family: 'Oswald', sans-serif;"> ONLINE LAPTOP SHOPPING</h1>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="images/asus1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">ASUS</h5>
              <p class="card-text">Price: Rs.45000</p>
              <h4>SPECIFICATIONS</h4>
              <p>Operating System. Windows 10 Pro. ... <br>
                 Processor. AMD Ryzen ™ 7 4700U Mobile Processor. ... <br>
                 Graphics. Integrated AMD Radeon ™ Graphics. <br>
                 Display. 15.6” LED-backlit Full HD (1920 x 1080) 16:9. ... <br>
                 Memory. 8GB / 16GB 3200 MHz DDR4. <br>
                 Storage. 256GB / 512GB / 1TB PCIe SSD. <br>
                 Keyboard and Touchpad. Keyboard.</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="ASUS">
              <input type="hidden" name="Price" value="45000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="images/samsung.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">SAMSUNG</h5>
              <p class="card-text">Price: Rs.65000</p>
              <h4>SPECIFICATIONS</h4>
              <p>Operating System. Windows 10 Pro. ... <br>
                 Processor. AMD Ryzen ™ 7 4700U Mobile Processor. ... <br>
                 Graphics. Integrated AMD Radeon ™ Graphics. <br>
                 Display. 15.6” LED-backlit Full HD (1920 x 1080) 16:9. ... <br>
                 Memory. 8GB / 16GB 3200 MHz DDR4. <br>
                 Storage. 256GB / 512GB / 1TB PCIe SSD. <br>
                 Keyboard and Touchpad. Keyboard.</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="SAMSUNG">
              <input type="hidden" name="Price" value="65000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="images/dell.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">DELL</h5>
              <p class="card-text">Price: Rs.75000</p>
              <h4>SPECIFICATIONS</h4>
              <p>Operating System. Windows 10 Pro. ... <br>
                 Processor. AMD Ryzen ™ 7 4700U Mobile Processor. ... <br>
                 Graphics. Integrated AMD Radeon ™ Graphics. <br>
                 Display. 15.6” LED-backlit Full HD (1920 x 1080) 16:9. ... <br>
                 Memory. 8GB / 16GB 3200 MHz DDR4. <br>
                 Storage. 256GB / 512GB / 1TB PCIe SSD. <br>
                 Keyboard and Touchpad. Keyboard.</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="DELL">
              <input type="hidden" name="Price" value="75000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="images/apple1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">APPLE</h5>
              <p class="card-text">Price: Rs.95000</p>
              <h4>SPECIFICATIONS</h4>
              <p>Operating System. Windows 10 Pro. ... <br>
                 Processor. AMD Ryzen ™ 7 4700U Mobile Processor. ... <br>
                 Graphics. Integrated AMD Radeon ™ Graphics. <br>
                 Display. 15.6” LED-backlit Full HD (1920 x 1080) 16:9. ... <br>
                 Memory. 8GB / 16GB 3200 MHz DDR4. <br>
                 Storage. 256GB / 512GB / 1TB PCIe SSD. <br>
                 Keyboard and Touchpad. Keyboard.</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="APPLE">
              <input type="hidden" name="Price" value="95000">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>