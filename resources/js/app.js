require('./bootstrap');

// get parameters from edit distance form
const getParameters = () => {
    const text_a = $('#text-a').val();
    const text_b = $('#text-b').val();
    const token = $('input[name=_token]').val();
    const data = { strOne: text_a, strTwo: text_b, _token: token };

    return data;
}

// show result inside edit distance form
const showResult = (msg) => {
    $('.result-selector').removeClass('d-none');
    $('#result').empty();
    $('#result').append(msg); 
}

// hamming distance algo
$(document).on('click', '#calc_hamming', () => {
    // get Params
    const data = getParameters();

    // check lenght isn't equal
    if(data.strOne.length != data.strTwo.length || data.strOne == '' || data.strTwo == ''){
        showResult('Hamming distance: The entered strings do not match in length.');
        return;
    }

    // get hamming distance API
    $.ajax({
        type: "POST",
        url: '/getHammingDistance', 
        data: data,
    }).done(function( msg ) {
        showResult('Hamming distance: ' + msg + ' operations.');  
    }).fail(function(errorThrown) {
        showResult(errorThrown.responseJSON.errors.strOne[0]);
    })
});

// levenshtein distance algo
$(document).on('click', '#calc_levenshtein', () => {
    // get Params
    const data = getParameters();
    
    // get levenshtein distance API
    $.ajax({
        type: "POST",
        url: '/getLevenshteinDistance', 
        data: data
    }).done(function( msg ) {
        showResult('Levenshtein distance: ' + msg + ' operations.'); 
    }).fail(function(errorThrown) {
        showResult(errorThrown.responseJSON.errors.message);
    })
});