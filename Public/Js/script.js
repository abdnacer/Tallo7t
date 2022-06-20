// Partie Code De SideBar
window.addEventListener('DOMContentLoaded', event => {
  const sidebarToggle = document.body.querySelector('#sidebarToggle');
  if (sidebarToggle) {
    sidebarToggle.addEventListener('click', event => {
      event.preventDefault();
      document.body.classList.toggle('sb-sidenav-toggled');
      document.getElementById('sidebarToggle').classList.toggle('lefts');
      localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
    });
  }
});

// $('#menu-btn').click(function(){
//   $('#menu').toggleClass('active');
// })

// Partie  Code de Recherche
let search = document.getElementById('search')

search.addEventListener('input', function() {
    let value = search.value.toUpperCase()
    let columns = [...document.querySelectorAll('.name-row')]

    columns.forEach(column => {
        if(!column.textContent.toUpperCase().trim().startsWith(value)) {
          column.parentElement.style.display = 'none';
        } else {
            column.parentElement.style.display = 'table-row';
        }
    })    
})


var menuBtn = document.getElementById('menu-btn');
var close = document.getElementById('close');
var menu = document.getElementById('menu');


menuBtn.addEventListener('click' , function(){
  menu.classList.add("activBar");
  close.classList.add("closBlock");
})


close.addEventListener('click' , function(){

  menu.classList.remove("activBar");
  close.classList.remove("closBlock");

})
