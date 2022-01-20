<?php

    class Listing{
        private $db;


        public function __construct(){
            $this->db = new Database;
        }

        //function to fetch all listings
        public function getAllListings(){
            $this->db->query("SELECT listings.*, categories.name AS cname 
                            FROM listings
                            INNER JOIN categories
                            ON listings.category_id = categories.id
                            ORDER BY post_date DESC
                            ");
            $results = $this->db->resultSet();
            return $results;
        }

        //function to return all categories
        public function getCategories(){
                $this->db->query(" SELECT * from categories");
            $results = $this->db->resultSet();
            return $results;
        }


    
    }