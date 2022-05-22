<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SystemTest extends DuskTestCase
{

    /** @test */
    public function registerPageTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->assertPathIs('/register')
                ->assertSee('REGISTER')
                ->type('name', 'ahmed')
                ->type('email', 'ahmed@email.com')
                ->type('password', 'ahmed123')
                ->type('password_confirmation', 'ahmed123')
                ->click('#register')
                ->assertPathIs('/')
                ->assertSee('Dashboard');
        });
    }


    /** @test */
    public function logOutTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertPathIs('/')
                ->assertSee('Dashboard')
                ->press('ahmed')
                ->clickLink('Log Out')
                ->assertPathIs('/login')
                ->assertSee('LOG IN');
        });
    }


    /** @test */
    public function loginPageTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertPathIs('/login')
                ->assertSee('LOG IN')
                ->type('email', 'hasan@email.com')
                ->type('password', 'hasan')
                ->click('#login')
                ->assertPathIs('/')
                ->assertSee('Dashboard');
        });
    }


    /** @test */
    public function dashboardPageTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertPathIs('/')
                ->assertSee('Dashboard')
                ->click('#fab')
                ->type('name', 'NBS Fall 2022')
                ->click('#addSemester')
                ->assertSee('NBS Fall 2022')
                ->clickLink('NBS Fall 2022')
                ->assertSee('No subjects added yet');
        });
    }


    /** @test */
    public function subjectPageTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/subjects/1')
                ->assertPathIs('/subjects/1')
                ->click('#fab')
                ->type('name', 'Web Engineering')
                ->click('#addSubject')
                ->assertSee('Web Engineering')
                ->clickLink('Web Engineering')
                ->assertSee('UPLOAD');
        });
    }


    /** @test */
    public function uploadPageTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/upload/1/1')
                ->assertPathIs('/upload/1/1')
                ->assertSee('UPLOAD')
                ->clickLink('Download Template')
                ->attach('file', 'C:\Users\hasan\Desktop\studentdata.xlsx')
                ->click('#upload')
                ->assertPathIs('/data/1/1')
                ->assertSee('CLO Scores');
        });
    }


    /** @test */
    public function studentDataPageTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/data/1/1')
                ->assertPathIs('/data/1/1')
                ->assertSee('CLO Scores')
                ->type('cms', '666666')
                ->type('name', 'abdullah')
                ->type('clo1', '88')
                ->type('clo2', '88')
                ->type('clo3', '88')
                ->type('clo4', '88')
                ->click('#addStudent')
                ->assertSee('abdullah')
                ->clickLink('Map PLOs')
                ->assertPathIs('/map-plos/1/1')
                ->assertSee('Map PLOs');
        });
    }


    /** @test */
    public function mapPageTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/map-plos/1/1')
                ->assertPathIs('/map-plos/1/1')
                ->assertSee('Map PLOs')
                ->select('clo1', 'PLO 1')
                ->select('clo2', 'PLO 2')
                ->select('clo3', 'PLO 3')
                ->select('clo4', 'PLO 4')
                ->select('plvl1', 'MEDIUM')
                ->select('plvl2', 'HIGH')
                ->select('plvl3', 'MEDIUM')
                ->select('plvl4', 'HIGH')
                ->select('bt1', 'C-1')
                ->select('bt2', 'P-2')
                ->select('bt3', 'A-3')
                ->select('bt4', 'A-4')
                ->select('weightage1', '25')
                ->select('weightage2', '25')
                ->select('weightage3', '25')
                ->select('weightage4', '25')
                ->click('#makePLOReport')
                ->assertPathIs('/report/1/1')
                ->assertSee('PLO Scores');
        });
    }


    /** @test */
    public function reportPageTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/report/1/1')
                ->assertPathIs('/report/1/1')
                ->assertSee('PLO Scores')
                ->assertSee('PLO 1')
                ->assertSee('PLO 2')
                ->assertSee('PLO 3')
                ->assertSee('PLO 4')
                ->assertSee('MEDIUM')
                ->assertSee('HIGH')
                ->assertSee('C-1')
                ->assertSee('P-2')
                ->assertSee('A-3')
                ->assertSee('A-4')
                ->assertSee('25')
                ->clickLink('Download Data');
        });
    }

    
    /** @test */
    public function adminPanelTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin')
                ->assertPathIs('/admin')
                ->click('.hamburger')
                ->assertSee('Users')
                ->assertSee('Students')
                ->assertSee('Subjects')
                ->assertSee('Semesters')
                ->clickLink('Exit Admin Panel')
                ->assertPathIs('/')
                ->assertSee('Dashboard');
        });
    }
}
