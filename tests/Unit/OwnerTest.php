<?php

namespace Tests\Unit;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\Owner;
use Illuminate\Foundation\Testing\RefreshDatabase;


class OwnerTest extends TestCase
{
    use RefreshDatabase;

    //are fillable properties working?
    public function test_model_accepts_fillable_properties()
    {
        $owner = new Owner(
            [
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'address_1' => 'Address 1',
                'address_2' => 'Address 2',
                'town' => 'Town',
                'postcode' => 'Postcode',
                'telephone' => 'Phone Number',
                'fake' => 'nuhuh'
            ]
            );
            $this->assertSame('First Name', $owner->first_name);
            $this->assertSame('Last Name', $owner->last_name);
            $this->assertSame('Address 1', $owner->address_1);
            $this->assertSame('Address 2', $owner->address_2);
            $this->assertSame('Town', $owner->town);
            $this->assertSame('Postcode', $owner->postcode);
            $this->assertSame('Phone Number', $owner->telephone) ;
            $this->assertSame(null, $this->owner->fake);
    }

    public function testValidPhoneNumber()
    {
    
        $owner = new Owner ([
            "telephone" => '1235 6728271'
        ]);

        $this->assertTrue($owner->validPhoneNumber());

        $owner = new Owner ([
            "telephone" => '01223 678976'
        ]);
        
        $this->assertTrue($owner->validPhoneNumber());

        $owner = new Owner ([
            "telephone" => '01223768987'
        ]);

        $owner = new Owner ([
            "telephone" => '0909867 8760'
        ]);
        
        
        $this->assertTrue($owner->validPhoneNumber());
    }

    public function testDatabase()
    {

    Owner::create( [
        "first_name" => "Zoom",
        "last_name" => "Boom",
        "address_1" => "House",
        "address_2" => "Road",
        "town" => "Town",
        "postcode" => "BS6 7HJ",
        "telephone" => "04565 678987",  
    ]);

    $ownerFromDB = Owner::all()->first();

    $this->assertSame("Zoom", $ownerFromDB->first_name);

    }

    public function testNumOfPets()
    {
       $owner = new Owner([
           'first_name' => 'Jim'
       ]);
        $this->assertSame(0, $owner->numberOfPets());
    }

    
}




