#language: en
@login
Feature:Test Sample Functionality

  Background:
    Given I am on homepage
#    When I follow "Sign in"
    And I wait 3 seconds

  Scenario: Verify sample scenario
    And I fill in "email" with "goswami.tarun77+1@gmail.com"
    And I fill in "passwd" with "Test1234"
    And I press "SubmitLogin"
    And I wait 10 seconds

  Scenario: Sample scenario
    Given step with "string" argument
    And number with 25

  @mysample
  Scenario: Sample scenario
    Then I read css property of any element

