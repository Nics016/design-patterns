<?php 
/**
 * Creator
 */
abstract class Creator
{
	/**
	 * Method which defines which instance has to be created
	 * 
	 * @return mixed $instance - instance
	 */
	protected abstract function factoryMethod();

	/**
	 * Returns intance which is got by factoryMethod()
	 * 
	 * @return mixed $instance - instance
	 */
	public function startFactory()
	{
		/** @var mixed $instance - instace to be returned */
		$instance = $this->factoryMethod();

		return $instance;
	}
}
