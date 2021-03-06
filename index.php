<?php

/**
 * @copyright 2014 fusionpanel Project (http://www.fusionpanel.org/) 
 * fusionpanel is a GPL fork of the Fusionpanel Project whose original header follows:
 *
 * The FusionpanelX loader and default handler file.
 * @package zpanelx
 * @subpackage core
 * @author Bobby Allen (ballen@bobbyallen.me)
 * @copyright Fusionpanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
session_start();
require_once 'dryden/loader.inc.php';
require_once 'cnf/db.php';
debug_phperrors::SetMode('dev');
require_once 'inc/dbc.inc.php';
debug_phperrors::SetMode(ctrl_options::GetSystemOption('debug_mode'));
require_once 'inc/init.inc.php';
//This is where we check the session for hi-jacking
if(!runtime_sessionsecurity::antiSessionHijacking()){
    exit(header("location: ./?sessionIssue"));
}
?>