<?php
    //dump($href);
    if(isset($data))
        dump($data);
    if(isset($rel_posts)){
        dump($rel_posts);
        foreach ($rel_posts as $post) {
            echo $post->title.'<br>';
            echo $post->text.'<br>';
            echo $post->num->hash.'<br>';
        }
    }
?>

