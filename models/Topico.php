<?php
class Topico {
	private $id;
	private $topic_title;


        function getId() {
            return $this->id;
        }

        function getTopic_title() {
            return $this->topic_title;
        }

        function setId($id) {
            $this->id = $id;
        }

				function setTopic_title($topico) {
            $this->topic_title = $topico;
        }

}
