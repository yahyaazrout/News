<?php
//yahya
$url="https://newsapi.org/v2/everything?q=bitcoin&from=2021-12-01&sortBy=publishedAt&apiKey=0048d2a5e785498798937f56e12e1be1";
//zahmidi
$zahmidi="https://newsapi.org/v2/everything?q=tesla&from=2021-12-02&sortBy=publishedAt&apiKey=3af4ed18f9f549e8a70ce947c0c20237";
//dev
$dev="https://newsapi.org/v2/everything?q=apple&from=2022-01-01&to=2022-01-01&sortBy=popularity&apiKey=80724a6eb650482c9c0bd4cd3979394d";
//dev1
$dev1="https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=70e5f62c3fcf4c5d9072c194adc08333";

if(@file_get_contents($url)){
  $rep = file_get_contents($url);
  $newsdata = json_decode($rep);

}elseif (@file_get_contents($zahmidi)) {
  $rep = file_get_contents($zahmidi);
  $newsdata = json_decode($rep);

}elseif (@file_get_contents($dev)) {
  $rep = file_get_contents($dev);
  $newsdata = json_decode($rep);

}elseif (@file_get_contents($dev1)) {
  $rep = file_get_contents($dev1);
  $newsdata = json_decode($rep);
}


/*******************/
$html ="";
    foreach ($newsdata->articles as $news){
        if(!empty($news->urlToImage)){
            $html .='<div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-blog">
                    <div class="single-blog-img">
                    <a target="_blank" href="'. $news->url.'">
                    <img  class = "class-image" src="'. $news->urlToImage . '" alt="" width="100%" height ="350px"></a></div>
                    <div class="blog-meta">
                    <span class="date-type"> <i class="fa fa-calendar"></i>'. $news->publishedAt .'</span> </div>
                    <div class="blog-text">
                    <h4 class ="max-content" >
                    <a target="_blank" href="'. $news->url .'" title = "'. $news->title .'">'. $news->title .'</a> </h4>
                    <p class ="max-content-p"> $news->description  </p> </div> <span>';
            $html .='<a target="_blank" href="'. $news->url .'" class="ready-btn">Read more</a></span></div></div> ';
        }
    }
/*******************/


echo $html;
?>