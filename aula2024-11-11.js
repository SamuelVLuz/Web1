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
        esporte = $("#esporte").val();

        $("#atletas tbody").append("<tr class='" + esporte + "'><td>" + nome + "</td><td>" + nasc + "</td><td>" + email + "</td><td>" + esporte + "</td>" + "<td><a href=''>Excluir</a></td>");
        calcularQuantidadeDeAtletas();
    });

    $("#calcularimc").click(function(){
        peso = parseFloat($("#peso").val());
        altura = parseFloat($("#altura").val());

        imc = peso / altura ** 2;

        alert("O seu nome IMC é : " + imc.toFixed(2));        
    });

    $("#excluirtudo").click(function(){
        if (confirm("Deseja realmente excluir todos os dados?")) {
            $("#atletas tbody").empty();
            calcularQuantidadeDeAtletas();
        }
    })

    $("#atletas tbody").on("click", "a", function(event){
        event.preventDefault();
        $(this).closest("tr").remove();
        calcularQuantidadeDeAtletas();
    });

    $("#mostrar-atletas").change(function(){
        esporte = $(this).val();
        if(esporte == "todos") {
            $("#atletas tbody tr").show();
        } else {
            $("#atletas tbody tr").hide();
            $("." + esporte).show();
        }
    })

    /*
    $("#google").click(function(){
        alert("Hahaha TOLO!!! Você achou que iria encontrar mães solteiras, mas sou eu, Google!");
        event.preventDefault();
    });
    */
});