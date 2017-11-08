
<?php 
	$blog22=mysqli_QUERY($connection,'SELECT * from `blok` where l_id="'.$lng.'" and  u_id="'.$$ll.'" and status=0 limit 1');
	$blog=MYSQLI_FETCH_ARRAY($blog22);
		
		?>
		
	<div class="items-row cols-1 row-1">
    <div class="item column-1" itemprop="blogPost">
		<article class="dd-post">
			<div class="dd-postmetadataheader">
				<h2 class="dd-postheader">
					<a href=""><?PHP echo $blog['name']; ?></a>
				</h2>
			</div>
			<div class="dd-postheadericons dd-metadata-icons">
				<span class="dd-postdateicon">
					<time datetime="2015-03-24T07:12:38+00:00" itemprop="datePublished">Tarix: <?PHP echo $blog['date']; ?></time>
				</span>  
			</div>
			<div class="dd-postcontent clearfix">
				<div class="dd-article">
					<p>
						<img src="<?PHP echo $blog['photo']; ?>" alt="loader wagons 601443 640" width="300" height="200" style="margin-right: 5px; margin-top: 3px; float: left;" />
						<?PHP echo $blog['text']; ?>
					</p>
				</div>
			</div>
			<div class="dd-postmetadatafooter">
				
			</div>
		</article>    
	</div>
</div>	

		