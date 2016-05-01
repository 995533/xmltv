<?php

function downloadFile($url) {

    if ($contents = file_get_contents($url)) {

        file_put_contents(__DIR__ . '/upload/' . 'xmltv.xml.gz', $contents);
        return true;
    } else {
        return false;
    }
}
