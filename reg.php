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
                <input type="text" class="form-control" placeholder="Логин" name="login" required>
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
              <h4 class="text-center">Личная информация</h4>
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
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Отчество" name="patronymic">
              </div>
              <p class="text-center">Дата рождения</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="bi bi-calendar-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                      <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                      <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                  </span>
                </div>
                <input type="date" class="form-control" placeholder="Дата рождения" name="birthday">
              </div>
              <h4 class="text-center">Контактная информация</h4>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                      <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Мобильный телефон" name="mobilephone">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                      <path d="M.05 3.555C.017 3.698 0 3.847 0 4v.697l5.803 3.546L0 11.801V12c0 .306.069.596.192.856l6.57-4.027L8 9.586l1.239-.757 6.57 4.027c.122-.26.191-.55.191-.856v-.2l-5.803-3.557L16 4.697V4c0-.153-.017-.302-.05-.445L8 8.414.05 3.555z"/>
                    </svg>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Электронный адрес" name="mailaddress">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="bi bi-bullseye" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                      <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                      <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Избирательный участок" name="pollingstation">
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