<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes do PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Prática de Linguagem de Programação I</h1>
        <div class="sub">
            <h1>Constantes do PHP</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="PDF_01.php">Introdução às Variáveis em PHP</a></li>
            <li><a href="PDF_02.php">Operadores Matemáticos em PHP</a></li>
            <li><a href="PDF_03.php">Constantes do PHP</a></li>
            <ul style="margin-left: 10%;">
                <li><a href="#C1">Sintaxe</a></li>
                <li><a href="#C2">Parâmetros</a></li>
                <li><a href="#C3">Exemplos</a></li>
                <br>
            </ul>
            <li><a href="PDF_04.php">Tipos de dados e Manipulação de Strings</a></li>
            <li><a href="PDF_05.php">Testes com Operadores</a></li>
            <li><a href="PDF_06.php">Testes de Coersão</a></li>
        </ul>
    </nav>
    <section>
        <article>
            <h2 id="C1">Sintaxe</h2>
            <p>Constantes são variáveis que uma vez definidas não podem mais serem alteradas ou indefinidas, 
                elas possuem a caracteristica de serem automaticamente globais, ou seja não podem ser 
                alteradas ao decorrer de todo o script. Para declarar uma constante deve-se uras a função 
                define(), o nome da constante deve começar com uma letra ou com o simbulo de sublinhado (_), 
                sem usar o simbolo de cifra ($).
            </p>
            <br>
            <p style="text-align: center; font-style: italic;">define("NOME", valor, case_insensitive)</p>
            <br>
        </article>
        <article>
            <h2 id="C2">Parâmetros</h2>
            <ul>
                <li>Nome: Especifica o nome da constante</li>
                <br>
                <li>Valor: Especifica o valor da constante</li>
                <br>
                <li>Case Insensitive: Determina se a constante não deve diferenciar caracteres maiusculos e minusculos, o 
                    padrão é falso (false)</li>
                <br>
            </ul>
        </article>
        <article>
            <h2 id="C3">Exemplos</h2>
            <p>Exemplo 1: Constante com um nome que diferencia maiúsculas de minúsculas:</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Exemplo1_PDF03.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        define("FMP", "Faculdade Municipal de Palhoça");
                        print FMP;
                        print "<br>";
                    ?>
                </div>
            </div>
            <br>
            <p>Exemplo 2: Imprimindo as constantes:</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Exemplo2_PDF03.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        define("PI", 3.14159);
                        define("APP_NAME", "Minha Aplicação");
                        print "PI = " . PI . "<br>";
                        print "<br>";
                        print "APP_NAME: " . APP_NAME;
                        print "<br>";
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