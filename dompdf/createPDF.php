<?php

require __DIR__.'/dompdf/autoload.inc.php';
$dompdf = new Dompdf\Dompdf();

$pdo = new PDO('mysql:host=localhost; dbname=dbflawers;','root','');

$tabela = $pdo->query('SELECT * FROM products');
$html = '<table>';
$html .= '<thread>';
$html .= '<tr>';
$html .= '<td>Nome</td>';
$html .= '<td>Preço</td>';
$html .= '<td>Quantidade</td>';
$html .= '<td>Descrição</td>';
$html .= '<td>Imagem</td>';
$html .= '<td>Cor</td>';
$html .= '</tr>';
$html .= '</thread>';
$html .= '</table>';



while ($linha = $tabela->fetch(PDO::FETCH_ASSOC)){
	$html .='<tbody>';
	$html .= '<td>'.$linha['product_title'].'</td>';
	$html .= '<td>'. $linha['product_price'].'</td>';
	$html .= '<td>'. $linha['product_qty'].'</td>';
	$html .= '<td>'. $linha['product_desc'].'</td>';
	$html .= '<td>'. $linha['product_image'].'</td>';
	$html .= '<td>'. $linha['product_keywords'].'<br>';
	$html .= '</td>'. '</tbody>';


}

$dompdf->loadhtml($html);
$dompdf->loadhtml($imprimir);
$dompdf->setPaper('A4', 'portrait'); /*Tamanho da página e a orientação*/ 
$dompdf->render(); /* renderiza o pdf*/

$dompdf->stream('relatorio.pdf', array('Attachment' => true)); /* oferece para o navegador*/

/*Salva o arquivo na raiz do diretório*/
file_put_contents('doc.pdf', $dompdf->output());


?>
