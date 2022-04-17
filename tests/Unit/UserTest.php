<?php

namespace Tests\Unit;
use App\Models\User;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function getUser(){
        return new User();
    }
    /**
     * @test
     */

    public function user_have_correct_assignable_attributes()
    {
        $this->assertEquals(['name' , 'email' , 'password'] , $this->getUser()->getFillable());
    }

    /**
     * @test
     */
    public function user_objects_have_hidden_attributes_for_serialization()
    {
        $user = new User();
        $this->assertEquals(['password' , 'remember_token'] , $this->getUser()->getHidden());
    }

    /**
     * @test
     */
    public function emailverificationdate_can_be_casted_to_datetime_format()
    {
        $user = new User();
        // $this->assertTrue(is_a($user->getCasts()['email_verified_at'], 'DateTime'));

        $this->assertEquals(['email_verified_at' => 'datetime'] , $this->getUser()->getCasts());
    }

     /**
     * @test
     */

    public function name_is_assignable_to_app_user()
    {
        $this->assertTrue(in_array('name' , $this->getUser()->getFillable()));
    }

     /**
     * @test
     */

    public function email_is_assignable_to_app_user()
    {
        $this->assertTrue(in_array('email' , $this->getUser()->getFillable()));
    }

    /**
     * @test
     */

    public function password_is_assignable_to_app_user()
    {
        $this->assertTrue(in_array('password' , $this->getUser()->getFillable()));
    }

    /**
     * @test
     */

    public function password_is_hidden_attribute_of_user()
    {
        $this->assertTrue(in_array('password' , $this->getUser()->getHidden()));
    }

    /**
     * @test
     */

    public function password_Remember_token_is_hidden_attribute_of_user()
    {
        $this->assertTrue(in_array('remember_token' , $this->getUser()->getHidden()));
    }



}
