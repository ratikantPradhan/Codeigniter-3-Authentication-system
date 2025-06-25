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

    
        public function get_all_users() {
            return $this->db->get('users')->result_array(); // or your actual table
        }
    
    
    public function insert_user($data)
    {
        $data['created_at'] = date('Y-m-d H:i:s');
        return $this->db->insert('users', $data);
    }
    
    public function update_status($id, $status)
    {
        $this->db->where('id', $id);
        return $this->db->update('users', ['status' => $status]);
    }


}
?>