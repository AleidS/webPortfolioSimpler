language = 'Dutch'

function changeLanguage(languageSelected) {
    language = languageSelected;
    if (language == 'Dutch') {
        $('.NL').css('display', 'block')
    }
    else {
        $('.NL').css('display', 'none')
    }
    if (language == 'English') {
        $('.EN').css('display', 'block')
    }
    else {
        $('.EN').css('display', 'none')
    }
}
changeLanguage(language);