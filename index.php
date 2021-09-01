<?php

$context = stream_context_create([
  'http' => [
    'header' => ['Accept-Language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7'],
//     'proxy' => 'tcp://51.158.169.52:29976', # tcp://51.158.169.52:29976
    // 'request_fulluri' => true,
  ],
]);

$file = file_get_contents('https://www.google.com/finance/', false, $context);

echo $file;
