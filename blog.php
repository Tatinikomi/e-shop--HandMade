<?php include ('php/header.php')?>
<?php include ('php/menu.php')?>
	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				
			<?php
                $result = mysqli_query($connection,"SELECT * FROM `design` WHERE id=3");
            ?>
					<!--sql-->
													<?php 
                            while ($design = mysqli_fetch_assoc($result))
                            {  
                          ?>
				<div class="item-slick1 item1-slick1" style="background-image: url(<?echo $design['img1']; ?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							
						</span>

						
						</div>
					</div>
				
				</div>
				<?}?>
		

			</div>
		</div>
	</section>
					<!-- START PAGE CONTENT -->
        <section id="page-content" class="page-wrapper">
						</div>
						</div>
            <!-- PRODUCT TAB SECTION START -->
            <div class="product-tab-section section-bg-tb pt-80 pb-55">
                <div class="container" id="stat">			
                  <div class="row">		
                  <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="pro-tab-menu pro-tab-menu-2 text-right">
                                <!-- Nav tabs -->
                  <ul class="" >
				    <div  class="search-product pos-relative  of-hidden">
                   </ul></div></div>
                    </div>
                    <section class="banner  p-t-40 p-b-40">
		<div class="container">
			<div class="row">
                    <?php
                $result = mysqli_query($connection,"SELECT * FROM `posts`");
                    ?>

                    <div class="product-tab">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- popular-product start -->
                            <div class="tab-pane active" id="popular-product">
                                <div class="row">
                                    <!-- product-item start -->
												<!--sql--->
                                     <?php 
                            while ($post = mysqli_fetch_assoc($result))
                            {  
                            ?>
												<!--sql--->

                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item product-item-2">
                                            <div class="product-img">
                                               <a href="blog-detail.php?id_post=<? echo $post['id_post'];?>">
                                                  <? echo "<img src='" . $post['image'] . "' alt='' />";
                                         ?>   
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="blog-detail.php?id_post=<? echo $post['id_post'];?>"><?php echo $post['title'];?></a>
                                                </h6>
                                                <p class="product-titleop"><?=mb_substr($post['post'],0,29,'utf-8').'...';?></p>
                                            </div>
                                           
                                            </ul>
                                        </div>
                                    </div>
                           <?}?> </div>

				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
                            </div>
                                </div>                                        
                            </div>
                        </div>                                        
								</div>
		</section>
                </div>
            </div>
        </section>
	<!--подключение футера на сайт-->
	<?php include ('php/footer.php')?>