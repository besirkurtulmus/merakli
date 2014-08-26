<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Site Başlığı</title>
    <link rel="stylesheet" href="/Cms/www/css/foundation.css" />
    <link rel="stylesheet" href="/Cms/www/css/app.css" />
    <script src="/Cms/www/js/vendor/modernizr.js"></script>
  </head>
  <body>
    <header>
        <div class="row">
            <div class="large-3 large-centered columns page-title"><h1>Site Başlığı</h1></div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <ul class="nav">
                  <li><a href="/">Home</a></li>
                  <li><a href="/about/">About</a></li>
                  <li><a href="/work/">Work</a></li>
                  <li><a href="/clients/">Clients</a></li>
                  <li><a href="/contact/">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="row">
<?php echo $content; ?>
    </div>
    <footer class="row genel-footer">
        <div class="large-12 columns">
            COPYRIGHT 2014 meraklibilisimci.com
        </div>
    </footer>
    <script src="/Cms/www/js/vendor/jquery.js"></script>
    <script src="/Cms/www/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>