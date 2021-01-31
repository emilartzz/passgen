var passVis = $('#passVis');
var copyPass = $('#copyPass');
var eye = $('#passVisEye');
var password = $('#outPass');

var selectedOption = $('#length_selector');

var btnGen = $('#btnGenerator');

var specialChars = $('#specialChars');
var lowerChars = $('#lowerChars');
var upperChars = $('#upperChars');

var isTouchDevice = 'ontouchstart' in document.documentElement;
if ( isTouchDevice ) {
    password.prop('type','text');
}

// SHOW/HIDE PASS

passVis.click(function() {
    eye.removeClass('fas fa-eye-slash').addClass( "fas fa-eye" );
    password.prop('type','text');
  });

passVis.mouseup(function() {
    eye.removeClass('fas fa-eye').addClass( "fas fa-eye-slash" );
    password.prop('type','password');
  });

passVis.mouseleave(function() {
    eye.removeClass('fas fa-eye').addClass( "fas fa-eye-slash" );
    password.prop('type','password');
  });

// GENERATE BUTTON FUNCTION
  // SPECIAL CHARS - LOWER CHARS - UPPER CHARS 

btnGen.click(function (){

        // ✓ ✓ ✓
        if (specialChars.prop("checked") == true && lowerChars.prop("checked") == true && upperChars.prop("checked") == true) {
            charset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ#$@^<>,.:;~`/'!?}{&[|]";
        }
        // X X X
        else if (specialChars.prop("checked") == false && lowerChars.prop("checked") == false && upperChars.prop("checked") == false) {
            alert("Select atleast one option");
        }
        // X ✓ ✓
        else if (specialChars.prop("checked") == false && lowerChars.prop("checked") == true && upperChars.prop("checked") == true) {
            charset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        }
        // X X ✓
        else if (specialChars.prop("checked") == false && lowerChars.prop("checked") == false && upperChars.prop("checked") == true) {
            charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        }
        // ✓ ✓ X
        else if (specialChars.prop("checked") == true && lowerChars.prop("checked") == true && upperChars.prop("checked") == false) {
            charset = "0123456789abcdefghijklmnopqrstuvwxyz#$@^<>,.:;~`/'!?}{&[|]";
        }
        // ✓ X X
        else if (specialChars.prop("checked") == true && lowerChars.prop("checked") == false && upperChars.prop("checked") == false) {
            charset = "0123456789#$@^<>,.:;~`/'!?}{&[|]";
        }
        // X ✓ X
        else if (specialChars.prop("checked") == false && lowerChars.prop("checked") == true && upperChars.prop("checked") == false) {
            charset = "0123456789abcdefghijklmnopqrstuvwxyz";
        }

        if (selectedOption.val() == '0'){
            var length = $('#customLength').val()
        }
        else{
            var length = selectedOption.val()
        }

        var retVal = "";
        for (var i = 0, n = charset.length; i < length; ++i) {
            retVal += charset.charAt(Math.floor(Math.random() * n));
        }

    password.val(retVal);
    console.warn(retVal);
});

// COPY BUTTON

$('#copyPass').click(function() {
    password.prop('type','text');
    $('#outPass').select();
    document.execCommand("copy");
    
    password.prop('type','password');
  });


  // ON SELECTOR CHANGE LENGTH
$('#length_selector').on('change', function() {
    if (selectedOption.val() == '0'){
        $('#customLength').css('display', 'inline-block');
    }
    else{
        $('#customLength').css('display', 'none');
    }
  });

  // CLICK TO GO HOME

  $('#h1').click(function (){

    window.location.href = "./index.php";

  });