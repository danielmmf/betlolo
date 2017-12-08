Feature: usuario
  Um usuário se cadastra no sistema
  Como usuario
  Devo conseguir me cadastrar com meu email

 Scenario: Um usuário só pode se cadastrar com a chave única sendo o email dele
 	Como usuario
 	Eu quero me cadastrar no sistema usando meu email
 	Dado que meu email é "usuario@teste.com" e meu nome é "Usuario"
 	Quando eu chamo user_save 
 	Entao eu chamo users 
 	E Entao i should see that total number users is "1"

 