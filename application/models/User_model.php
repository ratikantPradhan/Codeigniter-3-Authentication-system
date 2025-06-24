<?php
// application/models/User_model.php
class User_model extends CI_Model
{
    public function get_user_by_email($email)
    {
        return $this->db->get_where('users', ['email' => $email])->row();
    }
    // public function email_check($email)
    // {
    //     $this->form_validation->set_message('email_check', 'The Email is already taken.');
    //     return FALSE;
    // }


    public function insert_user($data)
    {
        return $this->db->insert('users', $data);
    }
}
?>