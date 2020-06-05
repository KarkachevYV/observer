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
              <input type="password" class="form-control" placeholder="Пароль" name="pass">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="Повторите пароль" name="pass_repeat">
            </div>
            <h4 class="text-center">Личные данные</h4>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Фамилия" name="lastname">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Имя" name="name">
            </div>
            <!--<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Отчество" name="patronymic">
            </div>-->
            <p class="text-center">Дата рождения</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
              </div>
              <input type="date" class="form-control" placeholder="Дата рождения" name="birthday">
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
        window.location.href = "lk.php";
      } else {
        //alert(result);
        let errorElem  = document.querySelector(".error");
        errorElem.classList.remove('d-none');
        errorElem.innerHTML = result;
      }
    });
    /*.then(result => console.log(result));
    console.log("Отправлен запрос!")*/
  }
    </script>
<?php
require_once("components/footer.php");
?> 