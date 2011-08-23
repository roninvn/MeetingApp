<?php

namespace MeetingApp\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use MeetingApp\CoreBundle\Libs\Biz\UsersRoleBiz;
use MeetingApp\CoreBundle\Libs\DataUtility;
use MeetingApp\CoreBundle\Libs\ServerResponse;


class UsersRoleController extends Controller
{
	/**
     * Action that return all user role in the db     
     * @return JSON list of all user role 
     */
    public function getAllRolesAction()
    {
    	try
    	{ 	
	    	DataUtility::setEntityManager($this->get('doctrine.orm.entity_manager'));
			$resp = new ServerResponse();
	
			$resp->setResponseData(UsersRoleBiz::getAllRoleAsArray());
			return new Response($resp->jsonEncode());
		}
    	catch(\Exception $ex)
    	{
    		$resp = new ServerResponse();
    		$resp->addErrorInfo("System", $ex->getMessage());    					
    		return new Response($resp->jsonEncode());
    	}  
    }
}
