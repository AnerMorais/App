<?php 
namespace App\Classes;

class Password{

  
  public function hash($senha){

      $options = [

        'cost' => 11,
        'salt' => mcrypt_create_id(22,MCRYPT_DEV_UNRANDOM)
      ];
    return password_hash($senha,PASSWORD_BCRYPT,$options);
  }
  public function verificarSenha(){
if (password_verify($senha,$hash)) {

    return true;
  
}
    return false;
  }
}


 ?>
