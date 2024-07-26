<div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
            <div class="custom-container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="active"><?= $page['title']; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="blog-details-area padding-30-row-col pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                        <div class="blog-details-wrapper">
                            <div class="blog-details-top-content">
                                <div class="post-categories">
                                    <a href="blog.html"><?= $page['title']; ?></a>
                                </div>
                            </div>
                            <?= $page['content']; ?>
                            <div class="blog-tag-share-wrap">
                                <div class="blog-tag-wrap">
                                    <span class="tag-icon "></span>
                                    <div class="blog-tag">
                                      
                                    </div>
                                </div>
                                <div class="blog-share-wrap">
                                    <div class="blog-share-content">
                                        <span> Ikuti Kami di </span>
                                    </div>
                                    <div class="blog-share-icon">
                                        <span class="fas fa-share-alt"></span>
                                        <div class="blog-share-list tooltip-style-4 bs-list-responsive">
                                            <a aria-label="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a aria-label="Twitter" href="#"><i class="fab fa-twitter"></i></a>
                                            <a aria-label="Linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                                            <a aria-label="Tumblr" href="#"><i class="fab fa-tumblr-square"></i></a>
                                            <a aria-label="Envelope" href="#"><i class="fas fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                           
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>