$(document).ready(function(){
    /*
    texto = $("#teste").text();
    alert("O que está escrito no parágrafo é: " + texto);
    if (confirm("Você tirou boa nota na prova de Web?")) {
        alert("Beleza");
    } else {
        alert("Precisa estudar mais");
    }
    */
    $("#salvar").click(function(){
        nome = $("#nome").val();
        //$("#teste").text(mensagem);
        nasc = $("#nasc").val();
        email = $("#email").val();

        alert("O seu nome é : " + nome +
        "\nA sua data de nascimento é: " + nasc +
        "\nO seu e-mail é: " + email 
        );
    });


});