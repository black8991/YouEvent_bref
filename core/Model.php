<?php
namespace app\core;

abstract class Model{
    //rule required
    public const RULE_REQUIRED = 'required';
//
    public function loadData($data)
    {
        try{
            foreach($data as $key => $value) {
                if(property_exists($this, $key)) {
                    $this->{$key} = $value;
                }
            }
        } catch (Exception $e) {
            echo "";
        }

    }
//Cette méthode abstraite doit être implémentée par les classes concrètes.
// Elle retourne un tableau 
//représentant les règles de validation pour chaque attribut du modèle
    abstract public function rules(): array;
   // Cette propriété est un tableau qui stocke les erreurs de validation 
   //lors de l'appel de la méthode validate.
    public array $errors = [];
    //Cette méthode itère sur les règles de validation définies dans 
    //la méthode abstraite rules, effectue la validation pour 
   // chaque attribut, et stocke les erreurs dans la propriété $errors.

    public function validate()
    {
        foreach($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach($rules as $rule) {
                $ruleName = $rule;
                if(!is_string($ruleName)) {
                    $ruleName = $rule[0];
                }

                if ($ruleName === self::RULE_REQUIRED && !$value) {
                    $this->addError($attribute, self::RULE_REQUIRED);
                }
                   }      
                
        }
        return empty($this->errors);
}
public function addErrorLogin(string $attribute, string $message)
{
    $this->errors[$attribute][] = $message;
}
}