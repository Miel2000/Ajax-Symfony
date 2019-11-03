function onClickBtnLike(event) {
  event.preventDefault();

  const url = this.href;

  axios.get(url).then(function(response) {
    console.log(response);
  });
}

document.querySelectorAll("a.js-like").forEach(function(link) {
  link.addEventListener("click", onClickBtnLike);
});
