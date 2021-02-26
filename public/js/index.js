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

// Contact Form

$('#contact-form').on('submit', function (evt) {
  evt.preventDefault();

  const data = $(this).serialize();

  $.ajax({
    url: '../contact.php',
    data: data,
    method: 'POST',
    error: function (jqXHR) {
      const errors = JSON.parse(jqXHR.responseText);

      $('.alert').remove();

      $.each(errors, function (index, value) {
        $('#' + index).after('<div class="alert error">' + value + '</div>');
      });
    },
    success: function (successMsg) {
      $('.alert').remove();

      $('#contact-form').prepend('<div class="alert success">' + successMsg + '</div>');
      $('#contact-form').trigger('reset');
    },
  });
});
