<?php 
    function ImprimeVet($vet) {
        foreach($vet as $v)
            echo $v . " | ";
        echo "\n\n";
    }

    $nomes = array("Rafael", "João Antônio", "Lucas", "Arthur", "Daniel");
    $cidades = array("Foz do Iguaçu", "Santa Terezinha", "São Miguel", "Itapema", "Toledo");
    $estados = array("Paraná", "Santa Catarina", "Rio Grande do Sul", "Paraíba", "Mato Grosso do Sul");
    $ocupacoes = array("Estudante", "Advogado", "Policial Federal", "Médico", "Professor");

    ImprimeVet($nomes);
    ImprimeVet($cidades);
    ImprimeVet($estados);
    ImprimeVet($ocupacoes);
?>