<?php
$query = "select * from `quote`";
$temp = mysqli_query($conn, $query);
if ($temp) {
    while ($row = mysqli_fetch_assoc($temp)) {
        $quote_id = $row["quote_id"];
        $name = $row["quote_name"];
        $phone_number = $row["quote_phone"];
        $quote_type = $row["quote_type"];
        $quote_city = $row["quote_city"];
        $sell_prop_name = $row["sell_prop_name"];
        $sell_prop_add = $row["sell_prop_address"];
        $sell_prop_area = $row["sell_prop_area"];
        $sell_prop_price = $row["sell_prop_price"];
        $sell_prop_age = $row["sell_prop_age"];
        $sell_prop_bed = $row["sell_prop_bed"];
        $sell_prop_status = $row["sell_prop_status"];
        $buy_prop_area = $row["buy_prop_area"];
        $buy_prop_budget = $row["buy_prop_budget"];
        $buy_prop_type = $row["buy_prop_type"];
        $quote_message = $row["quote_msg"];
        
        if ($quote_type == "sell") {
            ?>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30'>
                <div class='contact_blog'>
                    <div class='contact_inner'>
                        <div class='left'>
                            <h3>Person ID:- <span style="text-transform: uppercase; color: #241571;"><?php echo $quote_id ?></span>
                            </h3>
                            <h3>Service type: <span
                                    style="text-transform: uppercase; color: red;">"<?php echo $quote_type ?>"</span></h3>
                            <ul class='list-unstyled'>
                                <li>
                                    <h4>Name: <span style="color: green;"><?php echo $name ?></span></h4>
                                </li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Phone Number:</span>
                                    <?php echo $phone_number ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">City: </span>
                                    <?php echo $quote_city ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Propert Type: </span>
                                    <?php echo $buy_prop_type ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Name: </span>
                                    <?php echo $sell_prop_name ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Address: </span>
                                    <?php echo $sell_prop_add ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Area: </span>
                                    <?php echo $sell_prop_area ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Bedrooms in Property: </span>
                                    <?php echo $sell_prop_bed ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Status: </span>
                                    <?php echo $sell_prop_status ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Age: </span>
                                    <?php echo $sell_prop_age ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Price: </span>
                                    <?php echo $sell_prop_price ?></li>
                            </ul>
                            <p>
                            <h5 style="color: #000000;">Message: </h5><?php echo $quote_message ?></p>
                        </div>
                        <div class='bottom_list'>
                            <div class='right_button'>
                                <a href="php/del_quote.php?quote_id=<?php echo $quote_id ?>" class='btn btn-danger btn-xs'><i
                                        class="far fa-trash-alt"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } elseif ($quote_type == "buy") {
            ?>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30'>
                <div class='contact_blog'>
                    <div class='contact_inner'>
                        <div class='left'>
                            <h3>Person ID:- <span style="text-transform: uppercase; color: #241571;"><?php echo $quote_id ?></span>
                            </h3>
                            <h3>Service type: <span
                                    style="text-transform: uppercase; color: red;">"<?php echo $quote_type ?>"</span></h3>
                            <ul class='list-unstyled'>
                                <li>
                                    <h4>Name: <span style="color: green;"><?php echo $name ?></span></h4>
                                </li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Phone Number:</span>
                                    <?php echo $phone_number ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">City: </span>
                                    <?php echo $quote_city ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Buying Property Type: </span>
                                    <?php echo $buy_prop_type ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Buying Property Area: </span>
                                    <?php echo $buy_prop_area ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Buying Budget: </span>
                                    <?php echo $buy_prop_budget ?></li>
                            </ul>
                            <p>
                            <h5 style="color: #000000;">Message: </h5><?php echo $quote_message ?></p>
                        </div>
                        <div class='bottom_list'>
                            <div class='right_button'>
                                <a href="php/del_quote.php?quote_id=<?php echo $quote_id ?>" class='btn btn-danger btn-xs'><i
                                        class="far fa-trash-alt"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } elseif ($quote_type == "rent") {
            ?>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30'>
                <div class='contact_blog'>
                    <div class='contact_inner'>
                        <div class='left'>
                            <h3>Person ID:- <span style="text-transform: uppercase; color: #241571;"><?php echo $quote_id ?></span>
                            </h3>
                            <h3>Service type: <span
                                    style="text-transform: uppercase; color: red;">"<?php echo $quote_type ?>"</span></h3>
                            <ul class='list-unstyled'>
                                <li>
                                    <h4>Name: <span style="color: green;"><?php echo $name ?></span></h4>
                                </li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Phone Number:</span>
                                    <?php echo $phone_number ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">City: </span>
                                    <?php echo $quote_city ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Rent Property Type: </span>
                                    <?php echo $buy_prop_type ?></li>
                            </ul>
                            <p>
                            <h5 style="color: #000000;">Message: </h5><?php echo $quote_message ?></p>
                        </div>
                        <div class='bottom_list'>
                            <div class='right_button'>
                                <a href="php/del_quote.php?quote_id=<?php echo $quote_id ?>" class='btn btn-danger btn-xs'><i
                                        class="far fa-trash-alt"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
?>