<header>
  <div class="top">
  	<div class="wrapper">
      <div class="left-item">
        <div class="mobile-btn" id="mobile-btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a class="brand" href="{{ home_url('/') }}">
          <img src="@asset('/images/logo.png')" alt="">
        </a>
        <div class="information">
          <p>г. Казань, ул. Серова, 48</p>
          <a href="" class="btn-price">Скачать прайс</a>
        </div>
      </div>
      <div class="right-item">
        <a class="btn-order">Записаться на прием</a>
      </div>
    </div>
  </div>
  <div class="mobile-info">
    <p>г. Казань, ул. Серова, 48</p>
    <a href="tel:+79297256114" class="mobile-phone">+7 929 725 61 14</a>
    <a href="">Скачать прайс</a>
  </div>
  <nav class="nav-primary" id="nav">
    <div class="wrapper">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      <div class="header-phone">
        <a href="tel:+79297256114">+7 929 725 61 14</a>
      </div>
    </div>
  </nav>
  <div class="mobile-menu" id="mobile-menu">
    <div class="wrapper">
      <div class="close" id="close-btn">
        <img src="@asset('/images/close.png')" alt="" data-dismiss="modal">
      </div>
      <h3 id="mobile-list">Меню</h3>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav mobile-list']) !!}
      @endif
    </div>
  </div>

<div class="popup">
  <div class="popup-order">
    <h3>Записаться на приём к стоматологу в Казани<span><img src="@asset('/images/close.png')" style="width: 15px; margin-left: 25%;" id="popup-close"></span></h3>
    <form id="submit-form" method="POST" action="<?php echo get_template_directory_uri(); ?>/views/components/send.php">
     <div class="left-item">
       <input type="text" placeholder="Имя*" name="name" required>
       <div class="items">
         <input type="text" placeholder="Мобильный телефон*" name="phone" required>
         <input type="text" placeholder="Электронная почта" name="email">
         <input type="text" placeholder="Дата" name="data">
         <input type="text" placeholder="Время" name="time">
       </div>
     </div>
     <div class="right-item">
       <input type="textarea" placeholder="Расскажите о своей проблеме" name="question">
     </div>
     <div class="bottom-item">
       <p>Отправляя форму, я соглашаюсь с условиями передачи информации</p>
       <input type="submit" value="Записаться на приём">
     </div>
    </form>
    <div id="form_result">
      <h3>Заявка успешно отправлена</h3>
    </div>
  </div>
  <div class="bg-popup-order"></div>
</div>
<script>
  $('#submit-form').submit(function(){
    var msg = $('#submit-form').serialize();
    $.ajax({
      url: "/app/themes/sage/resources/views/components/send.php",
      type: "post",
      data: msg,
      success: function(data) {
        if(data == "OK") {
          result = "<div class="ok">Сообщение отправлено</div>";
        };
  });
  return false;
});
</script>
</header>
