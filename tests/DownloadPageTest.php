<?php
class DownloadPageTest
{
    public function testDownload()
    {
        $url = "https://ru.hexlet.io/";
        $directory = "";
        $clienName = "FakeClient";

        $result = loadPage($url, $directory, $clienName);
    }


}