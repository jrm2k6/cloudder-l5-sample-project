<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use JD\Cloudder\Facades\Cloudder;
use Symfony\Component\Console\Input\InputOption;

class CreateArchiveCommand extends Command {

    protected $PICTURE_NAME;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cloudder:create_archive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an archive containing images from Cloudinary';

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
        $this->info("Create archive for pictures with tag kitten");
        $res = Cloudder::createArchive(['tags' => 'kitten'], 'kitten_archive', 'create');
    }
}
