<?php include ('php/header.php')?>
<?php include ('php/menu.php')?>
<!--/Меню-->
<!-- Content page -->
<section data-page="catalog" class=" p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Категории
						</h4>
                        <!--sql запрос-->
					<?
                $result = mysqli_query($connection,"SELECT * FROM cat_product");
        	 ?>     
					<!--/sql запрос-->

                        <?php 
                            while ($cat = mysqli_fetch_assoc($result))
                            {  
                            ?>  
                            
						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="<? echo $cat['str'];?>" class="s-text13 active1">
                                <?php echo $cat['name'];?>
								</a>
							</li>
                         <?
							}
						?>
				
						<!--поиск  -->
						<h4 class="m-text14 p-b-32"></h4>
							<div class="m-text15 p-b-17 bo3"></div>
							<div class="w-size11"></div>
						<div  id="poisk" class="search-product pos-relative bo4 of-hidden">
						<div id="poisk">
					<form>
						<input type="text"  name="referal" size="30"  value="" class="s-text7 size6 p-l-23 p-r-50 who" placeholder="Что искать?..."  autocomplete="off">	
					</form>
					<div class="vyvod">
                        <ul class="search_result"></ul>
                        </div>
						</div>
						</div>
					</div>
				</div>
					<!--/поиск-->
				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w"></div>
					</div>


<div class="product-tab">
						<div class="tab-content">
								<div class="tab-pane active" id="popular-product">
										<div class="row">
												<!-- ячейки товаров -->
<div class="product-tab">
                        <div class="tab-content">
                            <div class="tab-pane active" id="popular-product">
                                <div class="row">
                   
                                    <!-- ячейки товаров -->

         <?
                $result = mysqli_query($connection,"SELECT * FROM `rabota` ");
                    ?>
                                    <?php 
                            while ($rabota = mysqli_fetch_assoc($result))
                            {  
                            ?>                       
   <div class="col-md-3 col-sm-4 col-xs-12">
      <div class="product-item product-item-2">
			<div class="product-img">  
         <a href="rr-detail.php?id_rabot=<? echo $rabota['id_rabot'];?>">
        <? echo "<img src='" . $rabota['image'] . "' alt='' />";?> </a>
                                            </div>
             <div class="product-info">
    <h3 class="item_title"><?php echo $rabota['name'];?></h3>
    <h6 class="pro-price">Цена: <span class="item_price"><?php echo $rabota['stoimost'];?></span>руб</h6>
                     </div>
                 <ul class="action-button">  
                     <li>
    <button id="wicartbutton_001"  class="add_item" data-id="<? echo $rabota['id_rabot'];?>" data-title="<?php echo $rabota['name'];?>"data-price="<?php echo $rabota['stoimost'];?>" data-img="<? echo $rabota['image'];?>" data-count="100500">Добавить в корзину</button>
                     </li>
                 </ul>
                                
                                </div>
                            </div>
                                    
                            <?
							}
							?>
                        </div>                                        
                    </div>      
                </div>                                      
           </div>
                 </div>
                 </div>
               </section>
</body>
</html>
	<!--подключение футера на сайт-->
	<?php include ('php/footer.php')?>
