<?php
include '../config.php';

$m_sql = "SELECT * FROM quot";
$temp = $conn->query($m_sql);
if ($temp) {
    while ($row = mysqli_fetch_assoc($temp)) {

        if ($row['quot_service'] == "sell") {

            $sel_sql = "SELECT q.quot_id, q.name AS quot_name, q.phone, q.quot_service, q.city, q.property_type, q.message, s.id AS sell_id, s.title, s.address, s.area_sq, s.price, s.property_age, s.bedroom, s.furnishing FROM quot q JOIN sell_quot s ON q.quot_id = s.quot_id";
            $sel_result = $conn->query($sel_sql);
            $s_row = $sel_result->fetch_assoc();
            ?>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30'>
                <div class='contact_blog'>
                    <div class='contact_inner'>
                        <div class='left'>
                            <h3>Person ID:- <span
                                    style="text-transform: uppercase; color: #241571;"><?php echo $s_row['quot_id'] ?></span>
                            </h3>
                            <h3>Service type: <span
                                    style="text-transform: uppercase; color: red;">"<?php echo $s_row['quot_service'] ?>"</span>
                            </h3>
                            <ul class='list-unstyled'>
                                <li>
                                    <h4>Name: <span style="color: green;"><?php echo $row['name'] ?></span></h4>
                                </li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Phone Number:</span>
                                    <?php echo $s_row['phone'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">City: </span>
                                    <?php echo $s_row['city'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Propert Type: </span>
                                    <?php echo $s_row['property_type'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Name: </span>
                                    <?php echo $s_row['title'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Address: </span>
                                    <?php echo $s_row['address'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Area: </span>
                                    <?php echo $s_row['area_sq'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Bedrooms in Property: </span>
                                    <?php echo $s_row['bedroom'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Status: </span>
                                    <?php echo $s_row['furnishing'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Age: </span>
                                    <?php echo $s_row['property_age'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Property Price: </span>
                                    <?php echo $s_row['price'] ?></li>
                            </ul>
                            <p>
                            <h5 style="color: #000000;">Message: </h5><?php echo $s_row['message'] ?></p>
                        </div>
                        <div class='bottom_list'>
                            <div class='right_button'>
                                <a href="php/del_quote.php?quote_id=<?php echo $s_row['quot_id'] ?>"
                                    class='btn btn-danger btn-xs'><i class="far fa-trash-alt"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } elseif ($row['quot_service'] == "buy") {

            $buy_sql = "SELECT q.quot_id, q.name AS quot_name, q.phone, q.quot_service, q.city, q.property_type, q.message, b.id AS buy_id, b.area, b.price FROM quot q JOIN buy_quot b ON q.quot_id = b.quot_id";
            $buy_result = $conn->query($buy_sql);
            $b_row = $buy_result->fetch_assoc();

            ?>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30'>
                <div class='contact_blog'>
                    <div class='contact_inner'>
                        <div class='left'>
                            <h3>Person ID:- <span
                                    style="text-transform: uppercase; color: #241571;"><?php echo $b_row['quot_id'] ?></span>
                            </h3>
                            <h3>Service type: <span
                                    style="text-transform: uppercase; color: red;">"<?php echo $b_row['quot_service'] ?>"</span>
                            </h3>
                            <ul class='list-unstyled'>
                                <li>
                                    <h4>Name: <span style="color: green;"><?php echo $row['name'] ?></span></h4>
                                </li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Phone Number:</span>
                                    <?php echo $b_row['phone'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">City: </span>
                                    <?php echo $b_row['city'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Buying Property Type: </span>
                                    <?php echo $b_row['property_type'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Buying Property Area: </span>
                                    <?php echo $b_row['area'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Buying Budget: </span>
                                    <?php echo $b_row['price'] ?></li>
                            </ul>
                            <p>
                            <h5 style="color: #000000;">Message: </h5><?php echo $b_row['message'] ?></p>
                        </div>
                        <div class='bottom_list'>
                            <div class='right_button'>
                                <a href="php/del_quote.php?quote_id=<?php echo $b_row['quot_id'] ?>"
                                    class='btn btn-danger btn-xs'><i class="far fa-trash-alt"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

        } elseif ($row['quot_service'] == "rent") {
            ?>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30'>
                <div class='contact_blog'>
                    <div class='contact_inner'>
                        <div class='left'>
                            <h3>Person ID:- <span
                                    style="text-transform: uppercase; color: #241571;"><?php echo $row['quot_id'] ?></span>
                            </h3>
                            <h3>Service type: <span
                                    style="text-transform: uppercase; color: red;">"<?php echo $row['quot_service'] ?>"</span></h3>
                            <ul class='list-unstyled'>
                                <li>
                                    <h4>Name: <span style="color: green;"><?php echo $row['name'] ?></span></h4>
                                </li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Phone Number:</span>
                                    <?php echo $row['phone'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">City: </span>
                                    <?php echo $row['city'] ?></li>
                                <li style="margin-bottom: 4px;"><span style="color: #000000;">Rent Property Type: </span>
                                    <?php echo $row['property_type'] ?></li>
                            </ul>
                            <p>
                            <h5 style="color: #000000;">Message: </h5><?php echo $row['message'] ?></p>
                        </div>
                        <div class='bottom_list'>
                            <div class='right_button'>
                                <a href="php/del_quote.php?quote_id=<?php echo $row['quot_id'] ?>" class='btn btn-danger btn-xs'><i
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