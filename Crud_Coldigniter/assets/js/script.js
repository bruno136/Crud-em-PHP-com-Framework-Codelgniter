/*$(document).ready(function() {
  $("#f_pre_cadastro").submit(function(e) {       

    var form_data = $(this).serialize();  
      var aux = "string";// Pega os dados do FORM
    //var form_url = $(this).attr("action");                  // Pega o ACTION
    var form_method = $(this).attr("method").toUpperCase(); // POST ou GET

    $.ajax({
            url: "<?php echo base_url('cliente/criar'); ?>", 
            type: form_method,      
            data: form_data,
            dataType: 'json',  
            cache: false,                                   // força as páginas solicitadas a não serem armazenada em cache         
            success:  function(returnhtml){   
                if(returnhtml.status == 'ok'){
                    $("form").css({"display": "none"});
                    $('h2').html('Parabéns!'); 
                    $('p').html(returnhtml.message);   
                }else if (returnhtml.status == 'fail'){
                    window.alert(returnhtml.message);
                }   
            }

    }); 

    //e.preventDefault();   
    //e.stopPropagation();
    return false;

  });
})*/