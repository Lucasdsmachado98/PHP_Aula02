<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de dados e Manipulação de Strings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Prática de Linguagem de Programação I</h1>
        <div class="sub">
            <h1>Tipos de dados e Manipulação de Strings</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="PDF_01.php">Introdução às Variáveis em PHP</a></li>
            <li><a href="PDF_02.php">Operadores Matemáticos em PHP</a></li>
            <li><a href="PDF_03.php">Constantes do PHP</a></li>
            <li><a href="PDF_04.php">Tipos de dados e Manipulação de Strings</a></li>
            <ul style="margin-left: 10%;">
                <li><a href="#C1">Tipos de Dados</a></li>
                <li><a href="#C2">Arrays</a></li>
                <li><a href="#C3">Manipulacao De Strings</a></li>
                <li><a href="#C4">Maipulacao De Strings 2</a></li>
                <br>
            </ul>
            <li><a href="PDF_05.php">Testes com Operadores</a></li>
            <li><a href="PDF_06.php">Testes de Coersão</a></li>
        </ul>
    </nav>
    <section>
        <article>
            <h2 id="C1">Tipos de Dados</h2>
            <p>Tipos de variaveis em PHP.</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/TiposDeDados_PDF04.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        //Declaração de variaveis
                        $inteiro = 4;
                        $pontoFlutuante = 2.4;
                        $nome = "Isabelle";
                        $sobrenome = 'Antunes';
                        $decisao = true;
                        
                        //Saida de dados
                        print "Inteiro = " . $inteiro;
                        print "<br>" . "<br>";
                        print "Real = " . $pontoFlutuante;
                        print "<br>" . "<br>";
                        print "String: " . $nome;
                        print "<br>" . "<br>";
                        print "String:  " . $sobrenome;
                        print "<br>" . "<br>";
                        print "Bool: " . $decisao;
                        print "<br>"
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C2">Arrays</h2>
            <p>Declarando arrays e utilizando as funções var_dump( ) e print_r( ) para exibir informações 
                de um array.</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/Arrays_PDF04.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $cidades = array(1 => "Palhoça", 2 => "Florianopolis", 3 => "Campeche");

                        list($a, $b, $c) = array("João", "Maria", "Carlos");

                        $raio = 2;
                        define("PI", 3.1415926536);
                        $circunf = 2 * PI * $raio;

                        //Saida de dados
                        print "Informações do array cidades";
                        print "<br>" . "<br>";
                        print "Função var_dump( ): ";
                        print "<br>" . "<br>";
                        var_dump($cidades);
                        print "<br>" . "<br>";
                        print "Função print_r( ): ";
                        print "<br>" . "<br>";
                        print_r($cidades);
                        print "<br>" . "<br>";
                        print "Circunferencia = " . $circunf;
                        print "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C3">Manipulacao De Strings</h2>
            <p>Utilizando as funções strtoupper( ), strtolower( ), ucwords( ), ucfirst( ) e str_replace( ) 
                para manipular uma string.</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/ManipulacaoDeString_PDF04.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $nome = "faculdade municipal";
                        print "Nome: " . $nome;
                        print "<br>" . "<br>";
                        print "Função strtoupper( ): ";
                        print strtoupper($nome);
                        print "<br>" . "<br>";
                        print "Função strtolower( ): ";
                        print strtolower($nome);
                        print "<br>" . "<br>";
                        print "Função ucwords( ): ";
                        print ucwords($nome);
                        print "<br>" . "<br>";
                        print "Função ucfirst( ): ";
                        print ucfirst($nome);
                        print "<br>" . "<br>";
                        print "Função str_replace( ): ";
                        print str_replace("e", "&", $nome);
                        print "<br>" . "<br>";
                    ?>
                </div>
            </div>
        </article>
        <br>
        <article>
            <h2 id="C4">Manipulacao De Strings 2</h2>
            <p>Utilizando as funções strpos( ), substr( ) e strlen( ) para manipular uma string.</p>
            <div class="container">
                <div>
                    <h4>Código Fonte:</h4>
                    <img src="/img/Aula02/ManipulacaoDeString2_PDF04.jpg" alt="">
                </div>
                <div>
                    <h4>Exibição na página:</h4>
                    <?php
                        $frase = "eh um teste";
                        print "Frase = " . $frase;
                        print "<br>" . "<br>";
                        print "Função strpos( ): ";
                        $q = strpos($frase, "teste");
                        var_dump($q);
                        print "<br>" . "<br>";
                        print "Função substr( ): ";
                        print "<br>" . "<br>";
                        print "#   Texto 1: ";
                        $texto = substr($frase, 0, $q);
                        print $texto;   
                        print "<br>" . "<br>";
                        print "#   Texto 2: ";
                        $texto2 = substr($frase, $q);
                        print $texto2;
                        print "<br>" . "<br>";
                        print "Função strlen( ): ";
                        print strlen($frase);
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