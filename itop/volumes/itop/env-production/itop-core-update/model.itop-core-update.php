<?php
//
// File generated by ... on the 2023-06-05T09:45:36+0200
// Please do not edit manually
//

/**
 * Classes and menus for itop-core-update (version 2.7.6)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Menus
//
class MenuCreation_itop_core_update extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['SystemTools'] = new MenuGroup('SystemTools', 100 , 'ResourceSystemMenu', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		if (UserRights::IsAdministrator())
		{
			$__comp_menus__['iTopUpdate'] = new WebPageMenuNode('iTopUpdate', utils::GetAbsoluteUrlAppRoot()."pages/exec.php?exec_module=itop-core-update&exec_page=index.php&c[menu]=iTopUpdate&maintenance=true", $__comp_menus__['SystemTools']->GetIndex(), 60 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		}
	}
} // class MenuCreation_itop_core_update
