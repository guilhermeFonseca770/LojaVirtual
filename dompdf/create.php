<? php

exigir __DIR__. '/vendor/autoload.php' ;

$ dompdf = novo  Dompdf \ Dompdf ();

$ tabela = file_get_contents ( 'admin/produtos-cadastrados.php' );

$ dompdf -> loadhtml ( $ tabela );
$ dompdf -> setPaper ( 'A4' , 'retrato' ); / * Tamanho da página e a orientação * / 
$ dompdf -> render (); / * renderização em pdf * /

$ dompdf -> stream (); / * oferece para o navegador * /

/ * Salva ou arquivo na raiz do diretório * /
file_put_contents ( 'doc.pdf' , $ dompdf -> output ());
?>