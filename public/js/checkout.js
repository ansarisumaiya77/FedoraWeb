//var stripe = Stripe('pk_test_xIcDyO9KIXAKo274g1jpkqQB00VaZpgOGv');
Stripe.setPublishableKey('pk_test_xIcDyO9KIXAKo274g1jpkqQB00VaZpgOGv');

var $form = $('#checkout-form');

$form.submit(function(event){
    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
    Stripe.card.createToken({
        number: $('#cardnumber').val(),
        cvc: $('#cvc').val(),
        exp_month: $('#month').val(),
        exp_year: $('#year').val(),
        name: $('#holdername').val()
    }, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response){
    if(response.error){
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
        console.log('error');
    }
    else{
        var token = response.id;
        //console.log(token);
        $form.append($('<input type="hidden" name="stripeToken" value="'+token+'"/>'));

        $form.get(0).submit();
    }
}