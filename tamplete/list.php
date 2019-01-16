<div id="header-fix">
    <header id="header" class="">
        <div class="main-grid clearfix">
            <div class="mg-l">
                <a href="/" title="z1.fm - музыка" data-pjax="true" class="logo">
                    <img src="/tamplete/img/logo@2x.png" alt="">
                </a>
            </div>
            <div class="mg-r">
            </div>
            <div class="mg-c">
                <form id="form-search" method="POST" action="">
                    <div class="search"><div class="search_borders">
                            <div class="inp-wrap">
                                <input value="" id="topkeywords" placeholder="series or number or date" name="number" class="text" type="text">
                                <span class="clear"></span>
                            </div>
                            <input type="hidden" name="action" value="search" />
                            <input type="submit" class="btn2" name="yt1" value="Найти" id="yt1">                                    </div>
                    </div>
                </form>
                <div id="search_advice_wrapper" style="display:none;"></div>
            </div>
            <div id="top_error_notify" style="display: block;">
                 <a href="form"> Добавить карту + </a>
            </div>
        </div>
    </header>
</div>
<div class="list_card">
<table class="sort">
<thead>
 <tr>
     <td>№</td>
     <td>Series</td>
     <td>Number</td>
     <td>Date Begin</td>
     <td>Date End</td>
     <td>Status</td>
     <td>NumberShop</td>
     <td>Action</td>
 </tr>
</thead>
<tbody>
<?php
if(!empty($result)){
 $i=0;   
 foreach($result as $row){
    $i++; $style='';
    if($i % 2)
    {
      $style='-hext';
    }
 
 ?>
  <tr id="tr-card-<?=$row['id']?>" class="white<?=$style?>">
      <td><?=$i?></td>
      <td><a class="red-href" href="//<?=$_SERVER['HTTP_HOST']?>/card/<?=$row['id']?>"><?=$row['series']?></a></td>
      <td><?=$row['number']?></td>
      <td><?=$row['dateIssue']?></td>
      <td><?=$row['dateIssuEnd']?></td>
      <td>
         <select data-update="<?=$row['id']?>" class="list-card-status">
            <?
               if( $row['status'] == 'Y' )
               {
                  echo'<option value="Y">Активна<option>';
                  echo'<option value="N">Не активна<option>';
                  echo'<option value="Z">Просрочена<option>';
               }
               else if( $row['status'] == 'N' )
               {
                  echo'<option value="N">Не активна<option>';
                  echo'<option value="Y">Активна<option>';
                  echo'<option value="Z">Просрочена<option>';
               }
               else
               {
                  echo'<option value="Z">Просрочена<option>';
                  echo'<option value="Y">Активна<option>';
                  echo'<option value="N">Не активна<option>';
               }
            ?>
         </select>
      </td>
      <td><?=$row['numberShop']?></td> 
      <td><input type="button" class="btn-delete" data-delete="<?=$row['id']?>" name="delete" value="Удалить" /></td>
  </tr>
 <?
 }}
 ?>
 </tbody>
 </table>
</div>