<?php


namespace Wx\DeclareCustom;


class Response implements ResponseInterface
{

	private $body;

	public function setBody($data)
	{
		$this->body = $data;
	}

	public function get($key)
	{
		return isset($this->body[$key]) ? $this->body[$key] : null;
	}

	public function getReturnCode()
	{
		return $this->get('return_code');
	}

	public function getReturnMsg()
	{
		return $this->get('return_msg');
	}

}
