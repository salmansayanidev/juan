  var flags = document.getElementsByClassName('flag_link');
  const mainflg = document.querySelector('.main-flg');
  
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    includedLanguages: 'en,zh-CN',
  }, 'google_translate_element');
  }
  
  Array.prototype.forEach.call(flags, function(e) {
  e.addEventListener('click', function() {
    var lang = e.getAttribute('data-lang');
    var languageSelect = document.querySelector("select.goog-te-combo");
    languageSelect.value = lang;
    var img = e.querySelector('.img-fluid')
    console.log(img.src)
    mainflg.src  = img.src   
    languageSelect.dispatchEvent(new Event("change"));
  });
  });