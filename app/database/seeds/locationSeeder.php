<?php
 
class LocationTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('locations')->delete();
 
        Location::create(array(
            'place' => 'Centennial Park',
            'description' => 'A beautiful park on the west end of Nashville. Great for families and Couples photography.',
            'url' => 'https://www.google.com/?gws_rd=ssl#safe=off&q=centennial+park+nashville',
            'imgUrl' => 'https://c3.staticflickr.com/7/6026/5991022021_2273043230.jpg',
            'googleMap' => 'https://www.google.com/maps/place/Centennial+Park/@36.146918,-86.8086772,15z/data=!4m2!3m1!1s0x886466bb1b724719:0xf36ffc30f0ea08d4'
        ));

        Location::create(array(
            'place' => 'Randor Lake',
            'description' => 'A beautiful prestine setting near Brentwood with great for any type of photography',
            'url' => 'https://www.google.com/?gws_rd=ssl#safe=off&q=radnor+lake+nashville',
            'imgUrl' => 'http://tnstateparks.com/assets/images/hero-images/radnor-lake.jpg',
            'googleMap' => 'https://www.google.com/maps/place/Radnor+Lake,+Oak+Hill,+TN/@36.0881896,-86.8303358,12z/data=!4m2!3m1!1s0x886464b87d02e95f:0x71e0df9899d412c4'
        ));

        Location::create(array(
            'place' => 'Opryland Hotel',
            'description' => 'A beautiful indoor garden setting great for any style of photography',
            'url' => 'http://www.marriott.com/hotels/hotel-photos/bnago-gaylord-opryland-resort-and-convention-center/',
            'imgUrl' => 'http://franklin.thefuntimesguide.com/files/gaylord-opryland-hotel-480x320.jpg',
            'googleMap' => 'https://www.google.com/maps/place/Gaylord+Opryland+Resort+%26+Convention+Center/@36.1925849,-86.8249402,12z/data=!4m2!3m1!1s0x0:0x3ac9507e8aa057bb'
        ));
    }
 
}