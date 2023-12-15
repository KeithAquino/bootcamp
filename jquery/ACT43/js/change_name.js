function changeName() {
  let change_name = prompt("What is your name?");
  {
    document.getElementById("userName").innerHTML = change_name;
    document.getElementById("userName2").innerHTML = change_name;
  }
}
