<?php

// header('Access-Control-Allow-Origin: *');

// $uri = filter_var(@$_GET['uri'], FILTER_VALIDATE_URL)
//   ? @$_GET['uri']
//   : die(json_encode(['error' => 'Could not determine URI parameter']));

// $response = file_get_contents(
//   $uri,
//   0,
//   stream_context_create([
//     'http' => [
//       'method' => 'GET',
//       'header' =>
//         'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36',
//     ],
//   ])
// );

// echo $response;

$page = file_get_contents('https://httpbin.org/ip');

echo $page;
