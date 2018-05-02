import $ from 'jquery';
import smoothScroll from 'jquery-smooth-scroll';

class SmoothScrolling {
    constructor() {
        this.menuLinks = $('.main-nav__link');
        this.addSmoothScrolling();
    }

    addSmoothScrolling() {
        this.menuLinks.smoothScroll({
            offset: -40
        });
    }
}
export default SmoothScrolling;