<?php
class Cpu
{
	public function run()
	{
		echo "CPU starts to run";
	}
}

class Memory
{
	public function run()
	{
		echo "\nMemory starts to run";
	}
}
class Monitor
{
	
	public function run()
	{
		echo "\nMonitor starts to run";
	}
}
class ComputerFacade
{

	protected $cpu;
	protected $memory;
	protected $monitor;
	
	public function __construct()
	{
		$this->cpu = new Cpu();
		$this->memory = new Memory();
		$this->monitor = new Monitor();
	}


	public function run()
	{
		$this->cpu->run();
		$this->memory->run();
		$this->monitor->run();
	}
}
$computer = new ComputerFacade();
$computer->run();

?>