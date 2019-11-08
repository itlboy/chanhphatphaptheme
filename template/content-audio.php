<?php 
$args = array
    (
        'post_type' => 'attachment',
        'post_mime_type' => 'audio',
        'numberposts' => 4
    );
$audiofiles = get_posts($args);


 ?>
<li class="widget widget-audio col-xs-12" >
	<div class="title-block-wrapper col-xs-12">
		<div class="title-block">Audio</div>
	</div>
	<div class="audio-bar col-xs-12">
		<audio controls id="audio-bar">	
			<source src="<?php echo $audiofiles[0]->guid; ?>" type="audio/mpeg">
			</audio>
		</div>
		<?php foreach ($audiofiles as $key => $file) {?>
			
			<div class="news-item <?php if($key == 0){ ?>active <?php } ?>  col-xs-12" data-id="<?php echo $file->ID; ?>">
				<div class="icon-volume">
					<i class="glyphicon glyphicon-volume-up"></i>
				</div>
				<div class="content-news">
					<a href="#" data-id="<?php echo $file->ID; ?>" data-src="<?php echo $file->guid; ?>"><?php echo $file->post_title; ?></a>
				</div>
			</div>
		<?php } ?>
		
		
	
	<!-- <div class="block-wrapper key-search-block col-xs-12">
		<div class="title-block-wrapper col-xs-12">
			<div class="title-block">Từ khóa tìm kiếm</div>
		</div>
		<div class="key-search-content">
			Quis <span class="key-search">autem</span> vel eum iure reprehenderit, qui <span class="key-search">in ea</span>in ea voluptate velit <span class="key-search">essein ea</span> , quam nihil <span class="key-search">molestiae</span> consequatur
		</div>
	</div>
	<div class="block-wrapper statitics-block col-xs-12">
		<div class="statitic-box col-xs-12">
			<table>
				<tr>
					<th colspan="2">Thống kê</th>
				</tr>
				<tr>
					<td class="keyt-row">Đang truy cập</td>
					<td class="index-row">6</td>
				</tr>
				<tr>
					<td class="keyt-row">Máy chủ tìm kiếm</td>
					<td class="index-row">1</td>
				</tr>
				<tr>
					<td class="keyt-row">Khách viếng thăm</td>
					<td class="index-row">7</td>
				</tr>
				<tr>
					<td class="keyt-row">Hôm nay</td>
					<td class="index-row">715</td>
				</tr>
				<tr>
					<td class="keyt-row">Tháng hiện tại</td>
					<td class="index-row"><?php echo number_format(12105) ;?></td>
				</tr>
				<tr>
					<td class="keyt-row">Tổng lượt truy cập</td>
					<td class="index-row"><?php echo number_format(1002645) ;?></td>
				</tr>
			</table>

		</div>
	</div> -->
</li>