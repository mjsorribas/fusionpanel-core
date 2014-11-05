<?php

/**
 * @copyright 2014 Fusionpanel Project (http://www.fusionpanel.org/) 
 * Fusionpanel is a GPL fork of the Fusionpanel Project whose original header follows:
 *
 * Fusionpanel - A Cross-Platform Open-Source Web Hosting Control panel.
 *
 * @package Fusionpanel
 * @version $Id$
 * @author Bobby Allen - ballen@bobbyallen.me
 * @copyright (c) 2008-2014 Fusionpanel Group - http://www.zpanelcp.com/
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License v3
 *
 * This program (Fusionpanel) is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
class module_controller extends ctrl_module
{

    public static function getFusionpanelUpdates()
    {
        if (ctrl_options::GetSystemOption('dbversion') < ctrl_options::GetSystemOption('latestzpversion')) {
            $msg = ui_language::translate("There are currently new updates for your Fusionpanel installation, please download the latest release") . " (<strong>" . ctrl_options::GetSystemOption('latestzpversion') . "</strong>) from <a href=\"http://www.fusionpanel.org/\">http://www.fusionpanel.org/</a>.";
        } elseif (ctrl_options::GetSystemOption('dbversion') == ctrl_options::GetSystemOption('latestzpversion')) {
            $msg = "Congratulations, You are running the most recent version of Fusionpanel (<strong>" . ctrl_options::GetSystemOption('latestzpversion') . "</strong>)!";
        } else {
            $msg = "You appear to be running a BETA release, unless you are testing or developing we recommend you download and use the latest stable release (<strong>" . ctrl_options::GetSystemOption('latestzpversion') . "</strong>).";
        }
        return $msg;
    }

}
