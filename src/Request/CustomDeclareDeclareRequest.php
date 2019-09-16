<?php


namespace Wx\DeclareCustom\Request;


use Wx\DeclareCustom\RequestInterface;

class CustomDeclareDeclareRequest implements RequestInterface
{

	private $params = [];

	public function getParams()
	{
		return $this->params;
	}

	public function getUri()
	{
		return '/newcustoms/customdeclareredeclare';
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

	public function setMchCustomsNo($mchCustomsNo)
	{
		$this->params['mch_customs_no'] = $mchCustomsNo;
	}

}
