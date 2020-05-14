<?php
class Post extends AppModel {
	var $name = 'posts';

	public $validate = array(
		'title' => array(
			'rule' => 'notBlank',
			'message' => 'タイトルを記入してください。'
		),
		'body' => array(
			'rule' => 'notBlank',
			'message' => '本文を記入してください。'
		)
	);

	public $belongsTo = 'User';

	public function isOwnedBy($post, $user) {
		return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
	}
}
?>
