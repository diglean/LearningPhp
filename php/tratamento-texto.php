<?php

$arquivo = fopen('data/dom-casmurro.txt', 'r');
$comecouLivro = false;
$totalLinhasUteis = 0;
$substantivos = 0;
$palavras = [];

while(!feof($arquivo))
{
    $linha = fgets($arquivo, 1024);

    if(trim($linha) == 'End of the Project Gutenberg EBook of Dom Casmurro, by Machado de Assis')
    {
        break;
    }

    if(trim($linha) == '*** START OF THIS PROJECT GUTENBERG EBOOK DOM CASMURRO ***')
    {
        $comecouLivro = true;
        $linha = fgets($arquivo, 1024);
    }

    if($comecouLivro)
    {
        if(trim($linha) != "\n" && strlen(trim($linha)) > 3)
        {
            $totalLinhasUteis++;
        }

        $linhaTratada = trim($linha);
        
        if(strlen($linha) >= 10)
        {
            $arrayLinha = explode(' ', $linhaTratada);

            foreach($arrayLinha as $palavra)
            {
                if(strlen(trim($palavra)) >= 10)
                {
                    $substantivos++;
                    if(isset($palavras[trim($palavra)]))
                    {
                        $palavras[trim(trim($palavra))]++;
                    }
                    else
                    {
                        $palavras[trim($palavra)] = 1;
                    }

                }
            }

            //foreach($arrayLinha as $index=>$palavra) //index serve como contador
        }
    }
}

fclose($arquivo);

echo 'Total de linhas: '.$totalLinhasUteis;
echo '<br/>';
echo '<br/>';

echo 'Total de substantivos: '.$substantivos;
echo '<br/>';

echo 'Total de palavras únicas: '.Count($palavras);
echo '<br/>';   
//echo $chave.' ->'.$p;
echo '<br/>';
echo '<br/>';

//rsort($palavras);

foreach($palavras as $chave=>$p)
{
    if($p > 7)
    {
        //$leng = strlen($p);

        $font = $p * 2;
        $color = random_int(000000, 999999);
        echo '<span style="color: #'.$color.'; font-size: '.$font.'px;">' .$chave.': '.$p.'</span>';
        echo '<br/>';
    }
}

?>