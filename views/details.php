
<style>
    body{margin-top:20px;
}

/*panel*/
.panel {
    border: none;
    box-shadow: none;
}

.panel-heading {
    border-color:#eff2f7 ;
    font-size: 16px;
    font-weight: 300;
}

.panel-title {
    color: #2A3542;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0;
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
}

/*product list*/

.prod-cat li a{
    border-bottom: 1px dashed #d9d9d9;
}

.prod-cat li a {
    color: #3b3b3b;
}

.prod-cat li ul {
    margin-left: 30px;
}

.prod-cat li ul li a{
    border-bottom:none;
}
.prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
    background: none;
    color: #ff7261;
}

.pro-lab{
    margin-right: 20px;
    font-weight: normal;
}

.pro-sort {
    padding-right: 20px;
    float: left;
}

.pro-page-list {
    margin: 5px 0 0 0;
}

.product-list img{
    width: 100%;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
}

.product-list .pro-img-box {
    position: relative;
}
.adtocart {
    background: #fc5959;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #fff;
    display: inline-block;
    text-align: center;
    border: 3px solid #fff;
    left: 45%;
    bottom: -25px;
    position: absolute;
}

.adtocart i{
    color: #fff;
    font-size: 25px;
    line-height: 42px;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 20px;
    font-size: 16px;
}

.product-list .price {
    color:#fc5959 ;
    font-size: 15px;
}

.pro-img-details {
    margin-left: -15px;
}

.pro-img-details img {
    width: 100%;
}

.pro-d-title {
    font-size: 16px;
    margin-top: 0;
}

.product_meta {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin: 15px 0;
}

.product_meta span {
    display: block;
    margin-bottom: 10px;
}
.product_meta a, .pro-price{
    color:#fc5959 ;
}

.pro-price, .amount-old {
    font-size: 18px;
    padding: 0 10px;
}

.amount-old {
    text-decoration: line-through;
}

.quantity {
    width: 120px;
}

.pro-img-list {
    margin: 10px 0 0 -15px;
    width: 100%;
    display: inline-block;
}

.pro-img-list a {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
}

.pro-d-head {
    font-size: 18px;
    font-weight: 300;
}
</style>

<div class="container bootdey">
<div class="col-md-12">
<section class="panel">
      <div class="row">
          <div class="col-md-6">
              <div class="pro-img-details">
                  <img src="https://www.bootdey.com/image/550x380/FFB6C1/000000" alt="">
              </div>
              <div class="pro-img-list">
                  <a href="#">
                      <img src="https://www.bootdey.com/image/115x100/87CEFA/000000" alt="">
                  </a>
                  <a href="#">
                      <img src="https://www.bootdey.com/image/115x100/FF7F50/000000" alt="">
                  </a>
                  <a href="#">
                      <img src="https://www.bootdey.com/image/115x100/20B2AA/000000" alt="">
                  </a>
                  <a href="#">
                      <img src="https://www.bootdey.com/image/120x100/20B2AA/000000" alt="">
                  </a>
              </div>
          </div>
           
                                
            <?php
                if (!empty($eventDetails)) {
                    foreach ($eventDetails as $eventDetail) {
                        echo "
                            <div class='col-md-6'>
                                <h1 class='pro-d-title'>
                                    " . $eventDetail->event_name . "
                                </h1>
                                <p>
                                    " . $eventDetail->description . "
                                </p>
                                <div class='product_meta'>
                                    <span class='posted_in'>
                                        <strong>Location:</strong> " . $eventDetail->location . "
                                    </span>
                                    <span class='tagged_as'>
                                        <strong>Date:</strong> " . $eventDetail->date . "
                                    </span>
                                </div>

                                <div class='m-bot15'>
                                    <strong>Price Of Tickets : </strong>
                                    <span class='pro-price'>" . $eventDetail->ticket_price . "</span>
                                </div>
                                <div class='m-bot15'>
                                    <strong>Type Of Tickets : </strong>
                                    <select id='ticketType'>
                                        <option id='vip' selected value='" . $eventDetail->ticket_price . "'>vip</option>
                                        <option id='basic' value='" . $eventDetail->ticket_price . "'>basic</option>
                                    </select>
                                </div>
                                <div class='form-group my-2'>
                                    <label>Tickets</label>
                                    <input type='quantiy' value='1' class='form-control quantity'>
                                </div>
                                <p>
                                    <button class='btn btn-round btn-danger' type='button'>
                                        <i class='fa fa-shopping-cart'></i> Add to Cart
                                    </button>
                                </p>
                            </div>
                        ";
                    }
                }
            ?>
      </div>
  </section>
  </div>
  </div>

    <script>
        let ticketTypeSelect = document.querySelector("#ticketType");
        let proPrice = document.querySelector(".pro-price");
        let vip = document.querySelector("#vip");
        let basic = document.querySelector("#basic");
        console.log(basic.value);

        ticketTypeSelect.addEventListener("change", function() {
            let selectedValue = ticketTypeSelect.value;
            if (selectedValue === "vip") {
                proPrice.textContent = vip.value; // Adjust the value accordingly
            } else if (selectedValue === "basic") {
                proPrice.textContent = basic.value; // Adjust the value accordingly
            }
        });
        
    </script>