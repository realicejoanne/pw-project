<?php if($article): foreach($article as $info): ?>
<div class="container">

<!-- article -->
	<div class="det detail">
		<div id="det article">
			<h5 style="color:#a8a8a8"><?php echo $info->topic?></h6><br>
			<h1><?php echo $info->title?></h1><br>
			<h6>by <?php echo $info->id_user?>&emsp;&emsp;6 days ago</h6><br>
			<img src="<?php echo base_url()?>images/article_photo/<?php echo $info->picture?>">
			<img src="images/share.png" width="50px"><br><br>
			<p align="justify"><?php echo $info->content?></p>
			<br>
			<div class="det author">
				<table>
					<tr>
						<td>PUBLISHED BY<br><br>
							<h2><?php echo $info->id_user?></h2><br>
						</td>
						<td><img src="images/profile.jpg" style="border-radius:50%;width:100px;"></td>
					</tr>
				</table>
			</div>
		
		
		<!-- comment -->
			<br><br><h2>Comments (794)</h2><br>
			<div class="det author"></div><br>
			<div class="det author"></div><br>
			<div class="det author"></div><br>
			<div class="det comment">LOAD MORE COMMENTS</div><br>
		</div>
		
		<!-- trend: fixed -->
		<!--
<div id="det fixedtrend">
			<div style="text-align:center;margin:20px"><h3>TRENDING</h3></div>
			<img src="images/2.jpg" width="30%">
			<h3>Lorem ipsum dolor sit amet, consetectur adsipicing elit</h3><br>
			<img src="images/2.jpg" width="30%">
			<h3>Lorem ipsum dolor sit amet, consetectur adsipicing elit</h3><br>
			<img src="images/2.jpg" width="30%">
			<h3>Lorem ipsum dolor sit amet, consetectur adsipicing elit</h3><br>
			<img src="images/2.jpg" width="30%">
			<h3>Lorem ipsum dolor sit amet, consetectur adsipicing elit</h3><br>
			<img src="images/2.jpg" width="30%">
			<h3>Lorem ipsum dolor sit amet, consetectur adsipicing elit</h3><br>
		</div>
-->
	</div>

</div>
 <?php endforeach; endif;?>