<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use JD\Cloudder\Facades\Cloudder;

class ShowResource extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'cloudder:show';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command to show uploaded resource.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		if ($this->option('secure') && $this->option('secure') == true) {
			$url = Cloudder::secureShow('uiuih8djzx8bl0azjisa', []);
			$this->info($url);
		} else {
			$url = Cloudder::show('mypikachu', []);
			$this->info($url);
		}
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			['secure', null, InputOption::VALUE_OPTIONAL, 'Should showas secure', null],
		];
	}

}
