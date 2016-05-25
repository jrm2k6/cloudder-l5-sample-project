<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use JD\Cloudder\Facades\Cloudder;
use Symfony\Component\Console\Input\InputOption;

class DownloadArchiveUrlCommand extends Command {

    protected $PICTURE_NAME;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cloudder:download_archive_url';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieve archive url for download';

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
        $this->info("Retrieve download url for archive containingpictures with tag kitten");
        $res = Cloudder::downloadArchiveUrl(['tags' => 'kitten'], 'kitten_archive');
        dd($res);
    }
}
