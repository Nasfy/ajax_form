<?php

class Data {
    private $_db;

    public function __construct(Database $db) {
        $this->_db = $db;
    }

    public function putDb($data) {
        $this->_db->query("INSERT INTO ajax_form (username, email, phone, message)
            VALUES ('".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."')");
    }

    public function putFile($data) {
        $file = date('Y-m-d-H-i-s') . '.txt';
        $text = $data[0] . "\t" . $data[1] . "\t" . $data[2] . "\t" . $data[3] . "\n";
        $fp = fopen($file, "a");
        fwrite($fp, $text);
        fclose($fp);
    }
}
