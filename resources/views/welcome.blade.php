<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>home page</title>
</head>
<body>
    <div class="super_container">
	
        <!-- Header -->
        
        <header class="header">
    
            <!-- Top Bar -->
    
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt=""></div>+91 9823 132 111</div>
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">contact@bbbootstrap.com</a></div>
                            <div class="top_bar_content ml-auto">
                               
                                <div class="top_bar_user">
                                    <div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
                                    <div><a href="#">Register</a></div>
                                    <div><a href="#">Sign in</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>		
            </div>
    
            <!-- Header Main -->
    
            <div class="header_main">
                <div class="container">
                    <div class="row">
    
                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="#">BBB</a></div>
                            </div>
                        </div>
    
                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                            <div class="custom_dropdown" style="display: none;">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc">All Categories</span>
                                                    <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">All Categories</a></li>
                                                        <li><a class="clc" href="#">Computers</a></li>
                                                        <li><a class="clc" href="#">Laptops</a></li>
                                                        <li><a class="clc" href="#">Cameras</a></li>
                                                        <li><a class="clc" href="#">Hardware</a></li>
                                                        <li><a class="clc" href="#">Smartphones</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300" value="Submit"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                    <div class="wishlist_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt=""></div>
                                    <div class="wishlist_content">
                                        <div class="wishlist_text"><a href="#">Wishlist</a></div>
                                        <div class="wishlist_count">10</div>
                                    </div>
                                </div>
    
                                <!-- Cart -->
                                <div class="cart">
                                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">
                                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
                                            <div class="cart_count"><span>3</span></div>
                                        </div>
                                        <div class="cart_content">
                                            <div class="cart_text"><a href="#">Cart</a></div>
                                            <div class="cart_price">$185</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Navigation -->
    
            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            
                            <div class="main_nav_content d-flex flex-row">
    
                                <!-- Categories Menu -->
    
                                
    
                                <!-- Main Nav Menu -->
    
                                <div class="main_nav_menu">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
                                       
                                        <li><a href="contact.html">Product<i class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </div>
    
                                <!-- Menu Trigger -->
    
                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">menu</div>
                                            <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            
            <!-- Menu -->
    
            <div class="page_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            
                            <div class="page_menu_content">
                                
                                <div class="page_menu_search">
                                    <form action="#">
                                        <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                                    </form>
                                </div>
                                <ul class="page_menu_nav">
                                    <li class="page_menu_item has-children">
                                        <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                            <li class="page_menu_item has-children">
                                                <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                <ul class="page_menu_selection">
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                                
                                <div class="menu_contact">
                                    <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
                                    <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </header>
        
        <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="row p-2 bg-white border rounded">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="data:image/jpeg;base64,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"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant olap shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to cart</button></div>
                        </div>
                    </div>
                    <div class="row p-2 bg-white border rounded mt-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="data:image/jpeg;base64,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"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant trident shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">$14.99</h4><span class="strike-text">$20.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to cart</button></div>
                        </div>
                    </div>
                    <div class="row p-2 bg-white border rounded mt-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="data:image/jpeg;base64,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"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant ruybi shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>123</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to cart</button></div>
                        </div>
                    </div>
                    <div class="row p-2 bg-white border rounded mt-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="data:image/jpeg;base64,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"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant tinor shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>110</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">$15.99</h4><span class="strike-text">$21.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to cart</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>