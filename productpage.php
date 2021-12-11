<?php include 'header.php'; ?>

<div class="product-page">
    <div class="product-img">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/prodcut-page1.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/prodcut-page1.jpg">
                </div>

                <div class="swiper-slide">
                    <img src="assets/images/prodcut-page1.jpg">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>

    <div class="product-details">
        <div class="product-name">
            <h2>Urban Cloud</h2>
            <p>IN STOCK</p>

        </div>
        <div class="reviews">
            <i  class="fas fa-star review-star"></i>
            <i  class="fas fa-star review-star"></i>
            <i  class="fas fa-star review-star"></i>
            <i  class="fas fa-star review-star"></i>
            <i  class="fas fa-star review-star"></i>
            <p>5 reviews</p>
        </div>
        <div class="product-rate">
            <p>£00 per m<sup>2</sup>   <span> 6.5 x 13.2 cm</span></p>
        </div>
        <div class="product-qty">
            <span class="qty">QTY</span><input class="qtybox" type="number" name="quantity" id="quantity">
            <span class="m2">M<sup>2</sup></span><input class="qtybox" type="number" name="m2" id="m2">
        </div>
        <div class="product-area">

            <p class="solidFooter"></p>
            <p class="area-heading">Calculate your Area Size</p>

            <form class="form_top" name="calculator" oninput="area.value=parseInt(height.value)*parseInt(width.value)">
            <span class="area-tag">Height</span><input class="areabox" type="number" name="height" id="height">
            <span class="area-tag" style="margin-left: 10px">Width</span><input class="areabox" type="number" name="width" id="width" onkeyup="areaCal()">

            <select class="sel_box" onchange="areaConv(this.value)">
                <option id="meters" value="meter">Meters</option>
                <option id="inches" value="inch">Inches</option>
            </select>
            <span class="eq-sign">=</span>
            <output name="area" class="area-value" for="hw"></output>
            <span class="area-unit" id="unit">m<sup>2</sup></span>
            </form>
            <div class="add-area">
                <span>Add Another Area</span>
                <i class="fas fa-plus-circle"></i>
            </div>
        </div>

    </div>

</div>


<?php //include 'footer.php'; ?>

<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>