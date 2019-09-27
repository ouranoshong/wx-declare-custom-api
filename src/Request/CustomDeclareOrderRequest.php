<?php


namespace Wx\DeclareCustom\Request;


use Wx\DeclareCustom\RequestInterface;

class CustomDeclareOrderRequest implements RequestInterface
{
	private $params = [];

	public function getParams()
	{
		return $this->params;
	}

	public function getUri()
	{
		return '/customs/customdeclareorder';
	}

	public function setOutTradeNo($outTradeNo)
	{
		$this->params['out_trade_no'] = $outTradeNo;
	}

	public function setTransactionId($transactionId)
	{
		$this->params['transaction_id'] = $transactionId;
	}

	public function setCustoms($customs)
	{
		$this->params['customs'] = $customs;
	}

	public function setMchCustomsNo($mchCustomsNo)
	{
		$this->params['mch_customs_no'] = $mchCustomsNo;
	}

	public function setDuty($duty)
	{
		$this->params['duty'] = $duty;
	}

	public function setActionType($actionType)
	{
		$this->params['action_type'] = $actionType;
	}

	public function setCertType($certType)
	{
		$this->params['cert_type'] = $certType;
	}

	public function setCertId($certId)
	{
		$this->params['cert_id'] = $certId;
	}

	public function setName($name)
	{
		$this->params['name'] = $name;
	}

	public function setSubOrderNo($subOrderNo)
	{
		$this->params['sub_order_no'] = $subOrderNo;
	}

	public function setFeeType($feeType)
	{
		$this->params['fee_type'] = $feeType;
	}

	public function setOrderFee($orderFee)
	{
		$this->params['order_fee'] = $orderFee;
	}

	public function setTransportFee($transportFee)
	{
		$this->params['transport_fee'] = $transportFee;
	}

	public function setProductFee($productFee)
	{
		$this->params['product_fee'] = $productFee;
	}
}
