$(document).ready(function(){
    function calcularQuantidadeDeAtletas(){
        quant = $("#atletas tbody tr").length;
        $("#quant").text(quant);        
    }

    $("#salvar").click(function(){
        nome = $("#nome").val();
        //$("#teste").text(mensagem);
        nasc = $("#nasc").val();
        email = $("#email").val();

        $("#atletas tbody").append("<tr><td>" + nome + "</td><td>" + nasc + "</td><td>" + email +"</td>");
        calcularQuantidadeDeAtletas();
    });

    $("#calcularimc").click(function(){
        peso = parseFloat($("#peso").val());
        altura = parseFloat($("#altura").val());

        imc = peso / altura ** 2;

        alert("O seu nome IMC é : " + imc.toFixed(2));        
    });

    $("#excluirtudo").click(function(){
        $("#atletas tbody").empty();
        calcularQuantidadeDeAtletas();
    })

});