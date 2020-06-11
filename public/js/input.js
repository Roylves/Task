//for alternating=case transform input
$('input#alternating_case, textarea').keyup(function () {
    prev = true;

    var value = $(this).val();
    var altText = '';
    for (num = 0; num < value.length; num ++)
    {
        if(num%2==0)
          altText += value[num].toUpperCase();
        else
          altText += value[num].toLowerCase();
    }
  $(this).val(altText);

  $("#alternate_val").html(altText);
});

//for all capital=case transform input
$('input#capital_case, textarea').keyup(function () {
    prev = true;

    var value = $(this).val();
    var altText = '';
    for (num = 0; num < value.length; num ++)
    {
          altText += value[num].toUpperCase();
    }
  $(this).val(altText);

  $("#caps_val").html(altText);
});


//prevent space in input
$('input#alternating_case').on('keypress', function(e) {
            if (e.which == 32){
                console.log('Space Detected');
                return false;
            }
        });
$('input#capital_case').on('keypress', function(e) {
            if (e.which == 32){
                console.log('Space Detected');
                return false;
            }
        });


//display input text

