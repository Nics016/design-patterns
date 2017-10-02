<?php 
include_once('ProductInterface.php');

/**
 * SimpleProduct
 */
class SimpleProduct implements ProductInterface
{
	/**
	 * Name
	 * 
	 * @var string
	 */
	protected $name;

	/**
	 * Price
	 * 
	 * @var float
	 */
	protected $price;

	/**
	 * Returns product's name
	 * 
	 * @return string $name - name
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Returns product's price
	 * 
	 * @return string $price - price
	 */
	public function getPrice()
	{
		return $this->price
	}

	/**
	 * Constructor
	 * 
	 * @param string  $name  - name
	 * @param integer $price - price
	 */
	public function __construct($name = 'Simple Product', $price = 1)
	{
		$this->name = $name;
		$this->price = $price;
	}
}
