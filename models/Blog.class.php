<?php
class Blog {
	public function getPosts() {
		return array(
			1 => array(
				'id' => 1,
				'title' => 'Lorem ipsum dolor amet',
				'date' => 'Dec 27th 2011, 10:11:12',
				'excerpt' => 'Pellentesque hendrerit est sed dolor facilisis non semper magna sollicitudin. Pellentesque laoreet massa sit amet metus ultricies suscipit. Sed non leo velit.',
				'content' => 'Pellentesque hendrerit est sed dolor facilisis non semper magna sollicitudin. Pellentesque laoreet massa sit amet metus ultricies suscipit. Sed non leo velit. Nam sagittis, ipsum suscipit malesuada ullamcorper, felis purus fermentum tellus, nec consectetur ante orci nec lorem. Sed vel elit dui, varius congue lacus. Phasellus commodo fermentum posuere. Ut dictum nisi sodales mauris condimentum vestibulum malesuada libero bibendum. Aenean tincidunt odio quis massa malesuada hendrerit ornare mi elementum. Sed viverra, dolor non hendrerit aliquam, turpis libero blandit est, sit amet dignissim nibh orci non mi. Donec nec sapien mauris. Proin ac leo quis justo pulvinar mollis.',
				'comments' => array(
					array(
						'id' => 1,
						'name' => 'Sit Amet',
						'website' => null,
						'content' => 'Proin id enim at lectus ultrices hendrerit eu dignissim turpis. Vestibulum in massa dolor. Donec congue congue est a egestas. Nunc lectus lacus, dictum iaculis egestas sed, volutpat at velit. Nullam tellus sapien, tempor sed commodo sit amet, sodales ac ipsum. Praesent at tellus mauris, nec ultricies diam. In molestie facilisis lacus sed auctor.',
						'date' => 'Dec 27th 2011, 11:11:11',
					),
					array(
						'id' => 2,
						'name' => 'Nunc Tellus',
						'website' => null,
						'content' => 'Donec tortor diam, tincidunt non dapibus et, luctus in sapien. Phasellus sed turpis erat. Sed venenatis, urna sed sollicitudin posuere, massa tortor malesuada nunc, id laoreet justo tortor ut dolor. Integer aliquam, tellus et malesuada sagittis, lacus risus pulvinar diam, ac adipiscing ligula dui cursus metus. Donec blandit hendrerit odio, vitae tristique nisl mollis a. Integer pharetra neque sed lectus vulputate nec sagittis nisi tincidunt. Suspendisse malesuada congue laoreet. Quisque a turpis sed ante fermentum dapibus.',
						'date' => 'Dec 27th 2011, 13:12:11',
					),
					array(
						'id' => 3,
						'name' => 'Wikia',
						'website' => 'http://www.wikia.com',
						'content' => 'Fusce tincidunt tempus consectetur. Proin nec erat tellus, a consectetur nibh. Proin eget nulla est. Proin arcu dolor, elementum a sagittis vel, semper sit amet sem. Duis venenatis tempor leo fermentum pretium. Nulla facilisi. Vestibulum mi elit, ullamcorper id vulputate id, porttitor a metus. Curabitur tempor, orci vitae auctor commodo, mi nisi lobortis velit, non semper risus mi vitae augue. Curabitur placerat neque at turpis mattis et commodo purus tincidunt.',
						'date' => 'Dec 29th 2011, 18:11:15',
					),
				),
				'tags' => array(),
				'author' => 'admin',
			),
			2 => array(
				'id' => 2,
				'title' => 'Vestibulum ante ipsum',
				'date' => 'Dec 29th 2011, 12:13:14',
				'excerpt' => 'Proin quis tortor in dolor pulvinar convallis vel id odio. Donec orci est, ultricies vitae vulputate nec, dapibus nec ante. Mauris iaculis justo nec sem adipiscing elementum. In sit amet odio in turpis fringilla lobortis sed a ligula.',
				'content' => 'Proin quis tortor in dolor pulvinar convallis vel id odio. Donec orci est, ultricies vitae vulputate nec, dapibus nec ante. Mauris iaculis justo nec sem adipiscing elementum. In sit amet odio in turpis fringilla lobortis sed a ligula. Duis at est nec tellus consectetur sagittis nec id arcu. Maecenas diam turpis, laoreet sit amet lacinia consequat, lacinia vel turpis. Maecenas porta est ultrices ante pellentesque pharetra et sed nisi. Phasellus a erat velit, et ullamcorper augue. Aenean fermentum risus odio, ultrices gravida dui.',
				'comments' => array(
					array(
						'id' => 4,
						'name' => 'Sit Amet',
						'website' => null,
						'content' => 'Proin id enim at lectus ultrices hendrerit eu dignissim turpis. Vestibulum in massa dolor. Donec congue congue est a egestas. Nunc lectus lacus, dictum iaculis egestas sed, volutpat at velit. Nullam tellus sapien, tempor sed commodo sit amet, sodales ac ipsum. Praesent at tellus mauris, nec ultricies diam. In molestie facilisis lacus sed auctor.',
						'date' => 'Dec 30th 2011, 11:11:11',
					),
					array(
						'id' => 5,
						'name' => 'Nunc Tellus',
						'website' => null,
						'content' => 'Donec tortor diam, tincidunt non dapibus et, luctus in sapien. Phasellus sed turpis erat. Sed venenatis, urna sed sollicitudin posuere, massa tortor malesuada nunc, id laoreet justo tortor ut dolor. Integer aliquam, tellus et malesuada sagittis, lacus risus pulvinar diam, ac adipiscing ligula dui cursus metus. Donec blandit hendrerit odio, vitae tristique nisl mollis a. Integer pharetra neque sed lectus vulputate nec sagittis nisi tincidunt. Suspendisse malesuada congue laoreet. Quisque a turpis sed ante fermentum dapibus.',
						'date' => 'Dec 30th 2011, 12:11:11',
					),
					array(
						'id' => 6,
						'name' => 'Nullam ante Diam',
						'website' => null,
						'content' => 'Nullam ante diam, congue non rhoncus quis, suscipit mattis purus. Phasellus nec massa justo, sed lobortis felis. In vitae arcu tortor. Fusce accumsan massa nec nunc pharetra eget aliquet tortor adipiscing. Sed vel nisi non lorem tempus dictum ac in est. Integer commodo vestibulum dolor, ac dignissim ipsum laoreet sit amet.',
						'date' => 'Dec 30th 2011, 13:11:11',
					),
					array(
						'id' => 7,
						'name' => 'Duis luctus',
						'website' => null,
						'content' => 'Nam vehicula ipsum vitae nisi pharetra a varius orci viverra. Vestibulum sapien justo, eleifend imperdiet congue et, sollicitudin vitae felis. Nam id tortor quis dui suscipit gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras fermentum consequat massa vitae semper.',
						'date' => 'Dec 30th 2011, 14:11:11',
					),
					array(
						'id' => 8,
						'name' => 'Cras Auctor',
						'website' => 'http://www.wikia.com',
						'content' => 'Fusce tincidunt tempus consectetur. Proin nec erat tellus, a consectetur nibh. Proin eget nulla est. Proin arcu dolor, elementum a sagittis vel, semper sit amet sem. Duis venenatis tempor leo fermentum pretium. Nulla facilisi. Vestibulum mi elit, ullamcorper id vulputate id, porttitor a metus. Curabitur tempor, orci vitae auctor commodo, mi nisi lobortis velit, non semper risus mi vitae augue. Curabitur placerat neque at turpis mattis et commodo purus tincidunt.',
						'date' => 'Dec 30th 2011, 15:11:11',
					),
					array(
						'id' => 9,
						'name' => 'Mattis Porttitor',
						'website' => null,
						'content' => 'Morbi varius tortor quis tellus vehicula in feugiat risus sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla dui ipsum, mattis ac gravida quis, sodales scelerisque tortor. Aenean in dictum metus. Morbi dictum condimentum accumsan. Fusce congue neque in diam convallis at cursus orci scelerisque. Phasellus vitae erat est. Ut ac faucibus sem.',
						'date' => 'Dec 30th 2011, 16:11:11',
					),
					array(
						'id' => 10,
						'name' => 'Curabitur Tempor',
						'website' => null,
						'content' => 'Curabitur sagittis ligula vitae justo aliquam tincidunt. Curabitur adipiscing dui at diam pharetra vitae venenatis lacus facilisis. Ut molestie placerat nulla vel bibendum. Sed scelerisque gravida vestibulum. Duis a lectus magna. Suspendisse potenti. Maecenas elementum luctus lobortis. Quisque molestie egestas massa, ac egestas nunc vehicula eu.',
						'date' => 'Dec 30th 2011, 17:11:11',
					),
					array(
						'id' => 11,
						'name' => 'Lacus Arcu',
						'website' =>  null,
						'content' => 'Donec nulla nunc, malesuada eget tincidunt quis, adipiscing vitae massa. Aenean dapibus orci nec metus rhoncus commodo. Nunc aliquam quam in mauris cursus eleifend vel eget lectus. Aenean feugiat tempor dolor id sollicitudin. Sed iaculis sem sit amet nisi aliquam eleifend. Cras pharetra enim pellentesque est sollicitudin a adipiscing dolor tristique.',
						'date' => 'Dec 30th 2011, 18:11:11',
					),
				),
				'tags' => array(),
				'author' => 'nAndy',
			),
			3 => array(
				'id' => 3,
				'title' => 'Fusce non nulla leo',
				'date' => 'Dec 30th 2011, 14:20:24',
				'excerpt' => 'Cras est nibh, porttitor a pretium at, porttitor et dolor. Proin dignissim, mi et varius pulvinar, augue lacus porta risus, at posuere erat urna vitae nibh. Aenean adipiscing, tortor sollicitudin sollicitudin placerat, lectus diam blandit quam, in accumsan sapien nunc vel arcu. Aliquam erat volutpat.',
				'content' => 'Cras est nibh, porttitor a pretium at, porttitor et dolor. Proin dignissim, mi et varius pulvinar, augue lacus porta risus, at posuere erat urna vitae nibh. Aenean adipiscing, tortor sollicitudin sollicitudin placerat, lectus diam blandit quam, in accumsan sapien nunc vel arcu. Aliquam erat volutpat. Proin volutpat eros non risus rhoncus egestas. Cras ac turpis odio. Nulla et velit a arcu blandit rutrum. Nullam dui odio, scelerisque at ullamcorper quis, consectetur quis sem. Curabitur sed tortor non arcu condimentum adipiscing sit amet vitae nibh. Etiam mauris felis, dapibus nec iaculis condimentum, tincidunt euismod mauris. Suspendisse lobortis nisi sed augue imperdiet ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
				'comments' => array(
					array(
						'id' => 12,
						'name' => 'Duis a Lectus',
						'website' => null,
						'content' => 'Donec nulla nunc, malesuada eget tincidunt quis, adipiscing vitae massa. Aenean dapibus orci nec metus rhoncus commodo. Nunc aliquam quam in mauris cursus eleifend vel eget lectus. Aenean feugiat tempor dolor id sollicitudin. Sed iaculis sem sit amet nisi aliquam eleifend. Cras pharetra enim pellentesque est sollicitudin a adipiscing dolor tristique. Integer non tempus lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam at urna mauris, in pulvinar magna. Etiam ornare magna id sem accumsan quis tristique felis hendrerit. Nam neque erat, tempus in scelerisque at, faucibus eu nisi. Maecenas ultrices congue leo et luctus. Donec eget rhoncus ante. Nullam suscipit dui eget odio fermentum fermentum. Fusce dapibus molestie congue.',
						'date' => 'Dec 31th 2011, 11:11:11',
					),
				),
				'tags' => array(),
				'author' => 'Ansimuz',
			)
		);
	}

	public function getPost($id) {
		$post = array(
			'id' => 0,
			'title' => '',
			'date' => '',
			'excerpt' => '',
			'content' => '',
			'comments' => 0,
			'author' => '',
		);

		$posts = $this->getPosts();
		if( !empty($posts[$id]) ) {
			$post = $posts[$id];
		}

		return $post;
	}

	public function getCategories() {
		return array(
			1 => array(
				'id' => 1,
				'name' => 'Pellentesque',
			),
			2 => array(
				'id' => 2,
				'name' => 'Phasellus',
			),
			3 => array(
				'id' => 3,
				'name' => 'Fusce',
			),
		);
	}
}