<?php
 
  $link =  explode("/", $_SERVER['REQUEST_URI']);
  
  if( empty($link[1]) )
  {
    $link[1] = 'list';
  }
  
  if($link[1] == 'form')
  {
     if( empty($_POST) )
     {
        tamplate('form', $arr);
     }
     
     if( $_POST['action'] == 'Y' )
     {
        $res = add_card();
        if( !empty($res) )
        {
            echo'<meta http-equiv="refresh" content="0; url=/list" />';
        }
     }
     if( $_POST['action'] == 'del' )
     {
        delete_card();
     }
     if( $_POST['action'] == 'update' )
     {
        update_card();
     }
  }
  
  if($link[1] == 'list' && !isset($_POST['action']))
  {
      $arr = get_cards();
      tamplate('list', $arr);
  }
  
  if( $_POST['action'] == 'search' )
  {
     $val = trim($_POST['number']);
     if(!empty($val)) 
     {
        $arr = get_card_search($val);
     }
     tamplate('list', $arr);
  }
  
  if($link[1] == 'card')
  {
      $id = (int) $link[2]; 
      if( !empty($id) )
      {
         $arr = get_card_id($id);
         if(!empty($arr))
         {
            tamplate('list', $arr);
         }
      }
  }
  
