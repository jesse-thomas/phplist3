<?php

require_once dirname(__FILE__) . '/accesscheck.php';

## for testing the loader allow a delay flag
if (isset($_GET['delay'])) {
    $_SESSION['LoadDelay'] = sprintf('%d', $_GET['delay']);
} else {
    unset($_SESSION['LoadDelay']);
}

print '<div id="contentdiv"></div>';
print asyncLoadContent('./?page=pageaction&action=domainstats&ajaxed=true'. addCsrfGetToken());
