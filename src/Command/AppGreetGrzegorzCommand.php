<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class AppGreetGrzegorzCommand extends Command
{
    protected static $defaultName = 'app:greet Grzegorz';

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
            ->addArgument('name', InputArgument::REQUIRED, 'Who do you want to greet?')
            ->addArgument('last_name', InputArgument::OPTIONAL, 'Your last name?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $text = 'Hi '.$input->getArgument('name');

        $lastName = $input->getArgument('last_name');
        if ($lastName) {
            $text .= ' '.$lastName;
        }

        $output->writeln($text.'!');


    }
}
