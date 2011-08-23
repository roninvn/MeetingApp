<?php

namespace MeetingApp\CoreBundle\Libs;

/**
* Class that contains data replied from server
* @author Nam Hoang
* @package ServerResponse
*/
class ServerResponse
{
	/**
	 * Operation is success or not
	 * @access public
	 * @var $success
	 */
	public $success = true;

	/**
	 * Array contains all error info
	 * @access public
	 * @var $errorinfo
	 */
	public $errorinfo = NULL;

	/**
	 * Array contains all replied data
	 * @access public
	 * @var $Data
	 */
	public $data = NULL;


	/**
	 * Add an error info into ErrorInfo array & set Success to false
	 * @param $errField : Field name
	 * @param $errCode : Error code
	 * @return none
	 */
	public function addErrorInfo($errField, $errCode)
	{
		if($this->errorinfo == NULL)
		$this->errorinfo = Array();

		$this->success = false;

		$this->errorinfo[$errField]=$errCode;
	}

	/**
	 * Add an error info into ErrorInfo array & set Success to false
	 * @param $errField : Field name
	 * @param $errCode : Error code
	 * @return none
	 */
	public function setResponseData($data)
	{
		$this->data = $data;
	}
	
	/**
	* Add an error info into ErrorInfo array & set Success to false
	* @param $callback : callback function name
	* @return JSON string
	*/
	public function jsonEncode($callback = NULL)
	{
		$str = json_encode($this);
		
		if($callback == NULL || $callback == "")
			return $str;
		
		return ($callback."(".$str.");");
		
	}
}