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

        //function to get listing by specific category
        public function getByCategory($category){
                $this->db->query("SELECT listings.*, categories.name AS cname 
                FROM listings
                INNER JOIN categories
                ON listings.category_id = categories.id
                WHERE listings.category_id = $category
                ORDER BY post_date DESC
                ");
            $results = $this->db->resultSet();
            return $results;
        }
    
        // Get Category by it's ID
        public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE id = $category_id");
            $row = $this ->db->single();
            return $row;
        }

        // Get a single listing by it's ID 
        public function getListing($id){
            $this->db->query("SELECT * FROM listings where id = $id");
            //Assign row and return it
            $row =$this->db->single();
            return $row;
        }
    }