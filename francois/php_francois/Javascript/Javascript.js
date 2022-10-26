/*DARK MODE*/

function darkMode() {
  document.documentElement.style.setProperty('--ecriture', 'whitesmoke');
  document.documentElement.style.setProperty('--background', '#212121')  ;
  document.documentElement.style.setProperty('--fond', 'url(../image/imagefond.jpg)');
  document.documentElement.style.setProperty('--ecrituregrise', '#E6E6E6')
  var element = document.body;
  element.className = "dark-mode";
  
}

function lightMode() {
  document.documentElement.style.setProperty('--ecriture', 'black');
  document.documentElement.style.setProperty('--background', 'whitesmoke');
  document.documentElement.style.setProperty('--fond', 'url(../image/imagetexturecubique-modified.jpg)');
  document.documentElement.style.setProperty('--ecrituregrise', '#2E2E2E')
  var element = document.body;
  element.className = "light-mode";
}
/*FIN*/

/*THEME JOUR / NUIT*/ 

function themejour(){
  const date= new Date();
  const hour = date.getHours();

  if(hour > 5 || hour < 20)
  {
      lightMode();

  }
  else
  {
      darkMode();

  }
}
themejour();

/*FONCTIONNEMENT DU BOUTON DARKMODE*/

function darkOrlight(){
  var cb = document.querySelector('#darkorlight')

  if(cb.checked == false)
  {
      lightMode();
  }
  else
  {
      darkMode();
  }
}

darkOrlight();
