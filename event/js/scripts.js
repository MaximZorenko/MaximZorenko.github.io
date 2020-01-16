$(function(){
    
    //=для переключуния плюса на минус в TAB
    $('.collapse').on('show.bs.collapse', function(){
       $(this).prev().find('.fas').removeClass().addClass('fas fa-minus-circle collaps-stt'); 
    });
    $('.collapse').on('hidden.bs.collapse', function(){
       $(this).prev().find('.fas').removeClass().addClass('fas fa-plus-circle collaps-stt'); 
    }); //=для переключуния плюса на минус в TAB
   
    
    $('.carousel').carousel({
  interval: false
    })
    
    //для валидатора
    $('#myForm').validator({
        feedback: {
          success: 'fas fa-check-circle',
          error: 'fas fa-times-circle'
        }
    });
    
    
    //для селекта
    $('.form-sel').select2({
        minimumResultsForSearch: Infinity
    });
    
});