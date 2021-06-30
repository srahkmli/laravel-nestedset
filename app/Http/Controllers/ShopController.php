<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Customer;
use App\Models\Internet;
use App\Models\Order;
use App\Models\Shop;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::get()->toTree();

        return response()->json($shops);
    }
    public function FactoryCustomer()
    {
        $customer = Customer::all();
        return response()->json($customer);
    }
    public function FactoryOrder()
    {
        $Order = Order::all();
        return response()->json($Order);
    }
    public function FactoryAddress()
    {
        $address = Address::all();
        return response()->json($address);
    }

    public function createFactory()
    {

        $internet = Internet::factory()->count(3)->make();
        return response()->json($internet);


        /*------  Factory Pattern Start-----


        class Advertise
        {

            private $AdvertiseTitle;
            private $AdvertiseDescription;
            const Br = '</br>';


            public function __construct($Title, $Description)
            {
                $this->AdvertiseName = $Title;
                $this->AdvertiseDes = $Description;
            }
            public function getTitleandDescription()
            {
                return $this->AdvertiseName . ' - ' . $this->AdvertiseDes . self::Br;
            }
        }

        class AdvertiseFactory
        {
            public static function create($Title, $Description)
            {
                return new Advertise($Title, $Description);
            }
        }

        $AdvertiseExample1 = AdvertiseFactory::create('Title', 'Desc');
        $result = $AdvertiseExample1->getTitleandDescription();
        return response()->json($result);
*/
        /*------  Factory Pattern End-----*/
    }
}
