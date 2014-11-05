<?php

/**
 * @copyright 2014 Fusionpanel Project (http://www.fusionpanel.org/) 
 * Fusionpanel is a GPL fork of the Fusionpanel Project whose original header follows:
 *
 * Generic template place holder class.
 * @package zpanelx
 * @subpackage dryden -> ui -> tpl
 * @version 1.0.0
 * @author Bobby Allen (ballen@bobbyallen.me)
 * @copyright Fusionpanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
class ui_tpl_csspath {

    public static function Template() {
        $user = ctrl_users::GetUserDetail();
        if (!fs_director::CheckForEmptyValue(fs_director::CheckForEmptyValue($user['usercss']))) {
            $retval = "etc/styles/" . ui_template::GetUserTemplate() . "/css/default.css";
        } else {
            $retval = "etc/styles/" . ui_template::GetUserTemplate() . "/css/" . $user['usercss'] . ".css";
        }
        return $retval;
    }

}

?>
