<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Prática de Linguagem de Programação I</h1>
        <div class="sub">
            <h1>Operadores Matemáticos em PHP</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="PDF_01.php">Introdução às Variáveis em PHP</a></li>
            <li><a href="PDF_02.php">Operadores Matemáticos em PHP</a></li>
            <ul style="margin-left: 10%;">
                <li><a href="#C1">Adição</a></li>
                <li><a href="#C2">Subtração</a></li>
                <li><a href="#C3">Multiplicação</a></li>
                <li><a href="#C4">Divisão</a></li>
                <li><a href="#C5">Módulo</a></li>
                <li><a href="#C6">Atribuição com Adição</a></li>
                <li><a href="#C7">Atribuição com Subtração</a></li>
                <li><a href="#C8">Atribuição com Multiplicação</a></li>
                <li><a href="#C9">Atribuição com Divisão</a></li>
                <li><a href="#C10">Função Pi</a></li>
                <li><a href="#C11">Função Min</a></li>
                <li><a href="#C12">Função Max</a></li>
                <li><a href="#C13">Função Abs</a></li>
                <li><a href="#C14">Função Sqrt</a></li>
                <li><a href="#C15">Função Round</a></li>
                <li><a href="#C16">Função Rand</a></li>
                <br>
            </ul>
            <li><a href="PDF_03.php">Constantes do PHP</a></li>
            <li><a href="PDF_04.php">Tipos de dados e Manipulação de Strings</a></li>
            <li><a href="PDF_05.php">Testes com Operadores</a></li>
            <li><a href="PDF_06.php">Testes de Coersão</a></li>
        </ul>
    </nav>
    <section>
        <article>
            <h2 id="C1">Adição</h2>
            <p>Em PHP a operção de adição é executada com o simbolo (+).</p>
            <br>
            <p style="font-style: italic; text-align: center;">$variavelC = $variavelA + $variavelB;</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Soma_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $valor1 = 10;
                        $valor2 = 5;
                        $soma = $valor1 + $valor2;
            
                        print "Valor 1: " . $valor1 . "<br>";
                        print "Valor 2: " . $valor2 . "<br>";
                        print "<br>";
                        print "Soma: " . $soma . "<br>";
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C2">Subtração</h2>
            <p>Em PHP a operção de subtração é executada com o simbolo (-).</p>
            <br>
            <p style="font-style: italic; text-align: center;">$variavelC = $variavelA - $variavelB;</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Subtracao_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $valor1 = 20;
                        $valor2 = 8;
                        $subtracao = $valor1 - $valor2;
            
                        print "Valor 1: " . $valor1 . "<br>";
                        print "Valor 2: " . $valor2 . "<br>";
                        print "<br>";
                        print "Subtração: " . $subtracao . "<br>";
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C3">Multiplicação</h2>
            <p>Em PHP a operção de multiplicação é executada com o simbolo (*).</p>
            <br>
            <p style="font-style: italic; text-align: center;">$variavelC = $variavelA * $variavelB;</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Multiplicacao_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $valor1 = 10;
                        $valor2 = 3;
                        $multiplicacao = $valor1 * $valor2;
            
                        print "Valor 1: " . $valor1 . "<br>";
                        print "Valor 2: " . $valor2 . "<br>";
                        print "<br>";
                        print "Multiplicação: " . $multiplicacao . "<br>";
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C4">Divisão</h2>
            <p>Em PHP a operção de divisão é executada com o simbolo (/).</p>
            <br>
            <p style="font-style: italic; text-align: center;">$variavelC = $variavelA / $variavelB;</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Divisao_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $valor1 = 15;
                        $valor2 = 3;
                        $divisao = $valor1 / $valor2;
            
                        print "Valor 1: " . $valor1 . "<br>";
                        print "Valor 2: " . $valor2 . "<br>";
                        print "<br>";
                        print "Divisão: " . $divisao . "<br>";
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C5">Módulo</h2>
            <p>Em PHP a operção de módulo é executada com o simbolo (%), essa operção retorna o resto 
                da divisão de dois valores.</p>
            <br>
            <p style="font-style: italic; text-align: center;">$variavelC = $variavelA % $variavelB;</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Modulo_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $valor1 = 10;
                        $valor2 = 3;
                        $resto = $valor1 % $valor2;
            
                        print "Valor 1: " . $valor1 . "<br>";
                        print "Valor 2: " . $valor2 . "<br>";
                        print "<br>";
                        print "Resto: " . $resto . "<br>";
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C6">Atribuição com Adição</h2>
            <p>Em PHP a atribuição com adição é executada com o simbolo (+=), essa operção realiza a adição
                de um valor determinado a uma variavel ja declarada.
            </p>
            <br>
            <p style="font-style: italic; text-align: center;">$variavelA += 1;</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Atribuicao_Com_Ad_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $valor = 5;
                        print "Valor: " . $valor . "<br>";
            
                        $valor += 3;
                        print "Valor após a atribuição: " . $valor;
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C7">Atribuição com Subtração</h2>
            <p>Em PHP a atribuição com subtração é executada com o simbolo (-=), essa operção realiza a 
                subtração de um valor determinado a uma variavel ja declarada.
            </p>
            <br>
            <p style="font-style: italic; text-align: center;">$variavelA -= 1;</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Atribuicao_Com_Sub_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $valor = 10;
                        print "Valor: " . $valor . "<br>";
            
                        $valor -= 4;
                        print "Valor apos a atribuição: " . $valor;
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <article>
            <h2 id="C8">Atribuição com Multiplicação</h2>
            <p>Em PHP a atribuição com multiplicação é executada com o simbolo (*=), essa operção realiza a 
                multiplicação de um valor determinado a uma variavel ja declarada.
            </p>
            <br>
            <p style="font-style: italic; text-align: center;">$variavelA *= 2;</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Atribuicao_Com_Mult_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $valor = 7;
                        print "Valor: " . $valor . "<br>";
            
                        $valor *= 2;
                        print "Valor apos a atribuição: " . $valor;
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C9">Atribuição com Divisão</h2>
            <p>Em PHP a atribuição com divisão é executada com o simbolo (/=), essa operção realiza a 
                multiplicação de um valor determinado a uma variavel ja declarada.
            </p>
            <br>
            <p style="font-style: italic; text-align: center;">$variavelA /= 2;</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Atribuicao_Com_Div_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $valor = 24;
                        print "Valor: " . $valor . "<br>";
            
                        $valor /= 3;
                        print "Valor apos a atribuição: " . $valor;
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C10">Função Pi</h2>
            <p>Em PHP a função pi retorna o valor de pi.</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Pi_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        print "Pi = " . pi();
                        print "<br>"
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C11">Função Min</h2>
            <p>Em PHP a função min retorna o menor valor em uma lista de argumentos.</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Min_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php 
                        print "Menor Valor = " . (min(0, 150, 30, 20, -8, -200));
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C12">Função Max</h2>
            <p>Em PHP a função max retorna o maior valor em uma lista de argumentos.</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Max_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php 
                        print "Maior Valor = " . (max(0, 150, 30, 20, -8, -200));
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C13">Função Abs</h2>
            <p>Em PHP a função abs retorna o valor absoluto de um numero.</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Abs_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php 
                        $valorA = -6.7;
                        print "A = " . $valorA . "<br>";
                        print "Módulo de A = " . abs($valorA);
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C14">Função Sqrt</h2>
            <p>Em PHP a função sqrt retorna a raiz quadrada de um numero.</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Sqrt_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php 
                        $valorA = 25;
                        print "A = " . $valorA . "<br>";
                        print "Raiz Quadrada de A = " . sqrt($valorA);
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C15">Função Round</h2>
            <p>Em PHP a função round arredonda um numero de ponto flutuante para o inteiro mais próximo.</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Round_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php 
                        $valorA = 0.60;
                        $valorB = 0.49;
                        print "A = " . $valorA . "<br>";
                        print "A Arredondado = " . round($valorA);
                        print "<br>" . "<br>";
                        print "B = " . $valorB . "<br>";
                        print "B Arredondado = " . round($valorB);
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C16">Função Rand</h2>
            <p>Em PHP a função rand gera um numero aleatório.</p>
            <br>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Rand_PDF02.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php 
                        print "Numero Aleatório: " . rand();
                        print "<br>" . "<br>";
                        print "Numer Aleatório entre 10 e 100: " . rand(10, 100);
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