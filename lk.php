<?php
session_start();
$title = "Личный кабинет";
if(!$_SESSION['id']) {
  header('Location: auth.php');
}
require_once("User.php");
$user = new User($_SESSION['id'], $_SESSION['login'], $_SESSION['lastname'], $_SESSION['name'], $_SESSION['patronymic'], $_SESSION['birthday'], $_SESSION['gender'], $_SESSION['phone'], $_SESSION['email'], $_SESSION['passport'], $_SESSION['issued'], $_SESSION['dataofissue'], $_SESSION['thecode'], $_SESSION['placeofbirth'], $_SESSION['registered'], $_SESSION['street'], $_SESSION['hourse'], $_SESSION['body'], $_SESSION['flat'], $_SESSION['ofregistration'], $_SESSION['pollingstation']);
//$user->login = "NewLogin";//приведёт к ошибке 500
//echo $user->login;
require_once("components/header.php");
?>
<div class="container">
  <div class="row justify-content-center mt-3">
    <div class="col-8">
      <h1 class="text-center">Личный кабинет</h1>
      <h5>Добро пожаловать, <?php echo $user->getFullName()?></h5>
      <p><b>ID: </b><span class="info"><?php echo $user->id?></span>
      <span class="control"></span>
      </p>
      <p><b>Логин: </b><span class="info"><?php echo $user->login?></span>
      <span class="control"></span>
      </p>
      <p><b>Фамилия: </b><span class="info" name="lastname"><?php echo $user->lastname?></span>
      <span class="control">
        <i class="fa fa-pencil " style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Имя: </b><span class="info" name="name"><?php echo $user->name?></span>
      <span class="control">
        <i class="fa fa-pencil" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Отчество: </b><span class="info" name="patronymic"><?php echo $user->patronymic?></span>
      <span class="control">
        <i class="fa fa-pencil" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Дата рождения: </b><span class="info" name="birthday"><?php echo $user->birthday?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Пол: </b><span class="info" name="gender"><?php echo $user->gender?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Мобильный телефон: </b><span class="info" name="phone"><?php echo $user->phone?></span>
      <span class="control">
        <i class="fa fa-pencil " style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Электронный адрес: </b><span class="info" name="email"><?php echo $user->email?></span>
      <span class="control">
        <i class="fa fa-pencil " style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p class="text-center">Паспортные данные</p>
      <p><b>Серия номер </b><span class="info" name="passport"><?php echo $user->passport?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Кем выдан: </b><span class="info" name="issued"><?php echo $user->issued?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Дата выдачи: </b><span class="info" name="dataofissue"><?php echo $user->dataofissue?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Код подразделения: </b><span class="info" name="thecode"><?php echo $user->thecode?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Место рождения: </b><span class="info" name="placeofbirth"><?php echo $user->placeofbirth?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p class="text-center">Регистрационные данные</p>
      <p><b>Кем зарегистрирован: </b><span class="info" name="registered"><?php echo $user->registered?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Название улицы: </b><span class="info" name="street"><?php echo $user->street?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Номер дома: </b><span class="info" name="hourse"><?php echo $user->hourse?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Номер корпуса: </b><span class="info" name="body"><?php echo $user->body?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Номер квартиры: </b><span class="info" name="flat"><?php echo $user->flat?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Дата регистрации: </b><span class="info" name="ofregistration"><?php echo $user->ofregistration?></span>
      <span class="control">
        <i class="fa fa-pencil"  style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
      <p><b>Избирательный участок №</b><span class="info" name="pollingstation"><?php echo $user->pollingstation?></span>
      <span class="control">
        <i class="fa fa-pencil " style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-check d-none" style="cursor: pointer;" aria-hidden="true"></i>
        <i class="fa fa-times d-none" style="cursor: pointer;" aria-hidden="true"></i>
      </span>
      </p>
    </div>
  </div>
</div>
<script>
  let pens = document.querySelectorAll('.fa-pencil');
  for(pen of pens) {
    pen.onclick = startEdit;
  }
  function startEdit() {
    let editBtn = this;
    let okBtn = editBtn.nextElementSibling;
    let cancelBtn = okBtn.nextElementSibling;
    //console.log([editBtn, okBtn, cancelBtn]);
    let infoSpan = editBtn.parentElement.previousElementSibling;
    //console.log(infoSpan);
    editBtn.classList.add('d-none');
    okBtn.classList.remove('d-none');
    cancelBtn.classList.remove('d-none');
    
    let oldData = infoSpan.innerHTML;
    let dataName = infoSpan.getAttribute('name');
    infoSpan.innerHTML = `<input type="${dataName == 'birthday' ? 'date' : 'text'}" value="${oldData}" name="${dataName}">`;
    
    cancelBtn.onclick = function() {
    editBtn.classList.remove('d-none');
    okBtn.classList.add('d-none');
    cancelBtn.classList.add('d-none');
    infoSpan.innerHTML = oldData;
    }
    okBtn.onclick = function() {
      let input = infoSpan.querySelector('input');
      let name = input.name;//input.getAttribute("name");
      let value = input.value;
      let control = {
        'editBtn' : editBtn,
        'okBtn' : okBtn,
        'cancelBtn' : cancelBtn,
        'infoSpan' : infoSpan,
      }
     // console.log([name, value]);
      changeData(name, value, control);
    }
  }
  
  function changeData(key, value, control) {
    let formData = new FormData();
    formData.append(key, value);
    //console.log( formData.get(key));
    fetch('lk_obr.php', {
      method: "POST",
      body: formData,
    })
    .then(response => response.text())
    .then(result => {
      if(result =="ok") {
        control.editBtn.classList.remove('d-none');
        control.okBtn.classList.add('d-none');
        control.cancelBtn.classList.add('d-none');
        control.infoSpan.innerHTML = value;
        alert("Изменения успешно внесены");
      //console.log(result);
      //console.log(control);
      } else {
        let input = control.infoSpan.querySelector('input');
        input.style.borderColor = "red";
        alert(result);
      }
    });
  }
  
</script>
<?php
require_once("components/footer.php");
?>