<?php 

namespace App\controllers\front;
use App\models\Article;


class ArticleController{
    
    private  $article; 

    public function __construct(){
        $this->article = new Article();
    }
    
    public function show(){
    //  echo "hello article";
       $array =  $this->article->fechAllArticle();
        print_r($array);     
    }

}


