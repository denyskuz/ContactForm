<?php
namespace Elogic\ContactForm\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'elogic_contactform_form';

	protected $_cacheTag = 'elogic_contactform_form';

	protected $_eventPrefix = 'elogic_contactform_form';

	protected function _construct()
	{
		$this->_init('Elogic\ContactForm\Model\ResourceModel\Form');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
