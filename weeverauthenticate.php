<?php
/*	
*	Weever Apps AJAX Authenticator
*	(c) 2012 Weever Apps Inc. <http://www.weeverapps.com/>
*
*	Author: 	Robert Gerald Porter <rob@weeverapps.com>
*	Version: 	0.1
*   License: 	GPL v3.0
*
*   This extension is free software: you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation, either version 3 of the License, or
*   (at your option) any later version.
*
*   This extension is distributed in the hope that it will be useful,
*   but WITHOUT ANY WARRANTY; without even the implied warranty of
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*   GNU General Public License for more details <http://www.gnu.org/licenses/>.
*
*/

defined('_JEXEC') or die();

jimport('joomla.plugin.plugin');

class plgUserWeeverAuthenticate extends JPlugin {


	function __construct(& $subject, $config)
	{
		parent::__construct($subject, $config);
	}
	

	function onLoginUser($user, $options)
	{
		
		
		if ( JRequest::getVar('jCorsRequest') ) {
					
			echo "{success:true}";
			
			jexit();
			
		}

		
		
	}
	
	
	/* Doesn't actually work in Joomla 1.5. Likely never will be fixed. */
	function onLoginFailure($user, $options)
	{
		
		if( JRequest::getVar('jCorsRequest') )
		{
			
			echo "{success:false}";
			
			jexit();
		
		}
		
		
	}


	function onLogoutUser($user)
	{
	
		if( JRequest::getVar('jCorsRequest') )
		{
		
			echo "success";
			
			jexit();
		
		}
		
	}
	
}
