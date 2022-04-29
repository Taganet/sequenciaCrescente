<?php
//Função fomato crescente
//Elielder Oliveira


$array = array(
    array(1,3,2,1),
    array(1,3,2),
    array(1,2,1,2),
    array(3,6,5,8,10,20,15),
    array(1,1,2,3,4,4),
    array(1,4,10,4,2),
    array(10,1,2,3,4,5),
    array(1,1,1,2,3),
    array(0,-2,5,6),
    array(1,2,3,4,5,3,5,6),
    array(40,50,60,10,20,30),
    array(1,1),
    array(1,2,5,3,5),
    array(1,2,5,5,5),
    array(10,1,2,3,4,5,6,1),
    array(1,2,3,4,3,6),
    array(1,2,3,4,99,5,6),
    array(123,-17,-5,1,2,3,12,43,45),
    array(3,5,67,98,3)
);

function sequenciaCrescente($array)
{
    //Separando os subArrays
    foreach($array as $valor)
    {
        $qtnItensArr = count($valor);
        echo "[";
        for($i = 0; $i < $qtnItensArr; $i++)
        {
            $valorArAtual = $valor;
            echo $valor[$i];
            if(($i+1) < $qtnItensArr)
            {
                echo ", ";
            }
        }
        $unicoNumArray = array_unique($valor);
        $unicoNumQntd = count($unicoNumArray);
        $totalRepetidos = ($qtnItensArr - $unicoNumQntd);
        echo "] ";
        asort($unicoNumArray);
        $numExecForec = 0;
        $numalteracoes = 0;
        foreach($unicoNumArray as $chave => $valorOrdenado)
        {
            
            if($numExecForec > 0)
            {
                if(($chaveOld+1) != $chave)
                {
                    $numalteracoes++;
                }
                
            }
            else
            {
                if($chave > 0)
                {
                    $numalteracoes++;
                }
            }
            $chaveOld = $chave;
            $numExecForec++;
        }

        if((($numalteracoes-1) <= 1) && ($totalRepetidos < 1))
        {
            echo "true \r\n";
        }
        else
        {
            echo "false \r\n";
        }
    }
}

echo sequenciaCrescente($array);

/*
    Resultado em:

*/
?>