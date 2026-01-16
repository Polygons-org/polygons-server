<?php
$LatestVer = "ALPHA";
$ClientVer = $_GET['ClientVersion'];

$AllowedVersions = array(
    "ALPHA",
);

$ClientOnlyVersions = array(
    "empty",
);

# Possible access levels are: all, client, none
# All means you can access the client and the servers
# Client means you cant access the servers
# None means you cant play the game
$AccessLevel = "";

if (in_array($ClientVer, $AllowedVersions)) {
    $AccessLevel = "all";
} else if (in_array($ClientVer, $ClientOnlyVersions)) {
    $AccessLevel = "client";
} else {
    $AccessLevel = "none";
}

echo $AccessLevel . ";" . $LatestVer;
?>
