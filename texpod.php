<?php include ('php/header.php')?>
<?php include ('php/menu.php')?>
<!--техническая поддержка сайта-->
<section class=" p-t-66 p-b-60">
<div class="container">
	<div class="row">
  <div class="left">
    <div class="header">
      <h2 class="animation a1">Служба поддержки</h2>
      <h4 class="animation a2">Если у вас возникли вопросы по работе нашего сервиса,<br> вы можете обратиться в службу поддержки:</h4>
    </div>
	<form class="form">

<!-- Hidden Required Fields -->
<input  type="hidden" name="project_name" value="Hamdmade - ручная работа">
<input type="hidden" name="admin_email" value="handmadetati@mail.ru">
<input type="hidden" name="form_subject" value="Заявка на  тех.поддержку">
<!-- END Hidden Required Fields -->

<input class="form-field  " type="text" name="Ваше имя" placeholder="Ваше имя..." required><br>
<input class="form-field " type="email" name="E-mail" placeholder="Ваш E-mail..." required><br>
<input class="form-field  " type="text"  pattern="^[0-9]+$" required  name="Телефон"  placeholder="Номер телефона..."><br>
<textarea class="form-field  "  name="Сообщение" type="text" placeholder="Сообщение..."></textarea>
<table class="survey__line-inner"><tbody>
  <tr>
    <td class="survey__required">
     
      <td class="survey__control">
        <span class="checkbox checkbox_theme_normal checkbox_size_m checkbox_view_classic checkbox_lines_multi i-bem checkbox_js_inited"required>
          <span class="checkbox__box">
            <input class="checkbox__control" type="checkbox" autocomplete="off" required>
            <i class="checkbox__tick"required></i>
          </span>
          <label class="checkbox__label" aria-hidden="true"required>
            <div class="safe-content"required><p style="margin-left: 25px; margin-top: 5px;">Я согласен c <a href="contact.php" target="_blank">Политикой конфиденциальности</a>.</p>
            </div>
          </label>
        </span>
      </td>
  </tr>
  </tbody>
</table>

	<button class="animation">Отправить</button>
</form>
    </div>
  
  
</div>
</section>	
</section>
	<script src="script.js"></script>

	<!--подключение футера на сайт-->
	<?php include ('php/footer.php')?>