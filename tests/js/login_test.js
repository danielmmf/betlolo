
Feature('Login');

Scenario('Não posso conseguir logar com usuario desconhecido', (I) => {
	I.amOnPage('/admin/logoff');
	I.amOnPage('/admin');
  	I.see('Login');
  	I.fillField('email', 'zezinho@gmail.com');
	I.fillField('password', 'blabla');
	I.click('Login');
	I.wait(1);
	I.dontSee('Core');
	I.see('Bem Vindo ao administrativo');
});

Scenario('Não posso conseguir logar com senha errada', (I) => {
	I.amOnPage('/admin/logoff');
	I.amOnPage('/admin');
  	I.see('Login');
  	I.fillField('email', 'danielmmf@gmail.com');
	I.fillField('password', 'blabla');
	I.click('Login');
	I.wait(1);
	I.dontSee('Core');
	I.see('Bem Vindo ao administrativo');
});

Scenario('Devo ver meu nome de usuario ao logar com os dados corretos', (I) => {
	I.amOnPage('/admin/logoff');
	I.amOnPage('/admin');
  	I.see('Login');
  	I.fillField('email', 'daniel@email');
	I.fillField('password', 'testeteste');
	I.click('Login');
	I.wait(1);
	I.see('Daniel');
	I.click('Profile');
	I.wait(2);
	I.see('Daniel');
	I.see('Meu Status no sistema');
});
