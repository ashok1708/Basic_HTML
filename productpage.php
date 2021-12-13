<?php include 'header.php'; ?>

<div class="product-page">
    <div class="product-img">
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/prodcut-page1.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/tile-a1.png">
                </div>

                <div class="swiper-slide">
                    <img src="assets/images/tile-a2.png">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/prodcut-page1.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/tile-a1.png" />
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/tile-a2.png" />
                </div>
            </div>
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
            <div class="area-header">
                <p class="area-heading">Calculate your Area Size</p>
                <img src="assets/images/mins-circle.png">
            </div>
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
            <p class="solidFooter"></p>


        </div>
        <div class="extra">
            <div class="extra-caption">
                <input type="radio" checked value="wast">
                <label for="wast">Add 10% for cuts and wastage </label>
            </div>
            <i class="fas fa-info-circle"></i>
        </div>
        <div class="product-amount">
            <span class="total">Total </span>
            <span class="price">£00</span>
            <span class="inc">inc </span>
            <span class="vat"> VAT</span>
        </div>
        <div class="cart-button">
            <div class="button-div-cart">
                <img src="assets/images/cart-icon.png">
                <a href="#" class="button-product">ADD TO BASKET</a>
            </div>
        </div>
        <div class="sample-button">
            <div class="button-div-cart">
                <img src="assets/images/sample-icon.jpg">
                <a href="#" class="button-product">ADD FREE SAMPLE</a>
            </div>
        </div>
        <div class="delivery-caption">
            <img src="assets/images/square.jpg">
            <div>
                <span>NEXT DAY DELIVERY </span> <br>
                <span>IF ORDERED BEFORE 3PM</span>
            </div>

        </div>

    </div>

</div>
<div class="feature-icon">
    <div class="icon">
        <img src="assets/images/product-icon1.jpg">
        <span>Ceramic</span>
    </div>
    <div class="icon">
        <img src="assets/images/product-icon2.jpg">
        <span>High Gloss Finish</span>
    </div>
    <div class="icon">
        <img src="assets/images/product-icon3.jpg">
        <span>Straight Edges</span>
    </div>
</div>
<div class="tab">
    <p class="solidFoot"></p>

    <ul class="tabs">
        <li class="tab-link current" data-tab="tab-1">PRODUCT DETAILS</li>
        <li class="tab-link" data-tab="tab-2">DELIVERY & RETURNS</li>
        <li class="tab-link" data-tab="tab-3">TILE CARE</li>
        <li class="tab-link" data-tab="tab-4">REVIEWS</li>
    </ul>

    <div id="tab-1" class="tab-content current">Bring that NYC aesthetic to any room with the beautiful Urban Collection.<br>
        A super-stylish collection of glossy wall tiles that draws its inspiration
        from the iconic subway tiles of the New York Subway.<br> <br>

        Available in Six colours: White / Rose Gold / Silver / Cloud  / Royal Blue / Teal<br><br>

        The epitome of urban cool, this stunning collection brings that sought after New York
        vibe to any application, thanks to their <br>retro-tinged styling and high gloss finish. Urban
        is incredibly versatile and ideal for use in bathrooms, kitchens, diners and <br> lounges.
        Constructed from durable ceramic and featuring straight edges, it offers a modern take on the
        iconic subway tile and<br>  is perfect for those looking to emulate that New York apartment look
        in their own interiors.
    </div>
    <div id="tab-2" class="tab-content">fasdkflasdkghaslghasldghalsdghalds
        Bring that NYC aesthetic to any room with the beautiful Urban Collection.
        A super-stylish collection of glossy wall tiles that draws its inspiration
        from the iconic subway tiles of the New York Subway.

        Available in Six colours: White / Rose Gold / Silver / Cloud  / Royal Blue / Teal

        The epitome of urban cool, this stunning collection brings that sought after New York
        vibe to any application, thanks to their retro-tinged styling and high gloss finish. Urban
        is incredibly versatile and ideal for use in bathrooms, kitchens, diners and lounges.
        Constructed from durable ceramic and featuring straight edges, it offers a modern take on the
        iconic subway tile and is perfect for those looking to emulate that New York apartment look
        in their own interiors.
    </div>
    <div id="tab-3" class="tab-content">sdlfkahsd;lfkjdasldgkfjsalkdfjaslakgdjaslgdhkslkgdhasl;dghsaldghdalsBring that NYC aesthetic to any room with the beautiful Urban Collection.
        A super-stylish collection of glossy wall tiles that draws its inspiration
        from the iconic subway tiles of the New York Subway.

        Available in Six colours: White / Rose Gold / Silver / Cloud  / Royal Blue / Teal

        The epitome of urban cool, this stunning collection brings that sought after New York
        vibe to any application, thanks to their retro-tinged styling and high gloss finish. Urban
        is incredibly versatile and ideal for use in bathrooms, kitchens, diners and lounges.
        Constructed from durable ceramic and featuring straight edges, it offers a modern take on the
        iconic subway tile and is perfect for those looking to emulate that New York apartment look
        in their own interiors.
    </div>
    <div id="tab-4" class="tab-content">perouteopiugsgjalksdfhgoidafhgaldfng'adfoghadofga
        Bring that NYC aesthetic to any room with the beautiful Urban Collection.
        A super-stylish collection of glossy wall tiles that draws its inspiration
        from the iconic subway tiles of the New York Subway.

        Available in Six colours: White / Rose Gold / Silver / Cloud  / Royal Blue / Teal

        The epitome of urban cool, this stunning collection brings that sought after New York
        vibe to any application, thanks to their retro-tinged styling and high gloss finish. Urban
        is incredibly versatile and ideal for use in bathrooms, kitchens, diners and lounges.
        Constructed from durable ceramic and featuring straight edges, it offers a modern take on the
        iconic subway tile and is perfect for those looking to emulate that New York apartment look
        in their own interiors.
    </div>
    <p class="solidFoot"></p>
</div>

<div class="complement">
    <h1>Complement With</h1>
    <div class="complement-items">

        <div class="items item-1">
            <img src="assets/images/item-1.jpg">
            <span>Name goes here</span><br>
            <span>£00 </span>
        </div>
        <div class="items item-2">
            <img src="assets/images/item-2.jpg">
            <span>Name goes here</span><br>
            <span class="item-price">£00 </span>
        </div>
        <div class="items item-3">
            <img src="assets/images/item-3.jpg">
            <span>Name goes here</span><br>
            <span class="item-price">£00 </span>
        </div>
        <div class="items item-4">
            <img src="assets/images/item-4.jpg">
            <span>Name goes here</span><br>
            <span class="item-price">£00 </span>
        </div>
    </div>
</div>

<!---->
<?php //include 'footer.php'; ?>

