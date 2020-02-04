(function($){
    $("#recipe_rating").bind('rated', function(){
        $(this).rateit('readonly', true);

        const form = {
            action: 'r_rate_recipe', // defines what function to executes when receive ajax response
            rid: $(this).data('rid'),
            rating: $(this).rateit('value')
        };

        // console.log(form)

        $.post(recipe_obj.ajax_url, form, function(data){
            
        });
    });
})(jQuery);