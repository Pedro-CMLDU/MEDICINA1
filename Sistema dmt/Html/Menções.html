<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menções - Sistema de Menções</title>
    <link rel="stylesheet" href="../Css/mencoes.css">

    <script>
        function calcularMencao(event) {
    event.preventDefault(); // Impede o envio do formulário

    const av1 = parseInt(document.getElementById("av1").value);
    const av2 = parseInt(document.getElementById("av2").value);
    const noa = parseInt(document.getElementById("noa").value);
    const mencaoResultado = document.getElementById("ResultadoMencao");
    const posNoaResultado = document.getElementById("ResultadoPosNoa");

    // Primeiro, calcula a menção do trimestre com AV1 e AV2
    let mencao = "";
    if ((av1 === 1 && av2 === 1) || (av1 === 1 && av2 === 2) || (av1 === 2 && av2 === 1)) {
        mencao = "D"; // Menção "D" para aprovação
    } else {
        mencao = "ND"; // Caso contrário, a menção será "ND" (não passou)
    }
    mencaoResultado.value = mencao;

    // Se o NOA for inserido, recalcula a menção pós-NOA
    if (noa !== 0) {
        let notas = [av1, av2];

        // Substitui qualquer PA ou NA pelo NOA, se houver
        if (notas[0] === 2 || notas[0] === 3) {
            notas[0] = noa;
        }
        if (notas[1] === 2 || notas[1] === 3) {
            notas[1] = noa;
        }

        // Verifica se ambas as notas são "NA", caso em que não passa
        if (notas[0] === 3 && notas[1] === 3) {
            posNoaResultado.value = "ND"; // Não passa se tiver NA + NA
        } else {
            // Verifica as combinações para menção pós-NOA
            let posNoa = "";
            if ((notas[0] === 1 && notas[1] === 1) || 
                (notas[0] === 1 && notas[1] === 2) || 
                (notas[0] === 2 && notas[1] === 1)) {
                posNoa = "D"; // Aprovação
            } else {
                posNoa = "ND"; // Não aprovado
            }

            posNoaResultado.value = posNoa;
        }
    } else {
        posNoaResultado.value = ""; // Caso o NOA não seja inserido, limpa o campo pós-NOA
    }
}

    </script>

    <style>
        #ResultadoMencao,
        #ResultadoPosNoa {
            padding: 10px 20px;
            height: 8vh;
            width: 100%;
            font-size: 16px;
            background-color: #EDEDED;
            color: #6a27ab;
            border: none;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="turmas-container">
        <div class="div-img">
            <img class="baner" src="../Imagens/baner.png" alt="logoboneco">
        </div>
        <div class="turmas-box">
            <div class="sem-margin-mencoes">
                <h1>Menções</h1>
            </div>
            <div class="aluno">
                <p class="aluno-0">
                    Aluno (a): André Helio
                </p>
            </div>
            <form class="formulario-mencao">
                <select class="trimestres" name="trimestre" required="required">
                    <option value="1" selected>1 Trimestre</option>
                    <option value="2">2 Trimestre</option>
                    <option value="3">3 Trimestre</option>
                </select>
                <p> MENÇÃO AV1</p>
                <select id="av1" class="dar-nota" name="av1" required="required">
                    <option value="0" selected>_</option>
                    <option value="1">A</option>
                    <option value="2">PA</option>
                    <option value="3">NA</option>
                </select>
                <p>MENÇÃO AV2</p>
                <select id="av2" class="dar-nota" name="av2" required="required">
                    <option value="0" selected>_</option>
                    <option value="1">A</option>
                    <option value="2">PA</option>
                    <option value="3">NA</option>
                </select>
                <p>MENÇÃO DO TRIMESTRE</p>
                        <input id="ResultadoMencao" name="mencao" readonly>
                <div class="mencao-noa">
                    <div class="metade">
                        <p>NOA</p>
                        <select class="dar-nota" id="noa" name="noa" required="required">
                            <option value="0" selected>_</option>
                            <option value="1">A</option>
                            <option value="2">PA</option>
                            <option value="3">NA</option>
                        </select>
                    </div>
                    <div class="metade">
                        <p>PÓS NOA</p>
                        <input id="ResultadoPosNoa" name="pos_noa" readonly>
                    </div>
                </div>
                        
                        
                <div class="div-enviar-nota">
                    <button type="button" onclick="calcularMencao(event)" class="enviar-nota">Salvar notas</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
