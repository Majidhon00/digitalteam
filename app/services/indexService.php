<?php

namespace App\services;
use App\Models\Email;
use App\Models\OurAgency;
use App\Models\partfollio;
use App\Models\Pricing;
use App\Models\Team;
use App\Models\Type;
use App\Models\WhatWeDo;
use App\item\indexItem;
use App\Models\OurContent;
class indexService {

    public function Index()
    {
        $item=new indexItem();
        $item->OurContent=OurContent::where('id','>',1)->limit(5)->get();
        $item->OurContentid=OurContent::findOrFail(1);
        $item->OurAgency=OurAgency::findOrFail(1); 
        $item->team=Team::limit(8)->get();
        $item->parfollio=partfollio::orderBy('id','DESC')->limit(12)->get();
        $item->WhatWeDo=WhatWeDo::orderBy('id','DESC')->limit(6)->get();
        $item->pricing=Pricing::where('summa','!=',null)->orderBy('summa','ASC')->limit(3)->get();
        $item->type=Type::where('type','!=',null)->limit(10)->get();
        $item->email=Email::where('phone1','!=',null)->findOrFail(1);
        return $item;
    }

}
