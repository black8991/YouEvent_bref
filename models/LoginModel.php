<?php
namespace app\models;
use app\config\Database;
use app\core\Application;
use app\core\Model;
//loginModel extentd class abstruct Model
class LoginModel extends Model{
    //atribut 
    public string $email='';
    public string $password='';
   //utilise la methode abstruct defenit sur Model pour definir les regle pour chaque attribut
    public function rules() :array
    {
        return [
            'email' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function login()
    {
        $user = new UserModel();
        $user = $user->findOne(['email' => $this->email]);
        if (!$user) {
            $this->addErrorLogin('email', 'User does not exist with this email address');
            return false;
        }
        if ($this->password !== $user->password) {
            $this->addErrorLogin('password', 'Password is incorrect');
            return false;
        }
      return $user;
    }    
}