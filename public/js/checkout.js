Stripe.setPublishableKey('pk_test_RkQwhEMxZC7vytRRemRfKGM000mpRan19K');


var $form = $('#checkout-form');

$form.submit(function(event){
    $('charge-error').addClass('hidden');
    $form.find('button').prop('disabled',true);

    Stripe.card.createToken({
            number: $('#card-number').val(),
            cvc: $('#card-cvc').val(),
            exp_month: $('#card-expiry-month').val(),
            exp_year: $('#card-expiry-year').val(),
            name: $('#card-name').val()
        },stripeResponsehandler);
    
   
    return false;
});

function stripeResponsehandler(status,response){
    alert('Response: '+response);
    if(response.error){
        
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled',false);
    }else{
       
        var token = response.id;
       
        $form.append($('<input type="hidden" id="stripeToken" name="stripeToken"/>').val(token));
        alert($('#stripeToken').val());
        $form.get(0).submit();
    }
}



