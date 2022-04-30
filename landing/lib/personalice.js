var w, container, carousel, item, radius, itemLength, rY, ticker, fps; 
var mouseX = 0;
var mouseY = 0;
var mouseZ = 0;
var addX = 0;

var fps_counter = {
	tick: function (){
		// this has to clone the array every tick so that
		// separate instances won't share state 
		this.times = this.times.concat(+new Date());
		var seconds, times = this.times;

		if (times.length > this.span + 1){
			times.shift(); // ditch the oldest time
			seconds = (times[times.length - 1] - times[0]) / 1000;
			return Math.round(this.span / seconds);
		} 
		else return null;
	},
	times: [],
	span: 20
};

$(document).ready( init )

function init(){
	w = $(window);
	container = $( '#contentContainer' );
	carousel = $( '#carouselContainer' );
	item = $( '.carouselItem' );
	itemLength = $( '.carouselItem' ).length;
	
	rY = 360 / itemLength;
	radius = Math.round( (250) / Math.tan( Math.PI / itemLength ) );
	TweenMax.set(container, {perspective:600})
	TweenMax.set(carousel, {z:-(radius)})
	for ( var i = 0; i < itemLength; i++ ){
		var $item = item.eq(i);
		var $block = $item.find('.carouselItemInner');
		TweenMax.set($item, {rotationY:rY * i, z:radius, transformOrigin:"50% 50% " + -radius + "px"});
		animateIn( $item, $block )						
	}
	PositionX = -(-(window.innerWidth * .5) + 892) * .0025;
	PositionY = -(-(window.innerHeight * .5) + 682) * .01;
	PositionZ = -(radius) - (Math.abs(-(window.innerHeight * .5) + 682 ) - 200);
	ticker = setInterval( looper, 1000/60 );
}

function animateIn( $item, $block ){
	var $nrX = 360 * getRandomInt(2);
	var $nrY = 360 * getRandomInt(2);

	var $nx = -(2000) + getRandomInt( 4000 )
	var $ny = -(2000) + getRandomInt( 4000 )
	var $nz = -4000 +  getRandomInt( 4000 )

	var $s = 1.5 + (getRandomInt( 10 ) * .1)
	var $d = 1 - (getRandomInt( 8 ) * .1)

	TweenMax.set( $item, { autoAlpha:1, delay:$d } )	
	TweenMax.set( $block, { z:$nz, rotationY:$nrY, rotationX:$nrX, x:$nx, y:$ny, autoAlpha:0} )
	TweenMax.to( $block, $s, { delay:$d, rotationY:0, rotationX:0, z:0,  ease:Expo.easeInOut} )
	TweenMax.to( $block, $s-.5, { delay:$d, x:0, y:0, autoAlpha:1, ease:Expo.easeInOut} )
}
function looper(){
	addX += PositionX
	TweenMax.to( carousel, 1, { rotationY:addX, rotationX:PositionY, ease:Quint.easeOut } )
	TweenMax.set( carousel, {z:PositionZ } )
	//fps.text( 'Framerate: ' + counter.tick() + '/60 FPS' )	
}
function getRandomInt( $n ){
	return Math.floor((Math.random()*$n)+1);	
}


$("#EmailSend").click(function(e){
  e.preventDefault();
  $("#contact-form").submit();
});
    $('#contact-form').bootstrapValidator({
      feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      excluded: [':disabled'],
      fields: {
        customer_name: {
          group: '.col-sm-6',
          validators: {
            notEmpty: {
              message: 'Campo vacio'
            },
            stringLength: {
                max: 20
            },
            regexp: {
              regexp: /^[\u002f\-\u0023\u00E1\u00C1\u00E9\u00C9\u00ED\u00CD\u00F3\u00D3\u00FA\u00DA\u00d1\u00f10-9A-Za-z _]*[\u002f\-\u0023\u00E1\u00C1\u00E9\u00C9\u00ED\u00CD\u00F3\u00D3\u00FA\u00DA\u00d1\u00f10-9A-Za-z][\u002f\-\u0023\u00E1\u00C1\u00E9\u00C9\u00ED\u00CD\u00F3\u00D3\u00FA\u00DA\u00d1\u00f10-9A-Za-z _]*$/
            }
          }
        },
        customer_lastname: {
          group: '.col-sm-6',
          validators: {
            notEmpty: {
              message: 'Campo vacio'
            },
            stringLength: {
                max: 20
            },
            regexp: {
              regexp: /^[\u002f\-\u0023\u00E1\u00C1\u00E9\u00C9\u00ED\u00CD\u00F3\u00D3\u00FA\u00DA\u00d1\u00f10-9A-Za-z _]*[\u002f\-\u0023\u00E1\u00C1\u00E9\u00C9\u00ED\u00CD\u00F3\u00D3\u00FA\u00DA\u00d1\u00f10-9A-Za-z][\u002f\-\u0023\u00E1\u00C1\u00E9\u00C9\u00ED\u00CD\u00F3\u00D3\u00FA\u00DA\u00d1\u00f10-9A-Za-z _]*$/
            }
          }
        },
        customer_phone: {
          group: '.col-sm-6',
          validators: {
            notEmpty: {
              message: 'Campo vacio'
            },
            stringLength: {
                max: 20
            },
            integer: {}
          }
        },
        customer_email: {
          group: '.col-sm-6',
          validators: {
            notEmpty: {
              message: 'Campo vacio'
            },
            stringLength: {
              max: 80
            },
            emailAddress: {
              message: 'El correo electronico no es valido'
            } 
          }
        },
        customer_message: {
          group: '.col-sm-12',
          validators: {
            notEmpty: {
              message: 'Campo vacio'
            },
            stringLength: {
                max: 50
            },
            regexp: {
              regexp: /^[\u002f\-\u0023\u00E1\u00C1\u00E9\u00C9\u00ED\u00CD\u00F3\u00D3\u00FA\u00DA\u00d1\u00f10-9A-Za-z _]*[\u002f\-\u0023\u00E1\u00C1\u00E9\u00C9\u00ED\u00CD\u00F3\u00D3\u00FA\u00DA\u00d1\u00f10-9A-Za-z][\u002f\-\u0023\u00E1\u00C1\u00E9\u00C9\u00ED\u00CD\u00F3\u00D3\u00FA\u00DA\u00d1\u00f10-9A-Za-z _]*$/
            }
          }
        }
      }
    }).on('success.form.bv', function(e) {
      e.preventDefault(); 
      var customer_email   =$("#customer_email").val();
      var customer_phone   =$("#customer_phone").val();
      var customer_name    =$("#customer_name").val();
      var customer_lastname=$("#customer_lastname").val();
      var customer_message =$("#customer_message").val();
      
      $.post('mail.php', {  action:"mail", customer_email:customer_email, customer_phone:customer_phone, customer_name:customer_name, customer_lastname:customer_lastname, customer_message:customer_message })
            .done(function( data ) {
              $("#respond").html(data);
              
            });
      $('#contact-form').data('bootstrapValidator').resetForm();
       $('#contact-form').trigger("reset");
      /*
      grecaptcha.ready(function() {
          grecaptcha.execute('6LdEWDIaAAAAAPUEfoM02qqZWjdrXx7AokbI6Lo5', {action: 'mail'}).then(function(token) {
            $.post('../../mail.php', { token:token, action:"mail", customer_email:customer_email, customer_phone:customer_phone, customer_name:customer_name, customer_lastname:customer_lastname, customer_message:customer_message })
            .done(function( data ) {
              $("#respond").html(data);
              $('#contact-form').data('bootstrapValidator').resetForm();
            });
          });
      });*/
    });