<?php
	class Blog_model extends CI_Model {
	 
	 	function __construct() {
	 		parent::__construct();
	 	}
	 
	    function addBlog($title, $content) {
	        $dataBlog = array(
	            'title' => $title,
	            'content' => $content
	        );
	 
	        $this->db->insert('posts', $dataBlog);
	    }
	 
	}
?>