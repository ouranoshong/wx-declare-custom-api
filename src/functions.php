<?php


namespace Wx\DeclareCustom;


function signature(array $data, $key)
{
	ksort($data);
	$string = to_url_params($data);
	//签名步骤二：在string后加入KEY
	$string = $string . "&key=" . $key;
	//签名步骤三：MD5加密
	$string = md5($string);
	//签名步骤四：所有字符转为大写
	$result = strtoupper($string);
	return $result;
}
/**
 * 格式化参数格式化成url参数
 *
 * @param $values array
 *
 * @return string
 */
function to_url_params(array $values)
{
	$buff = "";
	foreach ($values as $k => $v) {
		if ($k != "sign" && $v != "" && !is_array($v)) {
			$buff .= $k . "=" . $v . "&";
		}
	}
	$buff = trim($buff, "&");
	return $buff;
}

function post_xml($url, $xml, $second = 30)
{
	$ch = curl_init();
	//设置超时
	curl_setopt($ch, CURLOPT_TIMEOUT, $second);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);//严格校验
	//设置header
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	//要求结果为字符串且输出到屏幕上
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	//post提交方式
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
	//运行curl
	$data = curl_exec($ch);
	//返回结果
	if ($data) {
		curl_close($ch);
		return $data;
	} else {
		$error = curl_errno($ch);
		curl_close($ch);
		throw new \Exception("curl出错，错误码:$error");
	}
}

/**
 * 输出xml字符
 *
 * @param $values
 *
 * @return string
 */
function convert_arr_to_xml($values)
{
	$xml = "<xml>";
	foreach ($values as $key => $val) {
		if (is_numeric($val)) {
			$xml .= "<" . $key . ">" . $val . "</" . $key . ">";
		} else {
			$xml .= "<" . $key . "><![CDATA[" . $val . "]]></" . $key . ">";
		}
	}
	$xml .= "</xml>";
	return $xml;
}
/**
 * 将xml转为array
 * @param string $xml
 * @return array|mixed
 */
function convert_xml_to_arr($xml)
{
	libxml_disable_entity_loader(true);
	return json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
}
