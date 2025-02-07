document.addEventListener("DOMContentLoaded", function () {
  const scrollIcon = document.querySelector('.icon-scroll');

  if (scrollIcon) {
    scrollIcon.addEventListener('click', function () {
      var targetSection = document.getElementById('trialSection');

      if (targetSection) {
        var targetPosition = targetSection.offsetTop;
        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });
      } else {
        console.error("Target section with ID 'trialSection' not found.");
      }
    });
  } else {
    console.error("Element with class 'icon-scroll' not found.");
  }
});

  

  document.addEventListener('click', function (event) {
    const form = document.getElementById('bookingForm');
  
    if (form && event.target.closest('button[type="submit"]')) {
      event.preventDefault();
      event.stopPropagation();
  
      if (form.checkValidity()) {
        document.querySelector('.form-sections').style.display = 'none';
        document.getElementById('successMessage').style.display = 'block';
  
        setTimeout(() => {
          document.getElementById('successMessage').style.display = 'none';
          document.querySelector('.form-sections').style.display = 'block';
          form.classList.remove('was-validated');
          form.reset();
        }, 2000);
      }
  
      form.classList.add('was-validated');
    }
  });
  