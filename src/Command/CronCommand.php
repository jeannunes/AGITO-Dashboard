<?php
/**
 * Created by PhpStorm.
 * User: Jean Nunes
 * Date: 10/19/2018
 * Time: 2:57 PM
 */

namespace App\Command;


use Cake\Console\Arguments;
use Cake\Console\Command;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;

class CronCommand extends Command
{

    public function initialize()
    {
        parent::initialize();
    }

    protected function buildOptionParser(ConsoleOptionParser $parser)
    {
        $parser->addArgument('cmd', [
            'help' => 'Which command would you like to execute?'
        ]);
        return $parser;
    }

    public function execute(Arguments $args, ConsoleIo $io)
    {
        $io->out("Deu certo!");
        $io->info("Iniciando a execução do script...");
        $cmd = $args->getArgument('cmd');
        if (strlen($cmd) > 0 && method_exists($this, $cmd)) {
            $io->out("Iniciando script ${cmd}...");
            $this->$cmd($args, $io);
        } else {
            $io->error("Script ${cmd} não existe!");
            $this->abort();
        }
    }

    public function github(Arguments $args, ConsoleIo $io)
    {
        $io->info("Iniciando atualização do código...");
        $io->out(system('git pull origin master'));
    }

    public function daily(Arguments $args, ConsoleIo $io)
    {
        $io->info("Executando scripts diários...");
    }
}