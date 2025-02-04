<?php
$files = array(
    "Exceptions/QencodeException.php",
    "Exceptions/QencodeApiException.php",
    "Exceptions/QencodeClientException.php",
    "Classes/TranscodingTask.php",
    "Classes/StitchVideoItem.php",
    "Classes/TranscodingTaskCollection.php",
    "Classes/CustomTranscodingParams.php",
    "Classes/Destination.php",
    "Classes/Format.php",
    "Classes/Stream.php",
    "Classes/VideoCodecParameters.php",
    "QencodeApiClient.php",
);

foreach ($files as $file) {
    require_once(__DIR__."/src/".$file);
}