<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author senabolo
 */
class User extends Person {

    function exists($person_id) {
        $this->db->from('users');
        $this->db->join('sessions', 'sessions.session_id = users.session_id');
        $this->db->join('persons', 'persons.id = users.person_id');
        $this->db->where('users.id', $person_id);
        $query = $this->db->get();

        return ($query->num_rows() == 1);
    }

    function get_all($limit = 10000, $offset = 0) {
        $this->db->from('users');
        $this->db->where('actif', 1);
        $this->db->join('sessions', 'sessions.session_id = users.session_id');
        $this->db->join('persons', 'persons.id = users.person_id');
        $this->db->order_by("lastname", "asc");
        $this->db->limit($limit);
        $this->db->offset($offset);
        return $this->db->get();
    }

    function count_all() {
        $this->db->from('users');
        return $this->db->count_all_results();
    }

    function get_info($user_id) {
        $this->db->from('users');
        $this->db->join('sessions', 'sessions.session_id = users.session_id');
        $this->db->join('persons', 'persons.id = users.person_id');
        $this->db->where('users.person_id', $user_id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            //Get empty base parent object, as $employee_id is NOT an employee
            $person_obj = parent::get_info(-1);

            //Get all the fields from employee table
            $fields = $this->db->list_fields('users');

            //append those fields to base parent object, we we have a complete empty object
            foreach ($fields as $field) {
                $person_obj->$field = '';
            }

            return $person_obj;
        }
    }

}
