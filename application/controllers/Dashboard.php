<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }
        redirect(base_url() . 'Dashboard/Posts');
        // $this->load->view("attendees/header");
        // $this->load->view('attendees/dashboard');
        // $this->load->view("attendees/footer");

    }

    public function posts()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }
        $this->load->model('Admin_model');
        $data['posts'] = $this->Admin_model->get_posts();
        $this->load->view("admin/header");
        $this->load->view('admin/posts',$data);
        $this->load->view("admin/footer");
    }

    public function clients()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }
        $this->load->model('Admin_model');
        $data['clients'] = $this->Admin_model->get_clients();
        $this->load->view("admin/header");
        $this->load->view('admin/clients',$data);
        $this->load->view("admin/footer");
    }

    public function addnewpost()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }

        $this->load->view('admin/addpost');

    }

    public function addnewclient()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }

        $this->load->view('admin/addclient');

    }

    public function removerow()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }
        $this->load->model('Admin_model');
        $this->Admin_model->remove_row($_GET['id'],$_GET['tname'],$_GET['name']);
        $response = [
            "error"=> '0',
            "msg" => $_GET['name'] . ' Deleted successfully!',
            "id" => $_GET['id']
        ];
        print_r(json_encode($response));
        return;

    }

    public function addpost()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->load->model('Admin_model');
        if($this->form_validation->run())
        {


            $allowTypes = array('jpg', 'png', 'jpeg');
            if(empty($_FILES['image']['name']))
            {
                $_POST['image'] = 'images/noimage.jpg';
                // $data['image_error'] = 'Please upload an Image';
                // $this->load->view("admin-header");
                // $this->load->view('add-new-doctor',$data);
                // $this->load->view("admin-footer");
            }
            else if(!in_array(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION), $allowTypes))
            {
                $response = [
                    "error"=> '1',
                    "msg" => 'Only JPG, JPEG, & PNG files are allowed.'
                ];
                print_r(json_encode($response));
                return false;
            }
            else{
                $uploadDir = 'uploads/'.date("d-m-y").'/';
                if (!is_dir($uploadDir))
                {
                    mkdir($uploadDir, 0777, true);
                }

                $fileName = basename($_FILES['image']["name"]);
                $fileType = pathinfo($_FILES['image']["name"], PATHINFO_EXTENSION);
                $targetFilePath = $uploadDir . round(microtime(true)) . '.' . $fileType;

                if(move_uploaded_file($_FILES['image']["tmp_name"], $targetFilePath))
                {
                    $_POST['image'] = $targetFilePath;
                }
                else
                {
                    $response = [
                        "error"=> '1',
                        "msg" => 'Error uploading image.'
                    ];
                    print_r(json_encode($response));
                    return false;
                }
            }

            $_POST['id'] = $this->Admin_model->add_new_post($_POST);
            $response = [
                "error"=> '0',
                "msg" => 'Post added successfully!',
                "details" => $_POST
            ];
            print_r(json_encode($response));
            return;
        }
        else
        {
            $response = [
                "error"=> '1',
                "msg" => 'One or more fields are Invalid'
            ];
            print_r(json_encode($response));
            return false;
        }

    }

    public function addclient()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required');
        $this->load->model('Admin_model');
        if($this->form_validation->run())
        {


           

            $_POST['id'] = $this->Admin_model->add_new_client($_POST);
            $response = [
                "error"=> '0',
                "msg" => 'Client added successfully!',
                "details" => $_POST
            ];
            print_r(json_encode($response));
            return;
        }
        else
        {
            $response = [
                "error"=> '1',
                "msg" => 'One or more fields are Invalid'
            ];
            print_r(json_encode($response));
            return false;
        }

    }



    public function updatepost()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }

        $this->load->model('Admin_model');

        if(isset($_GET['id']) && $_GET != null)
        {
            $data['post'] = $this->Admin_model->get_post($_GET['id']);
            $data['post'] = $data['post'][0];

            $this->load->view('admin/editpost',$data);

            return;
        }


        $this->load->library('form_validation');
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if($this->form_validation->run())
        {


            $allowTypes = array('jpg', 'png', 'jpeg');
            if(empty($_FILES['image']['name']))
            {
                $post = $this->Admin_model->get_post($_POST['id']);
                $data['post'] = $post[0];
                $_POST['image'] = $post[0]['image'];
            }
            else if(!in_array(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION), $allowTypes))
            {
                $response = [
                    "error"=> '1',
                    "msg" => 'Only JPG, JPEG, & PNG files are allowed.'
                ];
                print_r(json_encode($response));
                return false;
            }
            else{
                $uploadDir = 'uploads/'.date("d-m-y").'/';
                if (!is_dir($uploadDir))
                {
                    mkdir($uploadDir, 0777, true);
                }
                $fileName = basename($_FILES['image']["name"]);
                $fileType = pathinfo($_FILES['image']["name"], PATHINFO_EXTENSION);
                $targetFilePath = $uploadDir . round(microtime(true)) . '.' . $fileType;

                if(move_uploaded_file($_FILES['image']["tmp_name"], $targetFilePath))
                {
                    $_POST['image'] = $targetFilePath;
                }
                else
                {
                    $response = [
                        "error"=> '1',
                        "msg" => 'Error uploading image.'
                    ];
                    print_r(json_encode($response));
                    return false;
                }
            }
            $id = $_POST['id'];
            unset($_POST['id']);
            $this->Admin_model->update_post($_POST,$id);
            $_POST['id'] = $id;
            $response = [
                "error"=> '0',
                "msg" => 'Post updated successfully!',
                "details" => $_POST
            ];
            print_r(json_encode($response));
            return;

        }
        else
        {
            $response = [
                "error"=> '1',
                "msg" => 'One or more fields are Invalid'
            ];
            print_r(json_encode($response));
            return false;
        }

    }

    public function updateclient()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }

        $this->load->model('Admin_model');

        if(isset($_GET['id']) && $_GET != null)
        {
            $data['client'] = $this->Admin_model->get_client($_GET['id']);
            $data['client'] = $data['client'][0];

            $this->load->view('admin/editclient',$data);

            return;
        }


        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('quantity', 'quantity', 'required');

        if($this->form_validation->run())
        {

            $id = $_POST['id'];
            unset($_POST['id']);
            $this->Admin_model->update_client($_POST,$id);
            $_POST['id'] = $id;
            $response = [
                "error"=> '0',
                "msg" => 'Client updated successfully!',
                "details" => $_POST
            ];
            print_r(json_encode($response));
            return;

        }
        else
        {
            $response = [
                "error"=> '1',
                "msg" => 'One or more fields are Invalid'
            ];
            print_r(json_encode($response));
            return false;
        }

    }

    public function rates()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }
        $this->load->model('Admin_model');
        $data['rates'] = $this->Admin_model->get_rates();
        $data['pricefile'] = $this->Admin_model->get_pricefile();
        $data['pricefile'] = $data['pricefile'][0];
        $data['pricedate'] = $this->Admin_model->get_pricedate();
        $data['pricedate'] = $data['pricedate'][0];
        $this->load->view("admin/header");
        $this->load->view('admin/rates',$data);
        $this->load->view("admin/footer");
    }

    public function updaterates()
	{

        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }
        $this->load->model('Admin_model');
        $data['image_error'] = '';

            $uploadDir = 'assets/';

            $allowTypes = array('doc', 'docx', 'pdf');

            if(file_exists($_FILES['price_file']['tmp_name']) || is_uploaded_file($_FILES['price_file']['tmp_name']))
            {
                if(!empty($_FILES['price_file']['name']) && !in_array(pathinfo($_FILES['price_file']['name'], PATHINFO_EXTENSION), $allowTypes))
                {
                    $data['error'] = 1;
                    $data['msg'] = 'Invalid file type.';
                    print_r(json_encode($data));
                    return;
                }
                else{
                    $fileName = basename($_FILES['price_file']["name"]);
                    $fileType = pathinfo($_FILES['price_file']["name"], PATHINFO_EXTENSION);
                    $targetFilePath = $uploadDir . $_FILES['price_file']["name"];
                    $oldpricefile = $this->Admin_model->get_pricefile();
                    unlink($oldpricefile[0]['link']);

                    if(move_uploaded_file($_FILES['price_file']["tmp_name"], $targetFilePath))
                    {

                        $filedata['link'] = $targetFilePath;
                        $this->Admin_model->updatepricefile(1,$filedata);
                    }
                    else
                    {
                        $data['error'] = 1;
                        $data['msg'] = 'Error uploading file.';
                        print_r(json_encode($data));
                        return;
                    }
                }

            }


            foreach($_POST['products'] as $rate)
            {
                $id = $rate['id'];
                unset($rate['id']);
                $this->Admin_model->updaterate($rate,$id);
            }

            $new_date['start_date'] = $_POST['start_date'];
            $new_date['end_date'] = $_POST['end_date'];
            $this->Admin_model->updatedate($new_date);

            $data['error'] = 0;
            $data['msg'] = 'Successfully updated.';
            print_r(json_encode($data));
            return;



    }

    public function gallery()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }
        $this->load->model('Admin_model');
        $data['images'] = $this->Admin_model->get_gallery_images();
        $this->load->view("admin/header");
        $this->load->view('admin/gallery',$data);
        $this->load->view("admin/footer");
    }

    public function addgalleryimages()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }

        $this->load->model('Admin_model');

        if (isset($_FILES["other_images"]))
		{
            $uploadDir = 'uploads/'.date("d-m-y").'/';
            if (!is_dir($uploadDir))
            {
                mkdir($uploadDir, 0777, true);
            }
			$i=0;
			$images = array();
			foreach($_FILES['other_images']['name'] as $key=>$val)
			{
				$new_image_name = round(microtime(true)) . $key . mt_rand() ."." . pathinfo($_FILES['other_images']["name"][$key], PATHINFO_EXTENSION);
				move_uploaded_file($_FILES['other_images']["tmp_name"][$key], $uploadDir . $new_image_name);
				$url = $uploadDir . $new_image_name;
				$images[$i]['url'] = $url;
                $images[$i]['date'] = date("d-m-y");
				$i++;
			}
		}

       
           
        $this->Admin_model->add_gallery_images($images);
        $response = [
            "error"=> '0',
            "msg" => 'Images uploaded successfully',
        ];
        print_r(json_encode($response));
        return;

    }

    public function deletegalleryimage()
	{
        if (!unlink($_POST['url'])) { 
            $response = [
                "error"=> '1',
                "msg" => 'something went wrong!',
            ];
            print_r(json_encode($response));
        } 
        else {

            $this->load->model('Admin_model');

            $this->Admin_model->remove_row($_POST['id'],'galleryimages');

            $response = [
                "error"=> '0',
                "msg" => 'image deleted succesfully!',
            ];
            print_r(json_encode($response));
        } 

    }





}


