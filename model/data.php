<?
function coreect_data()
{
   $input['id'] = (int) $_POST['id']; 
   $input['ids'] = (int) $_POST['ids'];
   $input['series'] = htmlspecialchars($_POST['series']);
   $input['number'] = htmlspecialchars($_POST['number']);
   $input['dateIssue'] = htmlspecialchars($_POST['dateIssue']);
   $input['dateIssuEnd'] = htmlspecialchars($_POST['dateIssuEnd']);
   $input['status'] = htmlspecialchars($_POST['status']);
   $input['numberShop'] = (int) $_POST['numberShop'];
   
   return $input;
}
function get_card($number)
{
  $DB = new DB(); 
  if( !empty($number) )  
  {
      $num = mysql_real_escape_string($number);
      $result = $DB->query('SELECT * FROM cart WHERE number = "'.$num.'"');
      
      return $result;
  }
}

function get_card_id($id)
{
  $DB = new DB(); 
  if( !empty($id) )  
  {
      $id = mysql_real_escape_string($id);
      $result = $DB->query('SELECT * FROM cart WHERE id = "'.$id.'"');
      
      return $result;
  }
}

function get_card_search($val)
{
  $DB = new DB(); 
  if( !empty($val) )  
  {
      $val = mysql_real_escape_string($val);
      $result = $DB->query('SELECT * FROM cart WHERE number = "'.$val.'" OR series = "'.$val.'" OR dateIssue = "'.$val.'" OR dateIssuEnd = "'.$val.'"');
      
      return $result;
  }
}

function get_cards()
{
  $DB = new DB(); 
  $num = (int) $number; 
  $result = $DB->query('SELECT * FROM cart ORDER BY id DESC');
  return $result;
}

function add_card()
{
   $DB = new DB(); 
   $input = coreect_data();
   if( !empty($input['series']) && !empty($input['number']) )
   {
      $res = get_card($input['number']);
      if( empty($res) )
      {
        $res = $DB->insert($input, 'cart');
      }
   }
   
   return $res;
}

function update_card()
{
    $DB = new DB(); 
    $input = coreect_data();
    if( !empty($input['id']) )
    {
      $where = 'WHERE id="'.$input['id'].'"';
      unset($input['id']);
      $DB->update($input, 'cart', $where);
    }
}

function delete_card()
{
    $DB = new DB(); 
    $input = coreect_data();
    if( !empty($input['id']) )
    {
      $where = 'WHERE id="'.$input['id'].'"';
      $DB->delete('cart', $where);
    }
}

function tamplate($tamplate, $arr)
{
   $result = $arr;
   include($_SERVER['DOCUMENT_ROOT'].'/tamplete/'.$tamplate.'.php');
}