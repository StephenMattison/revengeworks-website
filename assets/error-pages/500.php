<?php
http_response_code(500);
function getUserIpAddr(){
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}
$ipAddress = getUserIpAddr();
;?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>500 - Internal Server Error | Revenge Works</title>
    <meta name="description" content="An unexpected error occurred on the server. Please try again later or visit the homepage.">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/assets/favicons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Revenge Works">
    <meta name="application-name" content="Revenge Works">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/assets/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/assets/css/error-pages.css">
  </head>
  <body data-ip="<?php echo htmlspecialchars($ipAddress, ENT_QUOTES, 'UTF-8'); ?>">
    <div class="maincontainer">
      <div class="bat">
        <img class="wing leftwing" src="/assets/img/error-pages/bat-wing.png" alt="Left Wing">
        <img class="body" src="/assets/img/error-pages/bat-body.png" alt="Bat Body">
        <img class="wing rightwing" src="/assets/img/error-pages/bat-wing.png" alt="Right Wing">
      </div>
      <div class="bat">
        <img class="wing leftwing" src="/assets/img/error-pages/bat-wing.png" alt="Left Wing">
        <img class="body" src="/assets/img/error-pages/bat-body.png" alt="Bat Body">
        <img class="wing rightwing" src="/assets/img/error-pages/bat-wing.png" alt="Right Wing">
      </div>
      <div class="bat">
        <img class="wing leftwing" src="/assets/img/error-pages/bat-wing.png" alt="Left Wing">
        <img class="body" src="/assets/img/error-pages/bat-body.png" alt="Bat Body">
        <img class="wing rightwing" src="/assets/img/error-pages/bat-wing.png" alt="Right Wing">
      </div>
      <img class="foregroundimg" src="/assets/img/error-pages/haunted-house-foreground.png" alt="Haunted House Foreground">
    </div>
    <h1 class="errorcode">ERROR 500</h1>
    <h2 class="errortext">An Unexpected Error Occurred</h2>
    <h3 class="errortext"><span><a href="/" title="Click To Visit Our Home Page">www.revengeworks.com</a></span></h3>
    <script src="/assets/js/error-pages.js"></script>
  </body>
</html>
