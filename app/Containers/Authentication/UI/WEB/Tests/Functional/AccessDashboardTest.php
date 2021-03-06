<?php

namespace App\Containers\Authentication\UI\WEB\Tests\Functional;

use App\Containers\Authentication\Tests\WebTestCase;

/**
 * Class AccessDashboardTest
 *
 * @author  Johan Alvarez <llstarscreamll@hotmail.com>
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class AccessDashboardTest extends WebTestCase
{

    protected $endpoint = '/dashboard';

    public function testProtectedDashboardRoute()
    {
        // go to the protected page, without login
        $response = $this->get($this->endpoint);

        // should be redirected to login page
        $response->assertResponseStatus(302);
        $this->assertRedirectedTo('login');
        $this->see('login');
    }
}
