<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $count=count($categorias);
    if($count>0){
      print '<h1>';
      if($count>1){
        print 'Categorias';
      }else{
        print 'Categoria';
      }
      print '</h1>';
      print '<ul>';
      foreach($categorias as $categoria){
        $href='/categorias/'.slug($categoria);
        $link='<a href="'.$href.'">'.$categoria.'</a>';
        print '<li>'.$link.'</li>';
      }
      print '</ul>';
    }else{
      print 'Nenhum categorias encontrada';
    }
    ?>
  </body>
</html>
