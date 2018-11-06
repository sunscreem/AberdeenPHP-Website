<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('heart of Aberdeen')
                    ->pause(3000)
                    ->clickLink('Pizza')
                    ->pause(3000)
                    ->type('q','pyneapple')
                    ->click('.searchbutton')
                    ->assertSee('pineapple');
            
            
        });
    }
}
