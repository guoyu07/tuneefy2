<?php

  require '../vendor/autoload.php';

  $app = new tuneefy\Application();
  $app->configure();
  $app->setupWebsiteRoutes();
  $app->run();
