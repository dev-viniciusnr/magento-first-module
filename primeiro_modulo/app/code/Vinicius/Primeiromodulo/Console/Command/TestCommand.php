<?php

namespace Vinicius\Primeiromodulo\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
	protected function configure()
	{
		$this->setName('vinicius:teste')
			->setDescription('Nosso Primeiro Comando');
	
		parent::configure();
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
			$output->writeIn('Ola Magenteiro');
	}
}