<?php
include ('crawl.php');
$data = crawler::http_request('https://stackoverflow.com/questions/2313107/how-do-i-make-a-simple-crawler-in-php');
$links = crawler::extract_elements('a', $data);
if (count($links) > 0)
{
    //file_put_contents('links.json', json_encode($links, JSON_PRETTY_PRINT));
    echo (json_encode($links, JSON_PRETTY_PRINT));
}
?>