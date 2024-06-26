// Constructor
function SmoothScroll(target, speed, smooth) {
    if (target === document)
        target = (document.documentElement || document.body.parentNode || document.body); // cross browser support for document scrolling
    let moving = false;
    let pos = target.scrollTop;
    target.addEventListener('mousewheel', scrolled, { passive: false });

    function scrolled(e) {
        e.preventDefault(); // disable default scrolling

        const delta = normalizeWheelDelta(e);

        pos += -delta * speed;
        pos = Math.max(0, Math.min(pos, target.scrollHeight - target.clientHeight)); // limit scrolling

        if (!moving) update();
    }

    function normalizeWheelDelta(e){
        if(e.detail){
            if(e.wheelDelta)
                return e.wheelDelta/e.detail/40 * (e.detail>0 ? 1 : -1); // Opera
            else
                return -e.detail/3;
        }else
            return e.wheelDelta/120; 
    }

    function update() {
        moving = true;
        const delta = (pos - target.scrollTop) / smooth;
        target.scrollTop += delta;

        if (Math.abs(delta) > 0.5)
            requestFrame(update);
        else
            moving = false;
    }

    const requestFrame = function() { // requestAnimationFrame cross browser
        return (
            window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.oRequestAnimationFrame ||
            window.msRequestAnimationFrame ||
            function(func) { window.setTimeout(func, 1000 / 50); }
        );
    }();
}

// Usage
new SmoothScroll(document, 80, 20);
