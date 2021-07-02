jQuery(document).ready(function($) {
  $("#product_category").keyup(function(){

  	 jQuery.get(

      	ReAjax.ajaxurl,
      	{
          	action : 'myajax-advanced',
          	postID : ReAjax.postID,
          	product_category   : jQuery( "#product_category" ).val(),


     		},
      	function( response ) {
      	  var list = '';
  			  $("#categorysuggest").show();
      	  $.each(response.suggest, function (index, help) {

      	  	list +='<option class="suggest" onclick="product_category(this.value)" value="'+help.product_category+'"  >'+help.product_category+'</option>';

      	  });
  			jQuery('#categorysuggest').html(list);
      	}
  	);

});


$("#product_name").keyup(function(){

   jQuery.get(

      ReAjax.ajaxurl,
      {
          action : 'myajax-advanced',
          postID : ReAjax.postID,
          product_name   : jQuery( "#product_name" ).val(),


      },
      function( response ) {
        var list = '';
        $("#productsuggest").show();
        $.each(response.suggest, function (index, help) {

          list +='<option class="suggest" onclick="product_name(this.value)" value="'+help.product_name+'"  >'+help.product_name+'</option>';

        });
      jQuery('#productsuggest').html(list);
      }
  );

});

});
