<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Owner;

class OwnerTest extends TestCase
{
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
                'postcode' => 'Postcode'
            ]
            );
            $this->assertSame('First Name', $owner->first_name);
            $this->assertSame('Last Name', $owner->last_name);
            $this->assertSame('Address 1', $owner->address_1);
            $this->assertSame('Address 2', $owner->address_2);
            $this->assertSame('Town', $owner->town);
            $this->assertSame('Postcode', $owner->postcode);
    }

    
}
