
Feature('Api');

Scenario('Testando a url padrao da api', (I) => {
	I.amOnPage('/app');
  	I.see('retorno do teste de api');
});
