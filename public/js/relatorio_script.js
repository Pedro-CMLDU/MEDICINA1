function classToggle() {
    const navs = document.querySelectorAll('.side_items')
    
    navs.forEach(nav => nav.classList.toggle('sidebar_exibir'));
  }
  
  function handleClickOutside(event) {
    const navs = document.querySelectorAll('.side_items');
    const menuSand = document.querySelector('.menu_sand');
  
    // Verifica se o clique foi fora do menu e do botão de alternância
    if (!Array.from(navs).some(nav => nav.contains(event.target)) && !menuSand.contains(event.target)) {
        navs.forEach(nav => nav.classList.remove('sidebar_exibir'));
    }
  }
  
  document.querySelector('.menu_sand').addEventListener('click', classToggle);
  document.addEventListener('click', handleClickOutside);
  
  $(document).ready(function(){
    $('.search_select_box select').selectpicker();
});

$(document).ready( function () {
  $('#myTable').DataTable({
    searching: true,  
    responsive: true,
    language: {
      url:"https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
    }
  });
});

const button = document.querySelector(".botao")
const modal = document.querySelector("dialog")
const exit = document.querySelector(".fa-xmark")
const fundo = document.querySelector(".fundo-grey")

button.onclick = () => {
  modal.showModal()
  fundo.classList.toggle('ativado')
}
exit.onclick = () => {
  modal.close()
  fundo.classList.remove('ativado')
}