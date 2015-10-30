<?php
namespace ExampleVendor\ExampleApp;


class Container extends \ConsoleHelpers\ConsoleKit\Container
{

	/**
	 * {@inheritdoc}
	 */
	public function __construct(array $values = array())
	{
		parent::__construct($values);

		$this['app_name'] = '{Example-App}';
		$this['app_version'] = '@git-version@';

		$this['working_directory_sub_folder'] = '.{example-app}';

		$this['config_defaults'] = array();
	}

}
