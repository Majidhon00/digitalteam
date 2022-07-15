<?php

namespace App\Console\Commands;


use App\services\indexService;
use Illuminate\Console\Command;

class MajidhonCMD extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'majidhon:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Abdulmajid CMD';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $service=new indexService();
        $item=$service->Index();

        return view('index',[
            'WhatWeDo'=>$item->WhatWeDo,
            'OurAgency'=>$item->OurAgency,
            'OurContent'=>$item->OurContent,
            'OurContentid'=>$item->OurContentid,
            'teams'=>$item->team,
            'partfollios'=>$item->parfollio
            ]);
    }
}
