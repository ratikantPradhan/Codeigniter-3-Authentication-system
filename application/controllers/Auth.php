<?php
// application/controllers/Auth.php
class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper(['form', 'url']);
        $this->load->library(['session', 'form_validation']);
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login_view');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->get_user_by_email($email);
            if ($user && password_verify($password, $user->password)) {
                $this->session->set_userdata(['user_id' => $user->id, 'username' => $user->username]);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid credentials');
                redirect('auth/login');
            }
        }
    }

    public function register()
    {
        
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_unique_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('register_view');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            ];

            $this->User_model->insert_user($data);
            $this->session->set_flashdata('success', 'Registration successful. Please login.');
            redirect('auth/login');
        }
    }
    public function check_unique_email($email)
    {
        $user = $this->User_model->get_user_by_email($email);
        if ($user) {
            $this->form_validation->set_message('check_unique_email', 'This email is already registered.');
            return FALSE;
        }
        return TRUE;
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>