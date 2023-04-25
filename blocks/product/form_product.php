<section>
    <div class="sect-content row jc-ce">
    <form action="<?php echo $home.'functions/product/fun_ins_product.php' ?>" method="post" class="col g-16">
        <h2>Adicione um produto</h2>

        <div class="col g-8">
            <label for="product_pic">Foto do produto</label>
            <input type="file" accept="image/*" name="product_pic" placeholder="Foto do produto" required class="px-16 py-32 cursor-pointer">
        </div>
        <div class="col g-8">
            <label for="product_name">Nome do produto</label>
            <input type="text" name="product_name" required>
        </div>
        <div class="col g-8">
            <label for="product_desc">Descrição</label>
            <textarea name="product_desc" cols="30" rows="10" required></textarea>
        </div>
        <div class="col g-8">
            <label for="product_cat">Categorias <small>(separe com ",")</small></label>
            <input type="text" name="product_cat" required></textarea>
        </div>
        <div class="col g-8">
            <label for="product_price">Preço</label>
            <input type="text" name="product_price" required>
        </div>
        <div class="col g-8">
            <label for="product_quantity">Quantidade</label>
            <input type="text" name="product_quantity" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
    </div>
</section>