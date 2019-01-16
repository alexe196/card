<div class="general_form">
  <form class="form-cart" method="POST">
    <div class="blok-form">
      <h2 class="top-name-form"> Form Create new Cart </h2>
       <div class="field">
          <div class="field-text"> Серия карты </div>
          <input type="text" name="series" value="" class="field-text-input" />
       </div>
       <div class="field">
          <div class="field-text"> Номер карты </div>
          <input type="text" name="number" value="" class="field-text-input" />
       </div>
       <div class="field">
          <div class="field-text">Дата выпуска</div>
          <input type="text" name="dateIssue" value="<?=date('Y-m-d')?>" class="field-text-input" />
       </div>
       <div class="field">
          <div class="field-text">Дата окончания активности(2020-07-17)</div>
          <input type="text" name="dateIssuEnd" value="" class="field-text-input" />
       </div>
       <div class="field">
          <div class="field-text">Статус</div>
          <select name="status" class="field-text-input">
             <option value="Y">Активна</option>
             <option value="N">Не Активна</option>
          </select>
       </div>
       <input type="hidden" name="numberShop" value="<?=mt_rand(3, 15);?>" />
       <div class="field">
          <div class="button">
             <input type="hidden" name="action" value="Y" />
             <input type="button" class="create-button" name="create" value="Create" />
          </div>
       </div>
    </div>
  </form>
</div>