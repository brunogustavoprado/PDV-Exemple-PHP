<?php
require "src/Itens.php";
require "src/Clients.php";
class Function_Sell
{
    public static function sell_shop($item, $quant, $value, $client)
    {
        global $products, $totalDeVendas, $clients;


        if ($products['Produto'] === $item) {
            echo "Você vendeu $quant $item pelo valor de: R$ $value para o $client \n";
            $totalDeVendas++;
        } else {
            error_log("Product not found!");
        }
    }

    public static function relatorySells()
    {
        global $totalDeVendas;

        echo "O total de vendas é de: $totalDeVendas";
    }

    public static function cancelSell($item)
    {
        global $products, $totalDeVendas;

        $found = false;

        foreach ($products as $item => $product) {
            if ($products['Produto'] === $item) {
                $found = true;
                unset($products[$item]); // Remove o item do array
                $totalDeVendas--; // Atualiza o total de vendas
                echo "Venda de $item cancelada com sucesso!";
                break;
            }
        }

        if (!$found) {
            error_log("Produto não encontrado na lista de vendas!");
        }
    }
}