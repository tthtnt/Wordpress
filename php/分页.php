<?php
// 方案一
function custom_posts_per_page($query){
if(is_home()){
$query->set('posts_per_page',8);//首页每页显示8篇文章
}
if(is_search()){
$query->set('posts_per_page',-1);//搜索页显示所有匹配的文章，不分页
}
if(is_archive()){
$query->set('posts_per_page',25);//archive每页显示25篇文章
}
}
add_action('pre_get_posts','custom_posts_per_page');
// 方案二
function custom_posts_per_page($query){
    if(is_home()){
    $query->set('posts_per_page',8);//首页每页显示8篇文章
    }
    }
    add_action('pre_get_posts','custom_posts_per_page');
    
    //限制分类页文章每页数量
    function custom_posts_per_page2($query){
    if(is_archive()){
    $query->set('posts_per_page',25);//archive每页显示25篇文章
    }//endif
    }
    add_action('pre_get_posts','custom_posts_per_page2');
// 注：在列表循环 query_posts()中，不要再使用posts_per_page来限制数量，可以使用showposts 来限制。
?>