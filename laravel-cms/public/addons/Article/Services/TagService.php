<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/7/21
 * Time: 21:30
 */

namespace Modules\Article\Services;

use Blade;
use Modules\Article\Entities\Content;

class TagService
{
    public function make()
    {
        $this->slide();
        $this->category();
        $this->lists();
    }
    //文章
    public function lists(){
       Blade::directive('list',function($expression){

           $expression = $expression ?: '[]';
           $php=<<<php
<?php
    \$params = $expression;
    \$db = \Modules\Article\Entities\Content::where('id','>',0);
    if(isset(\$params['cid'])){
        \$db->whereIn('category_id',\$params['cid']);
    }
    if(isset(\$params['istop'])){
        \$db->where('istop',1);
    }
    if(isset(\$params['ishot'])){
        \$db->orderBy('click','desc');
    }
    if(isset(\$params['limit'])){
        \$db->limit(\$params['limit']);
    }
    foreach(\$db->get() as \$field):
    \$field['url'] = '/article/content/'.\$field['id'].'.html';
?>
php;
return $php;
       });
        Blade::directive('endList',function(){
            return "<?php endforeach;?>";
        });
    }
    //栏目
    public function category()
    {
        Blade::directive('category', function ($expression) {
            $expression = $expression ?: '[]';
            $php = <<<php
<?php
\$params = $expression;
\$data = \Modules\Article\Entities\Category::get()->toArray();
\$data = \houdunwang\arr\Arr::channelList(\$data, 0,"&nbsp;", 'id');
foreach(\$data as \$field):
\$field['url'] = '/article/lists/'.\$field['id'].'.html';
?>
php;
return $php;
        });
        Blade::directive('endCategory', function ($expression) {
        return "<?php endforeach;?>";
        });
    }

    //幻灯片
    public function slide()
    {
        Blade::directive('slide', function ($expression) {
            $expression = $expression ?: '["height"=>"300px"]';
            $php = <<<php
 <div class="swiper-container">
    <div class="swiper-wrapper">
<?php
    \$params = $expression;
    \$data = \Modules\Article\Entities\Slide::where('enable',1)->get();
    foreach(\$data as \$field):
        echo '<div class="swiper-slide">
        <a href="'.\$field['url'].'"><img src="'.\$field['pic'].'"/></a>
</div>';
    endforeach;
?>
 </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination"></div>
                    <!-- 如果需要导航按钮 -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
<style>
                    .swiper-container {
                        width: 100%;
                        height:<?php echo \$params['height'];?>px;
                    }
                    .swiper-container img{
                      width:100%;
                      height:<?php echo \$params['height'];?>px;
                    }
                </style>
                <script>
                    var mySwiper = new Swiper ('.swiper-container', {
                        loop: true,
                        autoplay:true,
                        // 如果需要分页器
                        pagination: {
                            el: '.swiper-pagination',
                        },
                        // 如果需要前进后退按钮
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        // 如果需要滚动条
                        scrollbar: {
                            el: '.swiper-scrollbar',
                        },
                    })
                </script>
php;
            return $php;
        });
    }
}