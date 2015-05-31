<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use JD\Cloudder\Facades\Cloudder;
use Symfony\Component\Console\Input\InputOption;

class DeletePictureCommand extends Command {

    protected $PICTURE_NAME;
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'cloudder:delete';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Deletes an image from Cloudinary';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
        $this->PICTURE_NAME = public_path('kitten.jpg');

	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
        $picture_id = $this->option('picture_id');
		$this->info("Delete a picture from Cloudinary");
        Cloudder::destroyImage($picture_id);
	}

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['picture_id', null, InputOption::VALUE_REQUIRED, 'abcdyourid', null]
        ];
    }

}
