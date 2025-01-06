document.addEventListener("DOMContentLoaded", function() {
    const containers = document.querySelectorAll('.body-right-item-img');

    containers.forEach(function(container) {
        const image1 = container.querySelector('.image1');
        const image2 = container.querySelector('.image2');

        container.addEventListener('mouseenter', function() {
            image2.style.transform = 'translateX(0)'; // Hiển thị ảnh thứ 2 từ bên phải
            image2.style.opacity = '1';
            image1.style.transform = 'scale(0.8)'; // Thu nhỏ ảnh thứ 1
            image1.style.opacity = '0'; // Ẩn ảnh thứ 1
        });

        container.addEventListener('mouseleave', function() {
            image2.style.transform = 'translateX(100%)'; // Trả ảnh thứ 2 về vị trí ban đầu
            image2.style.opacity = '0';
            image1.style.transform = 'scale(1)'; // Khôi phục kích thước ảnh thứ 1
            image1.style.opacity = '1'; // Hiển thị lại ảnh thứ 1
        });
    });
});

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

  // Xử lý chuyển đổi đặc biệt cho chuyển đổi mượt mà từ slide cuối cùng về slide đầu tiên
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
