<!-- <div class="right-content col-xs-4">
  <div class="search-box col-xs-12">
    <input type="text" name="search-box" placeholder="Tìm kiếm">
    <i class="icon-search glyphicon glyphicon-search"></i>
  </div>
  <div class="block-wrapper notification-block col-xs-12">
    <div class="title-block-wrapper col-xs-12">
      <div class="title-block">Thông báo</div>
    </div>

    <div class="news-item col-xs-12">
      <div class="img-block-right col-xs-7">
        <img src="" alt="">
      </div>
      <div class="title-news col-xs-12">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit
      </div>
    </div>
    <div class="social-share-wrapper col-xs-12">
      <div class="title-block col-xs-12">Follow us</div>
      <div class="list-social-btn col-xs-12">
        <div class="social-btn-item"><a href="#"></a></div>
        <div class="social-btn-item"><a href="#"></a></div>
        <div class="social-btn-item"><a href="#"></a></div>
        <div class="social-btn-item"><a href="#"></a></div>
      </div>

    </div>
  </div>
  <div class="block-wrapper key-search-block col-xs-12">
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
  </div>
</div> -->

<?php 
if ( is_active_sidebar('main-sidebar') ) {
  dynamic_sidebar( 'main-sidebar' );
} else {
  _e('This is widget area. Go to Appearance -> Widgets to add some widgets.', 'thachpham');
}
 ?>
