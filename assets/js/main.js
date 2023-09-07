$(function () {
    /* 
	------------------------------------------------------------------
		SBJS
	------------------------------------------------------------------
	*/
    function logSource(sbData) {
        //console.log('Cookies are set! Your source is: ${sbData.current.src}');z
    }
    sbjs.init();
    /* 
	------------------------------------------------------------------
		PRELOAD
	------------------------------------------------------------------
    */
    let userNavigator = navigator.vendor;

    if (userNavigator === "Apple Computer, Inc.") {
        $('.cd-loader').remove();
    } else {
        $(window).on('load', function () {
            $('.cd-loader').fadeOut('slow', function () {
                $(this).remove();
            });
        });
    }

    /* 
	------------------------------------------------------------------
		Navbar
	------------------------------------------------------------------
    */
   $(window).scroll(function () {
        if ($(this).scrollTop() >= 80) {
            $(".main-menu").addClass("active");
        } else {
            $(".main-menu").removeClass("active");
        }
    });

    $('.mobile-primary-menu').on('click', function () {
        $(this).toggleClass('is-active');
        $('#navbarNavDropdown').toggleClass('show');
        $('.header').toggleClass('open');
    });

    /* 
	------------------------------------------------------------------
		Modal
	------------------------------------------------------------------
    */

    $('.contactModalBtn').on('click', function (e) {
        e.preventDefault();
        $('#contact-form-modal').modal('show')
    });

    $('.videoModalBtn').on('click', function (e) {
        e.preventDefault();
        $('#video-modal').modal('show')
    });

    $('#video-modal').on('hidden.bs.modal', function (event) {
        $('.youtubeVideo').each(function(){
            this.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*')
          });
    });

    /* 
	------------------------------------------------------------------
		Parallelogram
	------------------------------------------------------------------
    */

    $('.parallelogram').on('click', function (e) {
        e.preventDefault();
        $('.parallelogram').removeClass('parallelogram--active');
        $('.parallelogram--text').addClass('parallelogram--text-close');
        $(this).find('.parallelogram--text').removeClass('parallelogram--text-close');
        $(this).addClass('parallelogram--active');
    })

    /* 
	------------------------------------------------------------------
		Single
	------------------------------------------------------------------
    */
    if (data) {
        const moveList = data.move_list;
        const themeUri = data.base_url;
        console.log({ moveList });
        const createMoveList = ({ listOfItems: list }) => {
            $.each(list, function (key, value) {
                if (value.active) {
                    $('.move-list--image').attr({
                        'src': value.image,
                        'alt': value.icon.label
                    });
                    $('.move-list--text-title').text(value.icon.label);
                    $('.move-list--text-description').text(value.description);
                }
                $('.move-list--icons').append(`
                <li class="px-2" style="width: 20%">
                    <a href="#" class="move-list--icon-link" data-name="${value.icon.value}">
                        <img class="w-100" src="${themeUri}icon-${value.icon.value}${value.active ? '-active' : ''}.png" alt="${value.icon.label}">
                    </a>
                </li>
                `);
            })
        }
        createMoveList({ listOfItems: moveList });
        $('.move-list--icons').on('click', '.move-list--icon-link', function (e) {
            e.preventDefault();
            $('.move-list--image').fadeOut('fast', () => {
                const newArray = moveList.map((item) => item.name === $(this).data('name') ? { ...item, active: true } : { ...item, active: false });
                $('.move-list--icons').empty();
                createMoveList({ listOfItems: newArray });
            });
            $('.move-list--image').fadeIn();

        });
    }

    /* 
	------------------------------------------------------------------
		Formularios
	------------------------------------------------------------------
    */

    var sbjMedio = sbjs.get.current.mdm,
        sbjFuente = sbjs.get.current.src;

    $('#fuenteSbj').val(sbjFuente);
    $('#medioSbj').val(sbjMedio);

    /* 
	------------------------------------------------------------------
		Validacion de Formularios
	------------------------------------------------------------------
    */

    $(".wpcf7").on('wpcf7:mailsent', function (event) {
        $('#contacto-form-modal').modal('hide');
        Toastify({
            text: "Success",
            duration: 3000,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
              background: "linear-gradient(to right, #00b09b, #96c93d)",
            },
            onClick: function(){} // Callback after click
          }).showToast();

    });

    $(".wpcf7").on('wpcf7mailfailed', function (event) {
        console.log("Failed");
        Toastify({
            text: "Success",
            duration: 3000,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
              background: "linear-gradient(to right, #ff5f6d, #ffc371)",
            },
            onClick: function(){} // Callback after click
          }).showToast();
    });

    $(".wpcf7").on('wpcf7invalid', function () {
        console.log("invalid");
    });

    $(".wpcf7").on('wpcf7submit', function () {
        console.log("wpcf7submit");
    });
});