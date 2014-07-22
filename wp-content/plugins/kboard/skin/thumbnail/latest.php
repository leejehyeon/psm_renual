<!--<div id="kboard-thumbnail-latest">
	<table>
		<thead>
			<tr>
				<th class="kboard-latest-title"><?php echo __('Title', 'kboard')?></th>
				<th class="kboard-latest-date"><?php echo __('Date', 'kboard')?></th>
			</tr>
		</thead>
		<tbody>
			<?php while($content = $list->hasNext()):?>
			<tr>
				<td class="kboard-latest-title"><div class="cut_strings"><a href="<?php echo $url->set('uid', $content->uid)->set('mod', 'document')->toStringWithPath($board_url)?>"><?php echo $content->title?></a></div></td>
				<td class="kboard-latest-date"><?php echo date("Y.m.d", strtotime($content->date))?></td>
			</tr>
			<?php endwhile?>
		</tbody>
	</table>
</div>-->



<div id="kboard-thumbnail-latest">
	<?php while($content = $list->hasNext()):?>
		<span class="kboard-list-thumbnail" style="float:left;">
			<ul style="list-style:none;">
				<li>
					<a href="<?php echo $url->set('uid', $content->uid)->set('mod', 'document')->toString()?>&page_id=1683">	
					<?php if($content->thumbnail_file):?><img src="<?php echo get_site_url() . $content->thumbnail_file?>" style="width:100px;height:100px;" alt=""><?php else:?><?php endif?>			
					</a>
				</li>
				<li style="list-style:none;">
					<p style="font-size:10px; text-align:center" >
						<?php 
						echo $content->title;
						?>
					</p>
				</li>
			</ul>
		</span>
	<?php endwhile?>
</div>