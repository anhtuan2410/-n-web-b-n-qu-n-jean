<div class="blog-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h2>Bài viết mới</h2>
        </div>
      </div>
    </div>
    <div class="row">
    {foreach $bai_viets as $bv}
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-blog">
          <div class="blog-photo"> <a href="post_blog.php?ma_bai_viet={$bv->ma_bai_viet}"><img src="{$bv->hinh}" alt="" /></a>
            <div class="blog-post-date"> <span>15th</span> <span>Jan</span> </div>
          </div>
          <div class="blog-brief">
            <p>{$bv->noi_dung_tom_tat}</p>
            <a class="shop-now-1" href="post_blog.php?ma_bai_viet={$bv->ma_bai_viet}">Xem thêm</a> </div>
        </div>
      </div>   
    {/foreach}  
    </div>
  </div>
</div>
