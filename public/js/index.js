$('#home a').on('click', function (evt) {
  const hashVal = this.hash;

  evt.preventDefault();

  if (hashVal !== '') {
    $('html, body').animate(
      {
        scrollTop: $(hashVal).offset().top,
      },
      700
    );
  }
});
