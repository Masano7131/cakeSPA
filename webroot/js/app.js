$(function() {
////////////////////////////////////////////////////////////////////////////////////////////////////

$('form.step').each(function(index) {
    var $form = $(this);
    var $slide = $form.parents('.form-slide');

    // Prev ボタン
    $form.on('click', '.prev', function() {
        $form.prev().css('visibility', 'visible');
        $slide.animate({'marginLeft': -800 * (index-1)}, 'fast', 'swing', function() {
            $form.css('visibility', 'hidden');
        });
    });

    // Next ボタン
    $form.on('click', '.next', function() {
        var url = $form.attr('action');
        var data = $form.serialize();

        $.post(url, data)
            .done(function(html) {
                $form.html(html);

                // 確認画面に入力内容を反映
                $('fieldset.confirm')
                    .find('fieldset.step' + (index+1)).html( $form.find('fieldset').html() )
                    .find('input, textarea, select')
                    .attr('readonly', true);

                if ($form.find('.error').length == 0) {
                    $form.next().css('visibility', 'visible');
                    $slide.animate({'marginLeft': -800 * (index+1)}, 'fast', 'swing', function() {
                        $form.css('visibility', 'hidden');
                    });
                }
            });

        return false;
    });
});

////////////////////////////////////////////////////////////////////////////////////////////////////
});
