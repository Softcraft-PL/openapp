</main>

<footer class="footer bg-primary text-white">
    <div class="container mx-auto px-4 py-32">
        <div class="grid grid-cols-12 gap-4 text-center lg:text-left">
            <div class="col-span-12 lg:col-span-3 2xl:col-span-5">
                <svg class="mx-auto lg:mx-0" width="82" height="84" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 26.15h12.904V13.074H0v13.074Zm25.808 13.074h12.904V26.15h12.746v12.854h6.937c2.72 2.521 4.546 6.58 4.546 12.3 0 10.455-6.257 15.467-12.958 15.467-6.592 0-12.14-4.711-12.485-14.496h-11.69v-13.05Zm0-39.224v26.15H12.904v26.155h5.462c.45 19.114 13.882 30.965 31.562 30.965C67.943 83.27 82 71.025 82 51.333c0-19.175-13.129-31.247-30.439-31.88v-6.378h-12.85V0H25.809Z" fill="#fff"/></svg>
                <h1 class="font-bold lg:text-lg mt-4"><?php echo get_field('footer_website', 24) ?></h1>
                <p class="lg:text-lg"><?php echo get_field('footer_description', 24) ?></p>
            </div>
            <div class="col-span-12 lg:col-span-3 2xl:col-span-2 mt-4">
                <h2 class="font-bold lg:mb-6"><?php echo get_field('footer_contact', 24) ?></h2>
                <a href="tel:<?php echo str_replace(" ", "", get_field('config_phone', 24)); ?>"><?php echo get_field('config_phone', 24) ?></a>
                <p><a href="mailto:<?php echo get_field('config_email', 24) ?>"><?php echo get_field('config_email', 24) ?></a></p>
            </div>
            <div class="col-span-12 lg:col-span-3 2xl:col-span-2 mt-4">
                <h2 class="font-bold lg:mb-6"><?php echo get_field('footer_address', 24) ?></h2>
                <p><?php echo get_field('config_company', 24) ?></p>
                <p><?php echo get_field('config_street', 24) ?></p>
                <p><?php echo get_field('config_city', 24) ?></p>
            </div>
            <div class="col-span-12 lg:col-span-3 mt-4">
                <?php wp_nav_menu(array('theme_location' => 'nav-menu-footer', 'container' => false)); ?>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 mt-20 text-center lg:text-left">
                <p><?php echo get_field('footer_copyright', 24) ?></p>
            </div>
        </div>
    </div>
</footer>

<script>
    // mobile menu
    let navOpened = false;

    function slideToggle() {
        let navMobile = document.getElementById('navbar__nav-mobile');

        if (navOpened) {
            navOpened = false;
            navMobile.style.height = '0';
            document.getElementById('navbar__toggle').classList.remove('navbar__toggle--open');
            document.getElementById('navbar').classList.remove('navbar--bg-on-toggle');
        } else {
            navOpened = true;
            navMobile.style.height = '100vh';
            document.getElementById('navbar__toggle').classList.add('navbar__toggle--open');
            document.getElementById('navbar').classList.add('navbar--bg-on-toggle');
        }
    }

    // navbar bg change on scroll
    let scrollpos = window.scrollY
    const header = document.querySelector(".navbar")
    const header_height = header.offsetHeight

    const add_class_on_scroll = () => header.classList.add("navbar--bg")
    const remove_class_on_scroll = () => header.classList.remove("navbar--bg")

    window.addEventListener('scroll', function() {
        scrollpos = window.scrollY;
        if (scrollpos >= header_height) { add_class_on_scroll() }
        else { remove_class_on_scroll() }
    })


    // acceptance
    let acceptance = document.getElementById("acceptance");
    if (acceptance) {
        acceptance.addEventListener("click", function() {
            this.classList.toggle("active");
            let panel = document.getElementById("acceptance-text");
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

<?php wp_footer(); ?>

</body>
</html>
