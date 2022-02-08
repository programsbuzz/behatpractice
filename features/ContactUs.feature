@ContactUs
Feature:Test Contact Us functionality

  @datatable
  Scenario: Verify contact us functionality
    Given I am on homepage
    When I follow "Contact"
    When I enter following detail in contact us form
      | Your name     | Your email address        | Subject      |
      | Tarun Goswami | goswami.tarun77@gmail.com | Test Subject |

