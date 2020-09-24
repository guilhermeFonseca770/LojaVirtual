$(document).ready(function(){
	cat();
	brand();
	product();
// cat () é um registro de categoria de busca de função do banco de dados sempre que a página é carregada
	function cat(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{category:1},
			success	:	function(data){
				$("#get_category").html(data);
				
			}
		})
	}
// brand () é uma função que busca o registro da marca no banco de dados sempre que a página é carregada
	function brand(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{brand:1},
			success	:	function(data){
				$("#get_brand").html(data);
			}
		})
	}
// product () é uma função que busca o registro do produto no banco de dados sempre que a página é carregada
		function product(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{getProduct:1},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	}
	/*	
quando a página é carregada com êxito, há uma lista de categorias quando o usuário clica na categoria, obteremos o ID da categoria e
de acordo com a id, mostraremos produtos
	*/
	$("body").delegate(".category","click",function(event){
		$("#get_product").html("<h3> ❀ Carregando ❀ </h3>");
		event.preventDefault();
		var cid = $(this).attr('cid');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{get_seleted_Category:1,cat_id:cid},
			success	:	function(data){
				$("#get_product").html(data);
				if($("body").width() < 480){
					$("body").scrollTop(683);
				}
			}
		})
	
	})

	/*	
	quando a página é carregada com êxito, há uma lista de marcas quando o usuário clica na marca, obtemos o ID da marca e
de acordo com a identificação da marca, mostraremos produtos
	*/
	$("body").delegate(".selectBrand","click",function(event){
		event.preventDefault();
		$("#get_product").html("<h3> ❀ Carregando ❀ </h3>");
		var bid = $(this).attr('bid');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{selectBrand:1,brand_id:bid},
			success	:	function(data){
				$("#get_product").html(data);
				if($("body").width() < 480){
					$("body").scrollTop(683);
				}
			}
		})
	
	})
	/*
No topo da página, há uma caixa de pesquisa com o botão de pesquisa quando o usuário coloca o nome do produto;
determinada string e, com a ajuda da consulta sql, corresponderemos a string fornecida pelo usuário à nossa coluna de palavras-chave do banco de dados e ao produto correspondente
vamos mostrar

	*/
	$("#search_btn").click(function(){
		$("#get_product").html("<h3> ❀ Carregando ❀ </h3>");
		var keyword = $("#search").val();
		if(keyword != ""){
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{search:1,keyword:keyword},
			success	:	function(data){ 
				$("#get_product").html(data);
				if($("body").width() < 480){
					$("body").scrollTop(683);
				}
			}
		})
		}
	})
	/*
Aqui #login é o ID do formulário de login e este formulário está disponível na página index.php
a partir daqui, os dados de entrada são enviados para a página login.php
se você receber a string login_success da página login.php significa que o usuário efetuou login com êxito e window.location é
usado para redirecionar o usuário da página inicial para a página profile.php
	*/
	$("#login").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url	:	"login.php",
			method:	"POST",
			data	:$("#login").serialize(),
			success	:function(data){
				if(data == "login_success"){
					window.location.href = "profile.php";
				}else if(data == "cart_login"){
					window.location.href = "carrinho.php";
				}else{
					$("#e_msg").html(data);
					$(".overlay").hide();
				}
			}
		})
	})
	//end

// Obter informações do usuário antes da finalização da compra
	$("#signup_form").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "register.php",
			method : "POST",
			data : $("#signup_form").serialize(),
			success : function(data){
				$(".overlay").hide();
				if (data == "register_success") {
					window.location.href = "carrinho.php";
				}else{
					$("#signup_msg").html(data);
				}
				
			}
		})
	})
//obter informações do usuário termina aqui
//Adiciona produto ao carrinho
	$("body").delegate("#product","click",function(event){
		var pid = $(this).attr("pid");
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {addToCart:1,proId:pid},
			success : function(data){
				count_item();
				getCartItem();
				$('#product_msg').html(data);
				$('.overlay').hide();
			}
		})
	})
// Adicionar produto ao carrinho Terminar aqui
// Contar itens do carrinho do usuário
	count_item();
	function count_item(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {count_item:1},
			success : function(data){
				$(".badge").html(data);
			}
		})
	}
// Contar itens do carrinho do usuario termina aqui
// Buscar item do carrinho do banco de dados para o menu suspenso
	getCartItem();
	function getCartItem(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {Common:1,getCartItem:1},
			success : function(data){
				$("#cart_product").html(data);
			}
		})
	}

// Buscar item do carrinho do banco de dados para o menu suspenso

/*
Sempre que o usuário alterar a quantidade, atualizaremos imediatamente o valor total usando a função de keyup
mas sempre que o usuário colocar algo (como? '' "",. () '' etc) diferente de number, faremos qty = 1
se o usuário colocar o qty 0 ou menor que 0, faremos novamente 1 qty = 1
('.total'). each () é uma repetição de função de loop para a classe .total e em cada repetição, executaremos a operação de soma do valor da classe .total
e depois mostre o resultado na classe .net_total
*/
	$("body").delegate(".qty","keyup",function(event){
		event.preventDefault();
		var row = $(this).parent().parent();
		var price = row.find('.price').val();
		var qty = row.find('.qty').val();
		if (isNaN(qty)) {
			qty = 1;
		};
		if (qty < 1) {
			qty = 1;
		};
		var total = price * qty;
		row.find('.total').val(total);
		var net_total=0;
		$('.total').each(function(){
			net_total += ($(this).val()-0);
		})
		$('.net_total').html("Total : R$ " +net_total);

	})
// Alterar a quantidade final aqui

/*
sempre que o usuário clicar na classe .remove, obteremos o ID do produto dessa linha
e envie para action.php para executar a operação de remoção do produto
*/

	$("body").delegate(".remove","click",function(event){
		var remove = $(this).parent().parent().parent();
		var remove_id = remove.find(".remove").attr("remove_id");
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{removeItemFromCart:1,rid:remove_id},
			success	:	function(data){
				$("#cart_msg").html(data);
				checkOutDetails();
			}
		})
	})
/*
sempre que o usuário clicar na classe .update, obteremos o ID do produto dessa linha
e envie para action.php para executar a operação de atualização do qty do produto
*/
	$("body").delegate(".update","click",function(event){
		var update = $(this).parent().parent().parent();
		var update_id = update.find(".update").attr("update_id");
		var qty = update.find(".qty").val();
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{updateCartItem:1,update_id:update_id,qty:qty},
			success	:	function(data){
				$("#cart_msg").html(data);
				checkOutDetails();
			}
		})


	})
	checkOutDetails();
	net_total();
/*
A função checkOutDetails () funciona para dois propósitos
Primeiro ele habilitará o php isset ($ _ POST ["Common"]) na página action.php e dentro dela
há duas funções isset que são isset ($ _ POST ["getCarrinhoItem"]) e outra é isset ($ _ POST ["checkOutDetials]])
getCarrrinhoItem é usado para mostrar o item do carrinho no menu suspenso
checkOutDetails é usado para mostrar o item do carrinho na página Carrinho.php
*/
	function checkOutDetails(){
	 $('.overlay').show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {Common:1,checkOutDetails:1},
			success : function(data){
				$('.overlay').hide();
				$("#cart_checkout").html(data);
					net_total();
			}
		})
	}
/*
A função net_total é usada para calcular a quantidade total de item do carrinho
*/
	function net_total(){
		var net_total = 0;
		$('.qty').each(function(){
			var row = $(this).parent().parent();
			var price  = row.find('.price').val();
			var total = price * $(this).val()-0;
			row.find('.total').val(total);
		})
		$('.total').each(function(){
			net_total += ($(this).val()-0);
		})
		$('.net_total').html("Total : "+ CURRENCY+ " " +net_total);
	}

//remove produto do carrinho

	page();
	function page(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{page:1},
			success	:	function(data){
				$("#pageno").html(data);
			}
		})
	}
	$("body").delegate("#page","click",function(){
		var pn = $(this).attr("page");
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{getProduct:1,setPage:1,pageNumber:pn},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	})
})




















