<?php


namespace Wx\DeclareCustom;


interface ConfigurationInterface
{
	public function getAppId();
	public function getMchKey();
	public function getMchId();
	public function getApiRoot();
}
