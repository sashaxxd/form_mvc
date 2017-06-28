<?php

require_once '../Models/Form.php';

class FormController extends ModelForm{


    public function PrintForm(){
        if(!empty($_POST['text']) && !empty($_POST['phone']) && !empty($_POST['email'])){
            $text = $_POST['text'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            $form = $this->MailForm($text, $email, $phone);


            header("Location: ".$_SERVER['HTTP_REFERER']);

        }
        else{
            echo 'Заполните всю форму пожалуйста!';
        }

    }
}


$form = new FormController();

$form->PrintForm();











