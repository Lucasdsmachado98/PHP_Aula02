<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes de Coersão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Prática de Linguagem de Programação I</h1>
        <div class="sub">
            <h1>Testes de Coersão</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="PDF_01.php">Introdução às Variáveis em PHP</a></li>
            <li><a href="PDF_02.php">Operadores Matemáticos em PHP</a></li>
            <li><a href="PDF_03.php">Constantes do PHP</a></li>
            <li><a href="PDF_04.php">Testes Tipos de dados e Manipulação de Strings</a></li>
            <li><a href="PDF_05.php">Testes com Operadores</a></li>
            <li><a href="PDF_06.php">Testes de Coersão</a></li>
            <ul style="margin-left: 10%;">
                <li><a href="#C1">Coersão</a></li>
                <li><a href="#C2">Coersão Implicita</a></li>
                <li><a href="#C3">Coersão Explicita</a></li>
                <br>
            </ul>
        </ul>
    </nav>
    <section>
        <article>
            <h2 id="C1">Coersão</h2>
            <p>A coerção (ou coersão) em PHP refere-se à conversão automática de um tipo de dado para outro,
                geralmente durante a avaliação de expressões ou operações. Isso acontece quando um operador 
                ou função espera um certo tipo de dado, mas recebe um tipo diferente.</p>
        </article>
        <br>
        <h2 id="C2">Coersão implicita</h2>
            <p>Conversão implícita de tipos (como quando uma string é usada em um contexto numérico).</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/CoersaoImplicita_PDF06.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $php = "5";
                        print "php é uma string com valor -> ";
                        print $php;
                        print "<br>" . "<br>";
                        $php = $php + 5;
                        print "php é convertido para inteiro -> ";
                        print $php;
                        print "<br>" . "<br>";
                        $php = $php + 5.7;
                        print "php é convertido para float -> ";
                        print $php;
                        print "<br>" . "<br>";
                        $php = 4 + 3.5;
                        print "php é uma operação aritimetica -> ";
                        print $php;
                        print "<br>" . "<br>";
                        $php = 4 + "12.5";
                        print "o string é convertido para float -> ";
                        print $php;
                        print "<br>" . "<br>";
                        $php = 5 + "10";
                        print "o string é convertido para inteiro -> ";
                        print $php;
                    ?>
                </div>
            </div>
        </article>
        <br>
        </article>
        <br>
        <h2 id="C3">Coersão Explicita</h2>
            <p>Conversão explícita de tipos usando typecast ((double)) e a função settype().</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/CoersaoExplicita_PDF06.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $php = 8;
                        print "php é inteiro = " . $php;
                        print "<br>" . "<br>";
                        $php = (double) $php;
                        print "php é convertido para float = " . $php;
                        print "<br>" . "<br>";
                        $php = 1.5;
                        print "php é float = " . $php;
                        print "<br>" . "<br>";
                        $php = 9;
                        print "php é inteiro = ";
                        var_dump($php);
                        print "<br>" . "<br>";
                        print "php é convertido para float = ";
                        settype($php, "double");
                        var_dump($php);
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