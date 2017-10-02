<?php 
include_once('Creator.php');
include_once('Product/SimpleProduct.php');

/**
 * SimpleProductFactory
 */
class SimpleProductFactory extends Creator
{
	/**
	 * Factory Method
	 * 
	 * @return SimpleProduct $instance - instance
	 */
	protected function factoryMethod()
	{
		return new SimpleProduct();
	}
}
