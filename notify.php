<?php
/*
/**
* Plugin Name: Notification Alerts
* Plugin URI: 
* Description: A New2WP sidebar Widget for displaying the notification styles. Control the widget title formatting and the types of notification bars. 
* Version: 
* Author: 
* Author URI: 
* License: GPL
*/
//enqueue scripts and styles
define('notificationbar',plugin_dir_url(__FILE__));

function notification_styles(){
if (!is_admin())
{   
	wp_register_script( 'notificationscript8', notificationbar.'js/modernizr.custom.js');
	wp_register_script( 'notificationfx', notificationbar.'js/notificationFx.js');
	wp_register_script( 'notificationclassie', notificationbar.'js/classie.js');
	wp_register_script( 'notificationscript9', notificationbar.'js/snap.svg-min.js');
	wp_register_style( 'notificationstyles1', notificationbar.'css/ns-default.css');
	wp_register_style( 'notificationstyles2', notificationbar.'css/ns-style-bar.css');
	wp_register_style( 'notificationstyles3', notificationbar.'css/ns-style-attached.css');
	wp_register_style( 'notificationstyles4', notificationbar.'css/ns-style-other.css');
	wp_register_style( 'notificationstyles5', notificationbar.'css/ns-style-growl.css');
}	
}
add_action('init','notification_styles');
//end enqueue scripts and styles 
add_action( 'widgets_init', 'go_notification_styles' );
function go_notification_styles() {
	register_widget( 'go_notification_styles' );
}
class go_notification_styles extends WP_Widget {

	function go_notification_styles() {
		$widget_ops = array( 'classname' => 'go_notification_styles' );
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base' => 'go_notification_styles' );
		$this->WP_Widget( 'go_notification_styles','notificationstyles', $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		//$title = apply_filters('widget_title', $instance['title'] );
		$type = $instance['type'];
		$desc = $instance['desc'];
		$buttontext = $instance['buttontext'];
		$link = $instance['link'];
		$openlink = $instance['openlink'];
		$icon = $instance['icon'];
		$position = $instance['position'];

		echo $before_widget;
		echo '<button id="notification-trigger" style="display:none;">
                     </button>';
		if( $type == 'bar-slidetop' )
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
			<?php } if( $type == 'growl-scale' )
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
		<?php } if( $type == 'attached-bouncyflip' )
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
		<?php } if( $type == 'attached-flip' )
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
		<?php } if( $type == 'bar-exploader' )
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
		<?php } if( $type == 'growl-genie' )
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
							message :'<i class="fa <?php echo $icon?> fa-2x"></i><p class=""><?php echo $desc;?></p><a class="notification-button" href="<?php echo $link;?>" target="<?php if($openlink=="open link in new window"){echo "_blank";} else {echo "";}?>"><?php if($buttontext){?><button type="button" class="notification-btn btn btn-primary"><?php echo $buttontext;?></button><?php } ?></a>',
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
		<?php } if( $type == 'growl-jelly' )
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
							message :'<i class="fa <?php echo $icon?> fa-2x"></i><p class=""><?php echo $desc;?></p><a class="notification-button" href="<?php echo $link;?>" target="<?php if($openlink=="open link in new window"){echo "_blank";} else {echo "";}?>"><?php if($buttontext){?><button type="button" class="notification-btn btn btn-primary"><?php echo $buttontext;?></button><?php } ?></a>',
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
		<?php } if( $type == 'growl-slide' )
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
		<?php } if( $type == 'cornerexpand' )
		    { 
			wp_print_scripts( 'notificationscript9');?>
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
		echo '
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
	';
	wp_print_scripts( 'notificationclassie');
	wp_print_scripts( 'notificationscript8');
	wp_print_scripts( 'notificationfx');
	wp_print_styles( 'notificationstyles7');
	wp_print_styles( 'notificationstyles1');
	wp_print_styles( 'notificationstyles2');
	wp_print_styles( 'notificationstyles3');
	wp_print_styles( 'notificationstyles4');
	wp_print_styles( 'notificationstyles5');
echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['type'] = strip_tags( $new_instance['type'] );
		$instance['desc'] = strip_tags( $new_instance['desc'] );
		$instance['buttontext'] = strip_tags( $new_instance['buttontext'] );
		$instance['link'] = strip_tags( $new_instance['link'] );
		$instance['openlink'] = strip_tags( $new_instance['openlink'] );
		$instance['icon'] = strip_tags( $new_instance['icon'] );
		$instance['position'] = strip_tags( $new_instance['position'] );
	return $instance;
	}

	function form( $instance ) {
	$defaults = array('icon' => 'fa-bullhorn');
	$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'desc' ); ?>">Description: </label>
			<textarea id="<?php echo $this->get_field_id( 'desc' ); ?>" name="<?php echo $this->get_field_name( 'desc' ); ?>"  style="width:100%;"><?php echo $instance['desc'];?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'buttontext' ); ?>">Button Text: </label>
			<textarea id="<?php echo $this->get_field_id( 'buttontext' ); ?>" name="<?php echo $this->get_field_name( 'buttontext' ); ?>"  style="width:100%;"><?php echo $instance['buttontext'];?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>">Link: </label>
			<input id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link'];?>" type="text" style="width:100%;"/>
		</p>
		<p>
			  <label for="<?php echo $this->get_field_id( 'openlink' ); ?>">Open Link : </label>
			<select id="<?php echo $this->get_field_id( 'openlink' ); ?>" name="<?php echo $this->get_field_name( 'openlink' ); ?>"  style="width:100%;" >
				<option value="open link in same window" <?php if( $instance['openlink'] == 'open link in same window' ) echo "selected=\"selected\""; else echo ""; ?>>Open Link In Same Window</option>
				<option value="open link in new window" <?php if( $instance['openlink'] == 'open link in new window' ) echo "selected=\"selected\""; else echo ""; ?>>Open Link In New Window</option>
				</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'icon' ); ?>">Icon: </label>
			<input id="<?php echo $this->get_field_id( 'icon' ); ?>" name="<?php echo $this->get_field_name( 'icon' ); ?>" value="<?php echo $instance['icon'];?>" type="text" style="width:100%;"/>
		</p>
		<p>
			  <label for="<?php echo $this->get_field_id( 'position' ); ?>">position : </label>
			<select id="<?php echo $this->get_field_id( 'position' ); ?>" name="<?php echo $this->get_field_name( 'position' ); ?>"  style="width:100%;" >
				<option value="top left" <?php if( $instance['position'] == 'top left' ) echo "selected=\"selected\""; else echo ""; ?>>Topleft</option>
				<option value="top right" <?php if( $instance['position'] == 'top right' ) echo "selected=\"selected\""; else echo ""; ?>>Topright</option>
				<option value="bottom left" <?php if( $instance['position'] == 'bottom left' ) echo "selected=\"selected\""; else echo ""; ?>>Bottomleft</option>
				<option value="bottom right" <?php if( $instance['position'] == 'bottom right' ) echo "selected=\"selected\""; else echo ""; ?>>Bottomright</option>
				</select>
		</p>
		<p>

			  <label for="<?php echo $this->get_field_id( 'type' ); ?>">Types : </label>
			<select id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>"  style="width:100%;" >
				<option value="bar-slidetop" <?php if( $instance['type'] == 'bar-slidetop' ) echo "selected=\"selected\""; else echo ""; ?>>bar-slidetop</option>
				<option value="growl-scale" <?php if( $instance['type'] == 'growl-scale' ) echo "selected=\"selected\""; else echo ""; ?>>growl-scale</option>
				<option value="attached-bouncyflip" <?php if( $instance['type'] == 'attached-bouncyflip' ) echo "selected=\"selected\""; else echo ""; ?>>attached-bouncyflip</option>
				<option value="attached-flip" <?php if( $instance['type'] == 'attached-flip' ) echo "selected=\"selected\""; else echo ""; ?>>attached-flip</option>
				<option value="bar-exploader" <?php if( $instance['type'] == 'bar-exploader' ) echo "selected=\"selected\""; else echo ""; ?>>bar-exploader</option>
				<option value="growl-genie" <?php if( $instance['type'] == 'growl-genie' ) echo "selected=\"selected\""; else echo ""; ?>>growl-genie</option>
				<option value="growl-jelly" <?php if( $instance['type'] == 'growl-jelly' ) echo "selected=\"selected\""; else echo ""; ?>>growl-jelly</option>
				<option value="growl-slide" <?php if( $instance['type'] == 'growl-slide' ) echo "selected=\"selected\""; else echo ""; ?>>growl-slide</option>
				<option value="cornerexpand" <?php if( $instance['type'] == 'cornerexpand' ) echo "selected=\"selected\""; else echo ""; ?>>cornerexpand</option>
		    </select>
		</p>
<?php
	}
}
function shortcode( $atts, $content ) {
$args = shortcode_atts( get_default_args(), $atts );
return notifytypes( $args );
}
add_shortcode( 'notification', 'shortcode' );
	// Loads the functions
		include('functions.php' );
?>