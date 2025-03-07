<div class="vinh-menu">
        <div class="vinh-menubar">
            <ul>
                <li ><a href="/home">TRANG CHỦ</a></li>
                <li><a href="/sanpham/1" id="spham">SẢN PHẨM</a>
                    <ul class="vinh-submenu">
                        <li><a href="/noithat/phongkhach">Nội thất phòng khách </a></li>
                        <li><a href="/noithat/phongngu">Nội thất phòng ngủ </a>  </li>
                        <li><a href="/noithat/vanphong">Nội thất văn phòng</a></li>
                        <li><a href="/noithat/phongbep">Nội thất phòng bếp</a></li>
                        <li><a href="/noithat/trangtri">Đồ trang trí</a></li>
                    </ul>
                </li>
                <li><a href="/blog/1" id="blg">BLOG</a></li>    
                <li><a href="/gioithieu" id="gthieu">GIỚI THIỆU</a></li>
                <li><a href="/lienhe" id="lhe">LIÊN HỆ</a></li>
            </ul>
        </div>
        <div class="vinh-search">
        <form action="{{ route('search.products') }}" method="GET" id="searchForm">
            <input type="search" name="query" placeholder="Tìm kiếm..." id="searchInput">
            <type="submit"><i class="fa-solid fa-magnifying-glass"></i>
        </form>

     
        </div>

    </div>
