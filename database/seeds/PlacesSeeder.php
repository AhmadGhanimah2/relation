<?php

use App\City;
use App\Country;
use App\District;
use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country01 = Country::create(['name'=>'Saudi Arabia']);
            $city011 = City::create(['name'=> 'riyad','country_id'=>$country01->id]);
                $district0111 = District::create(['name'=>'Al olayeh', 'country_id'=>$country01 , 'city_id'=>$city011->id]);
    }
}
