#language: en
@login
Feature:Test Login Functionality

  Background:
    Given I am on homepage

  @P1
    Scenario: Test 1
    When I click on login button

  @TestHTML5
  Scenario: Verify HTML 5 validation
    And I follow "Create new account"
    And I wait 5 seconds
    And I press Create new account button
#    Then I should /see "Please fill in this field." validation message for email
    When I fill in email with "test"
    And I press Create new account button
#    Then I should see "Please fill in this field" validation message for email
    And I wait 10 seconds

  @TestLogin
  Scenario: Verify user Login
    And I fill in email with "goswami.tarun77+1@gmail.com"
    And I fill in passwd with "Test1234"
    And I press SubmitLogin

  Scenario Outline: Verify Login Functionality
    And I fill in "email" with "<email>"
    And I fill in "passwd" with "<password>"
    And I press "SubmitLogin"
    Then I should see "<heading>" heading

    Examples:
      | email                     | password  | heading        |
      | goswami.tarun77@gmail.com | Test@1234 | MY ACCOUNT     |
      | wrongusername             | test      | AUTHENTICATION |


