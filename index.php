<?php
// Never expose errors on this public, unauthenticated guest-link entry point.
ini_set('display_errors', 0);
error_reporting(0);

require_once(__DIR__ . '/classes/class.ilMultiVcInit4Guestlink.php');

$join = JoinMeetingByGuestLink::init();
echo $join;
