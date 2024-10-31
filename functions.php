<?php 
function get_default_args() {

	$defaults = array(
		'desc'         		=> '',
		'icon'            	=> 'fa-bullhorn',
		'link'              => '',
		'buttontext'        => '',
		'openlink'          => 'Open Link In New Window',
		'position'          => '',
		'type'            	=> ''
		
	);

	// Allow plugins/themes developer to filter the default arguments.
	return apply_filters( 'default_args', $defaults );

}

function notifytypes( $args = array())
{
$args = wp_parse_args( $args, get_default_args() );
extract( $args );
echo '	<button id="notification-trigger" style="display:none;">
						
					</button>';
		
	if( $args['type'] == 'bar-slidetop' )
		{?>
<script>
			(function() {
				var bttn = document.getElementById( "notification-trigger" );

				// make sure..
				bttn.disabled = false;
jQuery(function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, "active" );
					setTimeout( function() {

						classie.remove( bttn, "active" );
						
						// create the notification
						var notification = new NotificationFx({
							position:"<?php echo $position;?>",
							message : '<i class="fa <?php echo $icon?> fa-2x"></i><p class=""><?php echo $desc;?></p><a class="notification-button" href="<?php echo $link;?>" target="<?php if($openlink=="open link in new window"){echo "_blank";} else {echo "";}?>"><?php if($buttontext){?><button type="button" class="notification-btn btn btn-primary"><?php echo $buttontext;?></button><?php } ?></a>',
							layout : "bar",
							effect : "slidetop",
							ttl : 9000000,
							type : "notice", // notice, warning or error
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				});
				
			})();
		</script>
			<?php } if( $args['type'] == 'growl-scale' )
		    {?>
	<script>
			(function() {
				var bttn = document.getElementById( "notification-trigger" );

				// make sure..
				bttn.disabled = false;

				jQuery(function(){
					// simulate loading (for demo purposes only)
					classie.add( bttn, "active" );
					setTimeout( function() {

						classie.remove( bttn, "active" );
						
						// create the notification
						var notification = new NotificationFx({
							position: "<?php echo $position;?>",
							message : '<i class="fa <?php echo $icon?> fa-2x"></i><p class=""><?php echo $desc;?></p><a class="notification-button" href="<?php echo $link;?>" target="<?php if($openlink=="open link in new window"){echo "_blank";} else {echo "";}?>"><?php if($buttontext){?><button type="button" class="notification-btn btn btn-primary"><?php echo $buttontext;?></button><?php } ?></a>',
							layout : "growl",
							effect : "scale",
							ttl : 9000000,
							type : "notice", // notice, warning, error or success
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
		<?php } if( $args['type'] == 'attached-bouncyflip' )
		    {?>
	<script>
			(function() {
				var bttn = document.getElementById( "notification-trigger" );

				// make sure..
				bttn.disabled = false;

				jQuery(function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, "active" );
					setTimeout( function() {

						classie.remove( bttn, "active" );
						
						// create the notification
						var notification = new NotificationFx({
							position: "<?php echo $position;?>",
							message : '<i class="fa <?php echo $icon?> fa-2x"></i><p class=""><?php echo $desc;?></p><a class="notification-button" href="<?php echo $link;?>" target="<?php if($openlink=="open link in new window"){echo "_blank";} else {echo "";}?>"><?php if($buttontext){?><button type="button" class="notification-btn btn btn-primary"><?php echo $buttontext;?></button><?php } ?></a>',
							layout : "attached",
							effect : "bouncyflip",
							ttl : 9000000,
							type : "notice", // notice, warning or error
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
		<?php } if( $args['type'] == 'attached-flip' )
		    {?>
	<script>
			(function() {
				var bttn = document.getElementById( "notification-trigger" );

				// make sure..
				bttn.disabled = false;

				jQuery(function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, "active" );
					setTimeout( function() {

						classie.remove( bttn, "active" );
						
						// create the notification
						var notification = new NotificationFx({
							position: "<?php echo $position;?>",
							message : '<i class="fa <?php echo $icon?> fa-2x"></i><p class=""><?php echo $desc;?></p><a class="notification-button" href="<?php echo $link;?>" target="<?php if($openlink=="open link in new window"){echo "_blank";} else {echo "";}?>"><?php if($buttontext){?><button type="button" class="notification-btn btn btn-primary"><?php echo $buttontext;?></button><?php } ?></a>',
							layout : "attached",
							effect : "flip",
							ttl : 9000000,
							type : "notice", // notice, warning or error
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
		<?php } if( $args['type'] == 'bar-exploader' )
		    {?>
	<script>
			(function() {
				var bttn = document.getElementById( "notification-trigger" );

				// make sure..
				bttn.disabled = false;

				jQuery(function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, "active" );
					setTimeout( function() {

						classie.remove( bttn, "active" );
						// create the notification
						var notification = new NotificationFx({
							position: "<?php echo $position;?>",
							message : '<i class="fa <?php echo $icon?> fa-2x"></i><p class=""><?php echo $desc;?></p><a class="notification-button" href="<?php echo $link;?>" target="<?php if($openlink=="open link in new window"){echo "_blank";} else {echo "";}?>"><?php if($buttontext){?><button type="button" class="notification-btn btn btn-primary"><?php echo $buttontext;?></button><?php } ?></a>',
							layout : "bar",
							effect : "exploader",
							ttl : 9000000,
							type : "notice", // notice, warning or error
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
		<?php } if( $args['type'] == 'growl-genie' )
		    {?>
	<script>
			(function() {
				var bttn = document.getElementById( "notification-trigger" );

				// make sure..
				bttn.disabled = false;

				jQuery(function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, "active" );
					setTimeout( function() {

						classie.remove( bttn, "active" );
							// create the notification
						var notification = new NotificationFx({
							position: "<?php echo $position;?>",
							message : '<i class="fa <?php echo $icon?> fa-2x"></i><p class=""><?php echo $desc;?></p><a class="notification-button" href="<?php echo $link;?>" target="<?php if($openlink=="open link in new window"){echo "_blank";} else {echo "";}?>"><?php if($buttontext){?><button type="button" class="notification-btn btn btn-primary"><?php echo $buttontext;?></button><?php } ?></a>',
							layout : "growl",
							effect : "genie",
							ttl : 9000000,
							type : "notice", // notice, warning or error
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
		<?php } if( $args['type'] == 'growl-jelly' )
		    {?>
	<script>
			(function() {
				var bttn = document.getElementById( "notification-trigger" );

				// make sure..
				bttn.disabled = false;

				jQuery(function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, "active" );
					setTimeout( function() {

						classie.remove( bttn, "active" );
							// create the notification
						var notification = new NotificationFx({
							position: "<?php echo $position;?>",
							message :'<i class="fa <?php echo $icon?> fa-2x"></i><p><?php echo $desc;?></p>',
							layout : "growl",
							effect : "jelly",
							ttl : 9000000,
							type : "notice", // notice, warning or error
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
		<?php } if( $args['type'] == 'growl-slide' )
		    {?>
	<script>
			(function() {
				var bttn = document.getElementById( "notification-trigger" );

				// make sure..
				bttn.disabled = false;

				jQuery(function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, "active" );
					setTimeout( function() {

						classie.remove( bttn, "active" );
							// create the notification
						var notification = new NotificationFx({
							position: "<?php echo $position;?>",
							message : '<i class="fa <?php echo $icon?> fa-2x"></i><p class=""><?php echo $desc;?></p><a class="notification-button" href="<?php echo $link;?>" target="<?php if($openlink=="open link in new window"){echo "_blank";} else {echo "";}?>"><?php if($buttontext){?><button type="button" class="notification-btn btn btn-primary"><?php echo $buttontext;?></button><?php } ?></a>',
							layout : "growl",
							effect : "slide",
							ttl : 9000000,
							type : "notice", // notice, warning or error
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
		<?php } if( $args['type'] == 'cornerexpand' )
		    { wp_print_scripts( 'notificationscript9');?>
			<div class="notification-shape shape-box <?php echo $position;?>" id="notification-shape" data-path-to="m 0,0 500,0 0,500 -500,0 z">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 500 500" preserveAspectRatio="none">
				<path d="m 0,0 500,0 0,500 0,-500 z"/>
			</svg>
		</div>
	<script>
			(function() {
				var svgshape = document.getElementById( "notification-shape" ),
					s = Snap( svgshape.querySelector( "svg" ) ),
					path = s.select( "path" ),
					pathConfig = {
						from : path.attr( "d" ),
						to : svgshape.getAttribute( "data-path-to" )
					},
					bttn = document.getElementById( "notification-trigger" );

				// make sure..
				bttn.disabled = false;

				jQuery(function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, "active" );
					setTimeout( function() {

						path.animate( { "path" : pathConfig.to }, 300, mina.easeinout );

						classie.remove( bttn, "active" );
						
						// create the notification
						var notification = new NotificationFx({
							position: "<?php echo $position;?>",
							wrapper : svgshape,
							message : '<i class="fa <?php echo $icon?> fa-2x"></i><p class=""><?php echo $desc;?></p><a class="notification-button" href="<?php echo $link;?>" target="<?php if($openlink=="open link in new window"){echo "_blank";} else {echo "";}?>"><?php if($buttontext){?><button type="button" class="notification-btn btn btn-primary"><?php echo $buttontext;?></button><?php } ?></a>',
							layout : "other",
							effect : "cornerexpand",
							ttl : 9000000,
							type : "notice", // notice, warning or error
							onClose : function() {
								bttn.disabled = false;
								setTimeout(function() {
									path.animate( { "path" : pathConfig.from }, 300, mina.easeinout );
								}, 200 );
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
		<?php }
	wp_enqueue_script( 'notificationclassie');
	wp_enqueue_script( 'notificationscript8');
	wp_enqueue_script( 'notificationfx');
	wp_enqueue_style( 'notificationstyles7');
	wp_enqueue_style( 'notificationstyles1');
	wp_enqueue_style( 'notificationstyles2');
	wp_enqueue_style( 'notificationstyles3');
	wp_enqueue_style( 'notificationstyles4');
	wp_enqueue_style( 'notificationstyles5');
		}
	?>