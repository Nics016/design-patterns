<?php 
include_once('Creator.php');
include_once('Product/SimpleProduct.php');

/**
 * SimpleProductFactory
 */
class ProductNameFactoryMethod extends Creator
{
	/**
	 * Factory Method
	 * 
	 * @return string $result - result
	 */
	protected function factoryMethod()
	{
		/** @var SimpleProduct $product - product instance */
		$product = new SimpleProduct();

		return $product->getName();
	}
}
