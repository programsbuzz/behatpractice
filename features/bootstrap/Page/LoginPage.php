<?php

namespace page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class LoginPage extends Page
{
    protected $page = "/index.php?controller=authentication&back=my-account";

    public function Login()
    {
        $this->findField('email')->setValue('goswami.tarun77@gmail.com');
        $this->findField('passwd')->setValue('123456');
    }
}