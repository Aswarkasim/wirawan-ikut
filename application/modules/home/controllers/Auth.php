<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function index()
  {
    if (empty($this->session->userdata('id_user'))) {
      $this->load->model('home/Auth_model', 'AM');

      $valid = $this->form_validation;

      $valid->set_rules(
        'email',
        'Email',
        'required',
        array('required' => '%s harus diisi')
      );
      $valid->set_rules(
        'password',
        'Password',
        'required|min_length[6]',
        array(
          'required'     => 'Password harus diisi',
          'min_length'  => 'Password minimal 6 karakter'
        )
      );

      if ($valid->run() === FALSE) {
        $data = array(
          'title'     => 'Login',
          'content'   => 'home/auth/login'
        );
        $this->load->view('home/layout/wrapper', $data);
      } else {
        $i          = $this->input;
        $email      = $i->post('email');
        $password   = $i->post('password');
        $user  = $this->AM->login($email, $password);

        if ($user) {
          $s = $this->session;
          $s->set_userdata('id_user', $user->id_user);
          $s->set_userdata('email', $user->email);
          $s->set_userdata('namalengkap', $user->namalengkap);
          $s->set_userdata('is_active', $user->is_active);

          redirect(base_url('akun/dashboard'), 'refresh');
        } else {
          $data = array(
            'title'     => 'Login',
            'error'     => 'Email atau password salah',
            'content'   => 'home/auth/login'
          );
          $this->load->view('home/layout/wrapper', $data);
        }
      }
    } else {

      redirect('akun/dashboard', 'refresh');
    }
  }

  public function register()
  {
    $this->load->helper('string');

    $required = '%s tidak boleh kosong';
    $is_email = '%s ' . post('email') . ' telah ada, silakan masukkan email yang lain';
    $valid = $this->form_validation;
    $valid->set_rules('email', 'Email', 'required|is_unique[tbl_user.email]|valid_email', array('required' => $required, 'is_unique' => $is_email, 'valid_email' => '%s yang anda  masukkan tidak valid'));
    $valid->set_rules('password', 'Password', 'required', array('required' => $required, 'is_unique' => $is_email));
    $valid->set_rules('re_password', 'Konfirmasi Password', 'required|matches[password]', array('required' => $required, 'matches' => '%s password yang anda masukkan tidak sama'));


    if ($valid->run() === FALSE) {
      $data = [
        'content'   => 'home/auth/register'
      ];
      $this->load->view('home/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_user'        => random_string(),
        'email'           => $i->post('email'),
        'is_active'       => 1,
        'password'       => sha1($i->post('password')),

      ];
      $this->Crud_model->add('tbl_user', $data);
      $this->session->set_flashdata('msg', 'akun anda telah dibuat, Silakan login');
      redirect('home/auth', 'refersh');
    }
  }

  public function forgot()
  {
    $data =
      ['content'  => 'home/auth/forgot'];
    $this->load->view('home/layout/wrapper', $data, FALSE);

    // $this->load->view('home/index', FALSE);
  }

  function logout()
  {
    session_destroy();
    redirect('home/auth', 'refresh');
  }
}
