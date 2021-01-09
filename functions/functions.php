<?php

/**
 * print_pre
 *
 * @param  mixed $value
 * @return string
 */
function print_pre($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

/**
 * generateUuid
 *
 * @return string
 */
function generateUuid()
{
    $uuid = Ramsey\Uuid\Uuid::uuid4();

    return $uuid;
}

/**
 * generatePageKeywords
 *
 * @param  array $pageKeyWords
 * @return string|false
 */
function generatePageKeywords(array $pageKeyWords)
{
    $output = '';
    foreach ($pageKeyWords as $pageKeyword) {
        $output .= $pageKeyword . ', ';
    }
    return substr($output, 0, -2);
}
