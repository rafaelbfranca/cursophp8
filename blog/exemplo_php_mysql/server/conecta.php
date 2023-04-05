<?php 
    $conexao_db = mysqli_connect ('localhost:3306', 'root', 'Mysql+2018','mydb') or die ('Conexão não efetuada');//Realiza a conexão ou retorna mensagem de falha.

    $selectAll = 'SELECT * FROM pessoas';

    $resultado = mysqli_query($conexao_db,$selectAll) or die ('Não foi possível executar a seleção.');//Executa a solicitação ou retorna mensagem de falha.

    $dados = mysqli_fetch_array($resultado);

    echo '<pre>';//É necessário incluir a tag <pre></pre> para o \t ser interpretado.
    echo "Dados \t das \t pessoas:<br><br>";

    foreach ($resultado as $item) {
        $id = $item['idPessoa'];
        $nome = $item['firstName'];
        $sobreNome = $item['lastName'];
        $dataAdmissao = $item['dataAdmissao'];
        echo "$id $nome $sobreNome $dataAdmissao<br>";
    }
    echo '</pre>';
    mysqli_free_result($resultado);//Libera a memória do resultado da consulta. No caso da consulta demendar muita memória, pode ser útil forçar a liberação em determinados pontos do script, caso contrário não é necessário pois a memória utilizada é sempre liberada ao final do script.
    mysqli_close ($conexao_db);//Encerra a conexão com o BD.
?>
