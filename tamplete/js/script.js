$( document ).ready(function() {
    
    $('.create-button').click(function()
    {
        var error = 0;
        $('.field-text-input').each(function(i,elem) 
        {
            if( $(this).val()=='' )
            {
                $(this).addClass('error-field');
                error = 1;
            }
            else
            {
                $(this).removeClass('error-field');
            }
        });
        
        if( error == 0 )
        {
            $('.form-cart').submit();
        }
   });
   
   $('.btn-delete').click(function(){
       var id = $(this).attr('data-delete');
       var url = '/form';
       $.ajax({
          url: url,
          beforeSend: function() { $('#wait').show(); },
          complete: function() { $('#wait').hide(); },
          type: 'POST',
          data: "id="+id+"&action=del",
          success: function(data){
            $('#tr-card-'+id).remove();
          }
        });
   });
   
   $(".list-card-status").change(function()
   {
    if($(this).val() == 0) return false;

     id = $(this).attr('data-update');
     var url = '/form';
       $.ajax({
          url: url,
          beforeSend: function() { $('#wait').show(); },
          complete: function() { $('#wait').hide(); },
          type: 'POST',
          data: "id="+id+"&action=update&status="+$(this).val(),
          success: function(data)
          {
          }
        });

    });
    
    $('.btn2').click(function(){
       var data  = $("#form-search").serialize();
       var url = '/list';
       $.ajax({
          url: url,
          beforeSend: function() { $('#wait').show(); },
          complete: function() { $('#wait').hide(); },
          type: 'POST',
          data:data,
          success: function(data){
            
          }
        });
   });
   
});