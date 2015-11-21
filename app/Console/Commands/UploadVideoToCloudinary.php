<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use JD\Cloudder\Facades\Cloudder;

class UploadVideoToCloudinary extends Command {

	protected $VIDEO_NAME;
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'cloudder:upload_video';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Uploads a video to Cloudinary.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		$this->VIDEO_NAME = public_path('rabbit.mp4');
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		Cloudder::uploadVideo($this->VIDEO_NAME)->getResult();
	}
}
