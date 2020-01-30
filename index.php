<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <title>Livro PHP Poo</title>
    </head>
    <body>
        <div id = "interface">
            <header id ="cabecalho">
            	<hgroup>
                    <h1>Site Livro</h1>
                        <h2>POO em PHP</h2>
		</hgroup>						
            </header>
            <pre>
            <?php
                
                require_once 'Pessoa.php';
                require_once 'Livro.php';
                
                $p[0] = new Pessoa("Aristides",20,"m");
                $p[1] = new Pessoa("Mirabela",35,"f");
                
                $l[0] = new Livro("Poririrama","Alemão",100,$p[0]);
                $l[1] = new Livro("Aritamirama Ponai","Juparati Koramaina",502,$p[1]);
                
                $p[0]->fazerAniver();
                
                $l[0]->folhear(10);
                $l[1]->abrir();
                $l[1]->avancarPag();
                $l[0]->abrir();
                $l[0]->folhear(1000);
                $l[0]->voltarPag();
                $l[1]->voltarPag();
                $l[1]->voltarPag();
                $l[0]->abrir();
                
                for ($i=0;$i<2;$i++){
                    $p[$i]->descricaoPessoa();
                    $l[$i]->descricao();
                }
                
                
            
                
            ?>
            </pre>
            <footer id= "rodape">
			<p>2020 - by Leandro Marson Ribeiro<br>
            </footer> 
        </div>    
    </body>
</html>
