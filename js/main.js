$().ready(function(){
   $('.item-heading').on('click', function(){
//       $('.item-menu').slideUp("fast");
       $(this).next().slideToggle('fast');
   });
   
   $('.list-group-item').on('click', function() {
      $('.intro').fadeOut('fast');
      $('.item-desc').fadeOut('fast');
      $id = $(this).attr('id');
      $('.item-desc.' + $id).show('fast');
   });
   
});