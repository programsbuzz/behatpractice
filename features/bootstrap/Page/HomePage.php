<?php

namespace page;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class HomePage extends Page
{
    protected $path = '/';

    public function signIn()
    {
        $this->findField('Sign in')->click();
    }
}