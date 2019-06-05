//////
var mobil = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ;
  (function($) {
    /******* REZISE */
      $(window).bind("load resize", function() {
        offSet = 162;
        heightReal = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) ;
        height = heightReal - offSet;
        if (height < 1) height = 1;
        if (height > offSet) {
            $(".fullscreen-modal iframe").css("min-height", (height + 152) + "px");
            $(".fullscreen-modal .modal-dialog").css("min-height", (height + 163) + "px");
            $(".fullscreen-modal .modal-body").css("min-height", (height + 152) + "px");
            $(".fullscreen-modal .modal-content").css("min-height", (height + 152) + "px");
        }
        limite=950;
        if((window.fullScreen) || (window.innerWidth == screen.width && window.innerHeight == screen.height)) {
          $("#mapaYarima .wpb_map_wraper").css("padding-bottom","50.8%");
        }
        if( mobil ) { 
          $("#image-map-pro-1300 .imp-wrap").css("top", 0);
          $("#image-map-pro-9986 .imp-wrap").css("top", "unset");
        }
      }); // END REZISE
  })( jQuery );
//////***** Document Ready *///////
  jQuery(document).ready(function($){
    $("body").niceScroll();
    $('#img-inicio, .contenedor').backgroundDraggable({ bound: true/*, axis: 'x'*/ });
    $(".site-branding img").addClass("img-responsive");
    $(".imp-wrap img").addClass("img-responsive");
    // false thumbnailslider
      $( '#thumbnail-slider.original' ).clone().prependTo( ".false-thumbnail-slider" );
      $( ".false-thumbnail-slider #thumbnail-slider" ).removeClass('original').addClass('false');
      $( '#thumbnail-slider.original' ).hide();
    // change imagen tipo casa
      $('.card-header span').click(function() {
       
        var attr = $(this).attr('id');
        // For some browsers, `attr` is undefined; for others, `attr` is false. Check for both.
        if (attr == 'caracteristicas') {
          // Element has this attribute
        }
        else { 
          var url = $(this).attr('url');
          //$( '.caracteristicas.false' ).remove();
          $('.changeImage .contenedor').css({'background':'url("'+ url+'")', 'background-position':'center', 'background-repeat':'no-repeat ', 'background-size':'cover '} );
          $('.changeImage .contenedor').show();
          //$( '.caracteristicas.original' ).show();
        }

      });
    // clone caracteristicas
    /* $('#caracteristicas').click(function() {
      var url = $(this).attr('url');
      $('.changeImage img').hide();
      $( '.caracteristicas' ).clone().prependTo( ".changeImage .contenedor" );
      $( ".changeImage .caracteristicas" ).removeClass('original').addClass('false');
      //$( '.caracteristicas.original' ).hide();
    }); */
    // table base de datos  
      var table = $('#data_base').DataTable( {
          dom: 'Bfrtip',
          buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
          responsive: true,
          scrollY: '50vh',
          scrollCollapse: true,
          language: {
            decimal:        "",
            emptyTable:     "No hay datos",
            info:           "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty:      "Mostrando 0 a 0 de 0 registros",
            infoFiltered:   "(Filtrando de _MAX_ total de registros)",
            infoPostFix:    "",
            thousands:      ",",
            lengthMenu:     "Mostrar _MENU_ registros",
            loadingRecords: "Cargando...",
            processing:     "Procesando...",
            search:         "Buscar:",
            zeroRecords:    "No se encontratron registros",
            paginate: {
                first:      "Primero",
                last:       "Ultimo",
                next:       "Siguiente",
                previous:   "Anterior"
            },
            aria: {
              sortAscending:  ": activate to sort column ascending",
              sortDescending: ": activate to sort column descending"
            }
          },
      } );
      table.buttons().container().insertBefore( '#example_filter' );
    // NOT FOR MOBILE
      if( mobil ) {}
      else {
      // hide title disponibilidad
        $( "div#image-map-pro-1300 " ).hover(
          function() {
            $( '.titulo' ).hide();
          }, function() {
            $( '.titulo' ).show();
          }
        ); 
      }   
  }); 
// end document ready
    // REMOVE ESTYLE INLINE // 
      (function($){
        $.fn.removeStyle = function(style){
          var search = new RegExp(style + '[^;]+;?', 'g');
          return this.each(function(){
            $(this).attr('style', function(i, style){
                return style && style.replace(search, '');
            });
          });
        };
      }(jQuery)); 