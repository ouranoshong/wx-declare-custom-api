<?php


namespace Wx\DeclareCustom;


class Client
{
	/**
	 * @var ConfigurationInterface
	 */
	private $configuration;


	public function __construct(ConfigurationInterface $configuration)
	{
		$this->configuration = $configuration;
	}

	/**
	 * @param RequestInterface $request
	 * @param ResponseInterface $response
	 * @return bool|string
	 * @throws \Exception
	 */
	public function execute(RequestInterface $request, ResponseInterface $response)
	{
		$params = $request->getParams();

		$params = array_merge($params,[
			'appid' => $this->configuration->getAppId(),
			'mch_id' => $this->configuration->getMchId()
		]);

		$params['sign'] = signature($params, $this->configuration->getMchKey());

		$uri = trim($this->configuration->getApiRoot(), '/') . '/'. trim($request->getUri(), '/');

		$body = post_xml($uri, convert_arr_to_xml($params));

		if ($body) {
			$response->setBody(convert_xml_to_arr($body));
		}

		return $body;
	}
}
