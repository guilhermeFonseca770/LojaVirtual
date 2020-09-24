<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Clientes</h2>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Celular</th>
              <th>Endereço</th>
            </tr>
          </thead>
          <tbody id="customer_list">
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-product-form" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Nome</label>
		        		<input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Marca</label>
		        		<select class="form-control brand_list" name="brand_id">
		        			<option value="">Selecione a Marca</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Categoria</label>
		        		<select class="form-control category_list" name="category_id">
		        			<option value="">Selecione a Categoria</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
                <label>Descrição do Produto</label>
                <label>Atenção <small>(Cuidado com erros de ortografia, a final... você passara a credibilidade para o cliente)</small></label>
		        		<textarea class="form-control" name="product_desc" placeholder="Faça uma descrição atraente que conquiste o cliente !"></textarea>
		        	</div>
        		</div>
            <div class="col-12">
              <div class="form-group">
                <label>Quantidade disponivel</label>
                <input type="number" name="product_qty" class="form-control" placeholder="22 uni">
              </div>
            </div>
        		<div class="col-12">
        			<div class="form-group">
                <label>Valor</label>
		        		<input type="number" name="product_price" class="form-control" placeholder="R$100,00">
		        	</div>
        		</div>
            <div class="col-12">
              <div class="form-group">
                <label>Cor do Produto</label>
                <input type="text" name="product_keywords" class="form-control" placeholder="verde">
              </div>
            </div>
        		<div class="col-12">
        			<div class="form-group">
                <label>Imagem do Produto <small>(formatos permitidos: jpg, jpeg, png)</small></label>
		        		<input type="file" name="product_image" class="form-control">
		        	</div>
        		</div>
        		<input type="hidden" name="add_product" value="1">
        		<div class="col-12">
        			<button type="button" class="btn btn-primary add-product">Cadastrar novo Produto</button>
        		</div>
        	</div>
        	
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/customers.js"></script>