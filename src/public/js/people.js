< script type = "text/javascript"
src = "http://code.jquery.com/jquery-1.9.1.min.js" > < /script> <
script type = "text/javascript" >

    // 出来るだけ共通化
    var counter = function () {
        return function (e) {
            var isDown = $(this).hasClass("down")
            var isUp = $(this).hasClass("up")

            var direction = isDown ? "down" : isUp ? "up" : undefined;

            var $current = $(this).parent().parent().find(".input_number")
            var current = parseInt($current.val());
            if (direction === "up") {
                $current.val(++current)
            } else if (direction === "down" && current > 1) {
                $current.val(--current)
            }
        }
    }

$(".js-spinner").on("click", counter())

    <
    /script>
