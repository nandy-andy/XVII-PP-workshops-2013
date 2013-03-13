<?php
class Blog {
	private $pdo = null;
	private $dbUser = 'root';
	private $dbPass = 'malopolsk4sql';
	private $dbName = 'workshop_blog';
	private $dbHost = '127.0.0.1';
	private $comments_table = 'comments';

	public function connect() {
		$success = false;
		
		if( is_null($this->pdo) ) {
			try {
				$this->pdo = new PDO('mysql:dbname=' . $this->dbName. ';host=' . $this->dbHost, $this->dbUser, $this->dbPass);
				$this->pdo->exec("SET CHARACTER SET utf8");
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$success = true;
			} catch(PDOException $e) {
				//die('Database connection failed: '.$e->getMessage());
			} catch(Exception $e) {
				//die('Something went wrong: '.$e->getMessage());
			}
		} else {
			$success = true;
		}
		
		return $success;
	}
	
	public function getPosts() {
		return array(
			1 => array(
				'id' => 1,
				'title' => 'Lorem ipsum dolor amet',
				'date' => 'Dec 27th 2011, 10:11:12',
				'excerpt' => 'Pellentesque hendrerit est sed dolor facilisis non semper magna sollicitudin. Pellentesque laoreet massa sit amet metus ultricies suscipit. Sed non leo velit.',
				'content' => 'Pellentesque hendrerit est sed dolor facilisis non semper magna sollicitudin. Pellentesque laoreet massa sit amet metus ultricies suscipit. Sed non leo velit. Nam sagittis, ipsum suscipit malesuada ullamcorper, felis purus fermentum tellus, nec consectetur ante orci nec lorem. Sed vel elit dui, varius congue lacus. Phasellus commodo fermentum posuere. Ut dictum nisi sodales mauris condimentum vestibulum malesuada libero bibendum. Aenean tincidunt odio quis massa malesuada hendrerit ornare mi elementum. Sed viverra, dolor non hendrerit aliquam, turpis libero blandit est, sit amet dignissim nibh orci non mi. Donec nec sapien mauris. Proin ac leo quis justo pulvinar mollis.',
				'comments' => $this->getComments(1),
				'tags' => array(),
				'author' => 'admin',
			),
			2 => array(
				'id' => 2,
				'title' => 'Vestibulum ante ipsum',
				'date' => 'Dec 29th 2011, 12:13:14',
				'excerpt' => 'Proin quis tortor in dolor pulvinar convallis vel id odio. Donec orci est, ultricies vitae vulputate nec, dapibus nec ante. Mauris iaculis justo nec sem adipiscing elementum. In sit amet odio in turpis fringilla lobortis sed a ligula.',
				'content' => 'Proin quis tortor in dolor pulvinar convallis vel id odio. Donec orci est, ultricies vitae vulputate nec, dapibus nec ante. Mauris iaculis justo nec sem adipiscing elementum. In sit amet odio in turpis fringilla lobortis sed a ligula. Duis at est nec tellus consectetur sagittis nec id arcu. Maecenas diam turpis, laoreet sit amet lacinia consequat, lacinia vel turpis. Maecenas porta est ultrices ante pellentesque pharetra et sed nisi. Phasellus a erat velit, et ullamcorper augue. Aenean fermentum risus odio, ultrices gravida dui.',
				'comments' => $this->getComments(2),
				'tags' => array(),
				'author' => 'nAndy',
			),
			3 => array(
				'id' => 3,
				'title' => 'Fusce non nulla leo',
				'date' => 'Dec 30th 2011, 14:20:24',
				'excerpt' => 'Cras est nibh, porttitor a pretium at, porttitor et dolor. Proin dignissim, mi et varius pulvinar, augue lacus porta risus, at posuere erat urna vitae nibh. Aenean adipiscing, tortor sollicitudin sollicitudin placerat, lectus diam blandit quam, in accumsan sapien nunc vel arcu. Aliquam erat volutpat.',
				'content' => 'Cras est nibh, porttitor a pretium at, porttitor et dolor. Proin dignissim, mi et varius pulvinar, augue lacus porta risus, at posuere erat urna vitae nibh. Aenean adipiscing, tortor sollicitudin sollicitudin placerat, lectus diam blandit quam, in accumsan sapien nunc vel arcu. Aliquam erat volutpat. Proin volutpat eros non risus rhoncus egestas. Cras ac turpis odio. Nulla et velit a arcu blandit rutrum. Nullam dui odio, scelerisque at ullamcorper quis, consectetur quis sem. Curabitur sed tortor non arcu condimentum adipiscing sit amet vitae nibh. Etiam mauris felis, dapibus nec iaculis condimentum, tincidunt euismod mauris. Suspendisse lobortis nisi sed augue imperdiet ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
				'comments' => $this->getComments(3),
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

	public function getComments($postId) {
		$comments = array();
		$postId = intval($postId);
		$isConnected = $this->connect();
		
		if( $isConnected && $postId > 0 ) {
			$comments = $this->getCommentsFromDb($postId);
		}
		
		return $comments;
	}
	
	protected function getCommentsFromDb($postId) {
		$sql = 'select comment_id as id, name, website_url as website, content, posted_on as date from ' . $this->comments_table . ' where post_id = ?';
		
		try {
			$stm = $this->pdo->prepare($sql);
			$stm->bindParam(1, $postId, PDO::PARAM_INT);
			$stm->execute();

			$res = $stm->fetchAll();
			if( empty($res) ) {
				$res = array();
			} else {
				$res = $res;
			}
		} catch(Exception $e) {
			$res = array();
		}
		
		return $res;
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
