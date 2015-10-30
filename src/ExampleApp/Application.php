<?php
namespace ExampleVendor\ExampleApp;


use ConsoleHelpers\ConsoleKit\Application as BaseApplication;
use ExampleVendor\ExampleApp\Command\ExampleCommand;
use Symfony\Component\Console\Command\Command;

class Application extends BaseApplication
{

	/**
	 * Initializes all the composer commands.
	 *
	 * @return Command[] An array of default Command instances.
	 */
	protected function getDefaultCommands()
	{
		$default_commands = parent::getDefaultCommands();
		$default_commands[] = new ExampleCommand();

		return $default_commands;
	}

}
