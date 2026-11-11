<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_home_page_redirects_to_the_default_locale(): void
    {
        $this->get('/')->assertRedirect('/en');
    }

    public function test_localized_home_page_loads(): void
    {
        $this->get('/en')->assertOk();
    }
}
