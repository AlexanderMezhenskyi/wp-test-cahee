<?php get_header(); ?>

<main>
    <section id="ba-about" class="ba-section ba-section--about">
        <div class="ba-container">
            <!-- BEGIN ba-grid  -->
            <section class="ba-grid ba-grid-nopad">
                <section class="ba-width-1-2">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/raspberries.png"
                         class="ba-about-us-logo"
                         alt="raspberries">
                </section>
                <section class="ba-width-1-2">
                    <article class="ba-about-us-description">
                        <header>
                            <h2 class="ba-title ba-about-us-description__title">About Us</h2>
                        </header>
                        <section>
                            <p>Abore Cahee magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum.</p>
                            <p>Nim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore.</p>
                        </section>
                    </article>
                </section>
            </section>
            <!-- END ba-grid -->
        </div>
    </section>
    <section id="servicees" class="ba-section ba-section--services">
        <div class="ba-container">
            <!-- BEGIN ba-grid  -->
            <section class="ba-grid">
                <section class="ba-width-1-2">
                    <ul class="ba-services-list">
                        <li class="ba-service">
                            <h5 class="ba-service__title">Online Shopping</h5>
                            <span class="ba-service__icon ba-service__icon--cart"></span>
                        </li>
                        <li class="ba-service">
                            <h5 class="ba-service__title">Quality Product</h5>
                            <span class="ba-service__icon ba-service__icon--quality"></span>
                        </li>
                        <li class="ba-service">
                            <h5 class="ba-service__title">Domestic & International Delivery</h5>
                            <span class="ba-service__icon ba-service__icon--globe"></span>
                        </li>
                        <li class="ba-service">
                            <h5 class="ba-service__title">Well Organized</h5>
                            <span class="ba-service__icon ba-service__icon--carrot"></span>
                        </li>
                    </ul>
                </section>
                <section class="ba-width-1-2">
                    <h2 class="ba-title ba-title--services">Our Services</h2>
                </section>
            </section>
            <!-- END ba-grid -->
        </div>
    </section>
    <section id="gallery" class="ba-gallery">
        <div class="ba-container">
            <article>
                <header>
                    <h2 class="ba-title">Gallery</h2>
                </header>
                <section>
                    <p class="ba-gallery__description">
                        Consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et<br>
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </section>
            </article>
            <section class="ba-gallery-flex-container">
                <section class="ba-row ba-row-higher">
                    <div class="ba-peach">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/peach.jpg" alt="peach">
                    </div>
                    <div class="ba-column">
                        <div class="ba-blueberries">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/blueberries.jpg" alt="">
                        </div>
                        <div class="ba-blackberry">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/blackberry.jpg" alt="">
                        </div>
                    </div>
                </section>
                <section class="ba-row ba-row-below">
                    <div class="ba-milk">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/milk.jpg" alt="milk">
                    </div>
                    <div class="ba-hurma">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/hurma.jpg" alt="hurma">
                    </div>
                </section>
            </section>
            <footer class="ba-gallery-footer">
                <button class="ba-gallery-footer__btn" type="submit">vie more</button>
            </footer>
        </div>
    </section>
    <section class="ba-subscribe">
        <div class="ba-container">
            <article>
                <header>
                    <h2 class="ba-subscribe__title">Subscribe To Us</h2>
                </header>
                <section>
                    <p class="ba-subscribe__description">Dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor<br>
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </section>
            </article>
            <footer class="ba-subscribe-footer">
                <label>
                    <input class="ba-subscribe-footer__input" type="email" name="email"
                           placeholder="Your email address...">
                </label>
                <button class="ba-subscribe-footer__btn" type="submit">subscribe</button>
            </footer>
        </div>
    </section>
    <section id="blog" class="ba-blog">
        <div class="ba-container">
            <article>
                <header>
                    <h2 class="ba-title">Blog</h2>
                </header>
                <section>
                    <p class="ba-blog__description">
                        Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure<br>
                        dolor in reprehenderit in voluptate velit.
                    </p>
                </section>
            </article>
            <section class="ba-blog-flex-container">
                <div class="ba-flex-item ba-flex-item__green-smoothies">
                    <time class="ba-flex-item__date">20<br>
                        <span class="ba-flex-item__date-month">nov</span></time>
                    <h3 class="ba-flex-item__title">
                        Green Smoothies: Too Much of a Good Thing?
                    </h3>
                    <h4 class="ba-flex-item__author">By Auskteez - 2 hours ago</h4>
                </div>
                <div class="ba-flex-item ba-flex-item__growing-food">
                    <time class="ba-flex-item__date">14<br> <span
                            class="ba-flex-item__date-month">nov</span></time>
                    <h3 class="ba-flex-item__title">
                        Growing Food and a “Thirst” for Innovation
                    </h3>
                    <h4 class="ba-flex-item__author">By Auskteez - 3 hours ago</h4>
                </div>
                <div class="ba-flex-item ba-flex-item__perticides-food">
                    <time class="ba-flex-item__date">10<br> <span
                            class="ba-flex-item__date-month">nov</span></time>
                    <h3 class="ba-flex-item__title">
                        Pesticides & Food: What You Need to Know
                    </h3>
                    <h4 class="ba-flex-item__author">By Auskteez - 6 hours ago</h4>
                </div>
            </section>
            <footer class="ba-blog-footer">
                <button class="ba-blog-footer__btn" type="submit">vie more</button>
            </footer>
        </div>
    </section>
    <section id="contact" class="ba-contact">
        <div class="ba-container">
            <article>
                <header>
                    <h2 class="ba-title">Contact</h2>
                </header>
                <section>
                    <p class="ba-contact__description">
                        For new projects, ideas, business or anything<br>
                        you'd like to discuss, contact with me!
                    </p>
                </section>
            </article>
            <section class="ba-contact-flex-container">
                <form class="ba-contact-form">
                    <label>
                        <input class="ba-contact-form__input" type="text" name="name"
                               placeholder="Auskteez Tran">
                    </label>
                    <label>
                        <input class="ba-contact-form__input" type="email" name="email"
                               placeholder="Your email...">
                    </label>
                    <label>
                        <input class="ba-contact-form__input" type="tel" name="phone-num"
                               placeholder="Your phone number...">
                    </label>
                    <textarea class="ba-contact-form__textarea" name="message" id="" cols="30"
                              rows="10"
                              placeholder="Your messge..."></textarea>
                </form>
                <div class="ba-contact-info">
                    <h5 class="ba-contact-info__titile">ADDRESS</h5>
                    <p class="ba-contact-info__subtitle">123 City name, Street, City, Country</p>
                    <h5 class="ba-contact-info__titile">EMAIL</h5>
                    <p class="ba-contact-info__subtitle">cahee@domain.com</p>
                    <h5 class="ba-contact-info__titile">PHONE</h5>
                    <p class="ba-contact-info__subtitle">+012 345 6789</p>
                </div>
            </section>
        </div>
    </section>
</main>
<?php get_footer(); ?>