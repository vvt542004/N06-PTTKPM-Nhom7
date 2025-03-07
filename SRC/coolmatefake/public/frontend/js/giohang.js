// Chọn tất cả các nhóm chứa nút tăng/giảm và input
const quanPlusAll = document.querySelectorAll('.fa-solid.fa-plus');
const quanMinusAll = document.querySelectorAll('.fa-solid.fa-minus');
const quanIphutAll = document.querySelectorAll('.quantity-input');

// Lặp qua từng nhóm và gắn sự kiện cho nút cộng
quanPlusAll.forEach((quanPlus, index) => {
    // Sự kiện tăng số lượng
    quanPlus.addEventListener('click', () => {
        const quanInput = quanIphutAll[index];
        let qty = parseInt(quanInput.value) || 1; // Lấy giá trị từ input hiện tại
        qty++;
        quanInput.value = qty;
    });
});

// Lặp qua từng nhóm và gắn sự kiện cho nút trừ
quanMinusAll.forEach((quanMinus, index) => {
    // Sự kiện giảm số lượng
    quanMinus.addEventListener('click', () => {
        const quanInput = quanIphutAll[index];
        let qty = parseInt(quanInput.value) || 1; // Lấy giá trị từ input hiện tại
        if (qty > 1) {
            qty--;
            quanInput.value = qty;
        }
    });
});
