<?php 
/**
 * Creator
 */
abstract class Creator
{
	/**
	 * Factory Method definition
	 * 
	 * @return mixed $result - result
	 */
	protected abstract function factoryMethod();

	/**
	 * Returns factoryMethod's result
	 * 
	 * @return mixed $result - result
	 */
	public function startFactory()
	{
		return $this->factoryMethod();
	}
}
