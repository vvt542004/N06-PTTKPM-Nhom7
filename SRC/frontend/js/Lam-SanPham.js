(function () {
  let slideIndex = 0;
  const slides = document.querySelectorAll('.slides');
  let slideInterval;
  const transitionTime = 1000; // Thời gian chuyển đổi tính bằng mili giây

  function showSlides() {
      slides.forEach(slide => {
          slide.classList.remove('active', 'transition'); // Xóa các class 'active' và 'transition'
      });

      slideIndex++;
      if (slideIndex > slides.length) {
          slideIndex = 1;
      }

      slides[slideIndex - 1].classList.add('active', 'transition'); // Thêm các class 'active' và 'transition'
      slideInterval = setTimeout(showSlides, 4000); // Thay đổi hình ảnh sau mỗi 4 giây
  }

  function changeSlide(n) {
      clearTimeout(slideInterval); // Xóa timeout hiện tại

      if (n === 1 && slideIndex === slides.length) {
          slides[slideIndex - 1].classList.remove('active', 'transition');
          slideIndex = 0;
          setTimeout(() => {
              slides[slideIndex].classList.add('active', 'transition');
          }, transitionTime);
      } else if (n === -1 && slideIndex === 1) {
          slides[slideIndex - 1].classList.remove('active', 'transition');
          slideIndex = slides.length;
          setTimeout(() => {
              slides[slideIndex - 1].classList.add('active', 'transition');
          }, transitionTime);
      } else {
          slideIndex += n;
          if (slideIndex > slides.length) {
              slideIndex = 1;
          } else if (slideIndex < 1) {
              slideIndex = slides.length;
          }
          slides.forEach(slide => {
              slide.classList.remove('active', 'transition');
          });
          slides[slideIndex - 1].classList.add('active', 'transition');
      }

      slideInterval = setTimeout(showSlides, 4000); // Khởi động lại khoảng thời gian
  }

  showSlides();
  

})();
 