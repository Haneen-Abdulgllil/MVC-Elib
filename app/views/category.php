
<?php 
    require_once 'include/head-cart.php';

    require_once 'include/navbar.php';

    require_once 'include/slider.php';
?>

    <!-- start category content -->
<div class="category-container">
        <div class="category-content">
            <div class="category-right">
                    <ul class="breadcrumb">
                            <li><a href="#">الرئيسية</a></li>
                            <li><a href="#">الكتب العربية</a></li>
                            <li><a href="#">كتب الكترونية</a></li>
                    </ul>

                    <div class="right-content">
                        <div class="right-head">
                                <h3>كتب الكترونية</h3>
                                <p><i class="fa fa-book" id="icon"></i></p>  
                            
                        </div>
                        <div class="right-body">
                            <div class="results">
                                <div class="result-head">
                                    <h4>تصفية النتائج</h4>
                                </div>
                                <div class="result-body">
                                    <div class="result-line1">
                                        <p>علامة تجارية</p>
                                        <p><i class="fa fa-book" id="icon"></i></p>

                                    </div>
                                    <div class="result-line1">
                                            <p>السعر</p>
                                            <p><i class="fa fa-book" id="icon"></i></p>
                                    </div>
                                    <div class="result-bar">
                                            <p><i class="fa fa-square" id="icon"></i></p>
                                            <p><i class="fa fa-square" id="icon"></i></p>
                                    
                                    </div>
                                    <div class="result-line1">
                                            <p>علامة تجارية</p>
                                            <p><i class="fa fa-book" id="icon"></i></p>
                                    </div>
                                </div>
                            </div> 
                            
                <ol id="list">
                        <li class="book">فن</li>
                        <li class="book">رواية</li>
                        <li class="book">اقتصاد</li>
                        <li class="book">دين</li>
                        <li class="book">طبخ</li>
                        <li class="book">شعر</li>
                        <li class="book">موسيقى</li>
                        <li class="book">ادب</li>
                        <li class="book">علوم</li>
                        <li class="book">تربية</li>
    
                    </ol>

                        </div>
                    </div>

        
        
            </div>
            <div class="category-left">
                <div class="category-search">
                <form action="">
        
                    <input id="searchbar" type="text"  placeholder="الرجاء الاختيار" onkeyup="search_book()" name="search" >
                    <label for="order">: الترتيب بحسب</label>
                </form>

                </div>
                <div class="category-book">
                    
<!-- first row -->
                            <div class="order_container">
                                    
                                    <div class="order_content">
                                                <div class="product_card">
                                                    <img src="app/views/assets/img/book.jpg" alt="Denim Jeans">
                                                    <h3>كتاب الكتروني<i class="fa fa-book-reader"></i></h3>
                                                    <p class="price">$19.99</p>
                                                    <h6>شامل الضريبة</h6>
                                                    <h5>صيغ اخرى:كتب مطبوعة</h5>
                                                    <div class="product_icons">
                                                        <a href=""><img src="app/views/assets/img/svg/svgexport-55.svg" alt=""></a>
                                                        <a href=""><img src="app/views/assets/img/svg/svgexport-21.svg" alt=""></a>
                                                        <a href=""><img src="app/views/assets/img/svg/svgexport-55.svg" alt=""></a>
                                
                                        
                                                    </div>
                                        
                                        
                                        
                                                </div>
                                
                                
                                        <div class="product_card">
                                            <img src="app/views/assets/img/book.jpg" alt="Denim Jeans">
                                            <h3>كتاب الكتروني<i class="fa fa-book-reader"></i></h3>
                                            
                                            <p class="price">$19.99</p>
                                            <h6>شامل الضريبة</h6>
                                            <h5>صيغ اخرى:كتب مطبوعة</h5>
                                            <div class="product_icons">
                                                <a href=""><img src="app/views/assets/img/svg/svgexport-55.svg" alt=""></a>
                                                <a href=""><img src="app/views/assets/img/svg/svgexport-21.svg" alt=""></a>
                                                <a href=""><img src="app/views/assets/img/svg/svgexport-55.svg" alt=""></a>
                                
                                
                                            </div>
                                
                                
                                
                                        </div>
                                
                                
                                
                                    <div class="product_card">
                                        <img src="app/views/assets/img/book.jpg" alt="Denim Jeans">
                                        <h3>كتاب الكتروني<i class="fa fa-book-reader"></i></h3>
                                        
                                        <p class="price">$19.99</p>
                                        <h6>شامل الضريبة</h6>
                                        <h5>صيغ اخرى:كتب مطبوعة</h5>
                                        <div class="product_icons">
                                            <a href=""><img src="app/views/assets/img/svg/svgexport-55.svg" alt=""></a>
                                            <a href=""><img src="app/views/assets/img/svg/svgexport-21.svg" alt=""></a>
                                            <a href=""><img src="app/views/assets/img/svg/svgexport-55.svg" alt=""></a>
                                
                                
                                        </div>
                                
                                
                                
                                    </div>
                                
                                </div>
                                
                                
                                </div>

                        

                </div>

            </div>
        </div>
    </div>
    
    <?php 
    require_once 'include/footer.php';
    ?>
    <!-- end category content -->
        


</body>
</html>