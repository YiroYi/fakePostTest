<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class FakePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fake-post:post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a fake post to Incfile API';

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
    public function handle()
    {
      /*This function allows to send the post to the desired site.
        This function was created using Guzzle you can find the documentation
        at:
        http://docs.guzzlephp.org/en/stable/quickstart.html
      */

        $client = new \GuzzleHttp\Client();
        $url = "https://atomic.incfile.com/fakepost";
        $request = $client->post($url,  ['form_params'=>[

          'title'=>"Job Position for IncFile.",
          'name'=>"Yiro Yuzin Yi Terreros",
          'introduction'=>"Hello this is Yiro and Im very happy to have joined to this hiring process regarding Laravel position"]
          ]);

        $responseStatus = $request->getStatusCode();
        $responseContent = $request->getBody()->getContents();

        $this->info('The POST request has successfully sent to '.$url);
        $this->info('The status of this POST request was '.$responseStatus);
        $this->info('The content of the POST request is '.$responseContent);

    }
}
