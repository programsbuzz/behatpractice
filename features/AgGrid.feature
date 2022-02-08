@AgGrid
Feature:Test AG Grid Functionality using AG Grid
  Background:
    Given I am on homepage
    And I follow "Demo"

  @temp1
  Scenario: Verify Scroll functionality
    And I wait 5 seconds
#    When I click on "random" column of AG Grid
    When I click on "dec" column of AG Grid
    And I wait 10 seconds
