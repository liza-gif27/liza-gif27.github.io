<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="fonts/EuropeCond_16277.ttf">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   
    <script src="ajax.js"></script>

    <script src="javaScript/script.js"></script>
    <script src="javaScript/dataPicker.js"></script>
    
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/style.css">
    <title>World Bank</title>
</head>
<body>
    <div class="wrapper">
      <div class="content">
        <header>
          <div class="header_review">
            <img src="img/logo.jpg" alt="logo">
            <div class="header_phone">
      
              <a href="tel:88001005005" >8-800-100-5005 </a>
              <a href="tel:83452522000" >+7 (3452) 522-000</a>
            </div>
          </div>
          
          <div class="menu">
            <ul>
                  <li class="menu_item"><a href="#" class="menu_link">Кредитные карты</a></li>
                  <li class="menu_item"><a href="#" class="menu_link">Вклады</a></li>
                  <li class="menu_item"><a href="#" class="menu_link">Дебетовая карта</a></li>
                  <li class="menu_item"><a href="#" class="menu_link">Страхование</a></li>
                  <li class="menu_item"><a href="#" class="menu_link">Друзья</a></li>
                  <li class="menu_item"><a href="#" class="menu_link">Интернет-банк</a></li>
              </ul>
          </div>
        </header>
    
    
        <div class="calculate">
          <form method="POST" class="calculate_form"  id="ajax_form" action="">
            <div class="calculate_title">Калькулятор</div>
            <div class="wrap">
              <div class="wrap_label">
                <label for="date">Дата оформления вклада</label>
                <label for="sum_deposit">Сумма вклада</label>
                <label for="date_deposit">Срок вклада</label>
                <label for="add_deposite">Пополнение вклада</label>
                <label for="sum_refill_deposite">Сумма пополнения вклада</label>
              
              </div>
              
              <div class="wrap_input">
               
                <input type="text" id="datepicker" name='designations_date'>
                <div class="wrap_range">
                  <input id="sum_deposit" type="text" name="summa_deposit">
                  <input type="range" min="1000" max="3000000" id="rangeSum" class="slider"  oninput="writeNumber('sum_deposit','rangeSum')">
                </div>
                
                <!-- <input id="date" type="year"> -->
                <select name="years">
                  <option value="one">1 год</option>
                  <option  value="two">2 года</option>
                  <option  value="three">3 года</option>
                  <option  value="four">4 года</option>
                  <option  value="five">5 лет</option>
               </select>
                <div class="radio_wrap">
                   <input id="add_deposite" value="yes" type="radio" name="radioAnswer"> Да
                   <input id="add_deposite" type="radio" value="no" checked="checked" name="radioAnswer"> Нет
                </div>
                <div class="wrap_range">
                  <input id="sum_refill_deposite" type="text" name="refill_sum">
                  <input type="range" id = "sum_refill_range"  class="slider" min="1000" max="3000000" oninput="writeNumber('sum_refill_deposite','sum_refill_range')">
                </div>
                
              </div>
             
            
      
            </div>
            <input type="submit" class="calculate_btn" id="calc_btn" value="Рассчитать">
            <div class="result" id="calc_result">Результат: <div ></div> 
          </form>
        </div>   
      
      </div> 
      
      
      <footer>
          <ul class="cards">
            <li><a href="#">Кредитные карты</a></li>
            <li><a href="#">Вклады</a></li>
            <li><a href="#">Дебетовая карта</a></li>
            <li><a href="#">Страхование</a></li>
            <li><a href="#">Друзья</a></li>
            <li><a href="#">Интернет-банк</a></li>
          </ul>
      </footer>
    </div>
   
</body>
</html>