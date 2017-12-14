
Feature('App');

Scenario('testando a url padrao de app', (I) => {
	I.amOnPage('/app');
  	I.see('Bem vindo vem do angular');
});
