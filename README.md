# core-php-lumen
Codigo base em php montado em cima do lumen

primeira coisa a se fazer ao baixar o codigo é rodar composer install
depois rodar a suite de testes.
vendorbin/codecept run

se ficar tudo verdinho você pode comecar a codar


-- a primeira coisa a se fazer é documentar o que vai ser desenvolvido.

adicionar uma feature na pasta tests/acceptance

	a linguagem usada é o gherkin

	ao criar a especificação nesse arquivo , tem que rodar o codigo pra gerar o snippet a ser validado.


 vendor/bin/codecept gherkin:snippets acceptance


 os snippets gerados devem ser inseridos em seus respectivos arquivos .
nessa pasta tests/_support/Step/Acceptance
