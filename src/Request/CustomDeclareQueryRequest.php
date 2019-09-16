<?php


namespace Wx\DeclareCustom\Request;


use Wx\DeclareCustom\RequestInterface;

class CustomDeclareQueryRequest implements RequestInterface
{

	private $params = [];

	public function getParams()
	{
		return $this->params;
	}

	public function getUri()
	{
		return 'customs/customdeclarequery';
	}

	public function setOutTradeNo($outTradeNo)
	{
		$this->params['out_trade_no'] = $outTradeNo;
	}

	public function setTransactionId($transactionId)
	{
		$this->params['transaction_id'] = $transactionId;
	}

	public function setSubOrderNo($subOrderNo)
	{
		$this->params['sub_order_no'] = $subOrderNo;
	}

	public function setSubOrderId($subOrderId)
	{
		$this->params['sub_order_id'] = $subOrderId;
	}

	public function setCustoms($customs)
	{
		$this->params['customs'] = $customs;
	}
}
