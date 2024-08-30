<!DOCTYPE html>
<html>
    <header>
        <title>Repetição</title>
    </header>
    <body>
        <h1>Atividade do Laço de Repetição</h1>
        <?php
            $i = 1;
            $mensagem = 'Estou aprendendo loopings no Aprender PHP';
            while($i <= 100){
                echo $i."- ".$mensagem."<br>".PHP_EOL;
                $i++;
            }

        ?>
    </body>
</html>