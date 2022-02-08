<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\MinkExtension\Context\RawMinkContext;
use page\HomePage;
use page\LoginPage;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    private $homepage;
    private $contactPage;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */

    public function __construct()
    {
//        $this->homepage = $homePage;
//        $this->loginPage = $loginPage;
    }

    /**
     * @Given /^I press Create new account button$/
     */
    public function iPressCreateNewAccountButton()
    {
        $page = $this->getSession()->getPage();
        $page->find('css', "#edit-submit.button--primary")->click();
        $bool = $page->find('css', "#edit-mail")->hasAttribute("required");
        assert($bool, "required attribute missing");
        $page = $this->getSession()->getPage();

        $validation = $page->find('css', "#edit-mail")->getAttribute('validationMessage');
        print $validation;
        echo "Validation is: " . $validation;

    }

    /**
     * @When /^I fill in email with "([^"]*)"$/
     */
    public function iFillInEmailWith($arg1)
    {
        $page = $this->getSession()->getPage();
        $page->find('css', "#edit-mail")->setValue($arg1);
    }



//    /**
//     * @BeforeScenario
//     */
//    public function before($event)
//    {
//
////        $this->visitPath('/');
////        $this->getSession()->maximizeWindow();
////        $this->getSession()->resizeWindow(1500,500);
//    }
//
//
//    /**
//     * @Then this is a test
//     * @Then esto es una prueba
//     */
//    public function thisIsATest()
//    {
////        throw new PendingException();
//    }
//
    /**
     * @When I wait :arg1 seconds
     */
    public function iWaitSeconds($arg1)
    {
        sleep($arg1);

    }
//
//    /**
//     * @Then I fill in something with:
//     */
//    public function iFillInSomethingWith(PyStringNode $string)
//    {
//        $string->getRaw();
//    }
//
//    /**
//     * @Then /^I should see "([^"]*)" heading$/
//     */
//    public function iShouldSeeHeading($expected)
//    {
//        $page = $this->session->getPage();
//        $title = $page->find('css', 'h1')->getText();
//        assert($title === $expected, sprintf('actual is "%s",but expected is "%s"', $title, $expected));
//    }
//
//
//    public function spin($lambda)
//    {
//        while (true) {
//            try {
//                if ($lambda($this)) {
//                    return true;
//                }
//            } catch (Exception $e) {
//                // do nothing
//            }
//
//            sleep(1);
//        }
//    }
//
//    /**
//     * @Given /^I wait for (\d+) seconds$/
//     */
//    public function iWaitForSeconds($arg1)
//    {
//        sleep(10);
//    }
//
//    /**
//     * @When /^I enter following detail in contact us form$/
//     */
//    public function iEnterFollowingDetailInContactUsForm(TableNode $table)
//    {
//        $page = $this->getSession()->getPage();
//
//
//        foreach ($table as $row) {
//            var_dump($row);
//            sleep(5);
//            $name = $row['Your name'];
//            $email = $row['Your email address'];
//            $subject = $row['Subject'];
//
//            $page->find('css', '#edit-name')->setValue($name);
//            $page->find('xpath', "//input[@id='edit-mail']")->setValue($email);
//            $page->find('css', "input[id='edit-subject-0-value']")->setValue($subject);
//            sleep(10);
//        }
//    }
//
//
//    public function scrollAndClickOLD($cssSelector)
//    {
//        $function = <<<JS
//        (
//            function()
//            {
//                document.querySelector("$cssSelector").scrollIntoView();
//            }, function()
//            {
//                document.querySelector("$cssSelector").click();
//            })()
//JS;
//        try
//        {
//            $this->getSession()->executeScript($function);
//        }
//        catch (Exception $e)
//        {
//            throw new \Exception("Scroll Into View Failed. Check Your Script");
//        }
//    }
//
//
//    /**
//     * @When /^I click on "([^"]*)" column of AG Grid$/
//     */
//    public function iClickOnColumnOfAGGrid($colName)
//    {
//        $page = $this->session->getPage();
//        $selectorValue = "";
//
//        switch ($colName) {
//            case "name":
//                $page->find('css', "div.ag-header-row-column div[col-id='name']")->click();
//                break;
//            case "dec":
//                $selectorValue = "div.ag-header-row-column div[col-id='dec']";
//                $this->session->scrollHTMLElement($selectorValue);
//                $page->find('css', $selectorValue)->click();
//                break;
//            default:
//                throw new Exception("column not found");
//        }
//    }
//
//    /**
//     * @Given /^I scroll to "input\[type=\'([^\']*)\'\]" element$/
//     */
//    public function iScrollToElement($selectorValue)
//    {
//        $this->session->scrollHTMLElement($selectorValue);
//    }
//
//    /**
//     * @When /^I fill in email with "([^"]*)"$/
//     */
//    public function iFillInEmailWith($arg1)
//    {
//        $page = $this->session->getPage();
//        $page->find('css', "input#mce-EMAIL")->setValue($arg1);
//    }
//
//    /**
//     * @Given /^I click on x button$/
//     */
//    public function iClickOnXButton()
//    {
//        $page = $this->session->getPage();
//        $page->find('css', "button[class='close']")->click();
//
//    }
//
//    /**
//     * @Given /^I click on subscribe button$/
//     */
//    public function iClickOnSubscribeButton()
//    {
//        $page = $this->session->getPage();
//
//        $this->scrollAndClick("button.btn-solid");
////        $page->find('css', "button.btn-solid")->click();
//    }
//
//    public function scrollAndClick($cssSelector)
//    {
//        $function = <<<JS
//        (
//            function()
//            {
//                document.querySelector("$cssSelector").scrollIntoView();
//            },function()
//            {
//                document.querySelector("$cssSelector").click();
//            })()
//JS;
//        $this->session->executeScript($function);
//
//
//    }
//
//
//
//
//
//
//    /**
//     * @Given step with :arg1 argument
//     */
//    public function stepWithArgument($arg1)
//    {
//        throw new PendingException();
//    }
//
//    /**
//     * @Given number with :arg1
//     */
//    public function numberWith($arg1)
//    {
//        throw new PendingException();
//    }
//


    /**
     * @When /^I click on facebook icon$/
     */
//    public function iClickOnFacebookIcon()
//    {
//        $page = $this->session->getPage();
//        $page->find('css', "li.facebook")->click();
//    }
////
//
//
//    /**
//     * @When /^I click on shop now on banner$/
//     */
//    public function iClickOnShopNowOnBanner()
//    {
//        $this->session->getPage()->find('xpath', "(//div[@class='slider-contain']//a)[3]")->click();
//    }
//
//    /**
//     * @Given /^I refresh the page$/
//     */
//    public function iRefreshThePage()
//    {
//        $this->session->reload();
//    }
//
//    /**
//     * @When /^I press browser back button$/
//     */
//    public function iPressBrowserBackButton()
//    {
//        $this->session->back();
//    }
//
//    /**
//     * @When /^I press browser forward button$/
//     */
//    public function iPressBrowserForwardButton()
//    {
//        $this->session->forward();
//    }
//



    /**
     * @Then I read css for root
     */
    public function iReadCssForRoot()
    {
        $page = $this->getSession()->getPage();

    }



    /**
     * @Then /^I read tag name and attributes$/
     */
    public function iReadTagNameAndAttributes()
    {

    }

    private function getCSSValue(string $selector, string $properyValue)
    {
        $function = <<<JS
        (
            function()
            {
                var ele = document.querySelector("$selector");
                var myvalue = document.defaultView.getComputedStyle(ele,null).getPropertyValue("$properyValue");
                return myvalue;
            }   
        )()
JS;
        return $this->getSession()->evaluateScript($function);



    }

    /**
     * @Then /^I read css property of any element$/
     */
    public function iReadCssPropertyOfAnyElement()
    {
        $selector = "button[name='submit_search']";

        echo "background is: " . $this->getCSSValue($selector, 'background');
        echo "\nposition is: " . $this->getCSSValue($selector, 'position');
        echo "\nwidth is: " . $this->getCSSValue($selector, 'width');
        echo "\nborder top style is: " . $this->getCSSValue($selector, 'border-top-style');
        echo "\npadding-bottom is: " . $this->getCSSValue($selector, 'padding-bottom');
    }

    /**
     * @When I click on ask doubt button
     */
    public function iClickOnLoginButton()
    {
        $page = $this->getSession()->getPage();
        $page->find('css', "a[href='/ask-doubt']")->click();
        sleep(5);

    }

    /**
     * @When I click on login button
     */
    public function iClickOnAskDoubtButton()
    {
        $page = $this->getSession()->getPage();
        $page->find('css', "a[href='/user/login']")->click();
        sleep(5);
    }



}
