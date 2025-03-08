<?php
class TestSession extends CI_Controller {
    public function set() {
        $this->load->library('session');
        $this->session->set_userdata('test_key', 'test_value');
        echo "Session Set: " . $this->session->userdata('test_key');
    }

    public function get() {
        $this->load->library('session');
        echo "Session Value: " . $this->session->userdata('test_key');
    }
}
