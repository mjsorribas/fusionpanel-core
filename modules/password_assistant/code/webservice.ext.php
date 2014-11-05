<?php

/**
 * @copyright 2014 Fusionpanel Project (http://www.fusionpanel.org/) 
 * Fusionpanel is a GPL fork of the Fusionpanel Project whose original header follows:
 *
 * @package zpanelx
 * @subpackage modules
 * @author Bobby Allen (ballen@bobbyallen.me)
 * @copyright Fusionpanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
class webservice extends ws_xmws {

    /**
     * Resets a user's Fusionpanel account password. Requires <uid> and <newpassword> tags.
     * @return type 
     */
    function ResetUserPassword() {
        $contenttags = $this->XMLDataToArray($this->wsdata);
        $dataobject = new runtime_dataobject();
        $dataobject->addItemValue('response', '');
        if (module_controller::UpdatePassword($contenttags['xmws']['content']['uid'], $contenttags['xmws']['content']['newpassword'])) {
            $dataobject->addItemValue('content', ws_xmws::NewXMLTag('uid', $contenttags['xmws']['content']['uid']) . ws_xmws::NewXMLTag('reset', 'true'));
        } else {
            $dataobject->addItemValue('content', ws_xmws::NewXMLTag('uid', $contenttags['xmws']['content']['uid']) . ws_xmws::NewXMLTag('reset', 'false'));
        }
        return $dataobject->getDataObject();
    }

}

?>
