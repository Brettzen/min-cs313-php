$().ready(function(){
   $('.item-heading').on('click', function(){
       $(this).next().slideToggle('fast');
   });
   
   $('.list-group-item').on('click', function() {
      $('.intro').fadeOut('fast').delay(100);
      $('.item-desc').fadeOut('fast').delay(100);
      $id = $(this).attr('id');
      $('.item-desc.' + $id).show('fast');
   });
   
   $('.flip-btn').on('click', function(){
        $card = $(this).closest($('.card-body'));
        $card.toggleClass('flip-card'); 
        if($card.children('.card-front').is(':visible')) {           
            $card.children('.card-front').css('display', 'none');
            $card.children('.card-back').css('display', 'block');
        } else if($card.children('.card-back').is(':visible')) {
            $card.children('.card-back').css('display', 'none');
            $card.children('.card-front').css('display', 'block'); 
        }
   });
});