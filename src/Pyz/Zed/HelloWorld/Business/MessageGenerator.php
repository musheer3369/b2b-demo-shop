<?php
namespace Pyz\Zed\HelloWorld\Business;

class MessageGenerator
{
    public function generateHelloMessage(): string
    {
        $helloMessages = ["Hello!","Bonjour!","Namaste!","Hallo", "Hola!", "Ciao!"];
        shuffle($helloMessages);
        return $helloMessages[0];
    }
}
