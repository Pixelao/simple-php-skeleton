<?php

require_once('../app.php');

$uuid = Ramsey\Uuid\Uuid::uuid4();

echo $uuid;
