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
        if ($(this).scrollTop() >= 90) {
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

    /* 
	------------------------------------------------------------------
		Parallelogram
	------------------------------------------------------------------
    */

    $('.parallelogram').on('click', function (e) {
        e.preventDefault();
        $('.parallelogram--text').addClass('parallelogram--text-close');
        $(this).find('.parallelogram--text').removeClass('parallelogram--text-close');
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

    var nombreProyecto = $('.nombreProyecto').text(),
        logoProyecto = $('.logoProyecto').attr('src'),
        textoProyecto = $('.textoProyecto').text(),
        imagenDestacadaUno = $('.detallesImg').attr('src'),
        imagenDestacadaDos = $('.imagenDestacada0').attr('src'),
        imagenDestacadaTres = $('.imagenDestacada1').attr('src'),
        direccionSv = $('.direccionSv').text(),
        comuna = $('.comuna').text(),
        telefonoSv = $('.telefonoSv').text(),
        emailSv = $('.emailSv ').text(),
        sbjMedio = sbjs.get.current.mdm,
        sbjFuente = sbjs.get.current.src;

    $('#nombreProyecto').val(nombreProyecto);
    $('#logoProyecto').val(logoProyecto);
    $('#textoProyecto').val(textoProyecto);
    $('#imagenDestacadaUno').val(imagenDestacadaUno);
    $('#imagenDestacadaDos').val(imagenDestacadaDos);
    $('#imagenDestacadaTres').val(imagenDestacadaTres);
    $('#direccionSv').val(direccionSv);
    $('#comuna').val(comuna);
    $('#telefonoSv').val(telefonoSv);
    $('#emailSv').val(emailSv);
    $('#fuenteSbj').val(sbjFuente);
    $('#medioSbj').val(sbjMedio);

    /* 
	------------------------------------------------------------------
		Validacion de Formularios
	------------------------------------------------------------------
    */

    $(".wpcf7").on('wpcf7:mailsent', function (event) {
        $('#contacto-form-modal').modal('hide');
        Swal.fire({
            icon: 'success',
            title: 'Se a enviado correctamente tu mensaje',
            text: 'Pronto nos estaremos comunicando'
        })

    });

    $(".wpcf7").on('wpcf7:mailfailed', function (event) {
        console.log("Email Failed")
        console.log(event)
        Swal.fire({
            icon: 'error',
            title: 'Ha ocurrido un error',
            text: '"Por favot intentalo de nuevo más tarde"'
        })
    });

    $(".wpcf7").on('wpcf7invalid', function () {
        console.log("invalid")
    });

    $(".wpcf7").on('wpcf7submit', function () {
        console.log("wpcf7submit")
    });
});