language = 'Dutch'

function changeLanguage(languageSelected) {
    language = languageSelected;
    if (language == 'Dutch') {
        $('.NL').css('display', 'inline')
    }
    else {
        $('.NL').css('display', 'none')
    }
    if (language == 'English') {
        $('.EN').css('display', 'inline')
    }
    else {
        $('.EN').css('display', 'none')
    }
}
changeLanguage(language);