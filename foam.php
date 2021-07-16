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

          <!--sql запрос на вывод категорий товаров-->
											<?
                $result = mysqli_query($connection,"SELECT * FROM cat_product");
        	 						?>     
					<!--/sql запрос на вывод категорий товаров--->

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
						<input type="text" size="30" onkeyup="showResult(this.value)" class="s-text7 size6 p-l-23 p-r-50" placeholder="Что искать?...">	
						<button  class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4"></button>
					<div id="livesearch"></div>
					</form>
					
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
					<!-- Product -->
					<!--sql запрос-->
					<?
                $result = mysqli_query($connection,"SELECT * FROM tblproduct WHERE (`cat_produkt`= 'Фоамиран')");
        	 ?>     
					<!--/sql запрос-->

					<div class="product-tab">
                        <div class="tab-content">
                            <div class="tab-pane active" id="popular-product">
                                <div class="row">
														<?php 
                            while ($tovar = mysqli_fetch_assoc($result))
                            {  
                            ?>  
						<div class="col-md-3 col-sm-4 col-xs-12">
      <div class="product-item product-item-2">
         <div class="product-img">  
         <a href="product-detail.php?id=<? echo $tovar['id'];?>">
        <? echo "<img src='" . $tovar['image'] . "' alt='' />";?> </a>
                                            </div>
							<!-- Block2 -->     
                            <div class="product-info">
    <h3 class="item_title"><?php echo $tovar['name'];?></h3>
     <h6 class="brand-name"><?php echo $tovar['na_sklade'];?></h6>
    <h6 class="pro-price">Цена: <span class="item_price"><?php echo $tovar['price'];?></span>руб</h6>
                 
    </div>
                 <ul class="action-button">  
                     <li>
    <button id="wicartbutton_001"  class="add_item" data-id="<? echo $tovar['id'];?>" data-title="<?php echo $tovar['name'];?>"data-price="<?php echo $tovar['price'];?>" data-img="<? echo $tovar['image'];?>" data-count="100500">В корзину</button>
                     </li>
                 </ul>
                                
                                </div>
                            </div>
                                    
                            	<?
																}
															?>
								<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
                        </div>                                        
                    </div>      
                </div>                                      
           </div>
                 </div>
                 </div>
               </section>
									

				
				</div>
			</div>
		</div>
	</section>
	<!--подключение футера на сайт-->
	<?php include ('php/footer.php')?>
