#language: en
@login
Feature:Verify scroll functionality

  Background:
    Given I am on homepage
    And I click on x button
  @scroll
  Scenario:
    When I fill in email with "goswami.tarun77@gmail.com"
    And I click on subscribe button
    And I wait 10 seconds

