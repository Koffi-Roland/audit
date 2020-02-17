<?php

namespace App\Service\Query;
use Symfony\Component\Validator\Validator\ValidatorInterface;

 class ValidationService {


    private $validation;

    public function __construct(ValidatorInterface $validator){
        $this->validation=$validator;
    }
  
   public function Verificator($entity){

       $errors = $this->validation->validate($entity);

        if (count($errors) > 0) {
            /*
             * krolandaziawor@gmail.com
             * Uses a __toString method on the $errors variable which is a
             * ConstraintViolationList object. This gives us a nice string
             * for debugging.
             */
            $errorsString = (string) $errors;
    
            return true;
        }
        return false;

   }


   public function VerificatorChaine($entity){

    $errors = $this->validation->validate($entity);

     if (count($errors) > 0) {
         /*
          * krolandaziawor@gmail.com
          * Uses a __toString method on the $errors variable which is a
          * ConstraintViolationList object. This gives us a nice string
          * for debugging.
          */
         $errorsString = (string) $errors;
 
         return $errorsString;
     }
     return false;

}

}