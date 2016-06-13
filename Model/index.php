<?php
/**
* 模型
*/
class ModelIndex
{
	private $data = array(
		'1' => 'One',
		'2' => 'Two'
	);

	public function getData($key){
		return $this->data[$key];
	}
}