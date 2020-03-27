<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class myModel extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    // INSERT
    public function insert($table,$data){
        $up = $this->db->insert($table,$data);
        if ($up) {
            return $this->db->insert_id();
         } else {
             return false;
         }
    }


    // UPDATE
    public function update($table,$data){
        $up = $this->db->update($table,$data);
        if ($up) {
            return $this->db->insert_id();
         } else {
             return false;
         }
    }

    // SELECT ALL (*)
    public function select($table){
        return $this->db->get($table);
    }    

    // SELECT WHERE
    public function selectWhere($table,$where){
        return $this->db->get_where($table,$where);
    }
    
    //SELECT ALL ORDER BY
    public function selectOrder($table,$order,$type){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$type);
        return $this->db->get();
    }

    //SELECT ORDER WHERE
    public function selectOrderWhere($table,$order,$type,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->order_by($order,$type);
        return $this->db->get();
    }

    // SELECT LIMIT
    public function limit($table,$banyak){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->limit($banyak);
        return $this->db->get();
    }

    //SELECT ORDER LIMIT
    public function selectOrderLimit($table,$order,$type,$awal,$banyak){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$type);
        $this->db->limit($awal,$banyak);
        return $this->db->get();
    }

    //SELECT LIMIT JOIN
    public function selectLimitJoin($table,$table2,$awal,$banyak,$on,$typeJoin){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $on, $typeJoin);
        $this->db->limit($awal,$banyak);
        return $this->db->get();
    }

    //SELECT LIMIT JOIN WHERE
    public function selectLimitJoinWhere($table,$table2,$awal,$banyak,$on,$typeJoin,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->join($table2, $on, $typeJoin);
        $this->db->limit($awal,$banyak);
        return $this->db->get();
    }

    //JOIN TABLE ALL
    public function join($table,$table2,$on,$typeJoin){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $on, $typeJoin);
        return $this->db->get();
    }

    //JOIN TABLE Where
    public function joinWhere($table,$table2,$on,$typeJoin,$where){
        $this->db->select('*');
        $this->db->from($table);
        // $this->db->join('comments', 'comments.id = blogs.id', 'left');
        $this->db->join($table2, $on, $typeJoin);
        $this->db->where($where);
        return $this->db->get();
    }

    // MANUAL QUERY 
    public function query($query){
        return $this->db->query($query);
    }


}

/* End of file AuthModelUser.php */


?>