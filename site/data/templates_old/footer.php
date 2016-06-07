<footer>
  <div class="c-s-4">
    <h3>Наш адресс</h3>
    <p>г. Днепропетровск,<br />пр-т Кирова, 103</p>
  </div>
  <div class="c-s-4">
    <h3>Информация</h3>
    <nav>
      <?php foreach (\Views\MenuView::$items as $field): ?>
        <a href="<?= HOME . '/' . $field->id ?>"><?= $field->text ?></a>
      <?php endforeach; ?>
    </nav>
  </div>
  <div class="c-s-4">
    <h3>Наши контакты</h3>
    <div class="block__phones">
      <div class="r field__phone">
        <span class="c-t-5 field__operator">Kyivstar</span>
        <a href="tel:+380975343332">+38 (097) 534 33 32</a>
      </div>
      <div class="r field__phone">
        <span class="c-t-5 field__operator">MTS</span>
        <a href="tel:+380665713332">+38 (066) 571 33 32</a>
      </div>
      <div class="r field__phone">
        <span class="c-t-5 field__operator">Life</span>
        <a href="tel:+380935203332">+38 (093) 520 33 32</a>
      </div>
    </div>
  </div>
  <p class="rights">© 2016 avtomagazin.dp.ua. Все права защищены.</p>
</footer>
