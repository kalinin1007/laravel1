<?php
    //dump($href);
    if(isset($data))
        dump($data);
    if(isset($rel_posts)){
        dump($rel_posts);
        foreach ($rel_posts as $post) {
            dump($post->num->hash);
            dump($post->tags);
        }
    }
?>

