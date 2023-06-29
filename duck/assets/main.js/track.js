// при нажатии на input(отследить посылку) открывается страница track.index
  document.getElementById("put") //осуществление поиска по id
    .addEventListener("keyup", function(e) { //используется клавиатура в качестве обработчика
        if (e.key === 'Enter') { // при нажатии на enter
            window.location.href = "track.html"; // открытие страницы
        }
    });
 
