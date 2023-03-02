
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/lightbox.min.css" rel="stylesheet" />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Ubuntu"
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link
      rel="shortcut icon"
      href="https://fansly.com/assets/images/icons/favicon-32x32.png"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />

    <title>Piinkbear's Secret Page</title>
  <?php
/**
 * @return string
 */
function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

/**
 * Perform the request
 * @param $url
 * @return mixed
 */
function request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; CrOS x86_64 8172.45.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.64 Safari/537.36");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $result['result'] = curl_exec($ch);
    $result['info'] = curl_getinfo($ch);
    return $result['result'];
}

# Join the shit together
$yourAmazingIP = get_client_ip();
$yourAmazingKey = 'yourkeyhere';
$yourAmazingURL = sprintf('http://api.ipstack.com/%s?access_key=%s&format=1',$yourAmazingIP,$yourAmazingKey);
$yourAmazingResponse = request($yourAmazingURL);

# Response was not null
if(!empty($yourAmazingResponse)){

    # Decode it
    $yourAmazingJson = json_decode($yourAmazingResponse ,true);
    $yourAmazingCountryName = $yourAmazingJson['country_name'];
    $yourAmazingRegion = $yourAmazingJson['region_name'];
    $yourAmazingCity = $yourAmazingJson['city'];
    $currency = '$';

}else{
    echo "Error: API Failure";
}
?>
  <body>
    <nav>
      <div class="nav-wrapper" style="background-color: #fafafa">
        <a class="brand-logo center" href="https://fansly.com">
          <img src="./img/onlyfanslogo.png" height="36px" alt=""
        /></a>
      </div>
    </nav>
    <div class="container" style="margin-top: -20px">
      <div class="carousel" style="padding-bottom: 0px; padding-top: 0px">
        <a
          class="carousel-item"
          data-lightbox="model-images"
          href="./img/carousel/2.jpg"
          style="object-fit: cover"
        >
          <img
            src="./img/carousel/2.jpg"
            height="300px"
            style="object-fit: cover"
          />
        </a>
        <a
          data-lightbox="model-images"
          class="carousel-item"
          href="./img/carousel/1.jpg"
          style="object-fit: cover"
        >
          <img
            src="./img/carousel/1.jpg"
            height="300px"
            style="object-fit: cover"
          />
        </a>
        <a
          data-lightbox="model-images"
          href="./img/carousel/3.jpg"
          class="carousel-item"
          style="object-fit: cover"
        >
          <img
            src="./img/carousel/3.jpg"
            height="300px"
            style="object-fit: cover"
          />
        </a>
        <a
          data-lightbox="model-images"
          href="./img/carousel/4.jpg"
          class="carousel-item"
          style="object-fit: cover"
        >
          <img
            src="./img/carousel/4.jpg"
            height="300px"
            style="object-fit: cover"
          />
        </a>
        <a
          data-lightbox="model-images"
          href="./img/carousel/5.jpg"
          class="carousel-item"
          style="object-fit: cover"
        >
          <img
            src="./img/carousel/5.jpg"
            height="300px"
            style="object-fit: cover"
          />
        </a>
        <a
          data-lightbox="model-images"
          class="carousel-item"
          href="./img/carousel/6.jpg"
          style="object-fit: cover"
        >
          <img
            src="./img/carousel/6.jpg"
            height="300px"
            style="object-fit: cover"
          />
        </a>
      </div>
    </div>

    <div class="container" style="margin-top: -50px">
      <h5 class="grey-text center-align text-darken-3">
        🎁 50% OFF SALE 🎁 PIINKBEAR
      </h5>
      <div class="center-align grey-text text-darken-3">
        <ul class="">
          <li>
            <h6>
              📍 <?php echo $yourAmazingCity; ?> 🧁 19 years ♒ Aquarius 
              <br><br>🟢 Online Now
           </h6>
          </li>
          <li>
            <h6>
              Get exclusive access to my content and interact with my directly. 
            </h6>
          </li>
          <li>
            <h6>
              🍑💦 Do you live near <b><?php echo $yourAmazingCity; ?></b> 📍 DM me about Meet Ups 🍑🔥
            </h6>
          </li>
        </ul>
      </div>

      <div class="center">
          <?php
$line = '';
$file = 'username.txt';
if($f = fopen($file, 'r')){
  $line = fgets($f); // read until first newline
  fclose($f);
}
$url = "https://of.com/" . $line;
?>
        <a
          href="<?php echo $url; ?>"
          style="
            font-size: 16px !important;
            border-radius: 40px !important;
            color: #fcfbfb !important;
            background: #1aa9e8 !important;
            padding: 10px 30px !important;
            border: none !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            margin: auto !important;
            box-shadow: none !important;
            font-weight: 500 !important;
          "
        >
          SEE MY ONLYFANS ❤️
        </a>
      </div>
      <ul>
        <li>
          <h6
            class="font-weight-bold text-center"
            style="color: #1aa9e8; text-align: center"
          >
            Get access to my private account now! Only $14.99/m limited time
          </h6>
        </li>
      </ul>
      <div class="center">
      </div>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script
      defer
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var elems = document.querySelectorAll(".carousel");
        var options = {};
        var instances = M.Carousel.init(elems, options);
      });
    </script>
    <script defer src="./js/api.js"></script>
    <script defer src="./js/lightbox.min.js"></script>
  </body>
</html>