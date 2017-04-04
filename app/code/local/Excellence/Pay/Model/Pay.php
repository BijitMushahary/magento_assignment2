<?php
class Excellence_Pay_Model_Pay extends Mage_Payment_Model_Method_Abstract
{
	protected $_code = 'pay';
	protected $_formBlockType = 'pay/form_pay';
	protected $_infoBlockType = 'pay/info_pay';
	public function assignData($data)
	{
		if (!($data instanceof Varien_Object)) {
			$data = new Varien_Object($data);
		}
		$info = $this->getInfoInstance();
		$info->setCheckNo($data->getCheckNo())->setCheckDate($data->getCheckDate())->setPayeeName($data->getPayeeName());
		return $this;
	}
}
?>
