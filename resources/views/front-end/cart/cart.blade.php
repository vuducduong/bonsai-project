@extends('front-end.master')
@section('content')
<section class="bg-dark" style="padding-top: 20px">
  <div class="container">
       <div class="content-page">
    <div class="title-signin">
        <h2>
            Giỏ hàng</h2>
    </div>
    <div id="tblBasket" class="cart-page">
        <div id="tblText" class="basket-text">
            - Nhấn nút "cập nhật" để thay đổi số lượng hoặc xóa sản phẩm trong giỏ hàng.
            <br>
            - Nhấn nút "Chọn sản phẩm" để chọn thêm sản phẩm khác muốn mua thêm.
            <br>
            - Sau khi đã chọn xong các sản phẩm cần mua. Nhấn nút "Đặt hàng" để mua hàng.
        </div>
        <div class="basket-table table-responsive">
            <div>
	<table class="table" cellspacing="0" rules="all" border="1" id="grdBasket" style="border-style:None;border-collapse:collapse;">
		<thead>
			<tr>
				<th scope="col">STT</th><th scope="col">Hình ảnh</th><th scope="col">Tên sản phẩm</th><th scope="col">Đơn giá</th><th scope="col">Số lượng</th><th scope="col">Thành tiền</th><th scope="col">Xóa</th>
			</tr>
		</thead><tbody>
			<tr>
				<td class="number">
                            <span id="grdBasket__ctl2_lblOrder">1</span>
                        </td><td class="picture-cart">
                            <a id="grdBasket__ctl2_LblProImg" href="/san-pham/cay-thiet-moc-lan-noi-that.html">
														<img src="../data/items/1216/thiet-moc-lan-vcv.jpg" alt="Cây Thiết Mộc Lan nội thất">
                            </a>
                        </td><td class="namepro-cart">
                            <a id="grdBasket__ctl2_hlkProName" href="/san-pham/cay-thiet-moc-lan-noi-that.html">Cây Thiết Mộc Lan nội thất</a>
                        </td><td class="unit-cart">
                            <span id="grdBasket__ctl2_lblProPrice">650,000&nbsp;đ/Bộ</span>
                        </td><td class="quanlity-cart">
                            <input name="grdBasket:_ctl2:btnQttDow" type="submit" id="grdBasket__ctl2_btnQttDow" value="-" onclick="downQty1()">
                            <input name="grdBasket:_ctl2:txtQuantity_" type="text" id="grdBasket__ctl2_txtQuantity_" class="FormInput_SL" size="3" maxlength="3" onkeypress="javascript:return inputOnlyNumber(event);" value="1"><input name="grdBasket:_ctl2:btnQttUp" type="submit" id="grdBasket__ctl2_btnQttUp" value="+" onclick="upQty1()">

                        </td><td class="payment-cart">
                            <span id="grdBasket__ctl2_lblProCost">650,000&nbsp;đ</span>
                        </td><td class="delete-cart"><a href="javascript:__doPostBack('grdBasket','Delete$0')">Xóa</a></td>
			</tr>
		</tbody>
	</table>
</div>
        </div>
        <div class="total-price">
            Tổng cộng:<strong style="color: red">
                <span id="lblTotalPrice">650,000</span>
            </strong>
        </div>
        <div class="button-signin">
            &nbsp;&nbsp;
            <input type="image" name="btnSendOrder" id="btnSendOrder" src="{{asset('img/DatHangBtn.png')}}" style="border-width:0px;">&nbsp;&nbsp;
            <input type="image" name="btnShopping" id="btnShopping" src="{{asset('img/ChonSPBtn.png')}}" style="border-width:0px;">
            </div>
    </div>

</div>
   </div>
</section>
@endsection
