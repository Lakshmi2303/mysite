<header id="header" class="header">
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">

        <div class="row" style="padding:10px;">
		<div class="header-table ">
			<div class="table">
				<div class="row">
					<div class="cell" style="width:100%"><img src="images/header.jpg" alt="logo"></div>
				</div>
			</div>
		</div>
		
        </div>
        
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
        <div class="container">
          <nav id="menuzord" class="menuzord default bg-light">
            <ul class="menuzord-menu">
<?php
	$query_header2="SELECT t.articleId,t.articleLink,t.articleTitle,t.articleAlias,t.articleCategory,t1.* FROM akar_tbl_articles t,akar_tbl_menu t1 WHERE t.articleCategory = t1.menuId AND t1.menuPosition = 1 AND t1.menuStatus = 1 ORDER BY menuOrder";
	$res_header2=$DB->doSQL($query_header2);
	while($row_header2=mysql_fetch_object($res_header2)){ 
		  	
			if($row_header2->articleLink !=''){
				$hlink2 = $row_header2->articleLink;
			}else{
				$hlink2 = $row_header2->articleAlias;
			}
?>
             <li><a href="<?=$hlink2?>"><?=$row_header2->menuName?></a></li>
<?php } ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>