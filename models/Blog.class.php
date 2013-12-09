<?php
require_once( 'config.php' );

class Blog {
	/**
	 * @var PDO
	 */
	private $pdo = null;
	private $categories_table = 'categories';
	private $comments_table = 'comments';
	private $posts_table = 'posts';
	private $post_category_table = 'post_category';

	public function connect() {
		if( is_null($this->pdo) ) {
			try {
				$this->pdo = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, DB_USER, DB_PASS);
				$this->pdo->exec("SET CHARACTER SET utf8");
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$success = true;
			} catch(PDOException $e) {
				error_log( 'Database connection failed: '.$e->getMessage() );
				$success = false;
			} catch(Exception $e) {
				error_log( 'Something went wrong: '.$e->getMessage() );
				$success = false;
			}
		} else {
			$success = true;
		}
		
		return $success;
	}
	
	public function getPosts() {
		$posts = array();
		$isConnected = $this->connect();

		if( $isConnected ) {
			$posts = $this->getPostsFromDb();
		}

		return $posts;
	}

	protected function getPostsFromDb() {
		$sql = 'select post_id as id, title, date, excerpt, content, author from ' . $this->posts_table;

		try {
			$stm = $this->pdo->prepare($sql);
			$stm->execute();

			$res = $stm->fetchAll();
			if( empty($res) ) {
				$res = array();
			} else {
				$res = $res;
			}
		} catch(Exception $e) {
			$res = array();
			error_log( 'SQL ERROR: '.$e->getMessage() );
		}

		return $res;
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
		foreach( $posts as $item ) {
			if( $item['id'] === $id ) {
				$post = $item;
			}
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
			error_log( 'SQL ERROR: '.$e->getMessage() );
		}
		
		return $res;
	}

	public function addComment($postId, $name, $email, $website, $content) {
		$status = new stdClass();
		$status->success = false;
		$status->errors = array();
		$postId = intval($postId);
		$isConnected = $this->connect();

		if( !$isConnected ) {
			$status->errors[] = 'No database connection';
		} else {
			$status->commentId = $this->addCommentToDb($postId, $name, $email, $website, $content, $status->errors);
			$status->success = (intval($status->commentId) > 0) ? true : false;
		}

		return $status;
	}
	
	protected function addCommentToDb($postId, $name, $email, $website, $content, &$errors) {
		$sql = 'insert into ' . $this->comments_table . ' (post_id, name, email, website_url, content) values (?, ?, ?, ?, ?)';

		try {
			$stm = $this->pdo->prepare($sql);
			$stm->bindParam(1, $postId, PDO::PARAM_INT);
			$stm->bindParam(2, $name, PDO::PARAM_STR);
			$stm->bindParam(3, $email, PDO::PARAM_STR);
			$stm->bindParam(4, $website, PDO::PARAM_STR);
			$stm->bindParam(5, $content, PDO::PARAM_STR);
			$stm->execute();
			
			return $this->pdo->lastInsertId();
		} catch(Exception $e) {
			$errors = $e->getMessage();
			return false;
		}
	}
	
	public function getCategories() {
		$categories = array();
		$isConnected = $this->connect();

		if( $isConnected ) {
			$categories = $this->getCategoriesFromDb();
		}

		return $categories;
	}

	protected function getCategoriesFromDb() {
		$sql = 'select category_id as id, name from ' . $this->categories_table;

		try {
			$stm = $this->pdo->prepare($sql);
			$stm->execute();

			$res = $stm->fetchAll();
			if( empty($res) ) {
				$res = array();
			} else {
				$res = $res;
			}
		} catch(Exception $e) {
			$res = array();
			error_log( 'SQL ERROR: '.$e->getMessage() );
		}

		return $res;
	}
}
