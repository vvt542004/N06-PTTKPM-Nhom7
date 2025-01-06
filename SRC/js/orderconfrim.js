

document.addEventListener("DOMContentLoaded", function() {
  const containers = document.querySelectorAll('.vinh-body-right-item-img');

  containers.forEach(function(container) {
      const image1 = container.querySelector('.vinh-image1');
      const image2 = container.querySelector('.vinh-image2');

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

