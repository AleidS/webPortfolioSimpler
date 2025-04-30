language = "Dutch";

const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const urlLang = urlParams.get("lang");

if (urlLang == "en") {
  changeLanguage("English");
}
if (urlLang == "nl") {
  changeLanguage("Dutch");
}
function changeLanguage(languageSelected) {
  language = languageSelected;
  if (language == "Dutch") {
    $(".NL").css("display", "inline");
    $(".EN").css("display", "none");

    // Change URLs in menus to match the language selected
    $('a[href*="lang"]').each(function () {
      oldLink = $(this).attr("href");
      newLink = oldLink.replace("lang=en", "lang=nl");
      $(this).attr("href", newLink);
    });
  } else {
    $(".NL").css("display", "none");
    $(".EN").css("display", "inline");

    // Change URLs in menus to match the language selected
    $('a[href*="lang"]').each(function () {
      oldLink = $(this).attr("href");
      newLink = oldLink.replace("lang=nl", "lang=en");
      $(this).attr("href", newLink);
    });
  }
}
changeLanguage(language);
