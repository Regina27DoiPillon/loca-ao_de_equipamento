<?php include 'includes/header.php'; ?>

<!-- for categoria -->
<h4 style="margin:5px;">categoria</h4>
<!-- for produto in categoria. Máximo: 20
 se tela for de celular, 10 produtos-->
<div class="flex wrap" style="padding:10px; margin:10px;">
    <div class="flex column borda gap10 altura-centro meio-centro" style="padding:10px; border-radius: 10px; width:140px;">
        <img src="" alt="desc produto" style="height:100px; width:120px">
        <p>nome produto</p>
        <p>preço</p>
        <button><img src="<?echo url; ?>midia/icons/carrinho.png" alt="adicionar ao carrinho" style="height:25px; width:25px;"></button>
    </div>
</div>
<br>


<?php include 'includes/footer.php'; ?>