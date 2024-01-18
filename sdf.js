const settings = {
  async: true,
  crossDomain: true,
  url: "https://id-game-checker.p.rapidapi.com/mobile-legends/1393323764/15748",
  method: "GET",
  headers: {
    "X-RapidAPI-Key": "d94bc3f1b1msh5ffd04cf49a980cp127a9bjsnb75c45d4e19c",
    "X-RapidAPI-Host": "id-game-checker.p.rapidapi.com",
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
