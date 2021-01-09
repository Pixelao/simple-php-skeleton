<?php

function print_pre($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function generateUuid()
{
    $uuid = Ramsey\Uuid\Uuid::uuid4();

    return $uuid;
}
