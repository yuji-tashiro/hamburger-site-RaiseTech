jQuery(function($) { 
   $(function() {
      $(".c-button--global-menu").click(function() {
         $(".p-aside, body").addClass("is-open");
      })
      $(".c-button--cross").click(function() {
         $(".p-aside, body").removeClass("is-open")
      })
   });
});