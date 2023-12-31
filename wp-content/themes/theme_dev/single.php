<?php 
    get_header();
?>
    <!-- :::::::::: Header Section Start :::::::: -->
    
    <!-- ::::::::::: Header Section End ::::::::: -->

    
    <!-- :::::::::: Page Banner Section Start :::::::: -->
    <section class="blog-bg background-img">
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title"><?php bloginfo('name');?></h2>
                    <!-- Page Heading Breadcrumb Start -->
                    <nav class="page-breadcrumb-item">
                        <ol>
                            <li><a href="index.php">Home <i class="fa fa-angle-double-right"></i></a></li>
                            <!-- Active Breadcrumb -->
                            <li class="active">Blog</li>
                        </ol>
                    </nav>
                    <!-- Page Heading Breadcrumb End -->
                </div>
                  
            </div>
            <!-- Row End -->
        </div>
    </section>
    <!-- ::::::::::: Page Banner Section End ::::::::: -->

    <!-- :::::::::: Blog With Right Sidebar Start :::::::: -->
    <section>
        <div class="container">
            <div class="row">
                <!-- Blog Posts Start -->
                <div class="col-md-8">

                    <!-- Single Item Blog Post Start -->

                    <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post(); ?>
                                <div class="blog-post">
                                    <!-- Blog Banner Image -->
                                    <div class="blog-banner">
                                        <a href="#">
                                            <?php 
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail();
                                                }
                                            ?>
                                            <!-- Post Category Names -->
                                            <div class="blog-category-name">
                                                <h6><?php the_category();?></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Blog Info, Date and Author -->
                                        <div class="row py-5">
                                            <div class="col-md-8">
                                                <div class="blog-info">
                                                    <ul>
                                                        <li><i class="fa fa-calendar"></i><?php echo get_the_date();?></li>
                                                        <li><i class="fa fa-user"></i>by  <?php the_author(); ?></li>
                                                        <li><i class="fa fa-heart"></i>(50)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- Blog Title and Description -->
                                    <div class="blog-description">
                                        <a href="#">
                                            <h3 class="post-title"><?php the_title();?></h3>
                                        </a>
                                        <p>
                                            <?php 
                                                
                                               the_content();
                                            ?>
                                            
                                        </p>
                                        
                                    </div>
                                    <?php 

                                        comments_template();

                                    ?>
                                </div>
                            <?php endwhile;
                        endif;
                    ?>
                    
                    <!-- Single Item Blog Post End -->               
                </div>



                <!-- Blog Right Sidebar -->
                <div class="col-md-4">

                    <!-- Latest News -->
                    <div class="widget">
                        <h4>Latest News</h4>
                        <div class="title-border"></div>
                        
                        <!-- Sidebar Latest News Slider Start -->
                        <div class="sidebar-latest-news owl-carousel owl-theme">
                            <!-- First Latest News Start -->
                            <div class="item">
                                <div class="latest-news">
                                    <!-- Latest News Slider Image -->
                                    <div class="latest-news-image">
                                        <a href="#">
                                            <img src="assets/images/blog/test.jpg">
                                        </a>
                                    </div>
                                    <!-- Latest News Slider Heading -->
                                    <h5>CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD.</h5>
                                    <!-- Latest News Slider Paragraph -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                            <!-- First Latest News End -->
                            
                            <!-- Second Latest News Start -->
                            <div class="item">
                                <div class="latest-news">
                                    <!-- Latest News Slider Image -->
                                    <div class="latest-news-image">
                                        <a href="#">
                                            <img src="assets/images/blog/test.jpg">
                                        </a>
                                    </div>
                                    <!-- Latest News Slider Heading -->
                                    <h5>CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD.</h5>
                                    <!-- Latest News Slider Paragraph -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                            <!-- Second Latest News End -->
                            
                            <!-- Third Latest News Start -->
                            <div class="item">
                                <div class="latest-news">
                                    <!-- Latest News Slider Image -->
                                    <div class="latest-news-image">
                                        <a href="#">
                                            <img src="assets/images/blog/test.jpg">
                                        </a>
                                    </div>
                                    <!-- Latest News Slider Heading -->
                                    <h5>CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD.</h5>
                                    <!-- Latest News Slider Paragraph -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                            <!-- Third Latest News End -->
                        </div>
                        <!-- Sidebar Latest News Slider End -->
                    </div>


                    <!-- Search Bar Start -->
                    <div class="widget"> 
                            <!-- Search Bar -->
                            <h4>Blog Search</h4>
                            <div class="title-border"></div>
                            <div class="search-bar">
                                <!-- Search Form Start -->
                                <form>
                                    <div class="form-group">
                                        <input type="text" name="search" placeholder="Search Here" autocomplete="off" class="form-input">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </div>
                                </form>
                                <!-- Search Form End -->
                            </div>
                    </div>
                    <!-- Search Bar End -->

                    <!-- Recent Post -->
                    <div class="widget">
                        <h4>Recent Posts</h4>
                        <div class="title-border"></div>
                        <div class="recent-post">
                            <!-- Recent Post Item Content Start -->
                            <div class="recent-post-item">
                                <div class="row">
                                    <!-- Item Image -->
                                    <div class="col-md-4">
                                        <img src="assets/images/corporate-team/team-1.jpg">
                                    </div>
                                    <!-- Item Tite -->
                                    <div class="col-md-8 no-padding">
                                        <h5>Corporate World is Here with Technology</h5>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>Dec 15, 2018</li>
                                            <li><i class="fa fa-comment-o"></i>15</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Post Item Content End -->

                            <!-- Recent Post Item Content Start -->
                            <div class="recent-post-item">
                                <div class="row">
                                    <!-- Item Image -->
                                    <div class="col-md-4">
                                        <img src="assets/images/corporate-team/team-1.jpg">
                                    </div>
                                    <!-- Item Tite -->
                                    <div class="col-md-8 no-padding">
                                        <h5>Corporate World is Here with Technology</h5>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>Dec 15, 2018</li>
                                            <li><i class="fa fa-comment-o"></i>15</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Post Item Content End -->

                            <!-- Recent Post Item Content Start -->
                            <div class="recent-post-item">
                                <div class="row">
                                    <!-- Item Image -->
                                    <div class="col-md-4">
                                        <img src="assets/images/corporate-team/team-1.jpg">
                                    </div>
                                    <!-- Item Tite -->
                                    <div class="col-md-8 no-padding">
                                        <h5>Corporate World is Here with Technology</h5>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>Dec 15, 2018</li>
                                            <li><i class="fa fa-comment-o"></i>15</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Post Item Content End -->

                            <!-- Recent Post Item Content Start -->
                            <div class="recent-post-item">
                                <div class="row">
                                    <!-- Item Image -->
                                    <div class="col-md-4">
                                        <img src="assets/images/corporate-team/team-1.jpg">
                                    </div>
                                    <!-- Item Tite -->
                                    <div class="col-md-8 no-padding">
                                        <h5>Corporate World is Here with Technology</h5>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>Dec 15, 2018</li>
                                            <li><i class="fa fa-comment-o"></i>15</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Post Item Content End -->

                        </div>
                    </div>

                    <!-- All Category -->
                    <div class="widget">
                        <h4>Blog Categories</h4>
                        <div class="title-border"></div>
                        <!-- Blog Category Start -->
                        <div class="blog-categories">
                            <ul>
                                <!-- Category Item -->
                                <li>
                                    <i class="fa fa-check"></i>
                                    Information Technology 
                                    <span>[22]</span>
                                </li>
                                <!-- Category Item -->
                                <li>
                                    <i class="fa fa-check"></i>
                                    Corporate News 
                                    <span>[20]</span>
                                </li>
                                <!-- Category Item -->
                                <li>
                                    <i class="fa fa-check"></i>
                                    Web Design and Development 
                                    <span>[35]</span>
                                </li>
                                <!-- Category Item -->
                                <li>
                                    <i class="fa fa-check"></i>
                                    Social Media Marketing 
                                    <span>[29]</span>
                                </li>
                                <!-- Category Item -->
                                <li>
                                    <i class="fa fa-check"></i>
                                    Search Engine Optimization 
                                    <span>[27]</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Blog Category End -->
                    </div>

                    <!-- Recent Comments -->
                    <div class="widget">
                        <h4>Recent Comments</h4>
                        <div class="title-border"></div>
                        <div class="recent-comments">
                            
                            <!-- Recent Comments Item Start -->
                            <div class="recent-comments-item">
                                <div class="row">
                                    <!-- Comments Thumbnails -->
                                    <div class="col-md-4">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <!-- Comments Content -->
                                    <div class="col-md-8 no-padding">
                                        <h5>admin on blog posts</h5>
                                        <!-- Comments Date -->
                                        <ul>
                                            <li>
                                                <i class="fa fa-clock-o"></i>Dec 15, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Comments Item End -->

                            <!-- Recent Comments Item Start -->
                            <div class="recent-comments-item">
                                <div class="row">
                                    <!-- Comments Thumbnails -->
                                    <div class="col-md-4">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <!-- Comments Content -->
                                    <div class="col-md-8 no-padding">
                                        <h5>admin on blog posts</h5>
                                        <!-- Comments Date -->
                                        <ul>
                                            <li>
                                                <i class="fa fa-clock-o"></i>Dec 15, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Comments Item End -->

                            <!-- Recent Comments Item Start -->
                            <div class="recent-comments-item">
                                <div class="row">
                                    <!-- Comments Thumbnails -->
                                    <div class="col-md-4">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <!-- Comments Content -->
                                    <div class="col-md-8 no-padding">
                                        <h5>admin on blog posts</h5>
                                        <!-- Comments Date -->
                                        <ul>
                                            <li>
                                                <i class="fa fa-clock-o"></i>Dec 15, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Comments Item End -->

                        </div>
                    </div>

                    <!-- Meta Tag -->
                    <div class="widget">
                        <h4>Tags</h4>
                        <div class="title-border"></div>
                        <!-- Meta Tag List Start -->
                        <div class="meta-tags">
                            <span>Business</span>
                            <span>Technology</span>
                            <span>Corporate</span>
                            <span>Web Design</span>
                            <span>Development</span>
                            <span>Graphic</span>
                            <span>Digital Marketing</span>
                            <span>SEO</span> 
                            <span>Social Media</span>          
                        </div>
                        <!-- Meta Tag List End -->
                    </div>

                </div>
                <!-- Right Sidebar End -->
            </div>
        </div>
    </section>
    <!-- ::::::::::: Blog With Right Sidebar End ::::::::: -->
    
    <?php 
      get_footer();
    ?>
