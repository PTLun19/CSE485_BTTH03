<?php
require("service/AuthorService.php");
require("service/CategoryService.php");
require("service/LoginService.php");

    class AdminController{
        public function index(){
            // $categoryService = new CategoryService();
            // $categorys = $categoryService->getAllCategorys();
            
            // $authorService = new AuthorService();
            // $authors = $authorService->getAllAuthor();

            $adminService = new LoginService();
            $admins = $adminService->getAllAdmin();

            include("views/admin/index.php");
        }
    }
?>