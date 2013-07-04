<?php

namespace FunkyMonkeyLabs\Console;

use Abdulklarapl\Components\Console\Event\ConsoleEvent;
use Abdulklarapl\Components\Console\Application\ConsoleApplication;
use Abdulklarapl\Components\Console\Application\ConsoleApplicationInterface;

/**
 * FunkyMonkeyApplication
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
class FunkyMonkeyApplication extends ConsoleApplication implements ConsoleApplicationInterface
{

    /**
     * @return string
     */
    public function getNamespace()
    {
        return 'funkymonkeylabs';
    }

    /**
     * @param ConsoleEvent $event
     */
    public function run(ConsoleEvent $event)
    {
        $output = $event->getOutput();
        $input = $event->getInput();

        $output->writeln('Welcome to the Abdulklara Console Component\'s demo powered by FunkyMonkeyLabs!');

        $name = $input->read("What's your name: ");
        $output->writeln("Nice to meet you ".$name."! I'm smart console app");

        $confirm = $input->confirm("Do you like abdulklara console?");

        if ($confirm === true) {
            $output->success("YAY!");
            $this->terminate();
        }

        $output->error("So sad :(");
        $this->terminate();
    }
}