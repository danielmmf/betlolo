<?php


class FB extends \Codeception\Test\Unit//usuarioTest
{
    /**
     * @var \UnitTester
     */
    protected $tester , $endereco;



    public function testDeveChamarFB()
    {
        $fb = new \App\Classes\FireBase;

        $fb->salvar("daniel@email","testando");
        return false;
    }

  

}



    ?>