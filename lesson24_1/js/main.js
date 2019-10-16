/*let button = document.querySelector('#button'), //позволяет найти элемент
  modal = document.querySelector('#modal'),
  close = document.querySelector('#close');
button.addEventListener('click', function(){
  modal.classList.add('modal_active');
  setTimeout(function(){
    modal.classList.remove ('modal_active')}, 5000);
});
//addEventListener - Отслеживание событий

close.addEventListener('click', function(){
    modal.classList.remove ('modal_active');  
});
function autoClose() {
    if (modal.classList.add('modal_active'))
    {
    modal.classList.remove ('modal_active');}
  }
  setTimeout(autoClose, 1000);*/

  /*Инициализация WOW*/
  $(document).ready(function(){

    
    new WOW({
        mobile: false
    }).init();

    $('#offer-form').on('submit', function name(event){
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).serialize(),
        success: function (response) {
          console.log('Прибыли данные: ' + response);
          $('#offer-form')[0].reset();
          /*modal.classList.add('modal_active');
          $('.modal-dialog__title').text(response);*/
          modal.classList.add('.offer__message');
          $('.offer__message-under').text(response);
                },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error(jqXHR + " " + textStatus)
        }
      });
    });
    $('#modal-form').on('submit', function name(event){
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).serialize(),
        success: function (response) {
          console.log('Прибыли данные: ' + response);
          $('#offer-form')[0].reset();
          /*modal.classList.add('modal_active');
          $('.modal-dialog__title').text(response);*/
          modal.classList.add('.modal-message');
          $('.modal-phone__text-phone').text(response);
                },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error(jqXHR + " " + textStatus)
        }
      });
    });
    $('#brif-form').on('submit', function name(event){
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).serialize(),
        success: function (response) {
          console.log('Прибыли данные: ' + response);
          $('#offer-form')[0].reset();
          /*modal.classList.add('modal_active');
          $('.modal-dialog__title').text(response);*/
          
          $('.form__description').text(response);
                },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error(jqXHR + " " + textStatus)
        }
      });
    });

  });