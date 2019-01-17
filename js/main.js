$().ready(function(){
   $('.item-heading').on('click', function(){
//       $('.item-menu').slideUp("fast");
       $(this).next().slideToggle('fast');
   });
});