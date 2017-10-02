<?php 
/**
 * Product Interface
 */
interface ProductInterface
{
	/**
	 * Get product's name
	 * 
	 * @return string $name - name
	 */
	public function getName();

	/**
	 * Get product's price
	 * 
	 * @return float $price - price
	 */
	public function getPrice();
}
