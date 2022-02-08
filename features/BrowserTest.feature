Feature:Test Browser Action

  Background:
    Given I am on homepage
    And I click on x button

  @browser
  Scenario: verify browser
    When I click on shop now on banner
    Then I should see "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
    And I refresh the page
    When I press browser back button
    Then I should see "TOP COLLECTION"
    When I press browser forward button
    Then I should see "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
    And I wait for 10 seconds



