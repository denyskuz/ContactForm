<?php
namespace Elogic\ContactForm\Model\ResourceModel\Form;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'form_id';
	protected $_eventPrefix = 'elogic_contactform_form_collection';
	protected $_eventObject = 'form_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Elogic\ContactForm\Model\Post', 'Elogic\ContactForm\Model\ResourceModel\Post');
	}

}
