<?php
$title = "Аутентификация";
require_once("components/header.php");
?>
<div class="container">
  <div class="row justife-content-center">
   <div class="col-4">
     <h1 class="mt-5 text-center">Аутентификация</h1>
     <form class="observ" action="auth_obr.php" method="POST">
       <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Имя пользователя" name="login" required>
            </div>
           
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Пароль" name="pass">
        </div>
        <p class="text-danger d-none error"></p>
        <input type="submit" class="btn btn-primary btn-block" value="Войти">
     </form>
   </div>
  </div>
</div>
<script>
  let form = document.querySelector('form.observ');
  form.onsubmit = send;
  function send(event){
    event.preventDefault();
   // console.log("Submit");
   let formdata = new FormData(form);
  // console.log(formdata.get('login'));
  fetch('auth_obr.php', {
    method: "POST",
    body: formdata,
  })
    .then(response => response.text())
    .then(result => {
      if(result == "ok") {
        window.location.href = "lk.php";
      } else {
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