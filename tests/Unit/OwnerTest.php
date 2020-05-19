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
                'second_name' => 'Second Name',
                'address_1' => 'First Line',
                'address_2' => 'Second Line',
                'town' => 'Town',
                'postcode' => 'Postcode'
            ]
            );
            $this->assertSame('First Name', $owner->first_name);
    }

    
}
