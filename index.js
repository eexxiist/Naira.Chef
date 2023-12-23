function showMorty(e){
    console.log(e.target.getAttribute('data-visible'))
    if(e.target.getAttribute('data-visible') === 'false'){
        e.target.setAttribute('data-visible', 'true')

        var randomParam = '?t=' + new Date().getTime();

        e.target.style.backgroundImage = 'url(https://media1.tenor.com/m/-9ObxBks2acAAAAd/%D1%80%D0%B8%D0%BA-%D1%80%D0%B8%D0%BA-%D0%B8-%D0%BC%D0%BE%D1%80%D1%82%D0%B8.gif' + randomParam + ')';
    }else{
        e.target.setAttribute('data-visible', 'false')

        e.target.style.backgroundImage = 'none';
    }
}



// your-script.js
document.addEventListener("DOMContentLoaded", function () {
  const buttonLang = document.querySelector('.change_lang');

  buttonLang.addEventListener('click', changeURLLanguage);

  function changeURLLanguage() {
    const currentLang = buttonLang.getAttribute('data-lang');
    const newLang = currentLang === 'ru' ? 'en' : 'ru';

    // Update the language attribute for the button
    buttonLang.setAttribute('data-lang', newLang);
    // Update text content for each element
    updateLanguage(newLang);
    // Update the text on the button
    buttonLang.textContent = newLang.toUpperCase();
  }

  function updateLanguage(lang) {
    fetch('translations.json')
      .then(response => response.json())
      .then(translations => {
        Object.keys(translations).forEach(key => {
          const element = document.querySelector(`[data-lang-key="${key}"]`);
          if (element) {
            element.textContent = translations[key][lang];
          }
        });
      })
      .catch(error => console.error('Error fetching translations:', error));
  }
});


