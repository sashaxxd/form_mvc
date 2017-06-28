<?php

class ModelForm{
        public function MailForm($text, $email, $phone)
        {
         $massage = mail("webdizain@bk.ru", "Сообщение с сайта", "Телефон: $phone\nЕмейл: $email\nТекст: $text");

         return $massage;
        }
}

