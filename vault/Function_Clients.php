<?php
require "src/Clients.php";
class Function_Clients
{
    public static function addClient($name, $cpf)
    {
        global $clients;

        $clients[] = array('name' => $name, 'cpf' => $cpf);
    }

    public static function searchClients()
    {
        global $clients;
        var_dump($clients);
    }

    public static function removeClient($name, $cpf)
    {
        global $clients;

        $clients = array_filter($clients, function ($customer) use ($name, $cpf) {
            return $customer['name'] !== $name || $customer['cpf'] !== $cpf;
        });
    }
}