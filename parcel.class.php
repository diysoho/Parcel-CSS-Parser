<?php

class parcel {

	function __construct($css) {
		if(file_exists($css)) {
			$this->css_file = file_get_contents($css);
			$this->parseTags();
		}
		else {
			die("I cant find your CSS file, make sure it there.");
		}
	}

	function find($x, $y) {
		$this->error = "Cannot find property '$x' for $y.";
		switch($x) {
		 case 'align-content': if(isset($this->css_align_content[$y])) {return $this->css_align_content[$y];} else { return $this->error; } break;
		 case 'align-items': if(isset($this->css_align_items[$y])) {return $this->css_align_items[$y];} else { return $this->error; } break;
		 case 'align-self': if(isset($this->css_align_self[$y])) {return $this->css_align_self[$y];} else { return $this->error; } break;
		 case 'animation': if(isset($this->css_animation[$y])) {return $this->css_animation[$y];} else { return $this->error; } break;
		 case 'animation-delay': if(isset($this->css_animation_delay[$y])) {return $this->css_animation_delay[$y];} else { return $this->error; } break;
		 case 'animation-direction': if(isset($this->css_animation_direction[$y])) {return $this->css_animation_direction[$y];} else { return $this->error; } break;
		 case 'animation-duration': if(isset($this->css_animation_duration[$y])) {return $this->css_animation_duration[$y];} else { return $this->error; } break;
		 case 'animation-fill-mode': if(isset($this->css_animation_fill_mode[$y])) {return $this->css_animation_fill_mode[$y];} else { return $this->error; } break;
		 case 'animation-iteration-count': if(isset($this->css_animation_iteration_count[$y])) {return $this->css_animation_iteration_count[$y];} else { return $this->error; } break;
		 case 'animation-name': if(isset($this->css_animation_name[$y])) {return $this->css_animation_name[$y];} else { return $this->error; } break;
		 case 'animation-play-state': if(isset($this->css_animation_play_state[$y])) {return $this->css_animation_play_state[$y];} else { return $this->error; } break;
		 case 'backface-visibilty': if(isset($this->css_backface_visibilty[$y])) {return $this->css_backface_visibilty[$y];} else { return $this->error; } break;
		 case 'background': if(isset($this->css_background[$y])) {return $this->css_background[$y];} else { return $this->error; } break;
		 case 'background-attachment': if(isset($this->css_background_attachment[$y])) {return $this->css_background_attachment[$y];} else { return $this->error; } break;
		 case 'background-clip': if(isset($this->css_background_clip[$y])) {return $this->css_background_clip[$y];} else { return $this->error; } break;
		 case 'background-color': if(isset($this->css_background_color[$y])) {return $this->css_background_color[$y];} else { return $this->error; } break;
		 case 'background-image': if(isset($this->css_background_image[$y])) {return $this->css_background_image[$y];} else { return $this->error; } break;
		 case 'background-origin': if(isset($this->css_background_origin[$y])) {return $this->css_background_origin[$y];} else { return $this->error; } break;
		 case 'background-position': if(isset($this->css_background_position[$y])) {return $this->css_background_position[$y];} else { return $this->error; } break;
		 case 'background-repeat': if(isset($this->css_background_repeat[$y])) {return $this->css_background_repeat[$y];} else { return $this->error; } break;
		 case 'background-size': if(isset($this->css_background_size[$y])) {return $this->css_background_size[$y];} else { return $this->error; } break;
		 case 'border': if(isset($this->css_border[$y])) {return $this->css_border[$y];} else { return $this->error; } break;
		 case 'border-bottom': if(isset($this->css_border_bottom[$y])) {return $this->css_border_bottom[$y];} else { return $this->error; } break;
		 case 'border-bottom-color': if(isset($this->css_border_bottom_color[$y])) {return $this->css_border_bottom_color[$y];} else { return $this->error; } break;
		 case 'border-bottom-left-radius': if(isset($this->css_border_bottom_left_radius[$y])) {return $this->css_border_bottom_left_radius[$y];} else { return $this->error; } break;
		 case 'border-bottom-right-radius': if(isset($this->css_border_bottom_right_radius[$y])) {return $this->css_border_bottom_right_radius[$y];} else { return $this->error; } break;
		 case 'border-bottom-style': if(isset($this->css_border_bottom_style[$y])) {return $this->css_border_bottom_style[$y];} else { return $this->error; } break;
		 case 'border-bottom-width': if(isset($this->css_border_bottom_width[$y])) {return $this->css_border_bottom_width[$y];} else { return $this->error; } break;
		 case 'border-collapse': if(isset($this->css_border_collapse[$y])) {return $this->css_border_collapse[$y];} else { return $this->error; } break;
		 case 'border-color': if(isset($this->css_border_color[$y])) {return $this->css_border_color[$y];} else { return $this->error; } break;
		 case 'border-image': if(isset($this->css_border_image[$y])) {return $this->css_border_image[$y];} else { return $this->error; } break;
		 case 'border-image-outset': if(isset($this->css_border_image_outset[$y])) {return $this->css_border_image_outset[$y];} else { return $this->error; } break;
		 case 'border-image-repeat': if(isset($this->css_border_image_repeat[$y])) {return $this->css_border_image_repeat[$y];} else { return $this->error; } break;
		 case 'border-image-slice': if(isset($this->css_border_image_slice[$y])) {return $this->css_border_image_slice[$y];} else { return $this->error; } break;
		 case 'border-image-source': if(isset($this->css_border_image_source[$y])) {return $this->css_border_image_source[$y];} else { return $this->error; } break;
		 case 'border-image-width': if(isset($this->css_border_image_width[$y])) {return $this->css_border_image_width[$y];} else { return $this->error; } break;
		 case 'border-left': if(isset($this->css_border_left[$y])) {return $this->css_border_left[$y];} else { return $this->error; } break;
		 case 'border-left-color': if(isset($this->css_border_left_color[$y])) {return $this->css_border_left_color[$y];} else { return $this->error; } break;
		 case 'border-left-style': if(isset($this->css_border_left_style[$y])) {return $this->css_border_left_style[$y];} else { return $this->error; } break;
		 case 'border-left-width': if(isset($this->css_border_left_width[$y])) {return $this->css_border_left_width[$y];} else { return $this->error; } break;
		 case 'border-radius': if(isset($this->css_border_radius[$y])) {return $this->css_border_radius[$y];} else { return $this->error; } break;
		 case 'border-right': if(isset($this->css_border_right[$y])) {return $this->css_border_right[$y];} else { return $this->error; } break;
		 case 'border-right-color': if(isset($this->css_border_right_color[$y])) {return $this->css_border_right_color[$y];} else { return $this->error; } break;
		 case 'border-right-style': if(isset($this->css_border_right_style[$y])) {return $this->css_border_right_style[$y];} else { return $this->error; } break;
		 case 'border-right-width': if(isset($this->css_border_right_width[$y])) {return $this->css_border_right_width[$y];} else { return $this->error; } break;
		 case 'border-spacing': if(isset($this->css_border_spacing[$y])) {return $this->css_border_spacing[$y];} else { return $this->error; } break;
		 case 'border-style': if(isset($this->css_border_style[$y])) {return $this->css_border_style[$y];} else { return $this->error; } break;
		 case 'border-top': if(isset($this->css_border_top[$y])) {return $this->css_border_top[$y];} else { return $this->error; } break;
		 case 'border-top-color': if(isset($this->css_border_top_color[$y])) {return $this->css_border_top_color[$y];} else { return $this->error; } break;
		 case 'border-top-left-radius': if(isset($this->css_border_top_left_radius[$y])) {return $this->css_border_top_left_radius[$y];} else { return $this->error; } break;
		 case 'border-top-right-radius': if(isset($this->css_border_top_right_radius[$y])) {return $this->css_border_top_right_radius[$y];} else { return $this->error; } break;
		 case 'border-top-style': if(isset($this->css_border_top_style[$y])) {return $this->css_border_top_style[$y];} else { return $this->error; } break;
		 case 'border-top-width': if(isset($this->css_border_top_width[$y])) {return $this->css_border_top_width[$y];} else { return $this->error; } break;
		 case 'border-width': if(isset($this->css_border_width[$y])) {return $this->css_border_width[$y];} else { return $this->error; } break;
		 case 'bottom': if(isset($this->css_bottom[$y])) {return $this->css_bottom[$y];} else { return $this->error; } break;
		 case 'box-shadow': if(isset($this->css_box_shadow[$y])) {return $this->css_box_shadow[$y];} else { return $this->error; } break;
		 case 'box-sizing': if(isset($this->css_box_sizing[$y])) {return $this->css_box_sizing[$y];} else { return $this->error; } break;
		 case 'caption-side': if(isset($this->css_caption_side[$y])) {return $this->css_caption_side[$y];} else { return $this->error; } break;
		 case 'clear': if(isset($this->css_clear[$y])) {return $this->css_clear[$y];} else { return $this->error; } break;
		 case 'clip': if(isset($this->css_clip[$y])) {return $this->css_clip[$y];} else { return $this->error; } break;
		 case 'color': if(isset($this->css_color[$y])) {return $this->css_color[$y];} else { return $this->error; } break;
		 case 'column-count': if(isset($this->css_column_count[$y])) {return $this->css_column_count[$y];} else { return $this->error; } break;
		 case 'column-fill': if(isset($this->css_column_fill[$y])) {return $this->css_column_fill[$y];} else { return $this->error; } break;
		 case 'column-gap': if(isset($this->css_column_gap[$y])) {return $this->css_column_gap[$y];} else { return $this->error; } break;
		 case 'column-rule': if(isset($this->css_column_rule[$y])) {return $this->css_column_rule[$y];} else { return $this->error; } break;
		 case 'column-rule-color': if(isset($this->css_column_rule_color[$y])) {return $this->css_column_rule_color[$y];} else { return $this->error; } break;
		 case 'column-rule-style': if(isset($this->css_column_rule_style[$y])) {return $this->css_column_rule_style[$y];} else { return $this->error; } break;
		 case 'column-rule-width': if(isset($this->css_column_rule_width[$y])) {return $this->css_column_rule_width[$y];} else { return $this->error; } break;
		 case 'column-span': if(isset($this->css_column_span[$y])) {return $this->css_column_span[$y];} else { return $this->error; } break;
		 case 'column-width': if(isset($this->css_column_width[$y])) {return $this->css_column_width[$y];} else { return $this->error; } break;
		 case 'columns': if(isset($this->css_columns[$y])) {return $this->css_columns[$y];} else { return $this->error; } break;
		 case 'content': if(isset($this->css_content[$y])) {return $this->css_content[$y];} else { return $this->error; } break;
		 case 'counter-increment': if(isset($this->css_counter_increment[$y])) {return $this->css_counter_increment[$y];} else { return $this->error; } break;
		 case 'counter-reset': if(isset($this->css_counter_reset[$y])) {return $this->css_counter_reset[$y];} else { return $this->error; } break;
		 case 'cursor': if(isset($this->css_cursor[$y])) {return $this->css_cursor[$y];} else { return $this->error; } break;
		 case 'direction': if(isset($this->css_direction[$y])) {return $this->css_direction[$y];} else { return $this->error; } break;
		 case 'display': if(isset($this->css_display[$y])) {return $this->css_display[$y];} else { return $this->error; } break;
		 case 'empty-cells': if(isset($this->css_empty_cells[$y])) {return $this->css_empty_cells[$y];} else { return $this->error; } break;
		 case 'flex': if(isset($this->css_flex[$y])) {return $this->css_flex[$y];} else { return $this->error; } break;
		 case 'flex-basis': if(isset($this->css_flex_basis[$y])) {return $this->css_flex_basis[$y];} else { return $this->error; } break;
		 case 'flex-direction': if(isset($this->css_flex_direction[$y])) {return $this->css_flex_direction[$y];} else { return $this->error; } break;
		 case 'flex-flow': if(isset($this->css_flex_flow[$y])) {return $this->css_flex_flow[$y];} else { return $this->error; } break;
		 case 'flex-grow': if(isset($this->css_flex_grow[$y])) {return $this->css_flex_grow[$y];} else { return $this->error; } break;
		 case 'flex-shrink': if(isset($this->css_flex_shrink[$y])) {return $this->css_flex_shrink[$y];} else { return $this->error; } break;
		 case 'flex-wrap': if(isset($this->css_flex_wrap[$y])) {return $this->css_flex_wrap[$y];} else { return $this->error; } break;
		 case 'float': if(isset($this->css_float[$y])) {return $this->css_float[$y];} else { return $this->error; } break;
		 case 'font': if(isset($this->css_font[$y])) {return $this->css_font[$y];} else { return $this->error; } break;
		 case 'font-face': if(isset($this->css_font_face[$y])) {return $this->css_font_face[$y];} else { return $this->error; } break;
		 case 'font-family': if(isset($this->css_font_family[$y])) {return $this->css_font_family[$y];} else { return $this->error; } break;
		 case 'font-size': if(isset($this->css_font_size[$y])) {return $this->css_font_size[$y];} else { return $this->error; } break;
		 case 'font-size-adjust': if(isset($this->css_font_size_adjust[$y])) {return $this->css_font_size_adjust[$y];} else { return $this->error; } break;
		 case 'font-stretch': if(isset($this->css_font_stretch[$y])) {return $this->css_font_stretch[$y];} else { return $this->error; } break;
		 case 'font-style': if(isset($this->css_font_style[$y])) {return $this->css_font_style[$y];} else { return $this->error; } break;
		 case 'font-variant': if(isset($this->css_font_variant[$y])) {return $this->css_font_variant[$y];} else { return $this->error; } break;
		 case 'font-weight': if(isset($this->css_font_weight[$y])) {return $this->css_font_weight[$y];} else { return $this->error; } break;
		 case 'hanging-punctuation': if(isset($this->css_hanging_punctuation[$y])) {return $this->css_hanging_punctuation[$y];} else { return $this->error; } break;
		 case 'height': if(isset($this->css_height[$y])) {return $this->css_height[$y];} else { return $this->error; } break;
		 case 'icon': if(isset($this->css_icon[$y])) {return $this->css_icon[$y];} else { return $this->error; } break;
		 case 'justify-content': if(isset($this->css_justify_content[$y])) {return $this->css_justify_content[$y];} else { return $this->error; } break;
		 case '@keyframes': if(isset($this->css_keyframes[$y])) {return $this->css_keyframes[$y];} else { return $this->error; } break;
		 case 'left': if(isset($this->css_left[$y])) {return $this->css_left[$y];} else { return $this->error; } break;
		 case 'letter-spacing': if(isset($this->css_letter_spacing[$y])) {return $this->css_letter_spacing[$y];} else { return $this->error; } break;
		 case 'line-height': if(isset($this->css_line_height[$y])) {return $this->css_line_height[$y];} else { return $this->error; } break;
		 case 'list-style': if(isset($this->css_list_style[$y])) {return $this->css_list_style[$y];} else { return $this->error; } break;
		 case 'list-style-image': if(isset($this->css_list_style_image[$y])) {return $this->css_list_style_image[$y];} else { return $this->error; } break;
		 case 'list-style-position': if(isset($this->css_list_style_position[$y])) {return $this->css_list_style_position[$y];} else { return $this->error; } break;
		 case 'list-style-type': if(isset($this->css_list_style_type[$y])) {return $this->css_list_style_type[$y];} else { return $this->error; } break;
		 case 'margin': if(isset($this->css_margin[$y])) {return $this->css_margin[$y];} else { return $this->error; } break;
		 case 'margin-bottom': if(isset($this->css_margin_bottom[$y])) {return $this->css_margin_bottom[$y];} else { return $this->error; } break;
		 case 'margin-left': if(isset($this->css_margin_left[$y])) {return $this->css_margin_left[$y];} else { return $this->error; } break;
		 case 'margin-right': if(isset($this->css_margin_right[$y])) {return $this->css_margin_right[$y];} else { return $this->error; } break;
		 case 'margin-top': if(isset($this->css_margin_top[$y])) {return $this->css_margin_top[$y];} else { return $this->error; } break;
		 case 'max-height': if(isset($this->css_max_height[$y])) {return $this->css_max_height[$y];} else { return $this->error; } break;
		 case 'max-width': if(isset($this->css_max_width[$y])) {return $this->css_max_width[$y];} else { return $this->error; } break;
		 case 'min-height': if(isset($this->css_min_height[$y])) {return $this->css_min_height[$y];} else { return $this->error; } break;
		 case 'min-width': if(isset($this->css_min_width[$y])) {return $this->css_min_width[$y];} else { return $this->error; } break;
		 case 'nav-down': if(isset($this->css_nav_down[$y])) {return $this->css_nav_down[$y];} else { return $this->error; } break;
		 case 'nav-index': if(isset($this->css_nav_index[$y])) {return $this->css_nav_index[$y];} else { return $this->error; } break;
		 case 'nav-left': if(isset($this->css_nav_left[$y])) {return $this->css_nav_left[$y];} else { return $this->error; } break;
		 case 'nav-right': if(isset($this->css_nav_right[$y])) {return $this->css_nav_right[$y];} else { return $this->error; } break;
		 case 'nav-up': if(isset($this->css_nav_up[$y])) {return $this->css_nav_up[$y];} else { return $this->error; } break;
		 case 'opacity': if(isset($this->css_opacity[$y])) {return $this->css_opacity[$y];} else { return $this->error; } break;
		 case 'order': if(isset($this->css_order[$y])) {return $this->css_order[$y];} else { return $this->error; } break;
		 case 'outline': if(isset($this->css_outline[$y])) {return $this->css_outline[$y];} else { return $this->error; } break;
		 case 'outline-color': if(isset($this->css_outline_color[$y])) {return $this->css_outline_color[$y];} else { return $this->error; } break;
		 case 'outline-offset': if(isset($this->css_outline_offset[$y])) {return $this->css_outline_offset[$y];} else { return $this->error; } break;
		 case 'outline-style': if(isset($this->css_outline_style[$y])) {return $this->css_outline_style[$y];} else { return $this->error; } break;
		 case 'outline-width': if(isset($this->css_outline_width[$y])) {return $this->css_outline_width[$y];} else { return $this->error; } break;
		 case 'overflow': if(isset($this->css_overflow[$y])) {return $this->css_overflow[$y];} else { return $this->error; } break;
		 case 'overflow-x': if(isset($this->css_overflow_x[$y])) {return $this->css_overflow_x[$y];} else { return $this->error; } break;
		 case 'overflow-y': if(isset($this->css_overflow_y[$y])) {return $this->css_overflow_y[$y];} else { return $this->error; } break;
		 case 'padding': if(isset($this->css_padding[$y])) {return $this->css_padding[$y];} else { return $this->error; } break;
		 case 'padding-bottom': if(isset($this->css_padding_bottom[$y])) {return $this->css_padding_bottom[$y];} else { return $this->error; } break;
		 case 'padding-left': if(isset($this->css_padding_left[$y])) {return $this->css_padding_left[$y];} else { return $this->error; } break;
		 case 'padding-right': if(isset($this->css_padding_right[$y])) {return $this->css_padding_right[$y];} else { return $this->error; } break;
		 case 'padding-top': if(isset($this->css_padding_top[$y])) {return $this->css_padding_top[$y];} else { return $this->error; } break;
		 case 'page-break-after': if(isset($this->css_page_break_after[$y])) {return $this->css_page_break_after[$y];} else { return $this->error; } break;
		 case 'page-break-before': if(isset($this->css_page_break_before[$y])) {return $this->css_page_break_before[$y];} else { return $this->error; } break;
		 case 'page-break-inside': if(isset($this->css_page_break_inside[$y])) {return $this->css_page_break_inside[$y];} else { return $this->error; } break;
		 case 'perspective': if(isset($this->css_perspective[$y])) {return $this->css_perspective[$y];} else { return $this->error; } break;
		 case 'perspective-origin': if(isset($this->css_perspective_origin[$y])) {return $this->css_perspective_origin[$y];} else { return $this->error; } break;
		 case 'position': if(isset($this->css_position[$y])) {return $this->css_position[$y];} else { return $this->error; } break;
		 case 'quotes': if(isset($this->css_quotes[$y])) {return $this->css_quotes[$y];} else { return $this->error; } break;
		 case 'resize': if(isset($this->css_resize[$y])) {return $this->css_resize[$y];} else { return $this->error; } break;
		 case 'right': if(isset($this->css_right[$y])) {return $this->css_right[$y];} else { return $this->error; } break;
		 case 'tab-size': if(isset($this->css_tab_size[$y])) {return $this->css_tab_size[$y];} else { return $this->error; } break;
		 case 'table-layout': if(isset($this->css_table_layout[$y])) {return $this->css_table_layout[$y];} else { return $this->error; } break;
		 case 'text-align': if(isset($this->css_text_align[$y])) {return $this->css_text_align[$y];} else { return $this->error; } break;
		 case 'text-align-last': if(isset($this->css_text_align_last[$y])) {return $this->css_text_align_last[$y];} else { return $this->error; } break;
		 case 'text-decoration': if(isset($this->css_text_decoration[$y])) {return $this->css_text_decoration[$y];} else { return $this->error; } break;
		 case 'text-decoration-color': if(isset($this->css_text_decoration_color[$y])) {return $this->css_text_decoration_color[$y];} else { return $this->error; } break;
		 case 'text-decoration-line': if(isset($this->css_text_decoration_line[$y])) {return $this->css_text_decoration_line[$y];} else { return $this->error; } break;
		 case 'text-indent': if(isset($this->css_text_indent[$y])) {return $this->css_text_indent[$y];} else { return $this->error; } break;
		 case 'text-justify': if(isset($this->css_text_justify[$y])) {return $this->css_text_justify[$y];} else { return $this->error; } break;
		 case 'text-overflow': if(isset($this->css_text_overflow[$y])) {return $this->css_text_overflow[$y];} else { return $this->error; } break;
		 case 'text-shadow': if(isset($this->css_text_shadow[$y])) {return $this->css_text_shadow[$y];} else { return $this->error; } break;
		 case 'text-transform': if(isset($this->css_text_transform[$y])) {return $this->css_text_transform[$y];} else { return $this->error; } break;
		 case 'top': if(isset($this->css_top[$y])) {return $this->css_top[$y];} else { return $this->error; } break;
		 case 'transform': if(isset($this->css_transform[$y])) {return $this->css_transform[$y];} else { return $this->error; } break;
		 case 'transform-origin': if(isset($this->css_transform_origin[$y])) {return $this->css_transform_origin[$y];} else { return $this->error; } break;
		 case 'transform-style': if(isset($this->css_transform_style[$y])) {return $this->css_transform_style[$y];} else { return $this->error; } break;
		 case 'transition': if(isset($this->css_transition[$y])) {return $this->css_transition[$y];} else { return $this->error; } break;
		 case 'transition-delay': if(isset($this->css_transition_delay[$y])) {return $this->css_transition_delay[$y];} else { return $this->error; } break;
		 case 'transition-duration': if(isset($this->css_transition_duration[$y])) {return $this->css_transition_duration[$y];} else { return $this->error; } break;
		 case 'transition-property': if(isset($this->css_transition_property[$y])) {return $this->css_transition_property[$y];} else { return $this->error; } break;
		 case 'transition-timing-function': if(isset($this->css_transition_timing_function[$y])) {return $this->css_transition_timing_function[$y];} else { return $this->error; } break;
		 case 'unicode-bidi': if(isset($this->css_unicode_bidi[$y])) {return $this->css_unicode_bidi[$y];} else { return $this->error; } break;
		 case 'vertical-align': if(isset($this->css_vertical_align[$y])) {return $this->css_vertical_align[$y];} else { return $this->error; } break;
		 case 'visibility': if(isset($this->css_visibility[$y])) {return $this->css_visibility[$y];} else { return $this->error; } break;
		 case 'white-space': if(isset($this->css_white_space[$y])) {return $this->css_white_space[$y];} else { return $this->error; } break;
		 case 'width': if(isset($this->css_width[$y])) {return $this->css_width[$y];} else { return $this->error; } break;
		 case 'word-break': if(isset($this->css_word_break[$y])) {return $this->css_word_break[$y];} else { return $this->error; } break;
		 case 'word-spacing': if(isset($this->css_word_spacing[$y])) {return $this->css_word_spacing[$y];} else { return $this->error; } break;
		 case 'word-wrap': if(isset($this->css_word_wrap[$y])) {return $this->css_word_wrap[$y];} else { return $this->error; } break;
		 case 'z-index': if(isset($this->css_z_index[$y])) {return $this->css_z_index[$y];} else { return $this->error; } break;
		 default: echo "CSS property not valid."; break;
		}
	}

	function parseClass($class) {
		if(strpos($this->css_file, ".$class {") !== false) { $this->cssParse("$class"); }
	}

	function parseTags() {
		 if(strpos($this->css_file, "a {") !== false) { $this->cssParse("a"); }
		 if(strpos($this->css_file, "abbr {") !== false) { $this->cssParse("abbr"); }
		 if(strpos($this->css_file, "acronym {") !== false) { $this->cssParse("acronym"); }
		 if(strpos($this->css_file, "address {") !== false) { $this->cssParse("address"); }
		 if(strpos($this->css_file, "applet {") !== false) { $this->cssParse("applet"); }
		 if(strpos($this->css_file, "area {") !== false) { $this->cssParse("area"); }
		 if(strpos($this->css_file, "article {") !== false) { $this->cssParse("article"); }
		 if(strpos($this->css_file, "aside {") !== false) { $this->cssParse("aside"); }
		 if(strpos($this->css_file, "audio {") !== false) { $this->cssParse("audio"); }
		 if(strpos($this->css_file, "b {") !== false) { $this->cssParse("b"); }
		 if(strpos($this->css_file, "base {") !== false) { $this->cssParse("base"); }
		 if(strpos($this->css_file, "basefont {") !== false) { $this->cssParse("basefont"); }
		 if(strpos($this->css_file, "bdi {") !== false) { $this->cssParse("bdi"); }
		 if(strpos($this->css_file, "bdo {") !== false) { $this->cssParse("bdo"); }
		 if(strpos($this->css_file, "big {") !== false) { $this->cssParse("big"); }
		 if(strpos($this->css_file, "blockquote {") !== false) { $this->cssParse("blockquote"); }
		 if(strpos($this->css_file, "body {") !== false) { $this->cssParse("body"); }
		 if(strpos($this->css_file, "br {") !== false) { $this->cssParse("br"); }
		 if(strpos($this->css_file, "button {") !== false) { $this->cssParse("button"); }
		 if(strpos($this->css_file, "canvas {") !== false) { $this->cssParse("canvas"); }
		 if(strpos($this->css_file, "caption {") !== false) { $this->cssParse("caption"); }
		 if(strpos($this->css_file, "center {") !== false) { $this->cssParse("center"); }
		 if(strpos($this->css_file, "cite {") !== false) { $this->cssParse("cite"); }
		 if(strpos($this->css_file, "code {") !== false) { $this->cssParse("code"); }
		 if(strpos($this->css_file, "col {") !== false) { $this->cssParse("col"); }
		 if(strpos($this->css_file, "colgroup {") !== false) { $this->cssParse("colgroup"); }
		 if(strpos($this->css_file, "datalist {") !== false) { $this->cssParse("datalist"); }
		 if(strpos($this->css_file, "dd {") !== false) { $this->cssParse("dd"); }
		 if(strpos($this->css_file, "del {") !== false) { $this->cssParse("del"); }
		 if(strpos($this->css_file, "details {") !== false) { $this->cssParse("details"); }
		 if(strpos($this->css_file, "dfn {") !== false) { $this->cssParse("dfn"); }
		 if(strpos($this->css_file, "dialog {") !== false) { $this->cssParse("dialog"); }
		 if(strpos($this->css_file, "dir {") !== false) { $this->cssParse("dir"); }
		 if(strpos($this->css_file, "div {") !== false) { $this->cssParse("div"); }
		 if(strpos($this->css_file, "dl {") !== false) { $this->cssParse("dl"); }
		 if(strpos($this->css_file, "dt {") !== false) { $this->cssParse("dt"); }
		 if(strpos($this->css_file, "em {") !== false) { $this->cssParse("em"); }
		 if(strpos($this->css_file, "embed {") !== false) { $this->cssParse("embed"); }
		 if(strpos($this->css_file, "fieldset {") !== false) { $this->cssParse("fieldset"); }
		 if(strpos($this->css_file, "figcaption {") !== false) { $this->cssParse("figcaption"); }
		 if(strpos($this->css_file, "figure {") !== false) { $this->cssParse("figure"); }
		 if(strpos($this->css_file, "font {") !== false) { $this->cssParse("font"); }
		 if(strpos($this->css_file, "footer {") !== false) { $this->cssParse("footer"); }
		 if(strpos($this->css_file, "form {") !== false) { $this->cssParse("form"); }
		 if(strpos($this->css_file, "frame {") !== false) { $this->cssParse("frame"); }
		 if(strpos($this->css_file, "frameset {") !== false) { $this->cssParse("frameset"); }
		 if(strpos($this->css_file, "h1 {") !== false) { $this->cssParse("h1"); }
		 if(strpos($this->css_file, "head {") !== false) { $this->cssParse("head"); }
		 if(strpos($this->css_file, "header {") !== false) { $this->cssParse("header"); }
		 if(strpos($this->css_file, "hr {") !== false) { $this->cssParse("hr"); }
		 if(strpos($this->css_file, "html {") !== false) { $this->cssParse("html"); }
		 if(strpos($this->css_file, "i {") !== false) { $this->cssParse("i"); }
		 if(strpos($this->css_file, "iframe {") !== false) { $this->cssParse("iframe"); }
		 if(strpos($this->css_file, "img {") !== false) { $this->cssParse("img"); }
		 if(strpos($this->css_file, "input {") !== false) { $this->cssParse("input"); }
		 if(strpos($this->css_file, "ins {") !== false) { $this->cssParse("ins"); }
		 if(strpos($this->css_file, "kdb {") !== false) { $this->cssParse("kdb"); }
		 if(strpos($this->css_file, "keygen {") !== false) { $this->cssParse("keygen"); }
		 if(strpos($this->css_file, "label {") !== false) { $this->cssParse("label"); }
		 if(strpos($this->css_file, "legend {") !== false) { $this->cssParse("legend"); }
		 if(strpos($this->css_file, "li {") !== false) { $this->cssParse("li"); }
		 if(strpos($this->css_file, "link {") !== false) { $this->cssParse("link"); }
		 if(strpos($this->css_file, "main {") !== false) { $this->cssParse("main"); }
		 if(strpos($this->css_file, "map {") !== false) { $this->cssParse("map"); }
		 if(strpos($this->css_file, "mark {") !== false) { $this->cssParse("mark"); }
		 if(strpos($this->css_file, "menu {") !== false) { $this->cssParse("menu"); }
		 if(strpos($this->css_file, "menuitem {") !== false) { $this->cssParse("menuitem"); }
		 if(strpos($this->css_file, "meta {") !== false) { $this->cssParse("meta"); }
		 if(strpos($this->css_file, "meter {") !== false) { $this->cssParse("meter"); }
		 if(strpos($this->css_file, "nav {") !== false) { $this->cssParse("nav"); }
		 if(strpos($this->css_file, "noframes {") !== false) { $this->cssParse("noframes"); }
		 if(strpos($this->css_file, "noscript {") !== false) { $this->cssParse("noscript"); }
		 if(strpos($this->css_file, "object {") !== false) { $this->cssParse("object"); }
		 if(strpos($this->css_file, "old {") !== false) { $this->cssParse("old"); }
		 if(strpos($this->css_file, "optgroup {") !== false) { $this->cssParse("optgroup"); }
		 if(strpos($this->css_file, "option {") !== false) { $this->cssParse("option"); }
		 if(strpos($this->css_file, "output {") !== false) { $this->cssParse("output"); }
		 if(strpos($this->css_file, "p {") !== false) { $this->cssParse("p"); }
		 if(strpos($this->css_file, "param {") !== false) { $this->cssParse("param"); }
		 if(strpos($this->css_file, "pre {") !== false) { $this->cssParse("pre"); }
		 if(strpos($this->css_file, "progress {") !== false) { $this->cssParse("progress"); }
		 if(strpos($this->css_file, "q {") !== false) { $this->cssParse("q"); }
		 if(strpos($this->css_file, "rp {") !== false) { $this->cssParse("rp"); }
		 if(strpos($this->css_file, "rt {") !== false) { $this->cssParse("rt"); }
		 if(strpos($this->css_file, "ruby {") !== false) { $this->cssParse("ruby"); }
		 if(strpos($this->css_file, "s {") !== false) { $this->cssParse("s"); }
		 if(strpos($this->css_file, "samp {") !== false) { $this->cssParse("samp"); }
		 if(strpos($this->css_file, "script {") !== false) { $this->cssParse("script"); }
		 if(strpos($this->css_file, "section {") !== false) { $this->cssParse("section"); }
		 if(strpos($this->css_file, "select {") !== false) { $this->cssParse("select"); }
		 if(strpos($this->css_file, "small {") !== false) { $this->cssParse("small"); }
		 if(strpos($this->css_file, "source {") !== false) { $this->cssParse("source"); }
		 if(strpos($this->css_file, "span {") !== false) { $this->cssParse("span"); }
		 if(strpos($this->css_file, "strike {") !== false) { $this->cssParse("strike"); }
		 if(strpos($this->css_file, "strong {") !== false) { $this->cssParse("strong"); }
		 if(strpos($this->css_file, "style {") !== false) { $this->cssParse("style"); }
		 if(strpos($this->css_file, "sub {") !== false) { $this->cssParse("sub"); }
		 if(strpos($this->css_file, "summary {") !== false) { $this->cssParse("summary"); }
		 if(strpos($this->css_file, "sup {") !== false) { $this->cssParse("sup"); }
		 if(strpos($this->css_file, "table {") !== false) { $this->cssParse("table"); }
		 if(strpos($this->css_file, "tbody {") !== false) { $this->cssParse("tbody"); }
		 if(strpos($this->css_file, "td {") !== false) { $this->cssParse("td"); }
		 if(strpos($this->css_file, "textarea {") !== false) { $this->cssParse("textarea"); }
		 if(strpos($this->css_file, "tfoot {") !== false) { $this->cssParse("tfoot"); }
		 if(strpos($this->css_file, "th {") !== false) { $this->cssParse("th"); }
		 if(strpos($this->css_file, "thead {") !== false) { $this->cssParse("thead"); }
		 if(strpos($this->css_file, "time {") !== false) { $this->cssParse("time"); }
		 if(strpos($this->css_file, "title {") !== false) { $this->cssParse("title"); }
		 if(strpos($this->css_file, "tr {") !== false) { $this->cssParse("tr"); }
		 if(strpos($this->css_file, "track {") !== false) { $this->cssParse("track"); }
		 if(strpos($this->css_file, "tt {") !== false) { $this->cssParse("tt"); }
		 if(strpos($this->css_file, "u {") !== false) { $this->cssParse("u"); }
		 if(strpos($this->css_file, "ul {") !== false) { $this->cssParse("ul"); }
		 if(strpos($this->css_file, "var {") !== false) { $this->cssParse("var"); }
		 if(strpos($this->css_file, "video {") !== false) { $this->cssParse("video"); }
		 if(strpos($this->css_file, "wbr {") !== false) { $this->cssParse("wbr"); }
	}

	function cssParse($tag) {
		$x = $tag;
		$tags = preg_replace('/{[^>]*?>([\\s\\S]*?)}/','\\1', $this->css_file);
		$tags = explode("{", $tags);
		$count = 0;
		foreach($tags as $t) {
			if(strpos($t, $tag) !== false) {
			$this->css_tag = $tags[$count+1];
			}
			else {
				$count++;
			}
		}
		$te = strpos($this->css_tag, "}");
		$tr = substr($this->css_tag, 0, $te);
		$this->css_properties = explode(";", $tr);

		foreach($this->css_properties as $tc) {
			if(!substr($tc, 1) == "") {
				if(strpos($tc, "align-content") !== false) { $t_css = explode(":", $tc); $this->css_align_content[$x] = $t_css[1];}
				if(strpos($tc, "align-items") !== false) { $t_css = explode(":", $tc); $this->css_align_items[$x] = $t_css[1];}
				if(strpos($tc, "align-self") !== false) { $t_css = explode(":", $tc); $this->css_align_self[$x] = $t_css[1];}
				if(strpos($tc, "animation") !== false) { $t_css = explode(":", $tc); $this->css_animation[$x] = $t_css[1];}
				if(strpos($tc, "animation-delay") !== false) { $t_css = explode(":", $tc); $this->css_animation_delay[$x] = $t_css[1];}
				if(strpos($tc, "animation-direction") !== false) { $t_css = explode(":", $tc); $this->css_animation_direction[$x] = $t_css[1];}
				if(strpos($tc, "animation-duration") !== false) { $t_css = explode(":", $tc); $this->css_animation_duration[$x] = $t_css[1];}
				if(strpos($tc, "animation-fill-mode") !== false) { $t_css = explode(":", $tc); $this->css_animation_fill_mode[$x] = $t_css[1];}
				if(strpos($tc, "animation-iteration-count") !== false) { $t_css = explode(":", $tc); $this->css_animation_iteration_count[$x] = $t_css[1];}
				if(strpos($tc, "animation-name") !== false) { $t_css = explode(":", $tc); $this->css_animation_name[$x] = $t_css[1];}
				if(strpos($tc, "animation-play-state") !== false) { $t_css = explode(":", $tc); $this->css_animation_play_state[$x] = $t_css[1];}
				if(strpos($tc, "backface-visibility") !== false) { $t_css = explode(":", $tc); $this->css_backface_visibilty[$x] = $t_css[1];}
				if(strpos($tc, "background") !== false) { $t_css = explode(":", $tc); $this->css_background[$x] = $t_css[1];}
				if(strpos($tc, "background-attachment") !== false) { $t_css = explode(":", $tc); $this->css_background_attachment[$x] = $t_css[1];}
				if(strpos($tc, "background-clip") !== false) { $t_css = explode(":", $tc); $this->css_background_clip[$x] = $t_css[1];}
				if(strpos($tc, "background-color") !== false) { $t_css = explode(":", $tc); $this->css_background_color[$x] = $t_css[1];}
				if(strpos($tc, "background-image") !== false) { $t_css = explode(":", $tc); $this->css_background_image[$x] = $t_css[1];}
				if(strpos($tc, "background-origin") !== false) { $t_css = explode(":", $tc); $this->css_background_origin[$x] = $t_css[1];} 
				if(strpos($tc, "background-position") !== false) { $t_css = explode(":", $tc); $this->css_background_position[$x] = $t_css[1];}
				if(strpos($tc, "background-repeat") !== false) { $t_css = explode(":", $tc); $this->css_background_repeat[$x] = $t_css[1];}
				if(strpos($tc, "background-size") !== false) { $t_css = explode(":", $tc); $this->css_background_size[$x] = $t_css[1];}
				if(strpos($tc, "border") !== false) { $t_css = explode(":", $tc); $this->css_border[$x] = $t_css[1];}
				if(strpos($tc, "border-bottom") !== false) { $t_css = explode(":", $tc); $this->css_border_bottom[$x] = $t_css[1];} 
				if(strpos($tc, "border-bottom-color") !== false) { $t_css = explode(":", $tc); $this->css_border_bottom_color[$x] = $t_css[1];}
				if(strpos($tc, "border-bottom-left-radius") !== false) { $t_css = explode(":", $tc); $this->css_border_bottom_left_radius[$x] = $t_css[1];}
				if(strpos($tc, "border-bottom-right-radius") !== false) { $t_css = explode(":", $tc); $this->css_border_bottom_right_radius[$x] = $t_css[1];}
				if(strpos($tc, "border-bottom-style") !== false) { $t_css = explode(":", $tc); $this->css_border_bottom_style[$x] = $t_css[1];} 
				if(strpos($tc, "border-bottom-width") !== false) { $t_css = explode(":", $tc); $this->css_border_bottom_width[$x] = $t_css[1];}
				if(strpos($tc, "border-collapse") !== false) { $t_css = explode(":", $tc); $this->css_border_collapse[$x] = $t_css[1];}
				if(strpos($tc, "border-color") !== false) { $t_css = explode(":", $tc); $this->css_border_color[$x] = $t_css[1];}
				if(strpos($tc, "border-image") !== false) { $t_css = explode(":", $tc); $this->css_border_image[$x] = $t_css[1];}
				if(strpos($tc, "border-image-outset") !== false) { $t_css = explode(":", $tc); $this->css_border_image_outset[$x] = $t_css[1];}
				if(strpos($tc, "border-image-repeat") !== false) { $t_css = explode(":", $tc); $this->css_border_image_repeat[$x] = $t_css[1];}		
				if(strpos($tc, "border-image-slice") !== false) { $t_css = explode(":", $tc); $this->css_border_image_slice[$x] = $t_css[1];}
				if(strpos($tc, "border-image-source") !== false) { $t_css = explode(":", $tc); $this->css_border_image_source[$x] = $t_css[1];}
				if(strpos($tc, "border-image-width") !== false) { $t_css = explode(":", $tc); $this->css_border_image_width[$x] = $t_css[1];} 
				if(strpos($tc, "border-left") !== false) { $t_css = explode(":", $tc); $this->css_border_left[$x] = $t_css[1];}
				if(strpos($tc, "border-left-color") !== false) { $t_css = explode(":", $tc); $this->css_border_left_color[$x] = $t_css[1];}
				if(strpos($tc, "border-left-style") !== false) { $t_css = explode(":", $tc); $this->css_border_left_style[$x] = $t_css[1];}
				if(strpos($tc, "border-left-width") !== false) { $t_css = explode(":", $tc); $this->css_border_left_width[$x] = $t_css[1];}
				if(strpos($tc, "border-radius") !== false) { $t_css = explode(":", $tc); $this->css_border_radius[$x] = $t_css[1];}
				if(strpos($tc, "border-right") !== false) { $t_css = explode(":", $tc); $this->css_border_right[$x] = $t_css[1];}
				if(strpos($tc, "border-right-color") !== false) { $t_css = explode(":", $tc); $this->css_border_right_color[$x] = $t_css[1];}
				if(strpos($tc, "border-right-style") !== false) { $t_css = explode(":", $tc); $this->css_border_right_style[$x] = $t_css[1];}
				if(strpos($tc, "border-right-width") !== false) { $t_css = explode(":", $tc); $this->css_border_right_width[$x] = $t_css[1];}
				if(strpos($tc, "border-spacing") !== false) { $t_css = explode(":", $tc); $this->css_border_spacing[$x] = $t_css[1];}
				if(strpos($tc, "border-style") !== false) { $t_css = explode(":", $tc); $this->css_border_style[$x] = $t_css[1];}
				if(strpos($tc, "border-top") !== false) { $t_css = explode(":", $tc); $this->css_border_top[$x] = $t_css[1];}
				if(strpos($tc, "border-top-color") !== false) { $t_css = explode(":", $tc); $this->css_border_top_color[$x] = $t_css[1];}
				if(strpos($tc, "border-top-left-radius") !== false) { $t_css = explode(":", $tc); $this->css_border_top_left_radius[$x] = $t_css[1];}	
				if(strpos($tc, "border-top-right-radius") !== false) { $t_css = explode(":", $tc); $this->css_border_top_right_radius[$x] = $t_css[1];}
				if(strpos($tc, "border-top-style") !== false) { $t_css = explode(":", $tc); $this->css_border_top_style[$x] = $t_css[1];}
				if(strpos($tc, "border-top-width") !== false) { $t_css = explode(":", $tc); $this->css_border_top_width[$x] = $t_css[1];}
				if(strpos($tc, "border-width") !== false) { $t_css = explode(":", $tc); $this->css_border_width[$x] = $t_css[1];}
				if(strpos($tc, "bottom") !== false) { $t_css = explode(":", $tc); $this->css_bottom[$x] = $t_css[1];}
				if(strpos($tc, "box-shadow") !== false) { $t_css = explode(":", $tc); $this->css_box_shadow[$x] = $t_css[1];}			
				if(strpos($tc, "box-sizing") !== false) { $t_css = explode(":", $tc); $this->css_box_sizing[$x] = $t_css[1];}	
				if(strpos($tc, "caption-side") !== false) { $t_css = explode(":", $tc); $this->css_caption_side[$x] = $t_css[1];}
				if(strpos($tc, "clear") !== false) { $t_css = explode(":", $tc); $this->css_clear[$x] = $t_css[1];}
				if(strpos($tc, "clip") !== false) { $t_css = explode(":", $tc); $this->css_clip[$x] = $t_css[1];}
				if(strpos($tc, "color") !== false) { $t_css = explode(":", $tc); $this->css_color[$x] = $t_css[1];}
				if(strpos($tc, "column-count") !== false) { $t_css = explode(":", $tc); $this->css_column_count[$x] = $t_css[1];}
				if(strpos($tc, "column-fill") !== false) { $t_css = explode(":", $tc); $this->css_column_fill[$x] = $t_css[1];}
				if(strpos($tc, "column-gap") !== false) { $t_css = explode(":", $tc); $this->css_column_gap[$x] = $t_css[1];}
				if(strpos($tc, "column-rule") !== false) { $t_css = explode(":", $tc); $this->css_column_rule[$x] = $t_css[1];}
				if(strpos($tc, "column-rule-color") !== false) { $t_css = explode(":", $tc); $this->css_column_rule_color[$x] = $t_css[1];}
				if(strpos($tc, "column-rule-style") !== false) { $t_css = explode(":", $tc); $this->css_column_rule_style[$x] = $t_css[1];}
				if(strpos($tc, "column-rule-width") !== false) { $t_css = explode(":", $tc); $this->css_column_rule_width[$x] = $t_css[1];}
				if(strpos($tc, "column-span") !== false) { $t_css = explode(":", $tc); $this->css_column_span[$x] = $t_css[1];}
				if(strpos($tc, "column-width") !== false) { $t_css = explode(":", $tc); $this->css_column_width[$x] = $t_css[1];}
				if(strpos($tc, "columns") !== false) { $t_css = explode(":", $tc); $this->css_columns[$x] = $t_css[1];}
				if(strpos($tc, "content") !== false) { $t_css = explode(":", $tc); $this->css_content[$x] = $t_css[1];}
				if(strpos($tc, "counter-increment") !== false) { $t_css = explode(":", $tc); $this->css_counter_increment[$x] = $t_css[1];}
				if(strpos($tc, "counter-reset") !== false) { $t_css = explode(":", $tc); $this->css_counter_reset[$x] = $t_css[1];}
				if(strpos($tc, "cursor") !== false) { $t_css = explode(":", $tc); $this->css_cursor[$x] = $t_css[1];}
				if(strpos($tc, "direction") !== false) { $t_css = explode(":", $tc); $this->css_direction[$x] = $t_css[1];}
				if(strpos($tc, "display") !== false) { $t_css = explode(":", $tc); $this->css_display[$x] = $t_css[1];}
				if(strpos($tc, "empty-cells") !== false) { $t_css = explode(":", $tc); $this->css_empty_cells[$x] = $t_css[1];}
				if(strpos($tc, "flex") !== false) { $t_css = explode(":", $tc); $this->css_flex[$x] = $t_css[1];}
				if(strpos($tc, "flex-basis") !== false) { $t_css = explode(":", $tc); $this->css_flex_basis[$x] = $t_css[1];}
				if(strpos($tc, "flex-direction") !== false) { $t_css = explode(":", $tc); $this->css_flex_direction[$x] = $t_css[1];}
				if(strpos($tc, "flex-flow") !== false) { $t_css = explode(":", $tc); $this->css_flex_flow[$x] = $t_css[1];}
				if(strpos($tc, "flex-grow") !== false) { $t_css = explode(":", $tc); $this->css_flex_grow[$x] = $t_css[1];}
				if(strpos($tc, "flex-shrink") !== false) { $t_css = explode(":", $tc); $this->css_flex_shrink[$x] = $t_css[1];}
				if(strpos($tc, "flex-wrap") !== false) { $t_css = explode(":", $tc); $this->css_flex_wrap[$x] = $t_css[1];}
				if(strpos($tc, "float") !== false) { $t_css = explode(":", $tc); $this->css_float[$x] = $t_css[1];}
				if(strpos($tc, "font") !== false) { $t_css = explode(":", $tc); $this->css_font[$x] = $t_css[1];}
				if(strpos($tc, "@font-face") !== false) { $t_css = explode(":", $tc); $this->css_font_face[$x] = $t_css[1];}	
				if(strpos($tc, "font-family") !== false) { $t_css = explode(":", $tc); $this->css_font_family[$x] = $t_css[1];}
				if(strpos($tc, "font-size") !== false) { $t_css = explode(":", $tc); $this->css_font_size[$x] = $t_css[1];}
				if(strpos($tc, "font-size-adjust") !== false) { $t_css = explode(":", $tc); $this->css_font_size_adjust[$x] = $t_css[1];}	
				if(strpos($tc, "font-stretch") !== false) { $t_css = explode(":", $tc); $this->css_font_stretch[$x] = $t_css[1];}
				if(strpos($tc, "font-style") !== false) { $t_css = explode(":", $tc); $this->css_font_style[$x] = $t_css[1];}
				if(strpos($tc, "font-variant") !== false) { $t_css = explode(":", $tc); $this->css_font_variant[$x] = $t_css[1];}
				if(strpos($tc, "font-weight") !== false) { $t_css = explode(":", $tc); $this->css_font_weight[$x] = $t_css[1];}
				if(strpos($tc, "hanging-punctuation") !== false) { $t_css = explode(":", $tc); $this->css_hanging_punctuation[$x] = $t_css[1];}
				if(strpos($tc, "height") !== false) { $t_css = explode(":", $tc); $this->css_height[$x] = $t_css[1];}
				if(strpos($tc, "icon") !== false) { $t_css = explode(":", $tc); $this->css_icon[$x] = $t_css[1];}
				if(strpos($tc, "justify-content") !== false) { $t_css = explode(":", $tc); $this->css_justify_content[$x] = $t_css[1];}
				if(strpos($tc, "@keyframes") !== false) { $t_css = explode(":", $tc); $this->css_keyframes[$x] = $t_css[1];}
				if(strpos($tc, "left") !== false) { $t_css = explode(":", $tc); $this->css_left[$x] = $t_css[1];}
				if(strpos($tc, "letter-spacing") !== false) { $t_css = explode(":", $tc); $this->css_letter_spacing[$x] = $t_css[1];}
				if(strpos($tc, "line-height") !== false) { $t_css = explode(":", $tc); $this->css_line_height[$x] = $t_css[1];}
				if(strpos($tc, "list-style") !== false) { $t_css = explode(":", $tc); $this->css_list_style[$x] = $t_css[1];}
				if(strpos($tc, "list-style-image") !== false) { $t_css = explode(":", $tc); $this->css_list_style_image[$x] = $t_css[1];}
				if(strpos($tc, "list-style-position") !== false) { $t_css = explode(":", $tc); $this->css_list_style_position[$x] = $t_css[1];}
				if(strpos($tc, "list-style-type") !== false) { $t_css = explode(":", $tc); $this->css_list_style_type[$x] = $t_css[1];}
				if(strpos($tc, "margin") !== false) { $t_css = explode(":", $tc); $this->css_margin[$x] = $t_css[1];}
				if(strpos($tc, "margin-bottom") !== false) { $t_css = explode(":", $tc); $this->css_margin_bottom[$x] = $t_css[1];}
				if(strpos($tc, "margin-left") !== false) { $t_css = explode(":", $tc); $this->css_margin_left[$x] = $t_css[1];}
				if(strpos($tc, "margin-right") !== false) { $t_css = explode(":", $tc); $this->css_margin_right[$x] = $t_css[1];}
				if(strpos($tc, "margin-top") !== false) { $t_css = explode(":", $tc); $this->css_margin_top[$x] = $t_css[1];}
				if(strpos($tc, "max-height") !== false) { $t_css = explode(":", $tc); $this->css_max_height[$x] = $t_css[1];}
				if(strpos($tc, "max-width") !== false) { $t_css = explode(":", $tc); $this->css_max_width[$x] = $t_css[1];}
				if(strpos($tc, "min-height") !== false) { $t_css = explode(":", $tc); $this->css_min_height[$x] = $t_css[1];}
				if(strpos($tc, "min-width") !== false) { $t_css = explode(":", $tc); $this->css_min_width[$x] = $t_css[1];}
				if(strpos($tc, "nav-down") !== false) { $t_css = explode(":", $tc); $this->css_nav_down[$x] = $t_css[1];}					
				if(strpos($tc, "nav-index") !== false) { $t_css = explode(":", $tc); $this->css_nav_index[$x] = $t_css[1];}					
				if(strpos($tc, "nav-left") !== false) { $t_css = explode(":", $tc); $this->css_nav_left[$x] = $t_css[1];}					
				if(strpos($tc, "nav-right") !== false) { $t_css = explode(":", $tc); $this->css_nav_right[$x] = $t_css[1];}					
				if(strpos($tc, "nav-up") !== false) { $t_css = explode(":", $tc); $this->css_nav_up[$x] = $t_css[1];}									
				if(strpos($tc, "opacity") !== false) { $t_css = explode(":", $tc); $this->css_opacity[$x] = $t_css[1];}	
				if(strpos($tc, "order") !== false) { $t_css = explode(":", $tc); $this->css_order[$x] = $t_css[1];}	
				if(strpos($tc, "outline") !== false) { $t_css = explode(":", $tc); $this->css_outline[$x] = $t_css[1];}
				if(strpos($tc, "outline-color") !== false) { $t_css = explode(":", $tc); $this->css_outline_color[$x] = $t_css[1];}
				if(strpos($tc, "outline-offset") !== false) { $t_css = explode(":", $tc); $this->css_outline_offset[$x] = $t_css[1];}
				if(strpos($tc, "outline-style") !== false) { $t_css = explode(":", $tc); $this->css_outline_style[$x] = $t_css[1];}
				if(strpos($tc, "outline-width") !== false) { $t_css = explode(":", $tc); $this->css_outline_width[$x] = $t_css[1];}
				if(strpos($tc, "overflow") !== false) { $t_css = explode(":", $tc); $this->css_overflow[$x] = $t_css[1];}
				if(strpos($tc, "overflow-x") !== false) { $t_css = explode(":", $tc); $this->css_overflow_x[$x] = $t_css[1];}
				if(strpos($tc, "overflow-y") !== false) { $t_css = explode(":", $tc); $this->css_overflow_y[$x] = $t_css[1];}
				if(strpos($tc, "padding") !== false) { $t_css = explode(":", $tc); $this->css_padding[$x] = $t_css[1];}
				if(strpos($tc, "padding-bottom") !== false) { $t_css = explode(":", $tc); $this->css_padding_bottom[$x] = $t_css[1];}
				if(strpos($tc, "padding-left") !== false) { $t_css = explode(":", $tc); $this->css_padding_left[$x] = $t_css[1];}
				if(strpos($tc, "padding-right") !== false) { $t_css = explode(":", $tc); $this->css_padding_right[$x] = $t_css[1];}
				if(strpos($tc, "padding-top") !== false) { $t_css = explode(":", $tc); $this->css_padding_top[$x] = $t_css[1];}
				if(strpos($tc, "page-break-after") !== false) { $t_css = explode(":", $tc); $this->css_page_break_after[$x] = $t_css[1];}
				if(strpos($tc, "page-break-before") !== false) { $t_css = explode(":", $tc); $this->css_page_break_before[$x] = $t_css[1];}
				if(strpos($tc, "page-break-inside") !== false) { $t_css = explode(":", $tc); $this->css_page_break_inside[$x] = $t_css[1];}
				if(strpos($tc, "perspective") !== false) { $t_css = explode(":", $tc); $this->css_perspective[$x] = $t_css[1];}
				if(strpos($tc, "perspective-origin") !== false) { $t_css = explode(":", $tc); $this->css_perspective_origin[$x] = $t_css[1];}
				if(strpos($tc, "position") !== false) { $t_css = explode(":", $tc); $this->css_position[$x] = $t_css[1];}
				if(strpos($tc, "quotes") !== false) { $t_css = explode(":", $tc); $this->css_quotes[$x] = $t_css[1];}
				if(strpos($tc, "resize") !== false) { $t_css = explode(":", $tc); $this->css_resize[$x] = $t_css[1];}	
				if(strpos($tc, "right") !== false) { $t_css = explode(":", $tc); $this->css_right[$x] = $t_css[1];}
				if(strpos($tc, "tab-size") !== false) { $t_css = explode(":", $tc); $this->css_tab_size[$x] = $t_css[1];}
				if(strpos($tc, "table-layout") !== false) { $t_css = explode(":", $tc); $this->css_table_layout[$x] = $t_css[1];}
				if(strpos($tc, "text-align") !== false) { $t_css = explode(":", $tc); $this->css_text_align[$x] = $t_css[1];}
				if(strpos($tc, "text-align-last") !== false) { $t_css = explode(":", $tc); $this->css_text_align_last[$x] = $t_css[1];}
				if(strpos($tc, "text-decoration") !== false) { $t_css = explode(":", $tc); $this->css_text_decoration[$x] = $t_css[1];}
				if(strpos($tc, "text-decoration-color") !== false) { $t_css = explode(":", $tc); $this->css_text_decoration_color[$x] = $t_css[1];}
				if(strpos($tc, "text-decoration-line") !== false) { $t_css = explode(":", $tc); $this->css_text_decoration_line[$x] = $t_css[1];}
				if(strpos($tc, "text-indent") !== false) { $t_css = explode(":", $tc); $this->css_text_indent[$x] = $t_css[1];}
				if(strpos($tc, "text-justify") !== false) { $t_css = explode(":", $tc); $this->css_text_justify[$x] = $t_css[1];}
				if(strpos($tc, "text-overflow") !== false) { $t_css = explode(":", $tc); $this->css_text_overflow[$x] = $t_css[1];}
				if(strpos($tc, "text-shadow") !== false) { $t_css = explode(":", $tc); $this->css_text_shadow[$x] = $t_css[1];}
				if(strpos($tc, "text-transform") !== false) { $t_css = explode(":", $tc); $this->css_text_transform[$x] = $t_css[1];}
				if(strpos($tc, "top") !== false) { $t_css = explode(":", $tc); $this->css_top[$x] = $t_css[1];}
				if(strpos($tc, "transform") !== false) { $t_css = explode(":", $tc); $this->css_transform[$x] = $t_css[1];}
				if(strpos($tc, "transform-origin") !== false) { $t_css = explode(":", $tc); $this->css_transform_origin[$x] = $t_css[1];}
				if(strpos($tc, "transform-style") !== false) { $t_css = explode(":", $tc); $this->css_transform_style[$x] = $t_css[1];}
				if(strpos($tc, "transition") !== false) { $t_css = explode(":", $tc); $this->css_transition[$x] = $t_css[1];}
				if(strpos($tc, "transition-delay") !== false) { $t_css = explode(":", $tc); $this->css_transition_delay[$x] = $t_css[1];}
				if(strpos($tc, "transition-duration") !== false) { $t_css = explode(":", $tc); $this->css_transition_duration[$x] = $t_css[1];}
				if(strpos($tc, "transition-property") !== false) { $t_css = explode(":", $tc); $this->css_transition_property[$x] = $t_css[1];}
				if(strpos($tc, "transition-timing-function") !== false) { $t_css = explode(":", $tc); $this->css_transition_timing_function[$x] = $t_css[1];}
				if(strpos($tc, "unicode-bidi") !== false) { $t_css = explode(":", $tc); $this->css_unicode_bidi[$x] = $t_css[1];}
				if(strpos($tc, "vertical-align") !== false) { $t_css = explode(":", $tc); $this->css_vertical_align[$x] = $t_css[1];}
				if(strpos($tc, "visibility") !== false) { $t_css = explode(":", $tc); $this->css_visibility[$x] = $t_css[1];}
				if(strpos($tc, "white-space") !== false) { $t_css = explode(":", $tc); $this->css_white_space[$x] = $t_css[1];}
				if(strpos($tc, "width") !== false) { $t_css = explode(":", $tc); $this->css_width[$x] = $t_css[1];}
				if(strpos($tc, "word-break") !== false) { $t_css = explode(":", $tc); $this->css_word_break[$x] = $t_css[1];}	
				if(strpos($tc, "word-spacing") !== false) { $t_css = explode(":", $tc); $this->css_word_spacing[$x] = $t_css[1];}
				if(strpos($tc, "word-wrap") !== false) { $t_css = explode(":", $tc); $this->css_word_wrap[$x] = $t_css[1];}
				if(strpos($tc, "z-index") !== false) { $t_css = explode(":", $tc); $this->css_z_index[$x] = $t_css[1];}
				// Yeah, it did take ages.
			}
		}
	}
}
?>