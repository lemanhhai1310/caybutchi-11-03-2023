console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {
        const app = x('#app');
        const header = x('.header');
        const about__section1 = x('.about__section1');
        const chitietkhoahoc__sidebar = x('.chitietkhoahoc__sidebar');

        const stickyChitietkhoahoc__sidebar = () => {
            if (chitietkhoahoc__sidebar){
                const h_header = header ? header.offsetHeight + 'px' : 0
                const h_about__section1 = about__section1 ? about__section1.offsetHeight + 'px' : 0
                UIkit.sticky(chitietkhoahoc__sidebar, {
                    'offset': h_header+h_about__section1 + 20,
                    'start': 0.01 + 'px',
                    'end': true,
                });
            }
        }

        const stickyHeader = () => {
            if (header){
                UIkit.sticky(header, {

                });
            }
        }

        const stickyBreadcrumd = () => {
            if (about__section1){
                const h_header = header ? header.offsetHeight + 'px' : 0
                console.log('height Header', h_header);
                UIkit.sticky(about__section1, {
                    'offset': h_header
                });
            }
        }

        stickyHeader()
        stickyBreadcrumd()
        stickyChitietkhoahoc__sidebar()

        onresize = (event) => {
            console.log('onresize')
            stickyHeader()
            stickyBreadcrumd()
            stickyChitietkhoahoc__sidebar()
        };

        document.onscroll = function () {
            let scrollTop = window.scrollY || document.documentElement.scrollTop;
            console.log('scrollTop',scrollTop);
            stickyHeader()
            stickyBreadcrumd()
            stickyChitietkhoahoc__sidebar()
            if (scrollTop > 0){

            }else {

            }
        }
    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();
})


$(window).on("load", function (e) {

});


$(window).on('load', function () {
    function output (data, $output) {
        var result = '<div>input: Object</div>';
        result +=   '<div>slider: Object</div>';
        result +=   '<div>min: ' + data.min + '</div>';
        result +=   '<div>min_pretty: ' + data.min_pretty + '</div>';
        result +=   '<div>max: ' + data.max + '</div>';
        result +=   '<div>max_pretty: ' + data.max_pretty + '</div>';
        result +=   '<div>from: ' + data.from + '</div>';
        result +=   '<div>from_pretty: ' + data.from_pretty + '</div>';
        result +=   '<div>from_percent: ' + data.from_percent.toFixed(2) + '</div>';
        result +=   '<div>from_value: ' + data.from_value + '</div>';
        result +=   '<div>to: ' + data.to + '</div>';
        result +=   '<div>to_pretty: ' + data.to_pretty + '</div>';
        result +=   '<div>to_percent: ' + data.to_percent.toFixed(2) + '</div>';
        result +=   '<div>to_value: ' + data.to_value + '</div>';

        var html1 = '<div class="uk-grid uk-grid-small" uk-grid>\n' +
            '                            <div class="uk-width-expand">\n' +
            '                                <div class="tiemsach__card__priceLabel">' + data.from + ' đ</div>\n' +
            '                            </div>\n' +
            '                            <div class="uk-width-auto">\n' +
            '                                <div class="tiemsach__card__priceLabel">' + data.to + ' đ</div>\n' +
            '                            </div>\n' +
            '                        </div>'

        $output.html(html1);

    }
    var $output1 = $(".js-output__d1");
    $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 690000,
        from: 0,
        to: 190000,
        max_postfix: "đ",
        onStart: function (data) {
            output(data, $output1);
            // console.log('onStart');
        },
        onChange: function (data) {
            output(data, $output1);
            // console.log('onChange');
        },
        onFinish: function (data) {
            output(data, $output1);
            // console.log('onFinish');
        },
        onUpdate: function (data) {
            output(data, $output1);
            // console.log('onUpdate');
        }
    });
});