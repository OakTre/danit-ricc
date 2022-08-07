document.addEventListener("DOMContentLoaded", (event) => {
  const form = document.querySelector(".js-form");

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    const url = form.getAttribute("action");
    const name = form.querySelector("input[name=name]").value;
    const companay = form.querySelector("input[name=company]").value;
    const mail = form.querySelector("input[name=e-mail]").value;
    const text = form.querySelector("input[name=inquiry]").value;
    const tel = form.querySelector("input[name=phone]").value;

    axios({
      method: 'post',
      url,
      data: {
        name,
        companay,
        mail,
        tel,
        text,
      }
    }).then((response) => {
      form.querySelector("._initial").classList.add("is-hidden");
      form.querySelector("._success").classList.add("is-active");
    }).catch((error) => {
      console.log(error);
    })
  });
});
