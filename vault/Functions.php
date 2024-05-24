<?php
require "src/CustomersValue.php";
class functions
{

    public static function addCustomer($name, $cpf)
    {
        global $userToConnectPDV;

        $userToConnectPDV[] = array('name' => $name, 'cpf' => $cpf);
    }

    public static function searchCustumers()
    {
        global $userToConnectPDV;
        var_dump($userToConnectPDV);
    }

    public static function authenticationCustumers($name, $cpf)
    {
        global $userToConnectPDV;

        $names = array_column($userToConnectPDV, 'name');
        $cpfs = array_column($userToConnectPDV, 'cpf');

        if (in_array($name, $names) && in_array($cpf, $cpfs)) {
            echo "User auth with sucess!\n";
        } else {
            error_log("This username or cpf dont exist!");
            exit();
        }
    }

    public static function removeCustumers($name, $cpf)
    {
        global $userToConnectPDV;

        $userToConnectPDV = array_filter($userToConnectPDV, function ($customer) use ($name, $cpf) {
            return $customer['name'] !== $name || $customer['cpf'] !== $cpf;
        });
    }

}