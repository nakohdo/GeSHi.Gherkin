# language: en
Feature: Feature with titeled background - multilingualWikiSearch
  In order to search information on wiki
  As a Wiki user
  I want to get sensible results from site
  
  Background: Some Background
    title with
     couple
      of
       | continuous  |
           strings
  @wip  
  Scenario:
    Given a failing step
 
  Scenario Outline: Search multilingual keywords on Wikipedia
    Given I am on "/wiki/Main_Page"
    When I fill in "search" with "<input>"
    And I press "searchButton"
    Then I should see "<output>"

    Examples:
      | input      | output         |
      | London     | lʌndən        |
      | New York   | nɪu ˈjɔək      |
      | Sydney     | sɪdni/         |
      | Mumbai     | मुंबई            |
      | Bejing      | 北京            |
      | Tokyo       | 東京            |
      | Lahore      | لاہور            |
      | Paris       | paʁi            |
