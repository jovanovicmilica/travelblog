<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("posts")->insert([
            ['title'=>"Travel Bucket List for 2021","img"=>'bucketList.jpg',"text"=>'It seems like a lifetime ago that I was creating my 2020 travel bucket list! While things have certainly changed since way back then, one thing remains the same:

wanderlust is incurable. No matter how many places you explore, there are always countless experiences waiting for you.

The good news is that you don’t have to cross the globe to experience a magical adventure. In fact, on this year’s travel bucket, we’re not talking about crossing borders at all.

With our passports safely tucked away, let’s run through the best domestic trips and (socially-distanced) adventures to be had near you — wherever on this beautiful planet you might be.
If you’ve never been on a solo trip before, make this your year. It doesn’t matter where you go, just go further than you’ve ever been on your own before.

Learning to simply enjoy your own company is truly one of the best things you can do for yourself. And, that doesn’t have to mean crossing the globe solo.

Work your way up. Go to a new cafe on your own and just enjoy the peace and quiet. Geek out at a gallery or watch a movie that only you want to see. Treat yourself to a weekend away in the next town over.'],
            ['title'=>"The Best Places to Travel in the United States Right Now","img"=>'usa.png',"text"=>'For those that are looking to explore regionally and safely, this is for you!

While international travel is at a bit of a standstill and some places are opening back up with different restrictions in place, you may be trying to figure out where can Americans travel right now. As many folks are opting to stay domestic right now, USA road trips have become quite popular.

Whether you’re road tripping for the first time, looking for the best road trips to take in the USA, or you just want to explore the best cities in the USA—you’ve come to the right place.

Are you asking yourself, “Where can I travel right now?”
I’ve rounded up some places that offer wide-open spaces where you can immerse yourself in nature and adventure at a distance.

As you plan your trip, understand that restrictions are constantly in flux—certain things may be closed and some communities do not want outside visitors. Make sure to check on quarantines in place and other restrictions before committing to a place, too!

My suggestion is to research what’s going on locally, be cautious, wear protective gear, and be mindful of others. Here are my tips for how to travel safely during COVID-19.

If you’re taking a road trip or flying domestically and looking to explore somewhere new, here are my suggestions for the best USA places to travel to right now!']
        ]);
    }
}
