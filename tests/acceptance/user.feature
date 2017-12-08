Feature: user
   A user subscribes to the system
   As a user
   I should be able to register with my email

  Scenario: A user can only register with the unique key being his email
  As a user
  I want to register in the system using my email
 My token id is my email "user@teste.com" and my name is "User"
  When I call user_save
  Then I call user with email "user@teste.com"
  Then I should see that my_name is "User"
