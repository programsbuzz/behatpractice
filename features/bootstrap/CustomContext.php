<?php


use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;

class CustomContext implements Context
{
    /**
     * @Then /^I switch to windows$/
     */
    public function iSwitchToWindows()
    {
        $windowNames = $this->getSession()->getWindowNames();

        if(count($windowNames) > 1)
        {
            $this->getSession()->switchToWindow();
            print($this->getSession()->getCurrentUrl());
        }
    }

}