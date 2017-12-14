<?php
namespace Step\Acceptance;

class User extends \AcceptanceTester{
    private $user;
    private $todos;
    private $buscado;

    public function __construct()
    {
        $I = $this;
        $this->user = new \App\User; 
        $this->group = new \App\Group;
        $this->group->name = "Admin";
        $this->group->save();
    }


   /**
     * @When I call user_save
     */
     public function iCallUser_save()
     {
        $this->user->name="User";
        $this->user->email="user@teste.com";
        $this->user->group_id=1;
        $this->user->password="usersenha";

        $this->user->save();
     }

    /**
     * @Then I call user with email :arg1
     */
     public function iCallUserWithEmail($arg1)
     {
        $this->buscado = \App\User::where('email','=', $arg1)->first();

     }

    /**
     * @Then I should see that my_name is :arg1
     */
     public function iShouldSeeThatMy_nameIs($arg1)
     {
        if($this->buscado->name == $arg1){
            return true;
        }else{
        throw new \Error("Não esta retornando o nome certo do usuario :".$this->buscado->name, 1);
        }
     }

      /**
     * @Then I should see that message is :arg1
     */
     public function iShouldSeeThatMessageIs($arg1)
     {
        $nome = "Usuario";
        $email = "email@teste.com";
        $senha = "senha123";

        $retorno =\App\Classes\User::create_user($nome, $email, $senha);
        $retorno =\App\Classes\User::create_user($nome, $email, $senha);


        if($retorno['response'] == $arg1){
            return true;
        }else{
        throw new \Error("Não esta retornando o a mensagem certa ".$retorno['response'], 1);
        }
        ;
     }


}



