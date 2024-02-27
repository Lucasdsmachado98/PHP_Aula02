<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução às Variáveis em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Prática de Linguagem de Programação I</h1>
        <div class="sub">
            <h1>Introdução às Variáveis em PHP</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="PDF_01.php">Introdução às Variáveis em PHP</a></li>
            <ul style="margin-left: 10%;">
                <li><a href="#C1">Sintaxe</a></li>
                <li><a href="#C2">Tipos de dados em variáveis</a></li>
                <li><a href="#C3">Variável Booleana</a></li>
                <li><a href="#C4">Operador Ternário</a></li>
                <li><a href="#C5">Variavel array</a></li>
                <br>
            </ul>
            <li><a href="PDF_02.php">Operadores Matemáticos em PHP</a></li>
            <li><a href="PDF_03.php">Constantes do PHP</a></li>
            <li><a href="PDF_04.php">Tipos de dados e Manipulação de Strings</a></li>
            <li><a href="PDF_05.php">Testes com Operadores</a></li>
            <li><a href="PDF_06.php">Testes de Coersão</a></li>
        </ul>
    </nav>
    <section>
        <article>
            <h2 id="C1">Sintaxe</h2>
            <p>Para declarar uma variável em PHP é necessario utilizar o simbolo do cifrão ($) 
                seguido do nome da variável e da informação atribuida à ela, essa atribuição é 
                feita atravéz do simbolo de igual (=).
            </p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Sintaxe_PDF01.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $idade = 25;
                        $nome = "João";
                        print "Idade: " . $idade . "<br>" . "Nome: " . $nome . "<br>";
                        print "<br>";
                    ?>
                </div>
            </div>    
        </article>
        <article>
            <h2 id="C2">Tipos de dados em variáveis</h2>
            <p>Em PHP não é necessario declarar o tipo da variável, a propria linguagem de programação irá 
                determinar automaticamente o tipo da variável de acordo com a informação atribuida à mesma. 
                Os tipos mais comuns de variaveis são:
            </p>
            <ul>
                <li>Inteiro (int): Engloba todos os números inteiros positivos e negativos.</li>
                <li>Ponto Flutuante (float): Engloba todos os numeros Reais.</li>
                <li>String: É uma sequencia de caracteres.</li>
                <li>Booleano (bool): Informação binaria que registra apenas verdadeiro (true) ou falso (false).</li>
                <li>Array: É uma lista que armazena multiplos dados.</li>
                <li>Objeto: Instância de uma classe que pode conter propriedades e métodos.</li>
            </ul>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Tipos_01_PDF01.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $idade = 30;
                        $peso = 70.5;
                        $nome = "Maria";

                        print "Variavel int -> Idade: " . $idade . "<br>";
                        print "Variavel float -> Peso: " . $peso . "<br>";
                        print "Variavel string -> Nome: " . $nome . "<br>";
                        print "<br>";
                    ?>
                </div>
            </div>        
        </article>
        <article>
            <h2 id="C3">Variável Booleana:</h2>
            <p>Variaveis do tipo booleana (bool) armazenam informações binarias e registram verdadeiro (true) 
                como igual à 1 e falso (false) como igual à 0.</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Bool_PDF01.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $verdadeiro = true;
                        $falso = false;

                        print"Verdadeiro = " . $verdadeiro . "<br>";
                        print "Falso = " . 1 *  $falso . "<br>";
                    ?>
                </div>
            </div>
        </article>
        <article>
            <h2 id="C4">Operador Ternário</h2>
            <p>O Operador Ternário em PHP é utilizado para construir uma estrutura condicional com uma 
                variavel booleana, caso seja positivo executará uma ação, mas caso seja negativo uma ação 
                diferente sera executada.</p>

            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Operador_Ternario_PDF01.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $temConta = true;
                        $temCartao = false;

                        print "Tem conta? " . ($temConta ? "Sim" : "Não") . "<br>";
                        print "Tem cartão? " . ($temCartao ? "Sim" : "Não") . "<br>";
                        print "<br>";

                        $idade = 18;
                        $status = ($idade >= 18) ? "Maior de idade" : "Menor de Idade";
                        print $status . "<br>";
                        print "<br>";
                    ?>
                </div>
            </div>
            <div style="text-align: center;">
                <h4>Sintaxe:</h4>
                <p style="font-style: italic;">Condição ? Ação se for verdadiro : Ação se for Falso;</p>
            </div>
        </article>
        <article>
            <h2 id="C5">Variavel array:</h2>
            <p>É um tipo de variavel indexada, ou seja, utiliza indíces para armazenar multíplas informalções 
                dentro de apenas uma variável.
            </p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Array_PDF01.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $cores = array("Vermelho", "Branco", "Laranja");
                        $numeros = [1, 2, 3, 4, 5];
                        $posicao = 1;

                        print "Posição " . $posicao . "<br>";
                        print "Cor na posição " . $posicao . ": " . $cores[$posicao] . "<br>";
                        print "Numero na posição " . $posicao . ": " . $numeros[$posicao] . "<br>";
                        print "<br>"
                    ?>
                </div>
            </div>
        </article>
        <br>
    </section>
    <footer>
        <hr>
        <div class="footer-content">
            <p>&copy; 2024 Prática de Linguagem de Programação I. Todos os direitos reservados.</p>
            <p>Desenvolvido por: Lucas Da Silva Machado</p>
            <p>Contato: lucassilva.machado@aluno.fmpsc.edu.br</p>
        </div>
    </footer>
</body>
</html>
