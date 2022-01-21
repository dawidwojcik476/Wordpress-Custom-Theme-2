const menuBtn = document.querySelector('.header__ham');
const firstMenu = document.querySelector('.header__firstmenu');


  
  let menuOpen = false;
  
  const menu = () => {
      if (!menuOpen) {
          menuBtn.classList.add('open');
          firstMenu.classList.add('open');
        
          menuOpen = true;
      } else {
          menuBtn.classList.remove('open');
          firstMenu.classList.remove('open');
     
          menuOpen = false;
      }
  }
   
  menuBtn.addEventListener('click', menu);


  var getUrl = window.location;
  var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];


window.onscroll = function() {myFunction()};

const header = document.querySelector(".header");
const appWrapper = document.querySelector('.app-container')

// Get the offset position of the navbar
const sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    appWrapper.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
    appWrapper.classList.remove("sticky");
  }
}

const searchIcon = document.querySelector('.header__search-icon'); 

const searchForm = document.querySelector('.searchform'); 

let search = false;
  
const searchde = () => {
    if (!search) {
      searchForm.classList.add('open');
      searchIcon.classList.add('open');
        search = true;
    } else {
      searchForm.classList.remove('open');
      searchIcon.classList.remove('open');
        search = false;
    }
}
 
searchIcon.addEventListener('click', searchde);


const breadcrumbLink = document.querySelectorAll('.aioseo-breadcrumb a');

console.log(breadcrumbLink[1])

if (breadcrumbLink[1].title === "Aktualności") {
  breadcrumbLink[1].outerHTML = `<a href=\"${baseUrl}/aktualnosci/\" title=\"Aktualności\">Aktualności</a>`
}

