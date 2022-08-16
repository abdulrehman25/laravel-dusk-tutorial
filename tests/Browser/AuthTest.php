<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test for a_user_can_register_correctly.
     *
     * @test
     */
    public function a_user_can_register_correctly()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type("name","Auto User ".rand(1,100000000000))
                    ->type("email",'user3@user.com')
                    ->type("password",'password')
                    ->type("password_confirmation",'password')
                    ->click('button[type="submit"]')
                    ->assertSee("You're logged in!")
                    ->click('.relative')
                    ->clickLink('Log Out')
                    ->assertSee("Laracasts");
        });
    }

    /**
     * A Dusk test for a_user_can_login_correctly.
     *
     * @test
     */
    public function a_user_can_login_correctly()
    {
        User::create([
            'name'=>'Abdul Test',
            'email'=>'abdul@gmail.com',
            'password'=>bcrypt('password')
        ]);
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Log in')
                ->type("email",'abdul@gmail.com')
                ->type("password",'password')
                ->click('button[type="submit"]')
                ->assertSee("You're logged in!");
        });
    }
}
