<?php

class Admin_model extends CI_Model
{

    function can_login($username, $password)
    {
        $pass = md5($password);
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $query = $this->db->get('master');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    function can_user_login($username, $password)
    {
        $pass = md5($password);
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function can_client_login($username, $password)
    {
        $pass = md5($password);
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $query = $this->db->get('client');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function remove_row($id, $tname)
    {
        $query = $this->db->query("DELETE FROM " . $tname . " WHERE id= " . $id);
    }

    function get_posts()
    {
        $query = $this->db->query("SELECT * FROM blogposts ORDER BY date DESC");
        return $query->result_array();
    }

    function get_clients($data)
    {
        if (empty($data)) {
            $query = $this->db->query("SELECT * FROM client_details ORDER BY date DESC");
        } else {
            $query = $this->db->query("SELECT * FROM client_details WHERE date >= '" . $data['start'] . "' AND date <= '" . $data['end'] . "' ORDER BY date DESC");
        }

        if ($query !== FALSE && $query->num_rows() > 0) {
            return $query->result_array();
        } else {
            $res = array();
            return $res;
        }
    }




    function get_rates()
    {
        $query = $this->db->query("SELECT * FROM products ORDER BY id");
        return $query->result_array();
    }

    function get_pricefile()
    {
        $query = $this->db->query("SELECT * FROM files WHERE id = '1'");
        return $query->result_array();
    }

    function get_pricedate()
    {
        $query = $this->db->query("SELECT * FROM price_date WHERE id = '1'");
        return $query->result_array();
    }

    function get_gallery_images()
    {
        $query = $this->db->query("SELECT * FROM galleryimages ORDER BY date DESC");
        return $query->result_array();
    }




    function add_new_post($data)
    {
        $this->db->insert('blogposts', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    function add_new_client($data)
    {
        $this->db->insert('client_details', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }


    function update_post($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('blogposts', $data);
    }

    function update_client($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('client_details', $data);
    }

    function get_post($id)
    {
        $query = $this->db->query("SELECT * FROM blogposts WHERE id =" . $id);
        return $query->result_array();
    }

    function get_client($id)
    {
        $query = $this->db->query("SELECT * FROM client_details WHERE id =" . $id);
        return $query->result_array();
    }

    function updaterate($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('products', $data);
    }

    function updatepricefile($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('files', $data);
    }

    function updatedate($data)
    {
        $this->db->where('id', '1');
        $this->db->update('price_date', $data);
    }

    function add_gallery_images($data)
    {
        foreach ($data as $key => $value) {
            $this->db->insert('galleryimages', $data[$key]);
        }
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    function get_meta_data($url)
    {
        $data = ["title" => "", "description" => "", "keywords" => ""];
        $query = $this->db->query("SELECT * FROM meta_data WHERE url ='" . $url . "'");
        if ($query->num_rows() > 0) {
            $x = $query->result_array();
            $data['title'] = $x[0]['title'];
            $data['description'] = $x[0]['description'];
            $data['keywords'] = $x[0]['keywords'];
        }
        return $data;
    }
}
