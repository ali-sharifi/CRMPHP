<?php

include_once "LiveIDManager.php";
include_once "EntityUtils.php";

$liveIDUseranme = "CRMAdmin@Services.onmicrosoft.com";
$liveIDPassword = "SneakyBastard!";

$organizationServiceURL = "https://crm.dynamics.com/XRMServices/2011/Organization.svc";
$liveIDManager = new LiveIDManager();

$securityData =
    $liveIDManager->authenticateWithLiveID($organizationServiceURL, $liveIDUseranme, $liveIDPassword);

//Print out the token received from WLID

if ($securityData != null && isset($securityData)) {
    echo("\nKey Identifier:" . $securityData->getKeyIdentifier());
    echo("\nSecurity Token 1:" . $securityData->getSecurityToken0());
    echo("\nSecurity Token 2:" . $securityData->getSecurityToken1());
} else {
    echo "Unable to authenticate LiveId.";
    return;
}



