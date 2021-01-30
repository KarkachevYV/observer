<?php
  
  $title = "Регистрация";
  require_once("components/header.php");
  //require()
  //include() include_once()
?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-6">
         <h1 class="mt-5 text-center">Регистрация</h1>
          <form class="observ" action="reg_obr.php" method="POST">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Имя пользователя" name="login" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="Пароль" name="password">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="Повторите пароль" name="password_repeat">
            </div>
            <h4 class="text-center">Личные данные</h4>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Фамилия" name="lastname" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Имя" name="name" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Отчество" name="patronymic">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
              </div>
              <input type="date" class="form-control" placeholder="Дата рождения" name="birthday" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Пол" name="gender" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Мобильный телефон" name="phone" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-at"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Электронный ящик" name="email" required>
            </div>
            <p class="text-center">Паспортные данные</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-passport"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Серия Номер" name="passport">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-address-card"></i>></span>
              </div>
              <input type="text" class="form-control" placeholder="Кем выдан" name="issued">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
              </div>
              <input type="date" class="form-control" placeholder="Дата выдачи" name="dataofissue">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-code"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Код подразделения" name="thecode">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-house-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Место рождения" name="placeofbirth">
            </div>
            <p class="text-center">Регистрационные данные (прописка)</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-address-card"></i>></span>
              </div>
              <input type="text" class="form-control" placeholder="Кем зарегистрирован" name="registered">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-street-view" _mstvisible="2"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Название улицы" name="street">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-home"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Номер дома" name="hourse">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-building"></i>></span>
              </div>
              <input type="text" class="form-control" placeholder="Номер корпуса" name="body">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-address-book"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Номер квартиры" name="flat">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
              </div>
              <input type="date" class="form-control" placeholder="Дата регистрации" name="ofregistration">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-server"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Номер избирательного участка" name="pollingstation">
            </div>
            <p class="text-danger d-none error"></p>
            <input type="submit" class="btn btn-primary btn-block" value="Зарегистрироваться">
          </form> 
        </div>
      </div>
    </div>
    <script>
      let form = document.querySelector('form.observ');
      form.onsubmit = send;
      function send(event){
          event.preventDefault();
        //  console.log("Submit");
          let formdata = new FormData(form);
        // console.log(formdata.get('lastname'));
      fetch('reg_obr.php', {
        method: "POST",
        body: formdata,
      })
        .then(response => response.text())
        .then(result => {
          if(result == "ok") {
            window.location.href = "auth.php";
          } else {
            //alert(result);
            let errorElem  = document.querySelector(".error");
            errorElem.classList.remove('d-none');
            errorElem.innerHTML =result;
          }
        });
      /*.then(result => console.log(result));
      console.log("Отправлен запрос!")*/
      }
    </script>
<?php
require_once("components/footer.php");
?> 