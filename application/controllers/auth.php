<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->helper('url', 'form');
        $this->load->library(array('form_validation', 'session'));
    }

    public function home()
    {
        $id = $this->session->userdata('id');
        $data['user'] = $this->auth_model->get_single_row_detail_user($id);
        $data['inventory'] = $this->auth_model->get_all_inventory();

        $this->load->view('templates/auth_header');
        $this->load->view('user/home', $data);
        $this->load->view('templates/auth_footer');
    }

    public function admin_home()
    {
        $this->load->view('templates/auth_header');
        $id = $this->session->userdata('id');
        $data['id'] = $this->auth_model->get_single_row_detail_admin($id);

        $data['inventory'] = $this->auth_model->get_all_inventory();
        $data['user'] = $this->auth_model->get_all_user();
        $data['admin'] = $this->auth_model->get_all_admin();
        $this->load->view('admin_home', $data);
        $this->load->view('templates/auth_footer');
    }

    public function register()
    {
        $data['title'] = 'Register';

        $this->form_validation->set_rules('id_user', 'ID_User', 'required|is_unique[users.id]');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('divisi', 'Divisi', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('user/register', $data);
        } else {
            $enc_password = md5($this->input->post('password'));
            $this->auth_model->register($enc_password);
            $this->session->set_flashdata('user_registered', 'User telah Registrasi');
            redirect('auth/data_registered');
        }
    }

    public function data_registered()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('user/data_registered');
        $this->load->view('templates/auth_footer');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user_data = $this->auth_model->get_single_row_user_by_email($email);

            if (isset($user_data)) {
                if (md5($password) == $user_data->password) {
                    $session_data = array(
                        'id'            => $user_data->id,
                        'email'          => $user_data->email,
                        'username'          => $user_data->username,
                        'logged_in'     => true,
                        'type'          => 'user'
                    );

                    $this->session->set_userdata($session_data);
                    redirect('auth/home');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Anda Salah!</div>');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda tidak terdaftar!</div>');
                redirect('auth/login');
            }
        }
    }

    public function forgot_pass()
    {
        $this->load->view('forgot_pass');
    }

    public function login_admin()
    {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('pass', 'pass', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login_admin');
        } else {
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');

            $user_data = $this->auth_model->get_single_row_admin_by_email($email);

            if (isset($user_data)) {
                if (md5($pass) == $user_data->password) {
                    $session_data = array(
                        'id'       => $user_data->id,
                        'email'          => $user_data->email,
                        'username'          => $user_data->username,
                        'logged_in'     => true,
                        'type'          => 'admin'
                    );

                    $this->session->set_userdata($session_data);
                    redirect('auth/admin_home');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Anda Salah!</div>');
                    redirect('auth/login_admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda tidak terdaftar!</div>');
                redirect('auth/login_admin');
            }
        }
    }

    public function generate()
    {
        $this->load->view('generate');
    }

    public function edit_item()
    {
        $id = $_GET['id'];
        $data['item'] = $this->auth_model->get_single_row_inventory($id);
        $this->load->view('templates/auth_header');
        $this->load->view('edit_item', $data);
        $this->load->view('templates/auth_footer');
    }

    public function edit_item_proses()
    {
        $this->form_validation->set_rules('kuantitas', 'kuantitas', 'required');
        $this->form_validation->set_rules('available', 'available', 'required');
        $this->form_validation->set_rules('id_barang', 'kuantitas', 'required');
        $this->form_validation->set_rules('nama', 'available', 'required');
        $this->form_validation->set_rules('lokasi', 'kuantitas', 'required');

        $kuantitas = $this->input->post('kuantitas');
        $available = $this->input->post('available');
        $id_barang = $this->input->post('id_barang');
        $nama = $this->input->post('nama');
        $lokasi = $this->input->post('lokasi');
        $id = $this->input->post('id');

        $data_lama = $this->auth_model->get_single_row_inventory($id);

        if ($data_lama->kuantitas != $kuantitas || $data_lama->tersedia != $available || $data_lama->id_barang != $id_barang || $data_lama->nama_barang != $nama || $data_lama->lokasi != $lokasi) {
            $data = [
                'lokasi'          => $lokasi,
                'kuantitas'     => $kuantitas,
                'tersedia'         => $available,
                'nama_barang'      => $nama,
                'id_barang'       => $id_barang
            ];

            $update = $this->auth_model->update_inventory($data, $id);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Berhasil !</div>');
                redirect('index.php/auth/admin_home#inventory');
                // echo '<script>alert("Update Berhasil");
                // window.location.href="' . base_url('index.php/auth/admin_home#inventory') . '";</script>';
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Terjadi Kesalahan !</div>');
                redirect('index.php/auth/edit_item?id=' . $id . '');
                // echo '<script>alert("Terjadi Kesalahan");
                // window.location.href="' . base_url('index.php/auth/edit_item?id=' . $id . '') . '";</script>';
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data Sama!</div>');
            redirect('index.php/auth/edit_item?id=' . $id . '');
            // echo '<script>alert("Data Sama");
            // window.location.href="' . base_url('index.php/auth/edit_item?id=' . $id . '') . '";</script>';
        }
    }

    public function pakai_item()
    {
        $id = $_GET['id'];
        $data['item'] = $this->auth_model->get_single_row_inventory($id);
        $this->load->view('templates/auth_header');
        $this->load->view('pakai_item', $data);
        $this->load->view('templates/auth_footer');
    }

    public function pakai_item_user()
    {
        $id = $_GET['id'];
        $data['item'] = $this->auth_model->get_single_row_inventory($id);
        $this->load->view('templates/auth_header');
        $this->load->view('user/pakai_item_user', $data);
        $this->load->view('templates/auth_footer');
    }

    public function pakai_item_proses()
    {
        $jumlah = $this->input->post('jumlah');
        $tersedia = $this->input->post('tersedia');
        $id = $this->input->post('id');
        $sisa = $tersedia-$jumlah;

        if ($jumlah<=$tersedia) {
            $data = [
                'tersedia'      => $sisa,
            ];
            $update = $this->auth_model->update_inventory($data, $id);
            if ($update) {
                $data_log = [
                    'id_user'       => $this->session->userdata('id'),
                    'id_barang'     => $id,
                    'pemakaian'     => $jumlah,
                    'tersedia'      => $sisa,
                    'tgl'           => date('Y-m-d')
                ];
                $update_log = $this->auth_model->update_log($data_log);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pemakaian Berhasil !</div>');
                redirect('index.php/auth/admin_home#inventory');
                // echo '<script>alert("Update Berhasil");
                // window.location.href="' . base_url('index.php/auth/admin_home#inventory') . '";</script>';
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Terjadi Kesalahan !</div>');
                redirect('index.php/auth/admin_home#inventory');
                // echo '<script>alert("Terjadi Kesalahan");
                // window.location.href="' . base_url('index.php/auth/edit_item?id=' . $id . '') . '";</script>';
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Jumlah Pemakaian Lebih Banyak Dari Jumlah tersedia!</div>');
            redirect('index.php/auth/pakai_item?id=' . $id . '');
            // echo '<script>alert("Data Sama");
            // window.location.href="' . base_url('index.php/auth/edit_item?id=' . $id . '') . '";</script>';
        }
    }

    public function pakai_item_proses_user()
    {
        $jumlah = $this->input->post('jumlah');
        $tersedia = $this->input->post('tersedia');
        $id = $this->input->post('id');
        $sisa = $tersedia-$jumlah;

        if ($jumlah<=$tersedia) {
            $data = [
                'tersedia'      => $sisa,
            ];
            $update = $this->auth_model->update_inventory($data, $id);
            if ($update) {
                $data_log = [
                    'id_user'       => $this->session->userdata('id'),
                    'id_barang'     => $id,
                    'pemakaian'     => $jumlah,
                    'tersedia'      => $sisa,
                    'tgl'           => date('Y-m-d')
                ];
                $update_log = $this->auth_model->update_log($data_log);

                $this->session->set_flashdata('message7', '<div class="alert alert-success" role="alert">Pemakaian Berhasil !</div>');
                redirect('index.php/auth/home#inventory');
                // echo '<script>alert("Update Berhasil");
                // window.location.href="' . base_url('index.php/auth/admin_home#inventory') . '";</script>';
            } else {
                $this->session->set_flashdata('message7', '<div class="alert alert-danger" role="alert">Terjadi Kesalahan !</div>');
                redirect('index.php/auth/home#inventory');
                // echo '<script>alert("Terjadi Kesalahan");
                // window.location.href="' . base_url('index.php/auth/edit_item?id=' . $id . '') . '";</script>';
            }
        } else {
            $this->session->set_flashdata('message7', '<div class="alert alert-warning" role="alert">Jumlah Pemakaian Lebih Banyak Dari Jumlah tersedia!</div>');
            redirect('index.php/auth/pakai_item_user?id=' . $id . '');
            // echo '<script>alert("Data Sama");
            // window.location.href="' . base_url('index.php/auth/edit_item?id=' . $id . '') . '";</script>';
        }
    }

    public function add_item()
    {
        $id = $this->session->userdata('id');
        $data['id'] = $this->auth_model->get_single_row_detail_admin($id);

        $this->form_validation->set_rules('id_barang', 'id_barang', 'required');
        $this->form_validation->set_rules('kuantitas', 'kuantitas', 'required');
        $this->form_validation->set_rules('barang', 'barang', 'required');
        $this->form_validation->set_rules('lokasi', 'lokasi', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/auth_header');

            $this->load->view('add_item', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $id_barang = $this->input->post('id_barang');
            $kuantitas = $this->input->post('kuantitas');
            $barang = $this->input->post('barang');
            $lokasi = $this->input->post('lokasi');

            $sudah_ada = $this->auth_model->get_single_row_inventory_by_id($id_barang);

            if (!isset($sudah_ada)) {
                $data = [
                    'id_barang'      => $id_barang,
                    'nama_barang'     => $barang,
                    'kuantitas'     => $kuantitas,
                    'tersedia'       => $kuantitas,
                    'lokasi'       => $lokasi
                ];

                $add = $this->auth_model->add_inventory($data);

                if ($add) {
                    $this->session->set_flashdata('message3', '<div class="alert alert-success" role="alert">Berhasil Menambahkan!</div>');
                    redirect('index.php/auth/admin_home#inventory');
                    //     echo '<script>alert("Berhasil Menambahkan");
                    // window.location.href="' . base_url('index.php/auth/admin_home#inventory') . '";</script>';
                } else {
                    $this->session->set_flashdata('message3', '<div class="alert alert-danger" role="alert">Gagal Menambahkan!</div>');
                    redirect('index.php/auth/add_item');
                    //     echo '<script>alert("Gagal Menambahkan");
                    // window.location.href="' . base_url('index.php/auth/add_item') . '";</script>';
                }
            } else {
                $this->session->set_flashdata('message3', '<div class="alert alert-warning" role="alert">Barang Sudah Terdaftar !</div>');
                redirect('index.php/auth/add_item');
                // echo '<script>alert("Id Barang Sudah terdaftar");
                // window.location.href="' . base_url('index.php/auth/add_item') . '";</script>';
            }
        }
    }

    public function new_user()
    {
        $this->form_validation->set_rules('user_id', 'user_id', 'required');
        $this->form_validation->set_rules('divisi', 'divisi', 'required');

        $this->form_validation->set_rules('nama', 'nama', 'required');

        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/auth_header');

            $this->load->view('new_user');
            $this->load->view('templates/auth_footer');
        } else {
            $user_id = $this->input->post('user_id');
            $divisi = $this->input->post('divisi');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $pass = $this->input->post('password');

            $sudah_ada = $this->auth_model->get_single_row_user_by_id($user_id);

            if (!isset($sudah_ada)) {
                $data = [
                    'id'      => $user_id,
                    'username'     => $nama,
                    'divisi'     => $divisi,
                    'email'       => $email,
                    'phone'       => $phone,
                    'password'       => md5($pass)
                ];

                $add = $this->auth_model->add_user($data);

                if ($add) {
                    $this->session->set_flashdata('message5', '<div class="alert alert-success" role="alert">Berhasil Menambahkan User !</div>');
                    redirect('index.php/auth/admin_home#user');
                    //     echo '<script>alert("Berhasil Menambahkan");
                    // window.location.href="' . base_url('index.php/auth/admin_home#user') . '";</script>';
                } else {
                    $this->session->set_flashdata('message5', '<div class="alert alert-danger" role="alert">Gagal Menambahkan User !</div>');
                    redirect('index.php/auth/new_user');
                    //     echo '<script>alert("Gagal Menambahkan");
                    // window.location.href="' . base_url('index.php/auth/new_user') . '";</script>';
                }
            } else {
                $this->session->set_flashdata('message5', '<div class="alert alert-warning" role="alert">ID User Sudah Terdaftar !</div>');
                redirect('index.php/auth/new_user');
                // echo '<script>alert("Id User Sudah terdaftar");
                // window.location.href="' . base_url('index.php/auth/new_user') . '";</script>';
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->login();
    }

    public function logout_admin()
    {
        $this->session->sess_destroy();
        $this->login_admin();
    }

    public function conf_delete()
    {
        $data['id'] = $_GET['id'];
        $data['user'] = $this->auth_model->get_single_row_user($data['id']);
        $this->load->view('templates/auth_header');
        $this->load->view('conf_delete', $data);
        $this->load->view('templates/auth_footer');
    }

    public function delete_x()
    {
        $id = $_GET['id'];
        $update = $this->auth_model->delete_user($id);

        if ($update) {
            $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">Berhasil Delete User !</div>');
            redirect('index.php/auth/admin_home#user');
            // echo '<script>alert("Berhasil Delete User");
            // window.location.href="' . base_url('index.php/auth/admin_home#user') . '";</script>';
        } else {
            $this->session->set_flashdata('message2', '<div class="alert alert-danger" role="alert">Gagal Delete User !</div>');
            redirect('index.php/auth/admin_home#user');
            // echo '<script>alert("Gagal Delete User");
            // window.location.href="' . base_url('index.php/auth/admin_home#user') . '";</script>';
        }
    }


    public function conf_delete_item()
    {

        $data['id'] = $_GET['id'];
        $data['user'] = $this->auth_model->get_single_row_item($data['id']);
        $this->load->view('templates/auth_header');
        $this->load->view('conf_delete_item', $data);
        $this->load->view('templates/auth_footer');
    }

    public function delete_item_x()
    {
        $id = $_GET['id'];
        $update = $this->auth_model->delete_item($id);

        if ($update) {
            $this->session->set_flashdata('message4', '<div class="alert alert-success" role="alert">Berhasil Delete Item !</div>');
            redirect('index.php/auth/admin_home#inventory');
            // echo '<script>alert("Berhasil Delete User");
            // window.location.href="' . base_url('index.php/auth/admin_home#user') . '";</script>';
        } else {
            $this->session->set_flashdata('message4', '<div class="alert alert-danger" role="alert">Gagal Delete Item !</div>');
            redirect('index.php/auth/admin_home#inventory');
            // echo '<script>alert("Gagal Delete User");
            // window.location.href="' . base_url('index.php/auth/admin_home#user') . '";</script>';
        }
    }

    public function conf_set_admin()
    {
        $data['id'] = $_GET['id'];
        $data['user'] = $this->auth_model->get_single_row_user($data['id']);
        $this->load->view('templates/auth_header');
        $this->load->view('conf_set_admin', $data);
        $this->load->view('templates/auth_footer');
    }

    public function set_admin_x()
    {
        $id = $_GET['id'];
        $user = $this->auth_model->get_single_row_user($id);

        $data = [
            'id'      => $user->id,
            'username'     => $user->username,
            'divisi'     => $user->divisi,
            'email'       => $user->email,
            'phone'       => $user->phone,
            'password'       => $user->password
        ];

        $update = $this->auth_model->set_admin($data, $id);

        if ($update) {
            $this->session->set_flashdata('message6', '<div class="alert alert-success" role="alert">Berhasil Set Admin !</div>');
            redirect('index.php/auth/admin_home#admin');
            // echo '<script>alert("Berhasil Set Admin");
            // window.location.href="' . base_url('index.php/auth/admin_home#admin') . '";</script>';
        } else {
            $this->session->set_flashdata('message6', '<div class="alert alert-danger" role="alert">Gagal Set Admin !</div>');
            redirect('index.php/auth/admin_home#user');
            // echo '<script>alert("Gagal Set Admin, masih belum waktumu nak...");
            // window.location.href="' . base_url('index.php/auth/admin_home#user') . '";</script>';
        }
    }

    public function new_req()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('user/new_req');
        $this->load->view('templates/auth_footer');
    }

    public function new_req_process()
    {
        $barang = $this->input->post('barang');
        $detail = $this->input->post('detail');
        $jumlah = $this->input->post('jumlah');

        $data = [
            'id_user'      => $this->session->userdata('id'),
            'nama_barang'     => $barang,
            'detail_barang'     => $detail,
            'kuantitas'       => $jumlah,
            'tgl'       => date('Y-m-d')
        ];

        $add = $this->auth_model->add_request($data);

        if ($add) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil !</div>');
            redirect('index.php/auth/home');
            // echo '<script>alert("Update Berhasil");
            // window.location.href="' . base_url('index.php/auth/admin_home#inventory') . '";</script>';
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Terjadi Kesalahan !</div>');
            redirect('index.php/auth/home');
            // echo '<script>alert("Terjadi Kesalahan");
            // window.location.href="' . base_url('index.php/auth/edit_item?id=' . $id . '') . '";</script>';
        }

    }

    public function about()
    {
        $this->load->view('about');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function team()
    {
        $this->load->view('team');
    }

    public function riwayat()
    {
        $this->load->view('riwayat');
    }

    public function log_item()
    {
        $id = $_GET['id'];
        $data['log_item'] = $this->auth_model->get_log_by_id_barang($id);
        $data['barang'] = $this->auth_model->get_single_row_item($id);

        $this->load->view('templates/auth_header');
        $this->load->view('log_item', $data);
        $this->load->view('templates/auth_footer');
    }

    public function list_req()
    {
        $data['request'] = $this->auth_model->get_all_request();

        $this->load->view('templates/auth_header');
        $this->load->view('list_req', $data);
        $this->load->view('templates/auth_footer');
    }

     public function req_user()
    {
        $id = $_GET['id'];
        $data['item'] = $this->auth_model->get_single_row_inventory($id);
        $this->load->view('templates/auth_header');
        $this->load->view('user/req_user', $data);
        $this->load->view('templates/auth_footer');
    }

    public function req_user_proses()
    {
        $jumlah = $this->input->post('jumlah');
        $nama = $this->input->post('nama');
        $id = $this->input->post('id');

        $data = [
            'id_user'      => $this->session->userdata('id'),
            'nama_barang'     => $nama,
            'detail_barang'     => "Request Stock",
            'kuantitas'       => $jumlah,
            'tgl'       => date('Y-m-d')
        ];

        $add = $this->auth_model->add_request($data);

        if ($add) {
            $this->session->set_flashdata('message8', '<div class="alert alert-success" role="alert">Berhasil Request!</div>');
            redirect('index.php/auth/home');
            // echo '<script>alert("Update Berhasil");
            // window.location.href="' . base_url('index.php/auth/admin_home#inventory') . '";</script>';
        } else {
            $this->session->set_flashdata('message8', '<div class="alert alert-danger" role="alert">Terjadi Kesalahan !</div>');
            redirect('index.php/auth/home');
            // echo '<script>alert("Terjadi Kesalahan");
            // window.location.href="' . base_url('index.php/auth/edit_item?id=' . $id . '') . '";</script>';
        }
     
    }


}
