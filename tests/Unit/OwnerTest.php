<?php

namespace Tests\Unit;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\Owner;
// use Illuminate\Foundation\Testing\RefereshDatabase;


class OwnerTest extends TestCase
{
    // use RefreshDatabase;

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
                'telephone' => 'Phone Number'
            ]
            );
            $this->assertSame('First Name', $owner->first_name);
            $this->assertSame('Last Name', $owner->last_name);
            $this->assertSame('Address 1', $owner->address_1);
            $this->assertSame('Address 2', $owner->address_2);
            $this->assertSame('Town', $owner->town);
            $this->assertSame('Postcode', $owner->postcode);
            $this->assertSame('Phone Number', $owner->telephone) ;
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

    
}


