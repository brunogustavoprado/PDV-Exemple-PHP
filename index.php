<?php
require "vault/Functions.php";
require "vault/Function_Sell.php";
require "vault/Function_Clients.php";

functions::addCustomer("Bruno", 28773887322);
functions::addCustomer("Ana", 8743887322);

//functions::removeCustumers("Bruno", 28773887322);

functions::searchCustumers();

functions::authenticationCustumers("Bruno", 8743887322);

Function_Clients::addClient("Eduardo", 283798273892);
Function_Clients::addClient("Pedro", 744674674856);
Function_Clients::addClient("Lucas", 568756857800);

Function_Clients::removeClient("Eduardo", 283798273892);

Function_Clients::searchClients();

Function_Sell::sell_shop("Banana", 4, 44, "Pedro");
Function_Sell::sell_shop("Banana", 4, 44, "Pedro");
Function_Sell::sell_shop("Banana", 4, 44, "Pedro");

//Function_Sell::cancelSell("Banana");

Function_Sell::relatorySells();


