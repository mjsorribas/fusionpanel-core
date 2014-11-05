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
class ui_tpl_email {

    public static function Template() {
        $user_array = ctrl_users::GetUserDetail();
        return $user_array['email'];
    }

}

?>
