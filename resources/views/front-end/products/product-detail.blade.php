@extends('front-end.master')
@section('content')
<section class="bg-dark" style="padding-top: 20px">
  <div class="container">

<script type="text/javascript">
    function runScript(e) {
        if (e.keyCode == 13) {
            var tb = document.getElementById("bntOrder");
            eval(tb.value);
            return false;
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        //hide the all of the element with class msg_body
        $(".comment-form").hide();
        //toggle the componenet with class msg_body
        $(".msg_head").click(function () {
            $(this).next(".comment-form").slideToggle(200);
        });
    });
</script>
<script type="text/javascript">
    function upQty() {
        var qty = $('#txtCount').val();
        qty = parseInt(qty) + 1
        $('#txtCount').val(qty);
    }
    function downQty() {
        var qty = $('#txtCount').val();
        if (qty > 1) {
            qty = parseInt(qty) - 1;
            $('#txtCount').val(qty);
        }
    }
</script>
<div class="content-page" style="margin-top: 10px">
    <div class="pic-product">
        <div class="product_images_holder">
            </div>
        <div id="vnContent1__ctl0_ltlAlbum" class="product_images_holder">
            <!-- product photos carousel -->
            <div class="flexslider" id="slider-1">
                <ul class="slides">

                            <li>
                                <div class='imgeffect'> <a class='fa fa-search-plus  single lightbox_' data-group='group_product_slider'  href='../data/items/1218/cay-hoa-hai-duong.jpg'></a> <img src='../data/items/1218/cay-hoa-hai-duong.jpg' alt='Cây hải đường'> </div>
                            </li>

                </ul>
            </div>
            <!-- slider thumbnails -->
            <div id="slider-carousel" class="flexslider slider-carousel margin-t10">
                <div class="flex-nav-container carousel">
                </div>
                <!-- slider navigation buttons -->
                <ul class="slides">

                            <li>
                                <img src='../data/items/1218/cay-hoa-hai-duong.jpg' alt='Cây hải đường' class='' />
                            </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="intro-product">
        <h1>
            Cây hải đường</h1>
        <div class="ntv-price">
            <div style="text-align: justify;"><strong><span style="color: rgb(0, 0, 0);"><span style="font-size: medium;"><span style="font-family: &quot;Times New Roman&quot;;">C&acirc;y hải đường </span></span></span></strong><span style="color: rgb(0, 0, 0);"><span style="font-size: medium;"><span style="font-family: &quot;Times New Roman&quot;;">thể hiện cho sự tinh thiết, thanh cao may mắn v&agrave; t&agrave;i lộc n&ecirc;n rất nhiều gia đ&igrave;nh lựa chọn hoa hải đường trong dịp tết để trưng b&agrave;y.&nbsp;</span></span></span></div>
<div style="text-align: justify;">&nbsp;</div>
<div style="text-align: justify;">NT058: 35 x 50cm&nbsp;</div>
<div style="text-align: justify;">&nbsp;</div>
<div style="text-align: justify;"><em style="box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: start;">Lưu &yacute;: Gi&aacute; sản phẩm đ&atilde; bao gồm chậu.</em></div>
            <p>
                <strong>Tình trạng:</strong>
                <img src='../img/in_stock.jpg' width='104' height='31' /></p>
            <div class="price">
                <strong style="color: #666; float: left; margin-right: 4px;">Giá bán:</strong>
                <div class="price-af">
                    85,000 đ</div>
                <div class="price-bf">
                    </div>
            </div>
            <div class="block-button">
                <div class="quanlity-product">
                    <div class="num-quanlity">
                        <input type="button" value="-" onclick="downQty(1);" /><input id="txtCount" name="txtCount"
                            type="text" style="width: 60px" value="1" />
                        <input type="button" value="+" onclick="upQty(1);" /></div>
                    <div class="but-buynow">
                        <input src="../img/bt_DatHang.png" name="vnContent1:_ctl0:bntOrder" type="image" id="vnContent1__ctl0_bntOrder" onkeypress="return runScript(event)" value="bntOrder" />
                        <input src="../img/bt_AddToCart.png" name="vnContent1:_ctl0:bntAddtoCart" type="image" id="vnContent1__ctl0_bntAddtoCart" onkeypress="return runScript(event)" value="bntAddtoCart" />
                    </div>
                </div>
                <div class="call-phone-zalo">
                    <a href='tel:0985507150'><i><img src='../img/icon-hotline.png' width='40' height='40' /></i> 0985507150</a>
                    <a href='tel:0985507150'><i><img src='../img/icon-zalo.png' width='40' height='40' /></i> 0985507150</a>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-delevery">
        <div>
<div><strong>VƯỜN CÂY VIỆT CAM KẾT:</strong></div>
<ul>
    <li>Cung cấp các loại cây cảnh đa dạng với giá hợp lý</li>
    <li>Miễn phí giao hàng cho đơn hàng trên <strong>500.000</strong>đ (áp dụng tại các quận nội thành TP.HCM)</li>
    <li>Tư vấn và hướng dẫn chăm sóc cây tận tình</li>
    <li>Tư vấn kỹ lưỡng các vấn đề phong thuỷ, hợp mệnh - hợp tuổi</li>
    <li>Cho thuê cây cảnh văn phòng</li>
    <li>Hỗ trợ đổi trả sản phẩm trong vòng <strong>3 ngày</strong> sau khi mua</li>
</ul>
</div>
    </div>
</div>
<div class="mobile-buynow">
    <div class="call-zalo">
        <a href="#">
            <img src="../img/icon-zalo-mobile.png" width="50" height="50" /></a></div>
    <div class="buy-now-mobile">
        <div class="but-buynow">
            <input src="../img/bt_DatHang.png" name="vnContent1:_ctl0:bntOrder2" type="image" id="vnContent1__ctl0_bntOrder2" value="bntOrder" onkeypress="return runScript(event)" />
            <input src="../img/bt_AddToCart.png" name="vnContent1:_ctl0:bntAddtoCart2" type="image" id="vnContent1__ctl0_bntAddtoCart2" onkeypress="return runScript(event)" value="bntAddtoCart" />
        </div>
    </div>
    <div class="mess-face">
        <a href="m.me/vuoncayviet.html">
            <img src="../img/icon-mes-mobile.png" width="50" height="50" /></a></div>
</div>
<div class="content-page">
    <div class="detail-content">
        <h2 class="title-ct">
            Chi tiết sản phẩm</h2>
        <div class="decription">
            <div style="margin: 5px 0;">
                <script>                    (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1";
                        fjs.parentNode.insertBefore(js, fjs);
                    } (document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-like" data-send="true" data-layout="button_count" data-width="450"
                    data-show-faces="true">
                </div>
                <!-- Đặt thẻ này ở nơi bạn muốn nút +1 hiển thị -->
                <g:plusone size="medium"></g:plusone>
                <!-- Đặt cuộc gọi hiển thị này ở nơi thích hợp -->
                <script type="text/javascript">
                    (function () {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
            </div>
            <span id="vnContent1__ctl0_lblHtmlInfo"><h2><strong><span style="font-size: medium; font-family: 'times new roman', times;">Giới thiệu C&acirc;y hải đường</span></strong></h2><ul><li><span style="font-size: medium; font-family: 'times new roman', times;">T&ecirc;n thường gọi:&nbsp;c&acirc;y hoa hải đường</span></li></ul><ul><li><span style="font-size: medium; font-family: 'times new roman', times;">T&ecirc;n gọi kh&aacute;c: hải đường đỏ, hay c&acirc;y hải đường</span></li></ul><ul><li><span style="font-size: medium; font-family: 'times new roman', times;">T&ecirc;n khoa học:&nbsp;Malus spectabilis Borkh</span></li></ul><ul><li><span style="font-size: medium; font-family: 'times new roman', times;">Họ: &nbsp;Theaceae</span></li></ul><ul><li><span style="font-size: medium; font-family: 'times new roman', times;">Nguồn gốc xuất xứ: tại Trung Quốc</span></li></ul><h2><strong><span style="font-size: medium; font-family: 'times new roman', times;">Đặc điểm</span></strong></h2><ul><li><span style="font-size: medium; font-family: 'times new roman', times;">Th&acirc;n: thuộc c&acirc;y th&acirc;n bụi cao 3 &ndash; 4m, c&agrave;nh non c&oacute; m&agrave;u n&acirc;u nhạt v&agrave; nhẵn.</span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">L&aacute;: c&oacute; xuống ngắn, kh&ocirc;ng l&ocirc;ng phiến l&aacute; to thu&ocirc;n h&igrave;nh bầu dục, d&agrave;y m&agrave;u n&acirc;u ở mặt tr&ecirc;n, xanh ở mặt dưới, m&eacute;p l&aacute; c&oacute; răng cưa nhọn, g&acirc;n ch&iacute;nh nổi r&otilde;.</span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">Hoa : c&oacute; m&agrave;u đỏ, c&aacute;nh hoa gồm 8 &ndash; 12 c&aacute;nh h&igrave;nh trứng rộng đỉnh tr&ograve;n.</span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">Quả: h&igrave;nh cầu, nhẵn kh&iacute; th&agrave;nh 3 r&atilde;nh 3 &ocirc;.</span></li></ul><h2><strong><span style="font-size: medium; font-family: 'times new roman', times;">&Yacute; nghĩa phong thủy</span></strong></h2><ul><li><span style="font-size: medium; font-family: 'times new roman', times;">L&agrave; loại hoa qu&yacute;, kh&ocirc;ng chỉ đẹp với m&agrave;u sắc thắm đỏ rực rỡ v&agrave;o độ xu&acirc;n sanng m&agrave; hoa hải đường c&ograve;n gi&agrave;u &yacute; nghĩa ngay từ t&ecirc;n gọi. Theo tiếng H&aacute;n, chữ đường c&ograve;n h&agrave;m &yacute; nh&agrave; ng&ocirc;i nh&agrave; lớn v&igrave; vậy c&acirc;y hoa hải đường l&agrave; lo&agrave;i hoa phong thủy tượng trưng cho sự ph&uacute; qu&yacute; vi&ecirc;n m&atilde;n, cuộc sống sum vầy, anh em h&ograve;a hợp, t&igrave;nh bạn keo sơn gắn b&oacute;. </span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">Hải đường c&ograve;n tượng trưng cho m&ugrave;a xu&acirc;n n&ecirc;n c&ograve;n mang đến may mắn, l&agrave;m ăn tấn tới.</span></li></ul><h2><strong><span style="font-size: medium; font-family: 'times new roman', times;">C&ocirc;ng dụng</span></strong></h2><ul><li><span style="font-size: medium; font-family: 'times new roman', times;">L&agrave;m qu&agrave; tặng nh&acirc;n những dịp lễ tết quan trọng đặc biệt l&agrave; năm mới hoặc mừng t&acirc;n gia. &nbsp;Người xưa quan niệm tặng tranh hoặc chậu hoa hải đường l&agrave; lễ vật qu&yacute; ch&uacute;c gia chủ đầy ắp ph&uacute; qu&yacute; vinh hoa, thăng quan, tiến chức.</span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">Người ta c&ograve;n thường mua một chậu hoa hải đường trưng ph&ograve;ng kh&aacute;ch, ph&ograve;ng thờ, trước cửa nh&agrave; hoặc cắm lọ lục b&igrave;nh tr&ecirc;n b&agrave;n thờ để đ&oacute;n xu&acirc;n sang với mong muốn một năm đỏ đắn, sung t&uacute;c.</span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">C&acirc;y hoa hải đường c&ograve;n được trồng vườn, trồng bồn trước nh&agrave; t&ocirc; điểm cho ng&ocirc;i nh&agrave; th&ecirc;m sinh động.</span></li></ul><h2><strong><span style="font-size: medium; font-family: 'times new roman', times;">C&aacute;ch trồng</span></strong></h2><ul><li><span style="font-size: medium; font-family: 'times new roman', times;">&Aacute;nh s&aacute;ng: C&acirc;y hoa hải đường ưa &aacute;nh s&aacute;ng b&aacute;n phần, n&ecirc;n trồng nơi c&oacute; &aacute;nh s&aacute;ng khuếch t&aacute;n khoảng 50-60%. C&acirc;y trồng sau 3-4 năm sẽ cho nhiều hoa đẹp.</span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">Nhiệt độ: c&acirc;y hoa hải đường ưa m&aacute;t mẻ, nhiệt độ trung b&igrave;nh ưa th&iacute;ch khoảng 18-27oC.</span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">Độ ẩm: C&acirc;y ưa ẩm trung b&igrave;nh</span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">Đất trồng: C&acirc;y hoa hải đường ưa đất tơi xốp, tho&aacute;ng, gi&agrave;u dinh dưỡng, n&ecirc;n b&oacute;n l&oacute;t bằng ph&acirc;n hữu cơ để dự trữ dinh dưỡng nu&ocirc;i c&acirc;y.</span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">Tưới nước: c&acirc;y ưa nước trung b&igrave;nh, lượng nước tưới vừa phải. N&ecirc;n tưới khi thấy đất tr&ecirc;n mặt chậu hơi se kh&ocirc;.</span></li><li><span style="font-size: medium; font-family: 'times new roman', times;">B&oacute;n ph&acirc;n: khi c&acirc;y trong giai đoạn trưởng th&agrave;nh từ c&ograve;n nhỏ đến 1m, n&ecirc;n b&oacute;n ph&acirc;n mỗi th&aacute;ng/lần bằng nước bể phốt pha lo&atilde;ng với 3-4 phần nước l&atilde;.</span></li></ul></span>
            <div class="but-buynow" style="width: 195px; margin: 0 auto">
                <input src="../img/bt_DatHang.png" name="vnContent1:_ctl0:bntOrder3" type="image" id="vnContent1__ctl0_bntOrder3" class="button-order" onkeypress="return runScript(event)" />
            </div>
        </div>
    </div>
</div>


        <div class="content-page">
            <div class="detail-content">
                <h2>
                    Sản phẩm tương tự</h2>
                <div class="product-block relative-product">
                    <ul>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-trac-bach-diep.html'><img src='../data/items/1092/cay-trac-bach-diep-1.jpg' alt='Cây Trắc Bách Diệp' /></a></div><h3><a href='cay-trac-bach-diep.html'>Cây Trắc Bách Diệp</a></h3>    <div class='price-product'>230,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1092&amp;p=680'><i class='fa fa-shopping-cart'></i></a><a href='cay-trac-bach-diep.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-tung-son.html'><img src='../data/items/1091/cay-tung-son-2.jpg' alt='Cây Tùng Sơn' /></a></div><h3><a href='cay-tung-son.html'>Cây Tùng Sơn</a></h3>    <div class='price-product'>190,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1091&amp;p=679'><i class='fa fa-shopping-cart'></i></a><a href='cay-tung-son.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-tung-bach.html'><img src='../data/items/1089/cay-tung-bach-tan.jpg' alt='Cây Tùng Bách' /></a></div><h3><a href='cay-tung-bach.html'>Cây Tùng Bách</a></h3>    <div class='price-product'>1,300,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1089&amp;p=678'><i class='fa fa-shopping-cart'></i></a><a href='cay-tung-bach.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-co-nhat.html'><img src='../data/items/1079/cay-co-nhat.jpg' alt='Cây Cọ Nhật' /></a></div><h3><a href='cay-co-nhat.html'>Cây Cọ Nhật</a></h3>    <div class='price-product'>550,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1079&amp;p=668'><i class='fa fa-shopping-cart'></i></a><a href='cay-co-nhat.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-luoi-ho-noi-that.html'><img src='../data/items/1029/cay-luoi-ho-noi-that-nt020.jpg' alt='Cây Lưỡi Hổ nội thất' /></a></div><h3><a href='cay-luoi-ho-noi-that.html'>Cây Lưỡi Hổ nội thất</a></h3>    <div class='price-product'>650,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1029&amp;p=624'><i class='fa fa-shopping-cart'></i></a><a href='cay-luoi-ho-noi-that.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-mai-van-phuc-noi-that.html'><img src='../data/items/1028/cay-mai-an-phuc-noi-that-nt021.jpg' alt='Cây Mai Vạn Phúc nội thất' /></a></div><h3><a href='cay-mai-van-phuc-noi-that.html'>Cây Mai Vạn Phúc nội thất</a></h3>    <div class='price-product'>550,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1028&amp;p=623'><i class='fa fa-shopping-cart'></i></a><a href='cay-mai-van-phuc-noi-that.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-trau-ba-leo-cot-noi-that.html'><img src='../data/items/1027/cay-trau-ba-leo-cot-nt035.jpg' alt='Cây Trầu Bà Leo Cột nội thất' /></a></div><h3><a href='cay-trau-ba-leo-cot-noi-that.html'>Cây Trầu Bà Leo Cột nội thất</a></h3>    <div class='price-product'>980,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1027&amp;p=622'><i class='fa fa-shopping-cart'></i></a><a href='cay-trau-ba-leo-cot-noi-that.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-trau-ba-thanh-xuan-noi-that.html'><img src='../data/items/1026/cay-trau-ba-thanh-xuan-noi-that-nt037.jpg' alt='Cây Trầu Bà Thanh Xuân nội thất' /></a></div><h3><a href='cay-trau-ba-thanh-xuan-noi-that.html'>Cây Trầu Bà Thanh Xuân nội thất</a></h3>    <div class='price-product'>620,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1026&amp;p=621'><i class='fa fa-shopping-cart'></i></a><a href='cay-trau-ba-thanh-xuan-noi-that.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-van-nien-thanh-noi-that.html'><img src='../data/items/1025/cay-van-nien-thanh-noi-that-nt039.jpg' alt='Cây Vạn Niên Thanh nội thất' /></a></div><h3><a href='cay-van-nien-thanh-noi-that.html'>Cây Vạn Niên Thanh nội thất</a></h3>    <div class='price-product'>500,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1025&amp;p=620'><i class='fa fa-shopping-cart'></i></a><a href='cay-van-nien-thanh-noi-that.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-kim-tien-noi-that.html'><img src='../data/items/1022/cay-kim-tien-noi-that-nt016.jpg' alt='Cây Kim Tiền nội thất' /></a></div><h3><a href='cay-kim-tien-noi-that.html'>Cây Kim Tiền nội thất</a></h3>    <div class='price-product'>650,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1022&amp;p=617'><i class='fa fa-shopping-cart'></i></a><a href='cay-kim-tien-noi-that.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-trau-ba-de-vuong-xanh-noi-that.html'><img src='../data/items/1021/cay-trau-ba-de-vuong-xanh-nt033.jpg' alt='Cây Trầu Bà Đế Vương Xanh nội thất' /></a></div><h3><a href='cay-trau-ba-de-vuong-xanh-noi-that.html'>Cây Trầu Bà Đế Vương Xanh nội thất</a></h3>    <div class='price-product'>650,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=1021&amp;p=616'><i class='fa fa-shopping-cart'></i></a><a href='cay-trau-ba-de-vuong-xanh-noi-that.html'><i class='fa fa-eye'></i></a></div></div></li>

        <li>
            <div class='product'><div class='pic-news'><a href='cay-phong-loc-hoa-noi-that.html'><img src='../data/items/996/phat-loc-hoa-lon-2.jpg' alt='Cây Phong Lộc Hoa nội thất' /></a></div><h3><a href='cay-phong-loc-hoa-noi-that.html'>Cây Phong Lộc Hoa nội thất</a></h3>    <div class='price-product'>260,000 đ</div><div class='cart-product'><a href='../gio-hang.html?n=996&amp;p=601'><i class='fa fa-shopping-cart'></i></a><a href='cay-phong-loc-hoa-noi-that.html'><i class='fa fa-eye'></i></a></div></div></li>

        </ul> </div> </div> </div>

<script language="javascript" type="text/javascript">
<!--
    function ValidFeedback() {
        var FeedbackName;
        var FeedbackContent;
        var FeedbackTitle;

        FeedbackName = trimstring(frmWebsite.txtName.value);
        FeedbackContent = trimstring(frmWebsite.txtInfo.value);
        FeedbackCode = trimstring(frmWebsite.txtMabaove.value);

        if (FeedbackName == "") {
            alert("Vui lòng nhập Họ và tên !");
            frmWebsite.txtName.value = "";
            frmWebsite.txtName.focus();
            return false;
        }
        if (FeedbackContent == "") {
            alert("Vui lòng nhập vào nội dung !");
            frmWebsite.txtInfo.value = "";
            frmWebsite.txtInfo.focus();
            return false;
        }
        if (FeedbackContent == "") {
            alert("Vui lòng nhập mã bảo vệ !");
            frmWebsite.txtMabaove.value = "";
            frmWebsite.txtMabaove.focus();
            return false;
        }
        return true;
    }
//-->
</script>


   </div>
</section>
@endsection
