<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use JD\Cloudder\Facades\Cloudder;

class UploadPictureCommand extends Command {

    protected $PICTURE_NAME;
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'cloudder:upload_image';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Uploads an image to Cloudinary.';

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
        Cloudder::upload($this->PICTURE_NAME)->getResult();
	}
}
