<?php // $Revision$

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2001 by the phpAdsNew developers                       */
/* http://sourceforge.net/projects/phpadsnew                            */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Include required files
require ("../config.inc.php");
require ("lib-gui.inc.php");
require ("../view.inc.php");


// Open the database connection
$link = db_connect();


// Authorize the user and load user specific settings.
require ("lib-permissions.inc.php");
phpAds_Start();


// Load language strings
require ("../language/$phpAds_language.inc.php");


if (!isset($clientID)) $clientID='';
if (!isset($bannerID)) $bannerID='';


// Setup navigation
$pages = array(
	"1" 		=>	array("admin.php" => "$strHome"),
	"1.1" 		=> 	array("client-edit.php" => "$strAddClient"),
	"1.2" 		=> 	array("client-edit.php" => "$strModifyClient"),
	"1.3" 		=> 	array("banner-client.php?clientID=$clientID" => "$strBannerAdmin"),
	"1.3.1" 	=> 	array("banner-edit.php" => "$strAddBanner"),
	"1.3.2" 	=> 	array("banner-edit.php" => "$strModifyBanner"),
	"1.3.3" 	=> 	array("banner-acl.php" => "$strModifyBannerAcl"),
	"1.4" 		=> 	array("stats-client.php?clientID=$clientID" => "$strStats"),
    "1.4.1" 	=> 	array("stats-details.php?clientID=$clientID&bannerID=$bannerID" => "$strDetailStats"),
	"1.4.1.1" 	=> 	array("stats-daily.php" => "$strDailyStats"),
	"1.4.2" 	=> 	array("stats-weekly.php?clientID=$clientID" => "$strWeeklyStats"),
	"1.5" 		=> 	array("stats-details.php?clientID=$clientID&bannerID=$bannerID" => "$strDetailStats"),
	"1.6" 		=> 	array("stats-weekly.php?clientID=0" => "$strWeeklyStats"),
	"2" 		=> 	array("index.php" => "$strHome"),
	"2.1" 		=> 	array("stats-details.php?clientID=$clientID&bannerID=$bannerID" => "$strDetailStats"),
	"2.1.1" 	=> 	array("stats-daily.php" => "$strDailyStats"),
	"2.2" 		=> 	array("stats-weekly.php" => "$strWeeklyStats"),
	"2.3" 		=> 	array("client-edit.php" => "$strPreferences"),
	"2.4" 		=> 	array("banner-edit.php?clientID=$clientID&bannerID=$bannerID" => "$strModifyBanner")
);

?>
