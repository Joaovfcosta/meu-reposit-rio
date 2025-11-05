<?php

    $arquivo_aulas_json = "arquivo_aulas.json";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereço'];
    $telefone = $_POST['telefone'];

    if(file_exists($arquivo_aulas_json)){
        $json = file_get_contents($arquivo_aulas_json);
        $contatos = json_decode($json, true);

        if($contatos === null || !is_array($contatos)){
            $contatos = [];
        }
    }else{
        $contatos = [];
    }

    $novo_id = count($contatos) + 1;
    $novo_contato = [
        "id" => $novo_id,
        "nome" => $nome,
        "email" => $email,
        "endereço" => $endereco,
        "telefone" => $telefone
    ];

    $contatos[] = $novo_contato;

    $novo_conteudo = json_encode($contatos, JSON_UNESCAPED_UNICODE);

    if(file_put_contents($arquivo_aulas_json, $novo_conteudo)) {
        echo "<p>Obrigado pelo contato, $nome</p>";
        echo "<p>temos horarios disponiveis em sua cidade, mandaremos uma mensagem para o numero $telefone e um E-mail para $email";
    }else{
        echo "<h2>Erro ao enviar o fomrulário.</h2>";
    }