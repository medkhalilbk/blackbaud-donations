<?php
require_once '../includes/blackbaud/blackbaud.php';

echo json_encode(array(
  'authenticated' => \blackbaud\Api_auth::isAuthenticated()
));
