<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes Operadores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Prática de Linguagem de Programação I</h1>
        <div class="sub">
            <h1>Testes com Operadores</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="PDF_01.php">Introdução às Variáveis em PHP</a></li>
            <li><a href="PDF_02.php">Operadores Matemáticos em PHP</a></li>
            <li><a href="PDF_03.php">Constantes do PHP</a></li>
            <li><a href="PDF_04.php">Testes Tipos de dados e Manipulação de Strings</a></li>
            <li><a href="PDF_05.php">Testes com Operadores</a></li>
            <ul style="margin-left: 10%;">
                <li><a href="#C1">Operadores</a></li>
                <li><a href="#C2">Operadores Lógicos</a></li>
                <li><a href="#C3">Comparação Spaceship</a></li>
                <li><a href="#C4">Operador de Fusão Nula</a></li>
                <li><a href="#C5">Incremento e Decremento</a></li>
                <br>
            </ul>
            <li><a href="PDF_06.php">Testes de Coersão</a></li>
        </ul>
    </nav>
    <section>
        <article>
            <h2 id="C1">Operadores</h2>
            <p>Manipulação de variáveis atravéz de operadores de atribuição, de concatenação e 
                aritiméticos.</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Operadores_PDF05.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        print "Operador de atribuição: ";
                        print "<br>" . "<br>";
                        $nome = "Felipe";
                        print "Nome: ";
                        print $nome;
                        print "<br>" . "<br>";
                        print "Operador de concatenação: ";
                        print "<br>" . "<br>";
                        print $nome . " Antunes";
                        print "<br>" . "<br>";
                        print "Concatenação Composta: ";
                        print "<br>" . "<br>";
                        $nome .= " | Programação";
                        print $nome;
                        print "<br>" . "<br>";
                        $valorTotal = 0;
                        print "Valor Total = " . $valorTotal;
                        print "<br>";
                        $valorTotal += 100;
                        print "Valor Total +100 = " . $valorTotal;
                        print "<br>";
                        $valorTotal += 25;
                        print "Valor Total +25 = " . $valorTotal;
                        print "<br>";
                        $valorTotal -= 12;
                        print "Valor Total -12 = " . $valorTotal;
                        print "<br>";
                        $valorTotal *= .1;
                        print "Valor Total -90% = " . $valorTotal;
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C2">Operadores Lógicos</h2>
            <p>Manipulação de variáveis atravéz de operadores lógicos.</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/OperadoresLogicos_PDF05.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $a = 30;
                        $b = 15;
                        print "Valor A = " . $a . "<br>";
                        print "Valor B = " . $b;
                        print "<br>" . "<br>";
                        print "A é maior que B: ";
                        var_dump($a > $b);
                        print "<br>" . "<br>";
                        print "A é menor que B: ";
                        var_dump($a < $b);
                        print "<br>" . "<br>";
                        print "A é igual a B: ";
                        var_dump($a == $b);
                        print "<br>" . "<br>";
                        print "A é identico a B: ";
                        var_dump($a === $b);
                        print "<br>" . "<br>";
                        print "A é diferente de B: ";
                        var_dump($a != $b);
                        print "<br>" . "<br>";
                        print "A não é identico a B: ";
                        var_dump($a !== $b);
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C3">Comparação Spaceship</h2>
            <p>Manipulação de variáveis atravéz do operador de comparação spaceship.</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Spaceship_PDF05.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                       $a = 5;
                       $b = 10;
                       print "Valor A = " . $a . "<br>";
                       print "Valor B = " . $b;
                       print "<br>" . "<br>";
                       print "Quando A é menor que B retorna: ";
                       print $a <=> $b;
                       print "<br>" . "<br>";
                       $c = 15;
                       $d = 10;
                       print "Valor C = " . $c . "<br>";
                       print "Valor D = " . $d;
                       print "<br>" . "<br>";
                       print "Quando C é maior que D retorna: ";
                       print $c <=> $d;
                       print "<br>" . "<br>";
                       $e = 20;
                       $f = 20;
                       print "Valor E = " . $e . "<br>";
                       print "Valor F = " . $f;
                       print "<br>" . "<br>";
                       print "Quando E é igual a F retorna: ";
                       print $e <=> $f;
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C4">Operador de Fusão Nula</h2>
            <p>Ele é utilizado para atribuir um valor padrão a uma variável caso ela seja nula.</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Null_PDF05.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                       $d = null;
                       $f = null;
                       $g = 3;
                       print "Valor de D = " . $d . "<br>";
                       print "Valor de F = " . $f . "<br>";
                       print "Valor de G = " . $g;
                       print "<br>" . "<br>";
                       print "Pula as variaves vazias: " . ($d ?? $f ?? $g);
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C5">Incremento e Decremento</h2>
            <p>Demonstração dos operadores de incremento e decremento.</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Incremento_PDF05.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                       $a = 10;
                       print "Valor de A = ";
                       print $a . "<br>";
                       print "<br>";
                       $a++;
                       print $a . "<br>";
                       $a++;
                       print $a . "<br>";
                       $a--;
                       print $a . "<br>";
                       $a--;
                       print $a . "<br>";
                       --$a;
                       print $a . "<br>";
                       ++$a;
                       print $a . "<br>";
                       print "<br>" . "<br>";
                       $resultado = (10 + 3)/2;
                       print "Resultado = " . $resultado;
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