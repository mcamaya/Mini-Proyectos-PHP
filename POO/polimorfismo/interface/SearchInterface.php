<?php

interface SearchInterface {
  public function all();
}

class User implements SearchInterface {
  public function all(){
    return "Obteniendo usuarios ... XML";
  }
}

class Post implements SearchInterface {
  public function all(){
    return "Obteniendo POST ... JSON";
  }
}

$user = new User();
echo $user->all();

echo "<br>";

$post = new Post();
echo $post->all();