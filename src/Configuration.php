<?php


namespace Wx\DeclareCustom;


class Configuration implements ConfigurationInterface
{
	private $appId;
	private $mchKey;
	private $mchId;
	private $apiRoot = 'https://api.mch.weixin.qq.com/cgi-bin/mch/';

	/**
	 * @return mixed
	 */
	public function getAppId()
	{
		return $this->appId;
	}

	/**
	 * @param mixed $appId
	 * @return Configuration
	 */
	public function setAppId($appId)
	{
		$this->appId = $appId;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMchKey()
	{
		return $this->mchKey;
	}

	/**
	 * @param mixed $mchKey
	 * @return Configuration
	 */
	public function setMchKey($mchKey)
	{
		$this->mchKey = $mchKey;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMchId()
	{
		return $this->mchId;
	}

	/**
	 * @param mixed $mchId
	 * @return Configuration
	 */
	public function setMchId($mchId)
	{
		$this->mchId = $mchId;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getApiRoot()
	{
		return $this->apiRoot;
	}

	/**
	 * @param mixed $apiRoot
	 * @return Configuration
	 */
	public function setApiRoot($apiRoot)
	{
		$this->apiRoot = $apiRoot;
		return $this;
	}

}
