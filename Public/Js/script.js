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

// let menu_btn = document.getElementById('menu-btn');
// let menu = document.getElementById('menu');

//   menu_btn.addEventListener('click', (e) => {
//   menu.toggleClass("active");
// })

$('#menu-btn').click(function(){
  $('#menu').toggleClass('active');
})

// let menu_btn = document.querySelector('#menu-btn')
// let menu = document.querySelector('#menu')

// menu_btn.onclick = function(){
//   menu.classList.toggle("active")
// }