<?php


namespace Wx\DeclareCustom;


interface ResponseInterface
{
	public function setBody($data);

	public function getBody();
}
